<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>weall.hd</title>
        <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/static/showingmap/css/shutter.css">
        <link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
        <style>
            .jumbotron{
                background:url(/static/img/workinggirl.jpg);
            }
            .navbar{
                background-color: hsla(0,0%,50%,.5);
                box-shadow: 0 1px 2px rgba(0,0,0,.1);
                border:0px;
                font-family: "Helvetica Neue", Helvetica, Arial, "Microsoft Yahei", "Hiragino Sans GB", "Heiti SC", "WenQuanYi Micro Hei", sans-serif;
                font-size: 13px;
            }
            .navbar-nav>li>a {padding-top:10px;padding-bottom:0px;}
            .navbar-brand {height:40px;padding-top:10px;}
            .navbar {min-height:40px;}
            .navbar-toggle {margin-top:4px;margin-bottom:0px;}
            .navbar-default .navbar-nav>li>a {
                color: white;
            }
            .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover {
                color: #FF0000;
                background-color: transparent;
            }
            .navbar-default .navbar-nav>li>a:hover {
                color: #FF0000;
            }
            .navbar-default .navbar-nav>li>a:focus {
                color: white
            }
            .col-sm-offset-1 {
                margin-left: 15%;
            }
            .row {
                margin-top:-17px;
                margin-right: 0px;
                margin-left:0px;
            }
            .list-group-item {
                border: 0px;
            }
            .table>tbody>tr>td{
                border:0px;
            }
            .panel{
                border:0px;
            }
            .p-title:hover{
                color:#3cb5d8;
            }
            .ranking:hover{
                color:#3cb5d8;
            }
            .panel-title:hover{
                text-decoration:none;
                color:#3cb5d8;
            }
            .table-striped>tbody>tr:nth-of-type(odd) {
                background-color: #bcdedd8f;
            }
        </style>
    </head>
    <body>
        <div class="jumbotron" style="height:250px;margin-bottom:15px">     
            <nav class="navbar navbar-default navbar-fixed-top navbar-transparent">
                <div class="container-fluid" >
                <!-- Brand and toggle get grouped for better mobile display -->
    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li style="visibility:hidden;">NULL</li>
                            <li style="visibility:hidden;">NULL</li>
                            <li style="visibility:hidden;">NULL</li>
                            <li style="visibility:hidden;">NULL</li>
                            <li style="visibility:hidden;">NULL</li>
                            <li><a href="/resource/index">首页</a></li>
                            <li><a href="/project/index">项目</a></li>
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">资源</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/resource/video_page">视频</a></li>
                                    <li><a href="/resource/words_page">文档</a></li>
                                    <li><a href="/resource/image_page">图片</a></li>
                                </ul>
                            </li>
                            <li style="visibility:hidden;">NULL</li>
                            <li style="visibility:hidden;">NULL</li>
                            <li style="visibility:hidden;">NULL</li>
                            <li style="visibility:hidden;">NULL</li>
                            <li style="visibility:hidden;">NULL</li>
                            <li style="visibility:hidden;">NULL</li>
                            <li style="visibility:hidden;">NULL</li>
                            <li style="visibility:hidden;">NULL</li>
                            <li style="visibility:hidden;">NULL</li>
                            <li style="visibility:hidden;">NULL</li>
                            <li style="visibility:hidden;">NULL</li>
                            <li style="visibility:hidden;">NULL</li>
                            <li style="visibility:hidden;">NULL</li>
                            <li style="visibility:hidden;">NULL</li>
                            <li style="visibility:hidden;">NULL</li>
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle navbar-brand" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="padding-top: 1px;"><img alt="Brand" src="{{$user_info['headimage']}}" style="height: 38px;margin-top: 0px;border-radius:50%;-webkit-border-radius:50%;-moz-border-radius:50%;"></a>
                            <ul class="dropdown-menu">
                                @if(!empty($user_info['account']))
                                <li><a href="/myself/index">我的资源</a></li>
                                <li><a href="/myself/file_group">群组资源</a></li>
                                <li><a href="/myself/index">上传资源</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#" style="font-size:10px;"><font style="color:blue">LOST52WF</font>的个人主页</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/account/unsign">退出登录</a></li>
                                @elseif(empty($user_info['account']))
                                <li><a href="/account/register">请登录</a></li>
                                @endif
                            </ul>
                            </li>
                            <li><a href="/project/add">创建项目</a></li>
                        </ul><!--<ul class="nav navbar-nav">-->
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
                <div class="row">
                  <div class="panel panel-default" style="visibility:hidden;margin-bottom: 15px;">
                      <div class="panel-body">NULL</div>
                  </div>
                  <div class="panel panel-default" style="visibility:hidden;margin-bottom: 15px;">
                      <div class="panel-body">NULL</div>
                  </div>
                  <div class="col-md-6 col-md-offset-3">
                    <form method="get" action="/resource/result/video" target="block">
                          <div class="input-group" >
                              <input type="text" class="form-control"  name="searchcon" placeholder="Search" autoComplete="off" style="
                                    height: 44px;
                                        border-top-left-radius: 5px;
                                        border-bottom-left-radius: 5px;
                                ">
                                  <span class="input-group-btn">
                                   <button class="btn btn-default" style="width: 106px;height: 44px;background-color: #ffeb00;border: 0px;">
                                    <font style="font-size: 15px;font-weight: 7px;">搜索</font>
                                    </button>
                                  </span>
                          </div><!-- /input-group -->
                    </form>
                  </div>
                </div><!--<div class="row">-->
        </div><!--<div class="jumbotron" style="height:170px;margin-bottom:0px">-->
