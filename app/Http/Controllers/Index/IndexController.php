<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Cookie;

class IndexController extends Controller
{
	function __construct()
	{

	}
    public function index()
    {
        $user  = Cookie::get("user_key");
        $data = $this->showingmap();
        $resource =$this->get_resource();
        if(!empty($user)){
            session(['user_key'=>$user]); 
            return view("index.index2")->with("account",$user->account)->with("data",$data)->with("resource",$resource);
        }else{
            return view("index.index2")->with("account","")->with("data",$data)->with("resource",$resource);
        }
    }

    protected function showingmap(){
        $monthago = strtotime(date("Y-m-d",strtotime("-1 month")));  //一月前
        $data = DB::table("resource")
            ->where("upload_time",">",$monthago)
            ->orderBy("click","desc")
            ->limit(15)
            ->select("resource_id","type","picture_url")
            ->get();
        return $data; 
    }

    protected function get_resource()
    {
        $type  = [0=>'video',1=>'words',2=>'image'];
        $monthago = strtotime(date("Y-m-d",strtotime("-1 month")));  //一月前 //这里其实可以用私有成员变量，利用构造函数赋值
        $resource =array();
        for ($i=0; $i <3 ; $i++) { 
            $resource[$type[$i]]=DB::table("resource")
                ->where("type",$type[$i])
                ->where("upload_time",">",$monthago)
                ->limit(8)
                ->select("resource_id","title","picture_url","upload_time")
                ->get();
        }
        return $resource;
    }

    public function register()   //注册
    {
    	return view("index.register");
    }

    public function signup()
    {
    	$bool = Db::table('user')->insert(
            ['account'=>$_POST['account'],'email'=>$_POST['email'],'password'=>$_POST['password']]
        );
        if($bool) return redirect()->back()->with("message","您已注册成功，请登录");
        else      return redirect()->back()->with("message","注册失败请重新注册");
    }

    public function login()
    {
    	$info = DB::table("user")
    	->where("account",$_POST['email'])
    	->orWhere("email",$_POST['email'])
        ->select("id","account","email","password")
    	->first();

    	if($info&&($_POST["pwd"]==$info-> password)){
    		session(["user_key"=>$info]);
    		Cookie::queue('user_key',$info,1440);
    		return redirect("myself/index");
    	}
    	
    }

    public function unsign()
    {
        Cookie::queue('user_key', null , -1); // 销毁
        session()->forget('user_key');
        return redirect("/");
    }

    public function test()
    {
$united_state_list = array(
'AL'=>"Alabama",
'AK'=>"Alaska",
'AZ'=>"Arizona",
'AR'=>"Arkansas",
'CA'=>"California",
'CO'=>"Colorado",
'CT'=>"Connecticut",
'DE'=>"Delaware",
'DC'=>"District Of Columbia",
'FL'=>"Florida",
'GA'=>"Georgia",
'HI'=>"Hawaii",
'ID'=>"Idaho",
'IL'=>"Illinois",
'IN'=>"Indiana",
'IA'=>"Iowa",
'KS'=>"Kansas",
'KY'=>"Kentucky",
'LA'=>"Louisiana",
'ME'=>"Maine",
'MD'=>"Maryland",
'MA'=>"Massachusetts",
'MI'=>"Michigan",
'MN'=>"Minnesota",
'MS'=>"Mississippi",
'MO'=>"Missouri",
'MT'=>"Montana",
'NE'=>"Nebraska",
'NV'=>"Nevada",
'NH'=>"New Hampshire",
'NJ'=>"New Jersey",
'NM'=>"New Mexico",
'NY'=>"New York",
'NC'=>"North Carolina",
'ND'=>"North Dakota",
'OH'=>"Ohio",
'OK'=>"Oklahoma",
'OR'=>"Oregon",
'PA'=>"Pennsylvania",
'RI'=>"Rhode Island",
'SC'=>"South Carolina",
'SD'=>"South Dakota",
'TN'=>"Tennessee",
'TX'=>"Texas",
'UT'=>"Utah",
'VT'=>"Vermont",
'VA'=>"Virginia",
'WA'=>"Washington",
'WV'=>"West Virginia",
'WI'=>"Wisconsin",
'WY'=>"Wyoming"
);
$input_state = 'Wiscsin';
$state = $this->closest_word($input_state ,array_values($united_state_list));
dd($state);

    }

    function closest_word($input, $words) {
    $shortest = -1;
    foreach ($words as $word) {
     $lev = levenshtein($input, $word);
     if ($lev == 0) {
      $closest = $word;
      $shortest = 0;
      break;
     }
     if ($lev <= $shortest || $shortest < 0) {
      $closest = $word;
      $shortest = $lev;
     }
    }
    return $closest;
    }
}
