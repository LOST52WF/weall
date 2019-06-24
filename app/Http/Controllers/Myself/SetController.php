<?php

namespace App\Http\Controllers\Myself;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SetController extends Controller
{
    public function set_group($group_id)
    {
        $number = DB::table("group_user")
            ->where("group_user.group_id",$group_id)
            ->join("user","user.id","=","group_user.user_id")
            ->select("user.account","group_user.rank","user.sex","user.id")
            ->get();
        $rank = DB::table("group_user")
        	->where("group_id",$group_id)
        	->where("user_id",session('user_key')->id)//用session
        	->select("rank")
        	->first();
    	return view("myself.set.set_group")->with("number",$number)->with("group_id",$group_id)->with("rank",$rank->rank);
        	//dd($number);
    }

    public function set_info()
    {
    	$info = DB::table("user")
    		->where("id",session('user_key')->id)//用session
    		->first();
    		//dd($info);
		return view("myself.set.set_info")->with("info",$info);
    }

    public function add_group()
    {
    	return view("myself.set.add_group");
    }


    public function modinfo()
    {
    	$data=[
    		'account' =>$_POST['name'],
    		'number'=>$_POST['number'],
    		'city'=>$_POST['city'],
    		'sex'=>$_POST['sex']
    		];
    		//return json_encode($data);
		$bool = DB::table("user")
			->where("id","=",session('user_key')->id)//应该用session
			->update($data);
		if($bool)
			return 1;
		else     
			return 2;
    }

    public function modpwd()
    {
    	$info =DB::table("user")
    		->where("id",session('user_key')->id)//用session
    		->select("id","password")
    		->first();
		if($info->password !=$_POST['pwd']){
			return 4;
		}else if($_POST['cofpwd']==$_POST['newpwd']&&$info->password==$_POST['pwd']){
			$bool = DB::table("user")
				->where("id",session('user_key')->id)//用session
				->update(["password"=>$_POST['newpwd']]);
			if($bool)	
				return 1;
			else
				return 2;
		}else{
			return 3;
		}
    }


    public function search()
    {
    	$data = DB::table("user")
    		->where("email",$_POST['email'])
    		->select("account")
    		->first();
    	if($data)
    		return json_encode($data->account);
    	else
    		return json_encode($data);
    }

    public function join()
    {
    	$data = DB::table("user")
    		->where("email",$_POST['email'])
    		->select("account","id")
 	  		->first(); 
    	if($data){
    		$bool = DB::table("join")
    			->insert(['group_id'=>$_POST['group_id'],'user_id'=>$data->id]);
			if($bool)
				return 1;
			else
				return 3;
    	}else{
    		return 0;
    	}
    }

    public function updaterank()
    {

    	$id = $_POST['group_id'];
    	$bool  = DB::table("group_user")
    		->where("group_id",$id)
    		->where("user_id",$_POST['user_id'])
    		->update(['rank'=>$_POST['rank']]);
		if($bool)
			return 1;
		else
			return 0;
    }


    public function create_group()
    {
        $group = $_POST['name'];
        if($_POST['max']<=50&&$_POST['max']>=2&&$_POST['name']!='')
        {
            $data = [
                'name'   =>$group,
                'total'  =>$_POST['max'],
                'user_id'=>session("user_key")->id
            ];

            $bool = DB::table('group')->insertGetId($data);
            if($bool){
                $info = [
                    'group_id'=>$bool,
                    'user_id' =>session("user_key")->id,
                    'rank'    =>1
                ];
                $bool2 = DB::table('group_user')->insert($info);
                    if($bool2)
                        return redirect("/myself/group/".$bool);
                    else
                        return redirect("/myself/add/group");
            }else{
                return redirect("/myself/add/group");
            }
        }
    }
}
