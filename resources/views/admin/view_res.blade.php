<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
<title>管理员中心</title>
<link href="/static/admin/index/bootstrap-3.3.5-dist/css/bootstrap.min.css" title="" rel="stylesheet" />
<link title="" href="/static/admin/index/css/style.css" rel="stylesheet" type="text/css"  />
<link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
<link title="blue" href="/static/admin/index/css/dermadefault.css" rel="stylesheet" type="text/css"/>
<link title="green" href="/static/admin/index/css/dermagreen.css" rel="stylesheet" type="text/css" disabled="disabled"/>
<link title="orange" href="/static/admin/index/css/dermaorange.css" rel="stylesheet" type="text/css" disabled="disabled"/>
<link href="/static/admin/index/css/templatecss.css" rel="stylesheet" title="" type="text/css" />
<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script src="/static/admin/index/script/jquery.cookie.js" type="text/javascript"></script>
<script src="/static/admin/index/bootstrap-3.3.5-dist/js/bootstrap.min.js" type="text/javascript"></script>
</head>

<body>
<nav class="nav navbar-default navbar-mystyle navbar-fixed-top">
  <div class="navbar-header">
    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
     <span class="icon-bar"></span> 
     <span class="icon-bar"></span> 
     <span class="icon-bar"></span> 
    </button>
    <a class="navbar-brand mystyle-brand"><span class="glyphicon glyphicon-home"></span></a> </div>
  <div class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      <li class="li-border"><a class="mystyle-color" href="/admin/index">管理控制台</a></li>
    </ul>
    
    <ul class="nav navbar-nav pull-right">
       <li class="li-border dropdown"><a href="#" class="mystyle-color" data-toggle="dropdown">
      <span class="glyphicon glyphicon-search"></span> 搜索</a>
         <div class="dropdown-menu search-dropdown">
          <form method="get" action="/resource/result/video" target="_blank">
            <div class="input-group">
                <input type="text" class="form-control" name="searchcon">
                 <span class="input-group-btn">
                   <button type="submit" class="btn btn-default">搜索</button>
                </span>
            </div>
          </form>
         </div>
      </li>
      <li class="dropdown li-border"><a href="#" class="dropdown-toggle mystyle-color" data-toggle="dropdown">{{session("admin_key")->admin_name}}<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="login.html">退出</a></li>
        </ul>
      </li>
      <li class="dropdown"><a href="#" class="dropdown-toggle mystyle-color" data-toggle="dropdown">换肤<span class="caret"></span></a>
        <ul class="dropdown-menu changecolor">
          <li id="blue"><a href="#">蓝色</a></li>
          <li class="divider"></li>
          <li id="green"><a href="#">绿色</a></li>
          <li class="divider"></li>
          <li id="orange"><a href="#">橙色</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
