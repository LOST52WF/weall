<?php

namespace App\Http\Controllers\Study;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudyGroupController extends Controller
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

    public function index(){
        $data = $this->get_group();
    	return view("group.index")->with("user_info",$this->user_info())->with("data",$data);
        //dd($data);
    }


    public function get_group(){
        $arr = DB::table("group")
                ->join("group_user","group_user.group_id","=","group.group_id")
                ->join("user","group_user.user_id","=","id")
                ->where("group_user.rank",1)
                ->inRandomOrder()
                ->take(30)
                ->select("user.account","group.total","group.name","group.group_id")
                ->get();
        $p = array();
        foreach ($arr as $v) {
            $v -> numbercount = DB::table("group_user")->where("group_id",$v->group_id)->count();
        }
        return $arr;
    }

    public function groupapp(){
        $data = [
            'user_id'=>session("user_key")->id,
            'group_id'=>$_POST['group_id'],
            'app_time'=>time()
        ];
        $bool = DB::table("groupapp")
            ->where("user_id",$data['user_id'])
            ->where("group_id",$data['group_id'])
            ->first();
        if ($bool){
            return 2;
        }
        $bool3 = DB::table("group_user")
            ->where("user_id",$data['user_id'])
            ->where("group_id",$data["group_id"])
            ->first();
        if ($bool3){
            return 3;
        }
        $bool2 = DB::table("groupapp")->insert($data);
        if ($bool2){
            return 1;
        }
    }
}
