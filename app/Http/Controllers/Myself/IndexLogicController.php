<?php

namespace App\Http\Controllers\Myself;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use DB;
class IndexLogicController extends Controller
{
    public function upload(Request $request){

//准备工作
            if(empty($_POST['title'])) 
                return "请输入标题";
            if ($request->hasFile('file')) { //是否存在和上传是否出错
                $file = $request->file('file');  //文件
            }else{
                return "未选择上传文件或上传出错,请重新上传文件。";
            }
            if($_POST["file_type"]=="视频"||$_POST["file_type"]=="文档"){
                if ($request->hasFile('videopage')) {
                    $picture = $request->file('videopage');  //封面
                    $originalName = $picture->getClientOriginalName(); // 文件原名
                    $ext = $picture->getClientOriginalExtension();     // 扩展名
                    $picture->move("uploads/videopage",$originalName.".".$ext);
                    $picture_url="/public/uploads/videopage/".$originalName.".".$ext;
                    
                }else{
                    $picture_url=""; //等于空
                }
            }else if($_POST['file_type']=="图片"||$_POST['file_type']=="其他"){
                $picture_url="";
            }
//准备结束,将信息储存到数据库中

/**
$File = $_FILES['file'];
foreach( $File['name'] as $Key => $FileName ) {
   $FileNames = $FileName; //上传的文件名
   $FileTypes = $File['type'][$Key];//上传的文件类型
   $FileSize  = $File['size'][$Key];//上传的文件大小
   $FileTmps  = $File['tmp_name'][$Key]; //上传的文件副本
   //其他同理
   //文件处理方式和单文件一样了
}
**/
        $data = array();            
            foreach ($file as $v) {    //
                $time= time();
                $originalName = $v->getClientOriginalName(); // 文件原名
                $ext = $v->getClientOriginalExtension();     // 扩展名
                if($_POST["file_type"]=="视频"){
                    $bool=$v->move("uploads/video","$".$time."$.".$ext);
                    $file_url = "/uploads/video/$".$time."$.".$ext;  //绝对路径
                    $file_type = "video";
                }else if($_POST["file_type"]=="文档"){
                    $bool=$v->move("uploads/words","$".$time."$.".$ext);
                    $file_url = "/uploads/words/$".$time."$.".$ext;
                    $file_type = "words";
                }else if($_POST["file_type"]=="图片"){
                    $bool=$v->move("uploads/picture","$".$time."$.".$ext);
                    $file_url = "/uploads/picture/$".$time."$.".$ext;
                    $file_type = "picture";
                }                
                if($_POST['shenming']=="yuanchuang"){
                    $dizhi="原创";
                }else if($_POST['shenming']=="zhuanzai"){
                    $dizhi="[转载]".$_POST['zzdizhi'];
                }
                $arr= [
                    "user_id"   =>session("user_id")->id,
                    "file_type" => $file_type,
                    "title"     => $_POST["title"],
                    "file_url"  => $file_url,
                    "picture_url"=>$picture_url,
                    "upload_time"=>$time,
                    "tag"       => $_POST['tag'],
                    "spead"     => $dizhi
                ];
                $data[]=$arr;
            }
            //将信息储存到数据库中
            $bool = DB::table("file")->insert($data);
            if($bool) return 1;
            else      return 0;
		
	}
    
}

