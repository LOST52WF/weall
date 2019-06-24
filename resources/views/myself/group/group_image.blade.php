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
            .col-md-offset-2 {
                margin-left: 12%;
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
        </style>
    </head>
    <body>
        <div class="jumbotron" style="height:170px;margin-bottom:15px">     
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
                            <li><a href="#">项目</a></li>
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">资源</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">视频</a></li>
                                    <li><a href="#">文档</a></li>
                                    <li><a href="#">图片</a></li>
                                    <li><a href="#">其他</a></li>
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
                                <li><a href="myself/file_group">群组资源</a></li>
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
                            <li><a href="#">消息</a></li>
                            <li><a href="#">分享</a></li>
                            <li><a href="#">收藏夹</a></li>
                        </ul><!--<ul class="nav navbar-nav">-->
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
                <div class="row">
                  <div class="panel panel-default" style="visibility:hidden;margin-bottom: 15px;">
                      <div class="panel-body">NULL</div>
                  </div>
                  <div class="col-md-3 col-md-offset-7">
                    <form method="get" action="/resource/result/video" target="block">
                          <div class="input-group" style="opacity:0.8;">
                              <input type="text" class="form-control"  name="searchcon" placeholder="Search" autoComplete="off">
                                  <span class="input-group-btn">
                                   <button class="btn btn-default" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                  </span>
                          </div><!-- /input-group -->
                    </form>
                  </div>
                </div><!--<div class="row">-->
        </div><!--<div class="jumbotron" style="height:170px;margin-bottom:0px">-->
<!------------------------------------------导航栏结束-------------------------------------------->
<!-------------------------------------------主体部分--------------------------------------------->
        <div class="content" style="background-color: white">
            <div class="row animated fadeInUp">
                <div class="row">
                    <div class="col-md-9 col-md-offset-1"> 
                        <div class="panel panel-default" style="margin-top: 20px; margin-left: 45px;">
                            <div class="panel-body" style="padding-bottom: 0px;">
                                <div class="data_box">
                                    <ul>
                                        <li><img class="data-img" src="{{$data->picture}}" style="width: 960px;" /></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-footer" style="margin-left: 15px;width: 960px;">
                                <div class="row" style="margin-bottom: 10px;margin-top:0px;">
                                    <div class="pull-left" style="font-size:30px;font-weight:5px;">
                                        {{$data->title}}
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 0px;">
                                    <div class="col-md-5" style="padding-left:0px;">
                                        <p>发布时间：{{date("Y-m-d H:i",$data->upload_time)}}</p>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 0px;">
                                    <div class="col-md-2 pull-left" style="padding-left: 0px;">
                                        <p>点击次数：{{$data->click}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
<!-------------------------------------------主体结束--------------------------------------------->
<!---------------------------------------------结束----------------------------------------------->
            </div><!--<div class="row animated fadeInUp">-->
        </div><!--<div class="content">-->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/static/imageplayer/js/sinlar.js"></script>

  </body>
</html>