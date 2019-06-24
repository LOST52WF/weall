<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/***************************************** 首页 ********************************************/
 Route::get('/'          ,"Index\IndexController@index");              //首页

 //Route::get("test"    ,"Index\IndexController@test"    );		 //测试
 Route::group(["prefix"=>"account","namespace"=>"Index"],function(){
 	Route::get("register","IndexController@register");       //登录|注册页面
 	Route::get("unsign"  ,"IndexController@unsign"  );		 //注销登录
 	Route::post("signup" ,"IndexController@signup"  );       //注册
 	Route::post("login"  ,"IndexController@login"   );       //登录

 });

/*************************************** 个人资源 ******************************************/
Route::group(["prefix"=>"myself","namespace"=>"Myself","middleware"=>'check'],function(){
//前台路由
/**********学习资源**********/
	Route::get("index"            ,"IndexController@index"   );       //个人首页
	Route::get("video/{page?}"    ,"IndexController@video"   );       //个人资源-视频
	Route::get("words/{page?}"    ,"IndexController@words"   );       //个人资源-文档
	Route::get("image/{page?}"    ,"IndexController@image"   );       //个人资源-图片
	Route::get("collect/{page?}"  ,"IndexController@collect" );       //个人资源-收藏

    Route::get("player/video/{id}"   ,"IndexController@player_video");  //视频播放页
    Route::get("player/words/{id}"   ,"IndexController@player_words");  //文档下载页
    Route::get("player/image/{id}"   ,"IndexController@player_image");  //图片播放页
    //Route::get("test"   ,"IndexController@test"   );                  //测试
/**********资源群组**********/
	Route::get("group/{group_id?}","GroupController@group"   );       //群组资源首页
	Route::get("group/video/{id}" ,"GroupController@group_video");    //视频播放页
	Route::get("group/words/{id}" ,"GroupController@group_words");    //文档下载页
	Route::get("group/image/{id}" ,"GroupController@group_image");    //图片播放页
/**********资源列表**********/
	Route::get("file_user/{page?}" ,"FileController@file_user"    );              //个人资源列表
	Route::get("file_group/{group_id?}/{page?}","FileController@file_group"   );  //群组资源列表
/***********审核************/
	Route::get("checklist/{page?}","IndexController@checklist");     //资源审核
	Route::get("numberclick"    ,"IndexController@numberclick");     //申请审核
	Route::post("tongyiapp"     ,"IndexController@tongyiapp"  );     //同意申请   
/***********设置************/
	Route::get("groupset"         ,"IndexController@groupset");       //获取设置群组
	Route::get("set/group/{group_id}","SetController@set_group");     //群组设置
	Route::get("set/info"         ,"SetController@set_info"  );       //个人资料
	Route::get("add/group"        ,"SetController@add_group" );       //创建群组页面
	Route::post("create/group"    ,"SetController@create_group" );    //创建群组页面
/*---------------------------------------------------------------------------*/
//业务逻辑路由
	Route::post("upload" ,"IndexLogicController@upload"    );         //index 个人首页文件上传
	Route::post("group/delete" ,"FileController@delete"    );         //file_group文件删除
	Route::post("file_user/delete","FileController@userdel");         //file_user 文件删除
	Route::post("file_user/share_group","FileController@share_group" );         //分享至资源群组
	Route::post("file_user/share_hub"  ,"FileController@share_hub"   );         //分享至资源库
	Route::post("set/modinfo"     ,"SetController@modinfo" );         //修改个人资料
	Route::post("set/modpwd"      ,"SetController@modpwd"  );         //修改密码
	Route::post("set/search"      ,"SetController@search"  );         //查询用户
	Route::post("set/join"        ,"SetController@join"    );         //邀请加入群组
	Route::post("set/rank"     ,"SetController@updaterank" );  	 	  //修改组员等级
});
/*******************************************************************************************/

