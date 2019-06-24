<?php

namespace App\Http\Controllers\Resource;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PDFConverter;

class ResourceController extends Controller
{
	function __construct()
	{

	}

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

	protected function showimgmap()
	{
		$showimgmap =array();
		$aweekago = strtotime(date("Y-m-d",strtotime("-1 month")));  //一周前
		$type = [0=>'video',1=>'words',2=>'image'];
		for($i=0;$i<3;$i++){
			$showimgmap[$type[$i]] = DB::table("resource")
				->where("type",$type[$i])
				->where("upload_time",">=",$aweekago)
				->orderBy("click","desc")
				->select("resource_id","title","picture_url","type")
				->first();			
		}
		return $showimgmap;
	}

	protected function newdata() //获取视频，图片等最新资源
	{
		$type = [0=>'video',1=>'words',2=>'image'];
		for($i=0;$i<3;$i++){
	    	$data[$type[$i]] = DB::table("resource")	
    			->join("user","user.id","=","resource.user_id")
				->where("resource.type",$type[$i])
				->orderBy("resource.resource_id","desc")
				->limit(8)
				->select("resource.resource_id","resource.title","resource.click","resource.picture_url","user.account")
				->get();
		}
		return $data;
	}

	protected function ranking()
	{
		$aweekago = strtotime(date("Y-m-d",strtotime("-1 week")));  //一周前
		$type = [0=>'video',1=>'words',2=>'image'];
		for($i=0;$i<3;$i++){
			$rank[$type[$i]] = DB::table("resource")
				->where("type",$type[$i])
				->where("upload_time",">=",$aweekago)
				->orderBy("click","desc")
				->select("resource_id","title")
				->limit(8)
				->get();			
		}
		return $rank;

	}
	protected function popular()   //热门项目获取
	{
		//$amonthago = strtotime(date("Y-m-d",strtotime("-1 month")));  //一周前
		$popular  =DB::table("project")
			//->where("upload_time",">",$amonthago)
			->orderBy("upload_time","desc")
			->groupBy("project_id")
			->select("project_id","title","picture_url")
			->limit(4)
			->get();
			return $popular;
	}

    public function index()
    {
    	$user_info  = $this->user_info();	//获取导航栏信息
    	$showimgmap = $this->showimgmap();					//这部分由于存在缓存关系，用laravel_carch或者redis；
    	$data  =$this->newdata(); 			//获取视频，图片等最新资源
    	$ranking  = $this->ranking();       //获取排行榜  ->这里应该用缓存或者redis
    	$popar = $this->popular();          //获取最新项目
    	$link = $this->get_link_pr();              //热门项目-资源
		return view("resource.index")->with("user_info",$user_info)->with("data",$data)->with("rank",$ranking)->with("pop",$popar)->with("show",$showimgmap)->with("link",$link);
		//return $newday = strtotime(date("Y-m-d",time())); //获取今日时间;
		//dd($popar);
		//dd($link);
    }


    public function topdf()
    {

		$converter = new PDFConverter();
    	$source = public_path() . '/uploads/words/1.docx';
    	$export = public_path() . '/uploads/words/1.pdf';
    	$converter->execute($source, $export);
    	echo 1;
}


	protected function get_link_pr()
	{
		$amonthago = strtotime(date("Y-m-d",strtotime("-1 month")));  //一周前
		$link  =DB::table("project")
			->where("upload_time",">",$amonthago)
			->orderBy("click","desc")
			->groupBy("project_id")
			->select("project_id","title","picture_url","click","tag")
			->limit(2)
			->get();
			$arr = array();
		 foreach ($link as $v) { 
		 	$arr[] = $v->title;
		 }
			
		foreach ($arr as $v) {
			$getlink[$v] = DB::table("resource")
				->where("title","like","%".$v."%")
				->orderBy("upload_time","desc")
				->select("title","resource_id","type","click","picture_url")
				->limit(3)
				->get();
		}
		for ($i=0; $i < 2; $i++) { 
			$link[$i] -> getlink =  $getlink[$arr[$i]];
		}

		return $link;
	}



}
