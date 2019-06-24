<?php

namespace App\Http\Controllers\Myself;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GroupController extends Controller
{
    public function group($group_id)
    {
    	/****上传资源记录****/
    	$record = DB::table("group_file")
    	->join("user","group_file.user_id","=","user.id")
    	->where("group_file.group_id",$group_id)
    	->orderBy("group_file.upload_time","desc")
    	->select("group_file.title","group_file.file_type","group_file.upload_time","user.account","group_file.group_file_id")
    	->limit(4)
    	->get();
    	if($record=="") $record="null";
    	//dd($record);
    	/****获取记录结束****/

    	/****获取文件列表****/
    	$file = array();
    	$file_type = [0=>"video",1=>"words",2=>"image",3=>"other"];
    	for($i=0;$i<4;$i++){
   			$file[$file_type[$i]] = DB::table("group_file")
    		->join("user","group_file.user_id","=","user.id")
    		->where("group_file.group_id",$group_id)
    		->where("file_type",$file_type[$i])
    		->select("group_file.title","user.account","group_file.upload_time","group_file.click","group_file.group_file_id")
    		->limit(10)
    		->get();    		
    	}
 		//dd($file);
    	/****获取文件结束****/

    	/****获取组员人数****/
    	$count['number'] = DB::table("group_user")->where("group_id",$group_id)->count();
    	/****获取群组资源总数****/
    	$count['file']   = DB::table("group_file")->where("group_id",$group_id)->count();
    	/****获取群组人数****/
    	$number = DB::table("group_user")->join("user","user.id","=","group_user.user_id")
		->where("group_user.group_id",$group_id)
		->select("user.account")
		->get();
		//dd($number);
		/*********************************************************************/

    	return view("myself.group")->with("record",$record)->with("file",$file)->with("count",$count)->with("number",$number);
    	//dd($count);
    }


    protected function user_info()    //导航栏信息
    {
        if(session('user_key')){
            $data = DB::table("user")
                    ->where("id",session("user_key")->id)
                    ->select("headimage")
                    ->first();
            if(empty($data->headimage)){
                $headimage = '/uploads/headimage/registered.png';
            }else{
                $headimage = $data->headimage;
            }

            $user_info = [
                'headimage' =>$headimage,
                'account'   =>session("user_key")->account
            ];  
        }else{
            $user_info = [
                'headimage' =>'/uploads/headimage/unregister.png',
                'account'   =>""
            ];  
        }
        return $user_info;
    
    }    


    public function group_video($id)
    {
        $check = DB::table("group_file")
            ->where("group_file_id",$id)
            ->select("group_id")
            ->first();
        $group_user = DB::table("group_user")
            ->where("group_id",$check->group_id)
            ->where("user_id",session("user_key")->id)
            ->first();
        if($group_user==""){
            return redirect("/myself/video");
            exit;
        }else{
            DB::table("group_file")
                ->where("group_file_id",$id)
                ->increment("click");
        }

        $data = DB::table("group_file")
            ->where("group_file_id",$id)
            ->select("picture","file_url","title","upload_time","click")
            ->first();

        $user_info = $this->user_info();

        return view("myself.group.group_video")->with("user_info",$user_info)->with("data",$data);
    }


    public function group_words($id)
    {
        $check = DB::table("group_file")
            ->where("group_file_id",$id)
            ->select("group_id")
            ->first();
        $group_user = DB::table("group_user")
            ->where("group_id",$check->group_id)
            ->where("user_id",session("user_key")->id)
            ->first();
        if($group_user==""){
            return redirect("/myself/video");
            exit;
        }else{
            DB::table("group_file")
                ->where("group_file_id",$id)
                ->increment("click");
        }

        $file_o = DB::table("group_file")
            ->where("group_file_id",$id)
            ->select("file_url","title")
            ->first();
        $file_url = $file_o->file_url;
        $file_name = $file_o->title;
        return response()->download(public_path().$file_url,$file_name.'.rar');
    }


    public function group_image($id)
    {
        $check = DB::table("group_file")
            ->where("group_file_id",$id)
            ->select("group_id")
            ->first();
        $group_user = DB::table("group_user")
            ->where("group_id",$check->group_id)
            ->where("user_id",session("user_key")->id)
            ->first();
        if($group_user==""){
            return redirect("/myself/video");
            exit;
        }else{
            DB::table("group_file")
                ->where("group_file_id",$id)
                ->increment("click");
        }

        $data = DB::table("group_file")
            ->where("group_file_id",$id)
            ->select("picture","file_url","title","upload_time","click")
            ->first();

        $user_info = $this->user_info();

        return view("myself.group.group_image")->with("user_info",$user_info)->with("data",$data);
    }

}
