<?php

namespace App\Http\Controllers\Myself;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	
	public function test()
    {
        return "1112121212121212121212121";
    }
	
    public function index()          //个人主页 --首页
    {
    	$group = DB::table("group_user")->join('group',"group_user.group_id","=","group.group_id")
    	->where("group_user.user_id",session('user_key')->id)  //这里应该用用户储存的session
    	->select("group.name","group.group_id")
    	->get();
    	//dd($group);
    	session(["group"=>$group]);
        $type = [0=>'video',1=>'words',2=>'image'];
        $file_data =[];
        for($i=0;$i<3;$i++){
            $file_data[$type[$i]] = DB::table("file")
                ->where("user_id",session('user_key')->id)
                ->where("file_type",$type[$i])
                ->count();
        }
        $group =array();
        $group['count'] = DB::table("group_user")->where("user_id",session('user_key')->id)->count();
        $group['file']  = DB::table("group_file")->where("user_id",session('user_key')->id)->count();
        $group['rank'] = DB::table("group_user")
                ->where("user_id",session('user_key')->id)
                ->where("rank","<",3)
                ->count();
        //dd($file_data);

    	return view("myself.index")->with("data",$file_data)->with("group",$group);
	}

    public function video($page=1)   //个人主页 --视频
    {
    	//**********//
    	$pagecount = DB::table("file")
    	->where("file_type","video")
    	->count();
    	if( $pagecount%8==0&&$pagecount!=0){
    		$pagecount = $pagecount/8;
    	}else if($pagecount==0){
    		return view("myself.video")->with("page",0);
    	}else if($pagecount%8!=0&&$pagecount!=0){
    		$pagecount = ($pagecount-$pagecount%8)/8+1;
    	}
    	//****///分页,页码计算
    	$data = DB::table("file")->where("file_type","video")
    			->orderby("upload_time","desc")
                ->where("user_id","=",session('user_key')->id)//这里该用session判断
    			->offset(($page-1)*8)->limit(8)
    			->get();
    	//return $pagecount;
    	//dd($data);
    	return view("myself.video")->with("data",$data)->with("page",$pagecount)->with("current",$page);  
    }

    public function words($page=1)   //个人主页 --文档
    {
    	//**********//
    	$pagecount = DB::table("file")
    	->where("file_type","words")
    	->count();
    	if( $pagecount%8==0&&$pagecount!=0){
    		$pagecount = $pagecount/8;
    	}else if($pagecount==0){
    		return view("myself.words")->with("page",0);
    	}else if($pagecount%8!=0&&$pagecount!=0){
    		$pagecount = ($pagecount-$pagecount%8)/8+1;
    	}
    	//****///分页,页码计算
    	$data = DB::table("file")->where("file_type","words")
    			->orderby("upload_time","desc")
                ->where("user_id","=",session('user_key')->id)//这里该用session判断
    			->offset(($page-1)*8)->limit(8)
    			->get();
    	//return $pagecount;
    	//dd($data);
    	return view("myself.words")->with("data",$data)->with("page",$pagecount)->with("current",$page);    	

    }

    public function image($page=1)   //个人主页 --图片
    {
    	//**********//
    	$pagecount = DB::table("file")
    	->where("file_type","image")
    	->count();
    	if( $pagecount%8==0&&$pagecount!=0){
    		$pagecount = $pagecount/8;
    	}else if($pagecount==0){
    		return view("myself.image")->with("page",0);
    	}else if($pagecount%8!=0&&$pagecount!=0){
    		$pagecount = ($pagecount-$pagecount%8)/8+1;
    	}
    	//****///分页,页码计算
    	$data = DB::table("file")->where("file_type","image")
    			->orderby("upload_time","desc")
    			->where("user_id","=",session('user_key')->id)//这里该用session判断
    			->offset(($page-1)*8)->limit(8)
    			->get();
    	//return $pagecount;
    	//dd($data);
    	return view("myself.image")->with("data",$data)->with("page",$pagecount)->with("current",$page);    	

    }


    public function collect($page=1)   //个人主页 --收藏
    {
        //**********//
        $pagecount = DB::table("collect")
        ->where("user_id",session("user_key")->id)
        ->count();
        if( $pagecount%8==0&&$pagecount!=0){
            $pagecount = $pagecount/8;
        }else if($pagecount==0){
            return view("myself.collect")->with("page",0);
        }else if($pagecount%8!=0&&$pagecount!=0){
            $pagecount = ($pagecount-$pagecount%8)/8+1;
        }
        //****///分页,页码计算
        $data = DB::table("collect")
        ->join("resource","resource.resource_id","=","collect.resource_id")
                ->where("collect.user_id","=",session('user_key')->id)//这里该用session判断
                ->offset(($page-1)*8)->limit(8)
                ->select("resource.resource_id","resource.title","resource.type","picture_url","click","upload_time")
                ->get();
        //return $pagecount;
        //dd($data);
        return view("myself.collect")->with("data",$data)->with("page",$pagecount)->with("current",$page);  
    }



    public function groupset()
    {
        $group=DB::table("group_user")
            ->join("group","group.group_id","=","group_user.group_id")
            ->where("group_user.user_id",session('user_key')->id)  //应该用session
            ->where("group_user.rank","<=",2)
            ->select("group.name","group.group_id")
            ->get();
        return json_encode($group);
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



    public function player_video($id)
    {
        $check = DB::table("file")
            ->where("id",$id)
            ->select("user_id")
            ->first();
        if($check->user_id!=session("user_key")->id){
            return redirect("/myself/video");
            exit;
        }else{
            DB::table("file")
                ->where("id",$id)
                ->increment("click");
        }

        $data = DB::table("file")
            ->where("id",$id)
            ->select("picture_url","file_url","title","upload_time","click","tag")
            ->first();

        $user_info = $this->user_info();

        return view("myself.player.video_player")->with("user_info",$user_info)->with("data",$data);
    }

    public function player_words($id)
    {
        $check = DB::table("file")
            ->where("id",$id)
            ->select("user_id")
            ->first();
        if($check->user_id!=session("user_key")->id){
            return redirect("/myself/words");
            exit;
        }else{
            DB::table("file")
                ->where("id",$id)
                ->increment("click");
        }

        $file_o = DB::table("file")
            ->where("id",$id)
            ->select("file_url","title")
            ->first();
        $file_url = $file_o->file_url;
        $file_name = $file_o->title;
        return response()->download(public_path().$file_url,$file_name.'.rar');
    }


    public function player_image($id)
    {
        $check = DB::table("file")
            ->where("id",$id)
            ->select("user_id")
            ->first();
        if($check->user_id!=session("user_key")->id){
            return redirect("/myself/image");
            exit;
        }else{
            DB::table("file")
                ->where("id",$id)
                ->increment("click");
        }

        $data = DB::table("file")
            ->where("id",$id)
            ->select("picture_url","file_url","title","upload_time","click","tag","id")
            ->first();

        $user_info = $this->user_info();

        return view("myself.player.image_player")->with("user_info",$user_info)->with("data",$data);
    }


    public function checklist($page=1)
    {

        //**********//
        $pagecount = DB::table("auditing")->where("user_id",session("user_key")->id)->count();
        if( $pagecount%10==0&&$pagecount!=0){
            $pagecount = $pagecount/10;
        }else if($pagecount==0){
            $pagecount = 0;
        }else if($pagecount%10!=0&&$pagecount!=0){
            $pagecount = ($pagecount-$pagecount%10)/10+1;
        }
        //****///分页,页码计算

        $user_info = $this->user_info();

        $data = DB::table("auditing")
            ->join("file","file.id","=","auditing.file_id")
            ->where("auditing.user_id",session("user_key")->id)
            ->orderBy("auditing.create_time","desc")
            ->select("title","file_type","auditing.create_time","tag","auditing.spead","auditing.auditing")
            ->offset(($page-1)*10)
            ->limit(10)
            ->get();
        $page_info =  [
            'current'=>$page,  //当前页码
            'count'  =>$pagecount //总共页面
        ];
        return view("myself.checklist")->with("user_info",$user_info)->with("data",$data)->with("page_info",$page_info);
    }

    public function numberclick(){
        $data  = DB::table("groupapp")
            ->join("group","group.group_id","=","groupapp.group_id")
            ->join("user","groupapp.user_id","=","user.id")
            ->where("group.user_id",session("user_key")->id)
            ->select("user.account","app_time","group.name","groupapp.user_id","group.group_id")
            ->get();
        //dd($data);
        return view("myself.numberclick")->with("data",$data);
    }

    public function tongyiapp(){
        $data = [
            'user_id'=>$_POST['user_id'],
            'group_id'=>$_POST['group_id'],
            'rank'   => 4
        ];
        $bool = DB::table("group_user")->insert($data);
        if($bool){
            DB::table("groupapp")->where("user_id",$_POST['user_id'])
                ->where("group_id",$_POST['group_id'])->delete();
            return 1;
        }else{
            return 2;
        }
    }

}