<!------------------------------------------导航栏结束-------------------------------------------->
<!-------------------------------------------轮播图------------------------------------------------>
        <div class="content">
            <div class="row animated fadeInUp" style="background-color: white">
            <!---------------------------热门项目--------------------------->
            <div class="row" style="margin-top: 20px;">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-body" style="padding-left: 0px;">
                            <b style="font-size: 16px;">热门项目</b>
                        </div>
                    </div>
                        @foreach($pop as $v)
                        <a href="/project/item/{{$v->project_id}}" target="_blank" style="color:#333;">
                        <div class="col-sm-2" style="width:190px;margin-left:0px;padding-left:0px;padding-right: 20px;">
                            <div class="thumbnail" style="height: 160px;">
                                <img src="{{$v->picture_url}}" alt="图片" style="height: 100px;width: 185px;">
                                <p style="margin-bottom:0px;margin-top:6px;" class="p-title">
                                    <b style="font-weight:500;font-size: 15px;">{{$v->title}}</b>
                                </p>
                                <div class="pull-left" style="color: grey;font-size:13px;">
                                    <span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
                                    {{$v->click}}
                                </div>
                                <div class="pull-right" style="color: grey;font-size:13px;">
                                    <span class="fa fa-calendar-o" aria-hidden="true"></span>
                                    {{substr(date("Y/m/d",$v->upload_time),2,9)}}
                                </div>  
                            </div>
                        </div>
                        </a>
                        @endforeach
                </div>
            </div> <!--<div class="row">-->
<!-----------------------------------------最新项目--------------------------------------------->
            <div class="row" style="margin-top: 20px;">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-body" style="padding-left: 0px;">
                            <b style="font-size: 16px;">最新项目</b>
                        </div>
                    </div>
                        @foreach($data as $v)
                        <a href="/project/item/{{$v->project_id}}" target="_blank" style="color:#333;">
                        <div class="col-sm-2" style="width:190px;margin-left:0px;padding-left:0px;padding-right: 20px;">
                            <div class="thumbnail" style="height: 160px;">
                                <img src="{{$v->picture_url}}" alt="图片" style="height: 100px;width: 185px;">
                                <p style="margin-bottom:0px;margin-top:6px;" class="p-title">
                                    <b style="font-weight:500;font-size: 15px;">{{$v->title}}</b>
                                </p>
                                <div class="pull-left" style="color: grey;font-size:13px;">
                                    <span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
                                    {{$v->click}}
                                </div>
                                <div class="pull-right" style="color: grey;font-size:13px;">
                                    <span class="fa fa-calendar-o" aria-hidden="true"></span>
                                    {{substr(date("Y/m/d",$v->upload_time),2,9)}}
                                </div>  
                            </div>
                        </div>
                        </a>
                        @endforeach
                </div>
            </div> <!--<div class="row">-->
            </div><!--<div class="row animated fadeInUp">-->
        </div><!--<div class="content">-->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/static/showingmap/js/velocity.js"></script>
    <script src="/static/showingmap/js/shutter.js"></script>
  </body>
  <script type="text/javascript">
$(function () {
    $(".dropdown").mouseover(function () {
        $(this).addClass("open");
    });

    $(".dropdown").mouseleave(function(){
        $(this).removeClass("open");
    });
/**************************************************/
    $('.shutter').shutter({
        shutterW: 480, // 容器宽度
        shutterH: 240, // 容器高度
        isAutoPlay: true, // 是否自动播放
        playInterval: 3000, // 自动播放时间
        curDisplay: 3, // 当前显示页
        fullPage: false // 是否全屏展示
    });

})
</script>
</html>