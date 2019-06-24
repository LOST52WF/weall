<?php

namespace App\Http\Controllers\Resource;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{

		protected function user_info(){   //导航栏信息
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

	public function search($arr=[]){
    	if($arr['searchcon']=='')
    		return redirect("resource/index");
    	else{
    		$search = "%".$arr['searchcon']."%";
    		$data = DB::table("resource")
    			->join("user","user.id","=","resource.user_id")
    			->where("resource.type",$arr['type'])
    			->where("title","like",$search)
    			->orderBy($arr['order'],"desc")
    			->select("resource.resource_id","resource.title","resource.upload_time","user.account","resource.picture_url","resource.click")
    			->offset(($arr['page']-1)*15)
    			->limit(15)
    			->get();
    	}
    	return $data;
    	//$user_info = $this->user_info();
    	//$data
    	//return view("resource.result")->with("user_info",$user_info);
    }



    public function result_video()
    {
    	$p =urlencode($_GET['searchcon']);
        if($_GET['searchcon']=='')
        {
            return redirect("/resource/index");
            exit;
        }
    	if(!isset($_GET['order']))
    		$order='upload_time';
    	else
    		$order = $_GET['order'];
    	if(!isset($_GET['page']))
    		$page=1;
    	else
    		$page = $_GET['page'];
    	$arr = [
    		'searchcon'=>$_GET['searchcon'],
    		'order'=>$order,
    		'page'=>$page,
    		'type'=>'video',
    	];

		$count = DB::table("resource")
			->join("user","user.id","=","resource.user_id")
			->where("resource.type","video")
			->where("title","like","%".$_GET['searchcon']."%")
			->count(); 
		if($count==0)
			return view("resource.result.video")->with("user_info",$this->user_info())->with("info",['pagecount'=>0,'cur'=>0])->with("arr",$arr);
    	else if($count!=0&&$count<=15){
    		$pagecount = 1;   		
    	}else if($count>15){
    		$pagecount = ($count-($count%15))/15+1;
    	}
    	$info = ['pagecount'=>$pagecount,'cur'=>$page];
    	$data = $this->search($arr);
    	//dd($data);
        //dd($arr);
	    return view("resource.result.video")->with("user_info",$this->user_info())->with("info",$info)->with("data",$data)->with("arr",$arr);
    }
/****************************************************************************************************/


        public function result_words()
    {
    	$p =urlencode($_GET['searchcon']);
        if($_GET['searchcon']=='')
        {
            return redirect("/resource/index");
            exit;
        }
    	if(!isset($_GET['order']))
    		$order='upload_time';
    	else
    		$order = $_GET['order'];
    	if(!isset($_GET['page']))
    		$page=1;
    	else
    		$page = $_GET['page'];
    	$arr = [
    		'searchcon'=>$_GET['searchcon'],
    		'order'=>$order,
    		'page'=>$page,
    		'type'=>'words',
    	];
    	
		$count = DB::table("resource")
			->join("user","user.id","=","resource.user_id")
			->where("resource.type","words")
			->where("title","like","%".$_GET['searchcon']."%")
			->count(); 
		if($count==0)
			return view("resource.result.words")->with("user_info",$this->user_info())->with("info",['pagecount'=>0,'cur'=>0])->with("arr",$arr);
    	else if($count!=0&&$count<=15){
    		$pagecount = 1;   		
    	}else if($count>15){
    		$pagecount = ($count-($count%15))/15+1;
    	}
    	$info = ['pagecount'=>$pagecount,'cur'=>$page];
    	$data = $this->search($arr);
    	//dd($data);
	    return view("resource.result.words")->with("user_info",$this->user_info())->with("info",$info)->with("data",$data)->with("arr",$arr);
    }
/****************************************************************************************************/


        public function result_image()
    {
    	$p =urlencode($_GET['searchcon']);
        if($_GET['searchcon']=='')
        {
            return redirect("/resource/index");
            exit;
        }
    	if(!isset($_GET['order']))
    		$order='upload_time';
    	else
    		$order = $_GET['order'];
    	if(!isset($_GET['page']))
    		$page=1;
    	else
    		$page = $_GET['page'];
    	$arr = [
    		'searchcon'=>$_GET['searchcon'],
    		'order'=>$order,
    		'page'=>$page,
    		'type'=>'image',
    	];
    	
		$count = DB::table("resource")
			->join("user","user.id","=","resource.user_id")
			->where("resource.type","image")
			->where("title","like","%".$_GET['searchcon']."%")
			->count(); 
		if($count==0)
			return view("resource.result.image")->with("user_info",$this->user_info())->with("info",['pagecount'=>0,'cur'=>0])->with("arr",$arr);
    	else if($count!=0&&$count<=15){
    		$pagecount = 1;   		
    	}else if($count>15){
    		$pagecount = ($count-($count%15))/15+1;
    	}
    	$info = ['pagecount'=>$pagecount,'cur'=>$page];
    	$data = $this->search($arr);
    	//dd($data);
	    return view("resource.result.image")->with("user_info",$this->user_info())->with("info",$info)->with("data",$data)->with("arr",$arr);
    }
    /****************************************************************************************************/

    public function result_project()
    {
        $p =urlencode($_GET['searchcon']);
        if($_GET['searchcon']=='')
        {
            return redirect("/resource/index");
            exit;
        }
        if(!isset($_GET['order']))
            $order='upload_time';
        else
            $order = $_GET['order'];
        if(!isset($_GET['page']))
            $page=1;
        else
            $page = $_GET['page'];

        $arr = [
            'searchcon'=>$_GET['searchcon'],
            'order'=>$order,
            'page'=>$page,
            'type'=>'project',
        ];

        $count = DB::table("project")
            ->join("user","user.id","=","project.user_id")
            ->where("title","like","%".$_GET['searchcon']."%")
            ->count(); 
        if($count==0)
            return view("resource.result.image")->with("user_info",$this->user_info())->with("info",['pagecount'=>0,'cur'=>0])->with("arr",$arr);
        else if($count!=0&&$count<=15){
            $pagecount = 1;         
        }else if($count>15){
            $pagecount = ($count-($count%15))/15+1;
        }
        $info = ['pagecount'=>$pagecount,'cur'=>$page];
        if((!isset($_GET['order']))||$_GET['order']=='upload_time'){
            $data = DB::table("project")
                ->join("user","user.id","=","project.user_id")
                ->where("title","like","%".$_GET['searchcon']."%")
                ->orderBy("upload_time","desc")
                ->select("project.id","title","upload_time","click","account")   
                ->get();         
        }else if($_GET['order']=='click'){
            $data = DB::table("project")
                ->join("user","user.id","=","project.user_id")
                ->where("title","like","%".$_GET['searchcon']."%")
                ->orderBy("click","desc")
                ->select("project.id","title","upload_time","click","account")   
                ->get();             
        }

        //dd($data);
        return view("resource.result.project")->with("user_info",$this->user_info())->with("info",$info)->with("data",$data)->with("arr",$arr);
    }
}
