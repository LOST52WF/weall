<?php

namespace App\Http\Controllers\Resource;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SetResController extends Controller
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


    protected function setres($kind)
    {
        $type = [0=>"后端",1=>"前端",2=>"移动端",3=>"其他"];
        $data["houduan"] = DB::table("resource")
            ->join("user","user.id","=","resource.user_id")
            ->where("type",$kind)
            ->whereIn("tag",["PHP","Java","Go","Python","C","C++","C#","Ruby"])
            ->select("resource.picture_url","resource.resource_id","user.account","click","title",'type')
            ->limit(15)
            ->get(); 
        $data["qianduan"] = DB::table("resource")
            ->join("user","user.id","=","resource.user_id")
            ->where("type",$kind)
            ->whereIn("tag",["HTML/CSS","JavaScript"])
            ->select("resource.picture_url","resource.resource_id","user.account","click","title",'type')
            ->limit(15)
            ->get();             
        $data["yidongduan"] =  DB::table("resource")
            ->join("user","user.id","=","resource.user_id")
            ->where("type",$kind)
            ->whereIn("tag",["Android","iOS"])
            ->select("resource.picture_url","resource.resource_id","user.account","click","title",'type')
            ->limit(15)
            ->get();
        $data["qita"] =  DB::table("resource")
            ->join("user","user.id","=","resource.user_id")
            ->where("type",$kind)
            ->whereIn("tag",["区块链","人工智能","机器学习","云计算","大数据","算法与数据结构","数据库","其他"])
            ->select("resource.picture_url","resource.resource_id","user.account","click","title",'type')
            ->limit(15)
            ->get();    
            
        return $data;
    }
    public function video_page()
    {
    	//dump($data);
    	$user_info = $this->user_info();
        $data = $this->setres('video');
    	return view("resource.set.video_page")->with("user_info",$user_info)->with("data",$data);
        //dd($data);
    }

    public function words_page()
    {
        //dump($data);
        $user_info = $this->user_info();
        $data = $this->setres('words');
        //dd($data);
        return view("resource.set.words_page")->with("user_info",$user_info)->with("data",$data);
    }

    public function image_page()
    {
        //dump($data);
        $user_info = $this->user_info();
        $data = $this->setres('image');
        return view("resource.set.image_page")->with("user_info",$user_info)->with("data",$data);
    }
}
