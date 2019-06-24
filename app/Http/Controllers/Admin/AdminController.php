<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function login(){
    	return view("admin.login");
    }

    public function login_post(){
    	
    	$admin = DB::table("admin") 
    		->where("id","=",$_POST['id'])
    		->first();
    	if($admin){
    		if($admin->password == $_POST['password']&&$admin->admin_name==$_POST['admin_name']){
    			session(['admin_key'=>$admin]);
    			return redirect("/admin/index");
    		}
    	}else{
    		return redirect()->back();
    	}
    }


    public function admin_index(){
	   	$nowday = strtotime(date("Y-m-d ")+"00:00:00");
    	$type=[0=>'video',1=>'words',2=>'image',3=>'project'];
    	$arr = array();
    	foreach ($type as $v) {
    		if($v=='project'){
    			$arr['project']['allcount'] = DB::table("project")->count();
    			$arr['project']['adaycount'] = DB::table("project")->where("upload_time",">",$nowday)->count();
    		}else{
    			$arr[$v]['allcount'] = DB::table("resource")->where("type",$v)->count();
    			$arr[$v]['adaycount'] = DB::table("resource")->where("type",$v)->where("upload_time",">",$nowday)->count();
    		}
    	}
    	$things = DB::table("auditing")
    		->join("file","file.id","=","auditing.file_id")
    		->where("auditing.auditing","=","待审核")
    		->select("title","auditing.user_id","file_type","file.id","auditing.create_time","auditing.spead")
    		->orderBy("auditing.create_time","asc")
    		->limit(7)
    		->get();
    	//dd($things);
		$tj['ds'] = DB::table("auditing")->where("auditing","待审核")->count();
		$tj['wg'] = DB::table("auditing")->where("auditing","!=","带审核")->where("auditing","!=","通过")->count();
    	return view("admin.index")->with("count",$arr)->with("things",$things)->with('tj',$tj);
    }


    public function view_res()
    {
    	$data = DB::table("auditing")
    		->join("file","file.id","=","auditing.file_id")
    		->where("auditing","待审核")
    		->select("title","file_type","tag","auditing.spead","auditing","file_id","auditing.create_time")
    		->get();
		//dd($data);
    	return view("admin.view_res")->with("data",$data);
    }

    public function video_check($id)
    {
    	$data = DB::table("file")->where("id",$id)->select("id","picture_url","file_url")->first();
    	return view("admin.check_video")->with("data",$data);
    }

    public function image_check($id)
    {
    	$data = DB::table("file")->where("id",$id)->select("id","picture_url")->first();
    	return view("admin.check_image")->with("data",$data);
    }
    public function imageplayer($id)
    {
    	$info =DB::table("file")
    		->where("id",$id)
    		->select("picture_url","id")
    		->first();
		return view("admin.imageplayer")->with("info",$info);
    }

    public function words_check($id)
    {
        $data = DB::table("file")->where("id",$id)->select("id","picture_url","file_url")->first();
        return view("admin.check_words")->with("data",$data);
    }
    public function wordsview($id)
    {
        return redirect("/share/view/words/16");
    }


    public function check_post()
    {
    	if($_POST['check']=='wtg'){
            $bool = DB::table("auditing")->where("file_id",$_POST['file_id'])
                ->update(['auditing'=>"[未通过]".$_POST['info']]);
            return redirect("/admin/resource/view");
        }else if($_POST['check']=='tg'){
            $get_file = DB::table("file")->where("id",$_POST['file_id'])->first();
            $bool = DB::table("auditing")->where("file_id",$_POST['file_id'])
                ->update(['auditing'=>"通过"]);
            //dd($get_file);
            $data  = [
                'title'     =>$get_file->title,
                'user_id'   =>$get_file->user_id,
                'type'      =>$get_file->file_type,
                'file_url'  =>$get_file->file_url,
                'picture_url' =>$get_file->picture_url,
                'upload_time' =>time(),
                'tag'       =>$get_file->tag,
                'spead'     =>$get_file->spead
            ];
            $bool =DB::table("resource")->insertGetId($data);
            if($bool){
                $data2 = [
                    'resource_id'=>$bool,
                    'scored_count'=>0,
                    'average'=>0
                ];
                $bool2 = DB::table("tb_score")->insert($data2);
            }

        }
        return redirect("/admin/resource/view");
    }
}
