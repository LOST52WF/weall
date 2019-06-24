<?php

namespace App\Http\Controllers\Resource;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PDFConverter;

class ShareController extends Controller
{
	protected function get_resource($resource_id)    //获取资源信息
	{
		$data = DB::table("resource")
			->join("user","user.id","=","resource.user_id")
			->where("resource.resource_id",$resource_id)
			->select("resource.resource_id","resource.file_url","resource.picture_url","resource.title","resource.click","user.account","resource.upload_time","resource.tag","resource.spead")
			->first();
		return $data;

	}

	protected function get_link($data){
		$link = DB::table("project")
			->where("tag","=",$data->tag)
			->where("picture_url","!=",0)
			->orderBy(DB::raw('RAND()'))
			->groupBy("project_id")
			->select("picture_url","project_id","title")
			->limit(5)
			->get();
		return $link;
	}

/****************************************主体***************************************************/
    public function sharevideo($resource_id)  //获取视频
    {
    	$sc = $this->seecollect($resource_id);
    	$user_info = $this->user_info();
    	$data =$this->get_resource($resource_id);
    	$comment = $this->first_comment($resource_id);
    	$link = $this->get_link($data);
    	$this->incr_click($resource_id);
    	return view("resource.share.sharevideo")->with("user_info",$user_info)->with("data",$data)->with("comment",$comment)->with("sc",$sc)->with("link",$link);
    }


    public function sharewords($resource_id)  //获取文档
    {
    	$sc = $this->seecollect($resource_id);
    	$user_info = $this->user_info();
    	$data =$this->get_resource($resource_id);
    	$comment = $this->first_comment($resource_id);
    	$link = $this->get_link($data);
    	$this->incr_click($resource_id);
    	return view("resource.share.sharewords")->with("user_info",$user_info)->with("data",$data)->with("comment",$comment)->with("sc",$sc)->with("link",$link);
    }

    public function shareimage($resource_id)  //获取图片
    {
    	$sc = $this->seecollect($resource_id);
 		//dd($sc);
	   	$user_info = $this->user_info();
    	$data =$this->get_resource($resource_id);
    	$comment = $this->first_comment($resource_id);
    	$link = $this->get_link($data);
    	$this->incr_click($resource_id);
    	return view("resource.share.shareimage")->with("user_info",$user_info)->with("data",$data)->with("comment",$comment)->with("sc",$sc)->with("link",$link);
    }

    public function imageplayer($resource_id)
    {
    	$info =DB::table("resource")
    		->where("resource_id",$resource_id)
    		->select("picture_url","resource_id")
    		->first();
		return view("resource.share.imageplayer")->with("info",$info);
    }

    public function downloadwords($resource_id)
    {
    	$file_o = DB::table("resource")
    		->where("resource_id",$resource_id)
    		->select("file_url","title")
    		->first();
    	$file_url = $file_o->file_url;
    	$file_name = $file_o->title;
		return response()->download(public_path().$file_url,$file_name.'.rar');

    }


    public function viewwords($resource_id)
    {
    	$bool = DB::table("pdf")->where("word_id",$resource_id)->first();
		if($bool==''){
			$file_url = DB::table("resource")
				->where("resource_id",$resource_id)
				->select("file_url","type","title")
				->first();
			if($file_url->type!='words'){
				return "failed to load";
			} 
			$title = time()."_".$resource_id;
			$converter = new PDFConverter();
			$source = public_path() . $file_url->file_url;
			$export = public_path() . '/view/pdf/'.$title.'.pdf';
			$converter->execute($source, $export);
			$data = [
				'word_id'=>$resource_id,
				'file_url'=>'/view/pdf/'.$title.'.pdf',
				'title'=>$title
			];
			$pdf_id = DB::table("pdf")->insertGetId($data);
			if($pdf_id){
				return redirect("/view/pdf/".$title.".pdf");
			}
		}else{
				$url = DB::table("pdf")->where("word_id",$resource_id)
					->select("file_url")->first();
				return redirect($url->file_url);
		}
    }



    public function score()
    {
    	$isset = DB::table("score")
    		->where("resource_id",$_POST['resource_id'])
    		->where("user_id",session("user_key")->id)
    		->first();
		if($isset==''){
			$bool = DB::table("score")
				->insert([
					'user_id'=>session("user_key")->id,
					'resource_id'=>$_POST['resource_id'],
					'score'=>$_POST['fenshu']
				]);
			$average  = round(($_POST['count']*$_POST['average']+$_POST['fenshu'])/($_POST['count']+1),2);
			$count = $_POST['count']+1;
			$tag = 'y';
		}else{
			$bool = DB::table("score")
    			->where("resource_id",$_POST['resource_id'])
    			->where("user_id",session("user_key")->id)
    			->update(['score'=>$_POST['fenshu']]);
    		$sum = $_POST['count']*$_POST['average']-$isset->score+$_POST['fenshu'];
    		$average = round($sum/$_POST['count'],2);
    		$count = $_POST['count'];	
    		$tag='n';	
		}
		if($bool){
			if($tag=='y'){
				DB::table("tb_score")->where("resource_id",$_POST['resource_id'])
					->increment("scored_count");
			}
			DB::table("tb_score")->where("resource_id",$_POST['resource_id'])
				->update(['average'=>$average]);
			$returndata = [
				'average'=>$average,
				'count'=>$count
			];
			return json_encode((object)$returndata);
		}else{
			return 0;
		}

    }


/**************************************************************************************************/


