<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
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

	protected function pop()
	{
		$amonthago = strtotime(date("Y-m-d",strtotime("-1 month")));  //一周前
		$pop = DB::table("project")
			->where("upload_time",">=",$amonthago)
			->orderBy("click","desc")
			->select("title","project_id","click","upload_time","picture_url")
			->groupBy('project_id')
            ->limit(10)
            ->get();
		return $pop;
	}

	protected function newproject()
	{
		$data = DB::table("project")
			->orderBy("upload_time","desc")
			->select("title","project_id","click","upload_time","picture_url")
			->groupBy('project_id')
			->limit(15)
			->get();
		return $data;
	}


    public function index()
    {
    	$user_info = $this->user_info();
    	$pop = $this->pop();
    	$data = $this->newproject();
    	//dd($data);
    	return view("project.index")->with("user_info",$user_info)->with("pop",$pop)->with("data",$data);
    }

    public function item($project_id)
    {
    	$user_info = $this->user_info();
    	$data = DB::table("project")
    		->join("user","user.id","=","project.user_id")
    		->where("project_id","=",$project_id)
    		->orderBy("upload_time","asc")
    		->select("title","account","upload_time","click","project.id","project_id","info","file_url")
    		->get();
    	//dd($data);
    	$info =DB::table("project")
    		->join("user","user.id","=","project.user_id")
    		->where("project_id","=",$project_id)
    		->orderBy("upload_time","asc")
    		->select("title","project_id")
    		->first();
        $item_info = $this-> item_info($project_id);
        $item_study = $this-> item_study($project_id);
        $qs = $this->get_qs($project_id);
        //dd($qs);
    	return view("project.item")->with("user_info",$user_info)->with("data",$data)->with("info",$info)->with("item_info",$item_info)->with("item_study",$item_study)->with("qs",$qs);
        //$user_info = $this->user_info();
        //return view("project.item2")->with("user_info",$user_info);
    }

    protected function get_qs($project_id)
    {
        $qs = DB::table("question")
            ->join("user","user.id","=","question.user_id")
            ->where("question.project_id",$project_id)
            ->orderBy("create_time")
            ->select("question_id","create_time","content","account","headimage")
            ->get();
        //return $qs;
        foreach($qs as $v){
            $an[] = DB::table("answer")
                ->join("user","user.id","=","answer_user_id")
                ->where("question_id",$v->question_id) 
                ->select("answer_id","create_time","info","account","headimage")
                ->get(); 
        }
        for ($i=0; $i < count($qs); $i++) { 
            $qs[$i]->answer = $an[$i];
        }
        return $qs;
        
    }


    protected function item_study($project_id)
    {
        $ob_tag = DB::table("project")
            ->where("project_id",$project_id)
            ->select("tag")
            ->groupBy("tag")
            ->get();

        foreach($ob_tag as $v){
            $item_study[] = DB::table("resource")
                    ->where("tag",$v->tag)
                    ->orderBy("click")
                    ->select("resource_id","title","type","picture_url")
                    ->limit(6)
                    ->get();
        }
        return $item_study;

    }

    protected function item_info($project_id)
    {
        //获取创建者信息
        $user_data = DB::table("project")
            ->join("user","user.id","=","project.user_id")
            ->where("project_id",$project_id)
            ->orderBy("project.id")
            ->select("account","title","upload_time","project_id")
            ->first();
        //获取项目信息
            //获取项目总点击率
        $click = DB::table("project")
            ->where("project_id",$project_id)
            ->SUM("click");
            //获取项目中上传人数
        $user_count = DB::table("project")
            ->where("project_id",$project_id)
            ->distinct("user_id")
            ->count();
        $item_info = [
            'user_account'=>$user_data->account,
            'title'       =>$user_data->title,
            'upload_time' =>$user_data->upload_time,
            'click'       =>$click,
            'user_count'  =>$user_count,
            'project_id'  =>$user_data->project_id
        ];
        return $item_info;
    }


    public function download($id)
    {
    	$file_o = DB::table("project")
    		->where("id",$id)
    		->select("file_url","title")
    		->first();
    	$file_url = $file_o->file_url;
    	$file_name = $file_o->title;
		return response()->download(public_path().$file_url,$file_name.'.rar');
    }

    public function create($project_id)
    {
    	$user_info = $this->user_info();
    	return view("project.create")->with("user_info",$user_info)->with("project_id",$project_id);
    }

    public function item_upload(Request $request)
    {
		if ($request->isMethod('post')) {
            $file = $request->file('project_file');
            // 文件是否上传成功
            if ($file->isValid()) {
                // 获取文件相关信息
                $originalName = $file->getClientOriginalName(); // 文件原名
                $ext = $file->getClientOriginalExtension();     // 扩展名
                //$realPath = $file->getRealPath();   //临时文件的绝对路径
                //$type = $file->getClientMimeType();     // image/jpeg

                // 上传文件
                //$filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
                $filename = time().$originalName.".".$ext;
                $bool = $file->move("uploads/project",$filename);
                // 使用我们新建的uploads本地存储空间（目录）
                //$bool = Storage::disk('uploads')->put($filename, file_get_contents($realPath));
                if($bool)
                {	
                	$data = [
                		"project_id"=>$_POST['project_id'],
                		"file_url"  =>"/uploads/project/".$filename,
                		"info"      =>$_POST['text'],
                		"user_id"   =>session("user_key")->id, 
                		"upload_time"=>time(), 
                		"title"     =>$_POST['title'],
                        "tag"       =>$_POST['tag']
                	];
                	$bool2 =DB::table("project")->insert($data);
                	if($bool2)
                		return redirect("/project/item/".$_POST['project_id']);
            		else
            			return redirect("/project/create/".$_POST['project_id']);              
                }
            }else{
            	return redirect("/project/create/".$_POST['project_id']);
            }
        }
    }

    public function add_project()
    {
        $user_info  = $this->user_info();
        return view("project.add")->with("user_info",$user_info);
    }

    public function add_post(Request $request)
    {
        //return $_POST['tag']."1212";
        
        if ($request->isMethod('post')) {
            $file = $request->file('project_file');
            $image = $request->file('project_image');
            // 文件是否上传成功
            if ($file->isValid()&&$image->isValid()) {
                // 获取文件相关信息
                $originalName = $file->getClientOriginalName(); // 文件原名
                $ext = $file->getClientOriginalExtension();     // 扩展名
                //$realPath = $file->getRealPath();   //临时文件的绝对路径
                //$type = $file->getClientMimeType();     // image/jpeg
                $originalImageName = $image->getClientOriginalName(); //封面图片文件原名
                $Imageext = $image->getClientOriginalExtension();     // 封面图片扩展名

                
                //$filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
                $filename = time().$originalName.".".$ext;
                $bool = $file->move("uploads/project",$filename);// 上传文件

                $imagename  = time().$originalImageName.".".$Imageext;//图片上传
                $bool2 = $image->move("uploads/videopage",$imagename);
                // 使用我们新建的uploads本地存储空间（目录）
                //$bool = Storage::disk('uploads')->put($filename, file_get_contents($realPath));
                $max = DB::table("project")->max("project_id");
                if($bool&&$bool2)
                {   
                    $data = [
                        "project_id"=>$max+1,
                        "file_url"  =>"/uploads/project/".$filename,
                        'picture_url'=>'/uploads/videopage/'.$imagename,
                        "info"      =>$_POST['text'],
                        "user_id"   =>session("user_key")->id, 
                        "upload_time"=>time(), 
                        "title"     =>$_POST['title'],
                        "tag"       =>$_POST['tag']
                    ];
                    $bool2 =DB::table("project")->insertGetId($data);
                    if($bool2){
                        $project_id = DB::table("project")
                            ->where("id",$bool2)
                            ->select("project_id")
                            ->first();
                        return redirect("/project/item/".$project_id->project_id);
                    }
                    else{
                        return redirect("/project/add");              
                    }
                }
            }else{
                return redirect("/project/add");
            }
        } 
              
    }


    public function question(){
        $data = [
            'user_id'=>session("user_key")->id,
            'create_time'=>time(),
            'content'=>$_POST['content'], 
            'project_id'=>$_POST['project_id']
        ];
        $bool = DB::table("question")->insertGetId($data);
        if($bool){
            $data['question_id']=$bool;
            $data['create_time']= date("Y-m-d H:i",$data['create_time']);
            return json_encode((object)$data);
        }
        else
            return 0;
    }

    public function answer(){
        $data = [
            'question_id' =>$_POST['question_id'],
            'create_time' =>time(),
            'info'        =>$_POST['info'],
            'answer_user_id'=>session("user_key")->id
        ];
        $bool = DB::table("answer")->insertGetId($data);
        if($bool){
            $data['answer_id']=$bool;
            $data['create_time']= date("Y-m-d H:i",$data['create_time']);
            return json_encode((object)$data);
        }else{
            return 0 ;
        }
    }
}