/*******************************************资源库*******************************************/
Route::group(["prefix"=>"resource","namespace"=>"Resource"],function(){
	Route::get("index"            ,"ResourceController@index");       //资源库首页
	Route::get("topdf"            ,"ResourceController@topdf");		  //转换成PDF
	Route::get("result/video","SearchController@result_video" );      //视频结果页
	Route::get("result/words","SearchController@result_words" );      //文档结果页
	Route::get("result/image","SearchController@result_image" );      //图片结果页
	Route::get("result/project","SearchController@result_project");   //其他结果页
	Route::get("video_page"     ,"SetResController@video_page");      //视频集合页
	Route::get("words_page"     ,"SetResController@words_page");      //文档集合页
	Route::get("image_page"     ,"SetResController@image_page");      //图片集合页
/********************************************************/
});
Route::group(["prefix"=>"share","namespace"=>"Resource"],function(){
	Route::get("video/{id}"         ,"ShareController@sharevideo");         //视频分享页
	Route::get("words/{id}"         ,"ShareController@sharewords");         //文档分享页
	Route::get("image/{id}"         ,"ShareController@shareimage");         //图片分享页
	Route::get("imageplayer/{id}"   ,"shareController@imageplayer");        //图片播放页
	Route::get("load_comment/{id}/{page}","ShareController@loadcomment");   //加载评论
	Route::get("download/words/{id}","ShareController@downloadwords");      //下载文档
	Route::get("view/words/{id}"    ,"ShareController@viewwords" );         //在线查看文档
	/*-------------------------------------------------------*/
	Route::post("collect"           ,"ShareController@collect"   );         //收藏、取消收藏	
	Route::post("score"             ,"ShareController@score"     );         //打分
	Route::post("comment/send"      ,"ShareController@sendcomment");        //评论	
	Route::post("comment/zan"       ,"ShareController@zan"        );        //赞
	Route::post("comment/xu"        ,"ShareController@xu"         );        //踩
	/*-------------------------------------------------------*/
});
/*******************************************项目************************************************/

Route::group(['prefix'=>'project',"namespace"=>"Project"],function(){
	Route::get("index"              ,"ProjectController@index"   );         //项目首页
	Route::get("item/{project_id}"  ,"ProjectController@item"    );         //项目详情页
	Route::get("download/{id}"      ,"ProjectController@download");         //下载项目	
	Route::get("create/{project_id}","ProjectController@create"  );         //项目新版本创建页面
	Route::get("add"           ,"ProjectController@add_project"  );         //项目创建页面
	/*******************************业务逻辑******************************/
	Route::post("item_upload"       ,"ProjectController@item_upload");      //项目上传
	Route::post("add/post"          ,"ProjectController@add_post");         //新项目创建及上传
	Route::post("question"          ,"ProjectController@question");         //接受提问
	Route::post("answer"            ,"ProjectController@answer");           //接受回答
});


/*******************************************论坛************************************************/
Route::group(['prefix'=>'bbs',"namespace"=>"Bbs"],function(){
	Route::get("index/{page}"		,"BbsController@index"       );         //论坛首页
	Route::get("create"		        ,"BbsController@create"      );         //创建帖子
	Route::post("create/forum"      ,"BbsController@create_forum");         //提交上传帖子
	Route::get("forum/{forum_id}/{page}" ,"BbsController@forum"  );         //帖子
	Route::post("forum/reply"      ,"BbsController@reply"        );         //楼层回复
	Route::post("floor/reply"      ,"BbsController@replyto"      );         //楼层用户之间回复
	Route::post("forum/answer"      ,"BbsController@answer"      );         //回复帖子

});


/*******************************************学习小组************************************************/
Route::group(["prefix"=>"study","namespace"=>"Study"],function(){
	Route::get("group"             ,"StudyGroupController@index");          //学习小组首页
	Route::post("groupapp"          ,"StudyGroupController@groupapp");       //申请加入
});




/********************************************后台管理员板块*********************************************/
 	Route::get('admin/login',"Admin\AdminController@login");              //管理员后台首页
	Route::post('admin/login_post',"Admin\AdminController@login_post");   //验证登录
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'admincheck'],function(){

	Route::get('index'      ,"AdminController@admin_index");              //管理界面首页
	Route::get("resource/view", "AdminController@view_res");              //资源管理页面  
	Route::get("check/video/{id}","AdminController@video_check");         //视频审查
	Route::get("check/words/{id}","AdminController@words_check");         //文档审查
	Route::get("check/image/{id}","AdminController@image_check");         //图片审查
	Route::get("check/imageplayer/{id}","AdminController@imageplayer");   //图片播放
	Route::get("check/wordsview/{id}","AdminController@wordsview");       //文档观看

	Route::post("check/post"      ,"AdminController@check_post");         //审查提交

});

	Route::get("jisuan/index"      ,"Jisuan\JisuanController@index");         
	Route::post("jisuan/result"    ,"Jisuan\JisuanController@result");       
/*************************************************over*************************************************/
