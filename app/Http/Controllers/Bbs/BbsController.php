<?php

namespace App\Http\Controllers\Bbs;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BbsController extends Controller
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


    public function index($page=1)
    {
    	$user_info = $this->user_info();
    	$data  = DB::table("forum")	
    		->join("user","user.id","=","forum.user_id")
    		->orderBy("create_time","desc")
    		->offset(($page-1)*10)
    		->limit(10)
    		->select("title","account","create_time","forum_id")
    		->get();
        $pagecount = DB::table("forum")->count();
        if( $pagecount%10==0&&$pagecount!=0){
            $pagecount = $pagecount/10;
        }else if($pagecount%10!=0&&$pagecount!=0){
            $pagecount = ($pagecount-$pagecount%10)/10+1;
        }
        $info =['current'=>$page,'page'=>$pagecount];
    	return view("bbs.bbs_index")->with("user_info",$user_info)->with("data",$data)->with("info",$info);
    }


    public function create()
    {
    	$user_info = $this->user_info();
    	return view("bbs.create")->with("user_info",$user_info);
    }


    public function create_forum()
    {
    	$data1 = [
    		'user_id' =>session('user_key')->id,
    		'title'   =>$_POST['title'],
    		'create_time'=>time(),
    	];
    	$bool = DB::table("forum")->insertGetId($data1);
    	if($bool){
	    	$data2 = [
    		'user_id' =>session('user_key')->id,
    		'info'	  =>$_POST['info'],
    		'create_time'=>$data1['create_time'],
    		'forum_id'=>$bool
    		]; 
    		$bool2 =DB::table("floor")->insert($data2);
    		if($bool2)
    			return redirect("/bbs/forum/".$bool."/1");
    		else
    			return redirect()->back();
    	}else
    		return redirect()->back();

    }

    public function forum($forum_id,$page)
    {
    	$user_info = $this->user_info();
        $pagecount = DB::table("floor")->count();
        if( $pagecount%10==0&&$pagecount!=0){
            $pagecount = $pagecount/10;
        }else if($pagecount%10!=0&&$pagecount!=0){
            $pagecount = ($pagecount-$pagecount%10)/10+1;
        }
        $title = DB::table("forum")->where("forum_id",$forum_id)->select("title")->first();
        $info =['current'=>$page,'page'=>$pagecount,'forum_id'=>$forum_id,"title"=>$title->title];
        $data = DB::table("floor")
        	->join("user","user.id","=","floor.user_id")
        	->where("forum_id",$forum_id)
        	->offset(($page-1)*10)
        	->limit(10)
        	->select("floor_id","account","headimage","info","create_time","user_id")
        	->orderBy("floor_id")
        	->get();
       	$arr = array();
       	$i=0;
       	foreach($data as $v){
       		$arr[] += $v->floor_id;
       	}
       	if($data!=''){
       		$reply =DB::table("reply")
       			->join("user AS ua","ua.id","=","reply.user_id")
       			->join("user AS ub","ub.id","=","reply.reply_user_id")
       			->whereIn("floor_id",$arr)
       			->select("reply_id","ua.account AS user_account","reply.user_id","ub.account AS reply_account","reply.reply_user_id","info","create_time","floor_id")
       			->orderBy("create_time")
       			->get();
   			for($i=0;$i<10;$i++){
   				$j=0;
   				foreach ($reply as $v) {
   					if($v->floor_id==$data[$i]->floor_id){
   						$data[$i]->reply[$j] = $v;
   						$j++;
   					}
   				}
   			}       		
       	}
		return view("bbs.forum")->with("user_info",$user_info)->with("data",$data)->with("info",$info);

    }


    public function reply()
    {
    	$data = [
    		'user_id' =>session("user_key")->id,
    		'reply_user_id'=>$_POST['reply_user_id'],
    		'info'   =>$_POST['info'],
    		'create_time'=>time(),
    		'floor_id'  => $_POST['floor_id']
    	];
    	$returndata =array();
    	$bool =DB::table("reply")->insertGetId($data);
    		if($bool){
    			$infom  = DB::table("user")->where("id",$_POST['reply_user_id'])
    				->select("account")->first();
    			$returndata['reply_id']  =$bool;
    			$returndata['user_account'] =session("user_key")->account;
    			$returndata['user_id']   =session("user_key")->id;
    			$returndata['reply_account'] = $infom->account;
    			$returndata['reply_user_id'] = $_POST['reply_user_id'];
    			$returndata['info']    = $_POST['info'];
    			$returndata['create_time'] = date("m-d H:i:s",$data['create_time']);
    			$returndata['floor_id']  = $_POST['floor_id'];
    			return json_encode((object)$returndata);
    		}else{
    			return 0;
    		}

    			
    }

    public function replyto()
    {
    	//return json_encode($_POST['reply_id']);
    	
    	$user_data = DB::table("reply")
    		->join("user","user.id","=","reply.user_id")
    		->where("reply_id",$_POST['reply_id'])
    		->select("user_id","account")
    		->first();
    		//return json_encode($user_data->account);
    		
		$data=[
			'user_id' =>session('user_key')->id,
			'reply_user_id'=>$user_data->user_id,
			'info'   =>$_POST['info'],  
			'create_time'=>time(),  
			'floor_id'=>$_POST['floor_id']
		];
		$bool =DB::table("reply")->insertGetId($data);
		 if($bool){
		 	$returndata = [
    			'reply_id'  =>$bool,
    			'user_account' =>session("user_key")->account,
    			'user_id'   =>session("user_key")->id,
    			'reply_account' => $user_data->account,
    			'reply_user_id' => $user_data->user_id,
    			'info'    => $_POST['info'],
    			'create_time' => date("m-d H:i:s",$data['create_time']),
    			'floor_id'  => $_POST['floor_id']		 		
		 	];
		 	return json_encode((object)$returndata);
		 }else{
		 	return 0;
		 }	 
    }


    public function answer()
    {
    	$data = [
    		'forum_id'=>$_POST['forum_id'],
    		'user_id' =>session("user_key")->id,
    		'info'    =>$_POST['info'],  
    		'create_time'=>time() 
    	];
    	$bool = DB::table("floor")->insertGetId($data);
    	 if($bool){
    	 	return  1;
    	 }else{
    	 	return 0;
    	 }
    }
}