	protected function seecollect($resource_id)
	{
		if(!session("user_key")){
			return 3;
		}
		$bool = DB::table("collect")
			->where("resource_id",$resource_id)
			->where("user_id",session("user_key")->id)
			->first();
		if($bool=='')
			$tip=1;
		else
			$tip=2;
		$sa = DB::table("tb_score")->where("resource_id",$resource_id)
			->select("scored_count","average")->first();
		$count = $sa->scored_count;
		$average = $sa->average;
		$scored = DB::table("score")->where("resource_id",$resource_id)
			->where("user_id",session("user_key")->id)
			->select("score")
			->first();
			if($scored=='')
				$fenshu=0;
			else
				$fenshu=$scored->score;
		$data = [
			'sc'=>$tip,
			'count'=>$count,
			'score'=>$fenshu,
			'average'=>$average
		];
		return $data;
	}



	protected function incr_click($resource_id)
	{

		$bool =DB::table("resource")
			->where("resource_id",$resource_id)
			->increment("click");
	}



    protected function first_comment($resource_id)  //初始获取评论
    {
    	$hot_comment = DB::table("comment")
    		->join("user","user.id","=","comment.user_id")
    		->where("comment.resource_id",$resource_id)
    		->where("comment.p_click",">",5)
    		->orderBy("comment.p_click","desc")
    		->limit(3)
    		->select("comment.id","user.headimage","user.account","comment.content","comment.upload_time","comment.p_click","comment.c_click")
    		->get();
    	$first_comment = DB::table("comment")
    		->join("user","user.id","=","comment.user_id")
    		->where("comment.resource_id",$resource_id)
    		->orderBy("comment.upload_time","desc")
    		->limit(3)
    		->select("comment.id","user.headimage","user.account","comment.content","comment.upload_time","comment.p_click","comment.c_click")
    		->get();
    	return ["hot"=>$hot_comment,"first"=>$first_comment];
    }


	public function sendcomment(){
		$comment = [
			'resource_id' => $_POST['resource_id'],
			'content'     => $_POST['content'],
			'user_id'     => $_POST['user_id'],
			'upload_time' => $_POST['upload_time']
		];
		$bool =DB::table("comment")->insertGetId($comment);
		if($bool){
			$time =date("Y-m-d H:i",$_POST['upload_time']);
			$returndata =['time'=>$time,'id'=>$bool];
			return json_encode((object)$returndata);
		}
		else
			return 0;

	} 


	public function loadcomment($resource_id,$page)
	{
		$comment = DB::table("comment")
			->join("user","user.id","=","comment.user_id")
			->where("comment.resource_id",$resource_id)
			->orderBy("comment.upload_time","desc")
			->offset(($page-1)*10+3)
			->limit(10)
			->select("comment.id","user.headimage","user.account","comment.content","comment.upload_time","comment.p_click","comment.c_click")
			->get();
		return json_encode($comment);
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
    			'account'   =>session("user_key")->account,
    			'user_id'   =>session("user_key")->id
			];	
    	}else{
	    	$user_info = [
    			'headimage' =>'/uploads/headimage/unregister.png',
    			'account'   =>"",
    			'user_id'   =>""
    		];	
    	}
    	return $user_info;
	
	}



	/********************************评论操作***********************************/
	public function zan()
	{
		$id = $_POST['comment_id'];
		$bool = DB::table("comment")
			->where("id",$id)
			->increment('p_click',1);
		if($bool)
			return 1;
		else
			return 2;
	}

	public function xu()
	{
		$id = $_POST['comment_id'];
		$bool = DB::table("comment")
			->where("id",$id)
			->increment('c_click',1);
		if($bool)
			return 1;
		else
			return 2;

	}


	public function collect()
	{
		if($_POST['tik']=='collect'){
			$data = [
				'resource_id'=>$_POST['resource_id'],
				'collect_time'=>time(),
				'user_id'=>session('user_key')->id
			];
			$bool = DB::table("collect")
				->insertGetId($data);
			if($bool)
				return 1;
		}else if($_POST['tik']=='dontcollect'){
			$bool = DB::table("collect")
				->where("resource_id",$_POST['resource_id'])
				->where("user_id",session('user_key')->id)
				->delete();
			if($bool)
				return 0;
		}
	}

}