<div class="down-main">
  <div class="left-main left-full">
    <div class="sidebar-fold"><span class="glyphicon glyphicon-menu-hamburger"></span></div>
    <div class="subNavBox">
      <div class="sBox">
       <div class="subNav sublist-down"><span class="title-icon glyphicon glyphicon-chevron-down"></span><span class="sublist-title">信息中心</span>
        </div>
        <ul class="navContent" style="display:block">
          <li class="active">
            <div class="showtitle" style="width:100px;"><img src="img/leftimg.png" />账号管理</div>
            <a href="#"><span class="sublist-icon glyphicon glyphicon-user"></span><span class="sub-title">账号管理</span></a> </li>
          <li>
            <div class="showtitle" style="width:100px;"><img src="img/leftimg.png" />消息</div>
            <a href="message.html"><span class="sublist-icon glyphicon glyphicon-envelope"></span><span class="sub-title">消息</span></a> </li>
        </ul>
      </div>
      <div class="sBox">
        <div class="subNav sublist-up"><span class="title-icon glyphicon glyphicon-chevron-up"></span><span class="sublist-title">管理中心</span></div>
        <ul class="navContent" style="display:none">
          <li>
            <div class="showtitle" style="width:100px;"><img src="img/leftimg.png" />资源审核</div>
            <a href="/admin/resource/view"><span class="sublist-icon glyphicon glyphicon-ok-sign"></span><span class="sub-title">资源审核</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="right-product my-index right-full">
     <div class="container-fluid">	
        <div class="info-center">
          <div class="page-header">
                      <div class="pull-left">
            <h4>资源审核</h4>      
          </div>
                            </div>
          <div class="info-center-title">
              <span class="padding-large-right manage-title pull-left">
                           <a class="active" href="#">未审核</a>
                        </span>
            <span class="padding-large-right pull-left"><a href="#">未通过</a></span>
          </div>
                    <div class="clearfix"></div>
          <div class="table-margin">
                      <table class="table table-bordered table-header">
                      <thead>
                         <tr>
                           <td class="w5">ID</td>
                           <td class="w20">标题</td>
                           <td class="w5">类型</td>
                           <td class="w15">分享时间</td>
                           <td class="w30">原创/转载</td>
                           <td class="w10">标签</td>
                           <td class="w10">审核</td>
                           <td class="w5">详情</td>
                         </tr>
                      </thead>
                         <tbody>
                          @foreach($data as $v)
                         <tr>
                          <td>{{$v->file_id}}</td>
                          <td>@if($v->file_type=='video')
                                <a href="/admin/check/video/{{$v->file_id}}" target="_blank">{{$v->title}}</a>
                              @elseif($v->file_type=='words')
                                <a href="/admin/check/words/{{$v->file_id}}" target="_blank">{{$v->title}}</a> 
                              @else
                                <a href="/admin/check/image/{{$v->file_id}}" target="_blank">{{$v->title}}</a>
                              @endif
                          </td>
                          <td>@if($v->file_type=='video')
                                视频
                              @elseif($v->file_type=='words')
                                文档
                              @else
                                图片
                              @endif
                          </td>
                          <td>{{date("Y/m/d H:i:s",$v->create_time)}}</td>
                          <td>{{$v->spead}}</td>
                          <td>{{$v->tag}}</td>
                          <td>{{$v->auditing}}</td>
                          <td>
                              @if($v->file_type=='video')
                                <a href="/admin/check/video/{{$v->file_id}}"  style="color:blue;">
                                点击</a>
                              @elseif($v->file_type=='words')
                                <a href="/admin/check/words/{{$v->file_id}}"  style="color:blue;">
                                点击</a> 
                              @else
                                <a href="/admin/check/image/{{$v->file_id}}"  style="color:blue;">
                                点击</a>
                              @endif
                          </td>
                         </tr>
                         @endforeach
                         </tbody>
                      </table>
                    </div>
        </div>
        <div class="show-page hidden">
          <ul>
          </ul>
        </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$(function(){
/*换肤*/
$(".dropdown .changecolor li").click(function(){
	var style = $(this).attr("id");
    $("link[title!='']").attr("disabled","disabled"); 
	$("link[title='"+style+"']").removeAttr("disabled"); 

	$.cookie('mystyle', style, { expires: 7 }); // 存储一个带7天期限的 cookie 
})
var cookie_style = $.cookie("mystyle"); 
if(cookie_style!=null){ 
    $("link[title!='']").attr("disabled","disabled"); 
	$("link[title='"+cookie_style+"']").removeAttr("disabled"); 
} 
/*左侧导航栏显示隐藏功能*/
$(".subNav").click(function(){				
			/*显示*/
			if($(this).find("span:first-child").attr('class')=="title-icon glyphicon glyphicon-chevron-down")
			{
				$(this).find("span:first-child").removeClass("glyphicon-chevron-down");
			    $(this).find("span:first-child").addClass("glyphicon-chevron-up");
			    $(this).removeClass("sublist-down");
				$(this).addClass("sublist-up");
			}
			/*隐藏*/
			else
			{
				$(this).find("span:first-child").removeClass("glyphicon-chevron-up");
				$(this).find("span:first-child").addClass("glyphicon-chevron-down");
				$(this).removeClass("sublist-up");
				$(this).addClass("sublist-down");
			}	
		// 修改数字控制速度， slideUp(500)控制卷起速度
	    $(this).next(".navContent").slideToggle(300).siblings(".navContent").slideUp(300);
	})
/*左侧导航栏缩进功能*/
$(".left-main .sidebar-fold").click(function(){

	if($(this).parent().attr('class')=="left-main left-full")
	{
		$(this).parent().removeClass("left-full");
		$(this).parent().addClass("left-off");
		
		$(this).parent().parent().find(".right-product").removeClass("right-full");
		$(this).parent().parent().find(".right-product").addClass("right-off");
		
		}
	else
	{
		$(this).parent().removeClass("left-off");
		$(this).parent().addClass("left-full");
		
		$(this).parent().parent().find(".right-product").removeClass("right-off");
		$(this).parent().parent().find(".right-product").addClass("right-full");
		
		}
	})	
 
  /*左侧鼠标移入提示功能*/
		$(".sBox ul li").mouseenter(function(){
			if($(this).find("span:last-child").css("display")=="none")
			{$(this).find("div").show();}
			}).mouseleave(function(){$(this).find("div").hide();})	
})
</script>
</body>
</html>
