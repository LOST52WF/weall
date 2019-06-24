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
       
       <!---title----->
            <div class="info-title">
              <div class="pull-left">
                <h4><strong>{{session("admin_key")->admin_name}}，</strong></h4>
                <p>欢迎登录管理系统！</p>
              </div>
              <div class="time-title pull-right">
                  <div class="year-month pull-left">
                    <p>
                    <?php $w=date("w"); ?>
                    @if($w==0)
                    星期日
                    @elseif($w==1)
                    星期一
                    @elseif($w==2)
                    星期二
                    @elseif($w==3)
                    星期三
                    @elseif($w==4)
                    星期四
                    @elseif($w==5)
                    星期五
                    @elseif($w==6)
                    星期六
                    @endif
                    </p>
                    <p><span>{{date("Y",time())}}</span>{{date("-m-d",time())}}</p>
                  </div>
                  <div class="hour-minute pull-right">
                     <strong><font id="Time"></font></strong>
                  </div>
              </div>
              <div class="clearfix"></div>
            </div>
           <!----content-list----> 
            <div class="content-list">
               <div class="row">
                 <div class="col-md-3">
                    <div class="content">
                       <div class="w30 left-icon pull-left">
                          <span class="glyphicon glyphicon-facetime-video blue"></span>
                       </div>
                       <div class="w70 right-title pull-right">
                       <div class="title-content">
                           <p>资源-视频</p>
                           <h3 class="number">{{$count['video']['allcount']}}</h3>
                           <button class="btn btn-default">本日上传<span style="color:red;">{{$count['video']['adaycount']}}</span></button>
                       </div>
                       </div>
                       <div class="clearfix"></div>
                    </div>
                 </div>
                  <div class="col-md-3">
                    <div class="content">
                       <div class="w30 left-icon pull-left">
                          <span class="glyphicon glyphicon-book violet"></span>
                       </div>
                       <div class="w70 right-title pull-right">
                       <div class="title-content">
                           <p>资源-文档</p>
                           <h3 class="number">{{$count['words']['allcount']}}</h3>
                           <button class="btn btn-default">本日上传<span style="color:red;">{{$count['words']['adaycount']}}</span></button>
                       </div>
                       </div>
                       <div class="clearfix"></div>
                    </div>
                 </div>
                  <div class="col-md-3">
                    <div class="content">
                       <div class="w30 left-icon pull-left">
                          <span class="glyphicon glyphicon-picture orange"></span>
                       </div>
                       <div class="w70 right-title pull-right">
                       <div class="title-content">
                           <p>资源-图片</p>
                           <h3 class="number">{{$count['image']['allcount']}}</h3>
                           <button class="btn btn-default">本日上传<span style="color:red;">{{$count['image']['adaycount']}}</span></button>
                       </div>
                       </div>
                       <div class="clearfix"></div>
                    </div>
                 </div>
                  <div class="col-md-3">
                    <div class="content">
                       <div class="w30 left-icon pull-left">
                          <span class="glyphicon glyphicon-folder-close green"></span>
                       </div>
                       <div class="w70 right-title pull-right">
                       <div class="title-content">
                           <p>项目上传</p>
                           <h3 class="number">{{$count['project']['allcount']}}</h3>
                           <button class="btn btn-default">本日上传<span style="color:red;">{{$count['project']['adaycount']}}</span></button>
                       </div>
                       </div>
                       <div class="clearfix"></div>
                    </div>
                 </div>
               </div>
               <!-------信息列表------->
               <div class="row newslist" style="margin-top:20px;">
                 <div class="col-md-8">
                   <div class="panel panel-default">
                      <div class="panel-heading">
                       待处理审核<div class="caret"></div>
                      </div> 
                      @foreach($things as $t)
                      <div class="panel-body">
                           <div class="w30 pull-left">
                            {{$t->title}}
                           </div>
                           <div class="w10 pull-left">用户ID：{{$t->user_id}}</div>
                           <div class="w10 pull-left text-center">{{$t->file_type}}</div>
                           <div class="w40 pull-left text-center">{{date("Y-m-d H:i:s",$t->create_time)}}</div>
                          <div class="w10 pull-left text-center"><span class="text-green-main">{{$t->spead}}</span></div>
                      </div>
                      @endforeach
                      <div class="panel-body text-center">
                          <a href="#" style="color:#5297d6;">查看全部</a>
                      </div>
                    </div>
                 </div>
                 
                 <div class="col-md-4">
                     <div class="panel panel-default">
                      <div class="panel-heading">
                       审核统计
                      </div>     
                      <div class="panel-body">
                        <div class="w40 pull-left">
                            <b>待审核资源</b>
                         </div>
                           <div class="w10 pull-left"><font style="color:green;">{{$tj['ds']}}</font></div>
                      </div>
                      <div class="panel-body">
                        <div class="w40 pull-left">
                            <b>未审核通过资源</b>
                         </div>
                           <div class="w10 pull-left"><font style="color:red;">{{$tj['wg']}}</font></div>
                      </div>
                    </div>
                 </div><!--<div class="col-md-4">-->
               </div>
            </div>           
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
<script type="text/javascript">
  
$(function () {
        CurrentTime();
    })
    function CurrentTime() {
        var date = new Date();
        var hour = date.getHours();
        var minute = date.getMinutes();
        hour = hour < 10 ? ("0" + hour) : hour;
        minute = minute < 10 ? ("0" + minute) : minute;
        var Timer =hour + ':' + minute;
        //在页面上插入日期
        $("#Time").html(Timer);
        setTimeout(function () {
            CurrentTime();
        }, 1000);
}
</script>
</body>
</html>
