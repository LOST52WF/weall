<?php

namespace App\Http\Controllers\Myself;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FileController extends Controller
{
    public function file_group($group_id=0,$page=1)
    {

    /****页码******/
        $pagecount = DB::table("group_file")->where("group_id",$group_id)->count();
        if( $pagecount%10==0&&$pagecount!=0){
            $pagecount = $pagecount/10;
        }else if($pagecount%10!=0&&$pagecount!=0){
            $pagecount = ($pagecount-$pagecount%10)/10+1;
        }
    /*分页,页码计算*/

    //获取所有加入的群组
    	$group = DB::table("group_user")->join('group',"group_user.group_id","=","group.group_id")
    		->where("group_user.user_id",session('user_key')->id)  //这里应该用用户储存的session来确定
    		->select("group.name","group.group_id")
    		->get();
    		//dd($group);

	//获取当前群组&获取当前群组资源列表
		if($group_id!=0){
	    	$name = DB::table("group")->where("group_id",$group_id)
    			->select("name","group_id")
    			->first();

			$file_list = DB::table("group_file")
				->join("user","user.id","=","group_file.user_id")
				->where("group_file.group_id",$group_id)
				->select("group_file.group_file_id","group_file.title","group_file.file_type","group_file.upload_time","user.account")
                ->orderBy("group_file.upload_time","desc")
                ->offset(($page-1)*10)->limit(10)
				->get();    			
		}else{
			$name='null';
			$file_list='null';
		}

        /**********防止非法获取其他组资源和判断级别**************/
        if($group_id!=0){
            $rank = DB::table("group_user")
                    ->where("user_id",session('user_key')->id)  //这里应该用session来判断
                    ->where("group_id",$group_id)
                    ->select("rank")
                    ->first();
            if($rank==""){
                return "非法获取资源";
            }else{
                $level = $rank->rank;
            }
        }else{
            $level = 0;
        }
        /**********很关键的一步********************************/
		
        $info = ["current"=>$page,"group_id"=>$group_id,"rank"=>$level];
        //dd($info);
		return view("myself.file_group")->with("group",$group)->with("name",$name)->with("file_list",$file_list)->with("page",$pagecount)->with("info",$info);
    }

    public function file_user($page=1)
    {

        //**********//
        $pagecount = DB::table("file")->where("user_id",session("user_key")->id)->count();
        if( $pagecount%10==0&&$pagecount!=0){
            $pagecount = $pagecount/10;
        }else if($pagecount==0){
            return view("myself.video")->with("page",0);
        }else if($pagecount%10!=0&&$pagecount!=0){
            $pagecount = ($pagecount-$pagecount%10)/10+1;
        }
        //****///分页,页码计算
        $table_list = DB::table("file")
                    ->where("user_id","=",session('user_key')->id)//这里该用session判断
                    ->select("id","file_type","title","upload_time","tag")
                    ->offset(($page-1)*10)->limit(10)
                    ->get();

        $group = DB::table("group_user")
                 ->join("group","group.group_id","=","group_user.group_id")
                 ->where("group_user.user_id","=",session('user_key')->id)//这里应该用session来获取
                 ->select("group.group_id as id","group.name")
                 ->get();
    	return view("myself.file_user")->with("table_list",$table_list)->with("group",$group)->with("current",$page)->with("page",$pagecount);
    }

/***************************************后台业务逻辑**************************************************************/

    public function delete()
    {
        /***利用session判断用户级别 才可以进行删除操作！！！！！！！！***/
        foreach ($_POST['chk'] as $v) {
            $bool = DB::table("group_file")
                ->where("group_file_id","=",$v)
                ->delete();
        }
        return "删除成功";
    }


    public function userdel()
    {
        $bool = DB::table("file")
            ->where("user_id",session('user_key')->id)//这里用session
            ->whereIn("id",$_POST['chk'])
            ->delete();
        if($bool){
            return 1;
        }else{
            return 0;
        }

    }


    public function share_hub()
    {
        $data = DB::table("file")
            ->whereIn("id",$_POST['chk'])
            ->select("id","user_id","spead")
            ->get();
        if($data){
            foreach ($data as $v) {
                $insert[] =[
                    "file_id" =>$v->id,//这里应该用session
                    "user_id"=>$v->user_id,
                    "spead" =>$v->spead,
                    "auditing"=>"待审核",
                    "create_time"=>time()
                ]; 
            }
           	$bool = DB::table("auditing")->insert($insert);
           	if($bool)
           		return 1;
           	else
           		return 0;
            /******************************************************
            foreach ($insert as $v) {
                $bool[] = DB::table("resource")->insertGetId($v);
            }
            foreach ($bool as $v) {
                $insert2[] =  [
                    'resource_id'=>$v,
                    'scored_count'=>0,
                    'average'=>0
                ];
            }
            $insertinfo = DB::table("tb_score")->insert($insert2);
            if($insertinfo)
                return 1;
            else
                return 0;
            *****************************************************/
        }else{
            return 0;
        }
    }


    public function share_group()
    {
//判断用户在群组等级！！！！！！！！！！！！
//还要判断文件上传是否重复
        //$_POST['group']
        $data = DB::table("file")
            ->whereIn("id",$_POST['chk'])
            ->select("file_type","title","file_url","picture_url")
            ->get();
        if($data){
            foreach ($data as $v) {
                $insert[] =[
                    "group_id"=>$_POST["group"],
                    "user_id" =>1,//这里应该用session
                    "file_type"=>$v->file_type,
                    "file_url" =>$v->file_url,
                    "picture"=>$v->picture_url,
                    "title"=>$v->title,
                    "upload_time"=>time()
                ]; 
            }

        }else{
            return "error!";
        }
         //dd($insert);
        $bool = DB::table("group_file")
            ->insert($insert);
        if($bool) return 1;
        else      return 0;
    }
}
