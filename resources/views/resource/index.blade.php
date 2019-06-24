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
            .col-sm-offset-2{
                margin-left: 10%;
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
                            <li><a href="/">首页</a></li>
                            <li><a href="/project/index">项目</a></li>
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">资源</a>
                                <ul class="dropdown-menu">
                                    <li><a href="/resource/video_page">视频</a></li>
                                    <li><a href="/resource/words_page">文档</a></li>
                                    <li><a href="/resource/image_page">图片</a></li>
                                </ul>
                            </li>
                            <li><a href="/study/group">学习小组</a></li>
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
                                <li role="separator" class="divider"></li>
                                <li><a href="#" style="font-size:10px;"><font style="color:blue">LOST52WF</font>的个人主页</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/account/unsign">退出登录</a></li>
                                @elseif(empty($user_info['account']))
                                <li><a href="/account/register">请登录</a></li>
                                @endif
                            </ul>
                            </li>
                            <li><a href="/bbs/index/1">论坛</a></li>
                            <li><a href="/myself/file_user">收藏</a></li>
                            <li><a href="/myself/set/info">设置</a></li>
                        </ul><!--<ul class="nav navbar-nav">-->
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
                <div class="row">
                  <div class="panel panel-default" style="visibility:hidden;margin-bottom: 15px;">
                      <div class="panel-body">NULL</div>
                  </div>
                  <div class="col-md-3 col-md-offset-7">
                    <form method="get" action="/resource/result/video" target="_blank">
                          <div class="input-group" style="opacity:0.8;">
                              <input type="text" class="form-control"  name="searchcon" placeholder="Search" autoComplete="off">
                                  <span class="input-group-btn">
                                   <button class="btn btn-default" style="height: 34px;"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                  </span>
                          </div><!-- /input-group -->
                    </form>
                  </div>
                </div><!--<div class="row">-->
        </div><!--<div class="jumbotron" style="height:170px;margin-bottom:0px">-->
<!-------------------------------------------导航栏结束-------------------------------------------->
<!-------------------------------------------轮播图------------------------------------------------>
        <div class="content">
            <div class="row animated fadeInUp" style="background-color: white">
                <div class="row" style="margin-left:25px;">
                    <div class="col-sm-5 col-sm-offset-2" style="padding: 0px;">
                        <div class="shutter" style="border-radius:0px;margin-bottom: 30px;width: 100%;">
                            <div class="shutter-img">
                                @foreach($show as $v)
                                <a href="/share/{{$v->type}}/{{$v->resource_id}}" data-shutter-title="{{$v->title}}" target="_blank">
                                    <img src="{{$v->picture_url}}"  alt="#">
                                </a>
                                @endforeach
                            </div>
                            <ul class="shutter-btn">
                                <li class="prev"></li>
                                <li class="next"></li>
                            </ul>
                            <div class="shutter-desc">
                                <p>一周热门</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5" style="margin-top:50px;margin-left:0px;padding-left: 0px;">
                        @foreach($pop as $p)
                        <div class="col-sm-2" style="width:205px;margin-left:0px;padding-left:0px;">
                            <a href="/project/item/{{$p->project_id}}" target="_blank" style="color:#333;text-decoration: none;">
                            <div class="thumbnail" style="border:0px;margin:0px;padding: 0px;">
                                <img src="{{$p->picture_url}}" alt="图片" style="height: 100px;width: 185px;">
                                <p style="margin-bottom:6px;margin-top:3px;" class="p-title">
                                    <b style="font-weight:500;">【<font style="color:#900101;">热门项目</font>】{{$p->title}}</b>
                                </p>
                            </div>
                            </a>
                        </div>
                        
                        @endforeach
                    </div>
                </div>
<!----------------------------------------------视频--------------------------------------------------->
                <div class="row">
                    <div class="col-md-7 col-md-offset-2">
                        <div class="panel panel-default" style="margin-bottom:0px;border:0px;-webkit-box-shadow:none;box-shadow:none;">
                            <div class="panel-body" style="padding-bottom:5px;padding-left:5px;">
                                <p style="margin:0px;color: #131389;font-size:24px;">
                                    <i class="fa fa-file-movie-o" aria-hidden="true"></i>
                                    &nbsp;
                                    视频
                                    <button class="btn btn-default btn-xs pull-right" style="margin-top: 10px;width: 60px;"><a href="/resource/video_page">更多>></a></button>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="panel panel-default" style="margin-bottom:0px;border:0px;-webkit-box-shadow:none;box-shadow:none;">
                            <div class="panel-body" style="padding-bottom:5px;padding-left:5px;">
                            <p style="margin-left:26px;margin-top:0px;margin-bottom:0px;font-size:20px;">
                                热门视频
                            </p>
                            </div>
                        </div>
                    </div>            
                </div>
                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-md-8 col-md-offset-2" style="margin-right:-83px;">
                        @foreach($data['video'] as $v)
                        <a href="/share/video/{{$v->resource_id}}" target="_blank" style="color:#333;">
                        <div class="col-md-2" style="width:205px;margin-left:0px;padding-left:0px;">
                            <div class="thumbnail" style="border:0px">
                                <img src="{{$v->picture_url}}" alt="图片" style="height: 100px;width: 185px;">
                                <p style="margin-bottom:0px;margin-top:6px;" class="p-title">
                                    <b style="font-weight:500;">{{$v->title}}</b>
                                </p>
                                <div class="pull-left" style="color: grey">
                                    <span class="fa fa-user" aria-hidden="true"></span>
                                    {{$v->account}}
                                </div>
                                <div class="pull-right" style="color: grey">
                                    <span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
                                    {{$v->click}}
                                </div>
                            </div>
                        </div>
                        </a>
                        @endforeach
                    </div><!--<div class="col-md-7 col-md-offset-2">-->
                    <div class="col-md-2">
                        <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <!-- Table -->
                            <table class="table" style="width:0;border:0px;">
                            <?php $i=1;  ?>
                            @foreach($rank['video'] as $v)
                                <tr>
                                    @if($i==1)  
                                    <td><span class="badge" style="background-color:#ff6700">{{$i}}</span></td>                         
                                    @elseif($i==2)
                                    <td><span class="badge" style="background-color:#471b7a">{{$i}}</span></td>
                                    @elseif($i==3)
                                    <td><span class="badge" style="background-color:#3c78d8">{{$i}}</span></td>
                                    @else
                                    <td><span class="badge">{{$i}}</span></td>
                                    @endif
                                    <td>
                                        <a href="/share/video/{{$v->resource_id}}" target="_blank" style="font-size:11px;margin:0px;text-decoration:none;color:#333333e8;"><font class="ranking">{{$v->title}}</font>
                                        </a>
                                    </td>
                                </tr>
                            <?php $i++;  ?>
                            @endforeach
                            </table>
                        </div>
                    </div>
                </div><!--</div class="row">-->
<!--------------------------------------------项目推荐------------------------------------------------->
                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-md-9 col-md-offset-2" style="margin-right:-83px;">
                        <div class="panel panel-default" style="margin-bottom: 0px;">
                            <div class="panel-heading" style="padding-left:2px;background-color:white;">
                                <b style="color: #131389;">优秀项目推荐</b>
                            </div>
                            <div class="panel-body" style="padding-left: 0px;padding-bottom: 0px;">
                                <div class="row">
                                    <div class="col-md-2" style="width:205px;margin-left:0px;padding:0px;">
                                        <a href="/project/item/{{$link[0]->project_id}}" target="_blank" style="color:#333;">
                                            <div class="thumbnail" style="border:0px;margin-bottom: 0px;margin-top: 5px;">
                                                <img src="{{$link[0]->picture_url}}" alt="图片" style="height: 100px;width: 185px;">
                                                <div class="pull-left">
                                                    <font>【推荐】{{$link[0]->title}}</font>
                                                </div>
                                                <div class="pull-right" style="color: grey">
                                                    <span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
                                                    {{$link[0]->click}}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-1" style="margin-top: 5px;width: 30px;margin-right: 30px;">
                                        <div class="well" style="width:20px;background-color: #0b79bd;margin:0px;padding-left: 4px;padding-top: 0px;padding-bottom: 0px;padding-right: 19px;border-radius:0px;">
                                            <b><font style="font-size: 14px;color:white">相关资源推荐</font></b>
                                        </div>
                                    </div>
                                    @foreach($link[0]->getlink as $v)
                                    <div class="col-md-2" style="width:205px;margin-left:0px;padding-left:0px;">
                                        @if($v->type=='video')
                                        <a href="/share/video/{{$v->resource_id}}" target="_blank" style="color:#333;">
                                        @elseif($v->type=='words')
                                        <a href="/share/words/{{$v->resource_id}}" target="_blank" style="color:#333;">
                                        @elseif($v->type=='image')
                                        <a href="/share/image/{{$v->resource_id}}" target="_blank" style="color:#333;">
                                        @endif
                                            <div class="thumbnail" style="border:0px;margin-bottom: 0px;margin-top: 5px;">
                                                <img src="{{$v->picture_url}}" alt="图片" style="height: 100px;width: 185px;">
                                                <div class="pull-left">
                                                    <font>{{$v->title}}</font>
                                                </div>
                                                <div class="pull-right" style="color: grey">
                                                    <span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
                                                    {{$v->click}}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach
                                    <div class="col-md-1" style="margin-left:0px;padding-left:0px;">
                                        <a href="/project/index" target="_blank">
                                            <btton class="btn btn-primary" style="margin-top: 45px;">更多
                                                <span class="fa fa-angle-double-right" aria-hidden="true">
                                                </span>
                                            </btton>
                                        </a>
                                    </div>
                                </div>
                            </div><!--<div class="panel-body">-->
                        </div><!--<div class="panel panel-default" style="margin-bottom: 0px;">-->
                    </div><!--<div class="col-md-9 col-md-offset-2" style="margin-right:-83px;">-->
                </div><!--<div class="row" style="margin-bottom: 30px;">-->
<!--------------------------------------------推荐结束------------------------------------------------->
<!----------------------------------------------文档--------------------------------------------------->
               <div class="row">
                    <div class="col-md-7 col-md-offset-2">
                        <div class="panel panel-default" style="margin-bottom:0px;border:0px;-webkit-box-shadow:none;box-shadow:none;">
                            <div class="panel-body" style="padding-bottom:5px;padding-left:5px;">
                            <p style="margin:0px;color: #131389;font-size:24px;">
                                <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                &nbsp;
                                文档
                                <button class="btn btn-default btn-xs pull-right" style="margin-top: 10px;width: 60px;"><a href="/resource/words_page">更多>></a></button>
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="panel panel-default" style="margin-bottom:0px;border:0px;-webkit-box-shadow:none;box-shadow:none;">
                            <div class="panel-body" style="padding-bottom:5px;padding-left:5px;">
                            <p style="margin-left:26px;margin-top:0px;margin-bottom:0px;font-size:20px;">
                                热门文档
                            </p>
                            </div>
                        </div>
                    </div>            
                </div>
                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-md-8 col-md-offset-2" style="margin-right:-83px;">
                        @foreach($data['words'] as $v)
                        <a href="/share/words/{{$v->resource_id}}" target="_blank" style="color:#333;">
                        <div class="col-md-2" style="width:205px;margin-left:0px;padding-left:0px;">
                            <div class="thumbnail" style="border:0px">
                                <img src="{{$v->picture_url}}" alt="图片" style="height: 100px;width: 185px;">
                                <p style="margin-bottom:0px;margin-top:6px;" class="p-title">
                                    <b style="font-weight:500;">{{$v->title}}</b>
                                </p>
                                <div class="pull-left" style="color: grey">
                                    <span class="fa fa-user" aria-hidden="true"></span>
                                    {{$v->account}}
                                </div>
                                <div class="pull-right" style="color: grey">
                                    <span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
                                    {{$v->click}}
                                </div>
                            </div>
                        </div>
                        </a>
                        @endforeach
                    </div><!--<div class="col-md-7 col-md-offset-2">-->
                    <div class="col-md-2">
                        <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <!-- Table -->
                            <table class="table" style="width:0;border:0px;">
                            <?php $i=1;  ?>
                            @foreach($rank['words'] as $w)
                                <tr>
                                    @if($i==1)  
                                    <td><span class="badge" style="background-color:#ff6700">{{$i}}</span></td>                         
                                    @elseif($i==2)
                                    <td><span class="badge" style="background-color:#471b7a">{{$i}}</span></td>
                                    @elseif($i==3)
                                    <td><span class="badge" style="background-color:#3c78d8">{{$i}}</span></td>
                                    @else
                                    <td><span class="badge">{{$i}}</span></td>
                                    @endif
                                    <td>
                                        <a href="/share/words/{{$w->resource_id}}" target="_blank" style="font-size:11px;margin:0px;text-decoration:none;color:#333333e8;"><font class="ranking">{{$w->title}}</font>
                                        </a>
                                    </td>
                                </tr>
                            <?php $i++;  ?>
                            @endforeach
                            </table>
                        </div>
                    </div>
                </div><!--</div class="row">-->
<!--------------------------------------------项目推荐------------------------------------------------->
                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-md-9 col-md-offset-2" style="margin-right:-83px;">
                        <div class="panel panel-default" style="margin-bottom: 0px;">
                            <div class="panel-heading" style="padding-left:2px;background-color:white;">
                                <b style="color: #131389;">优秀项目推荐</b>
                            </div>
                            <div class="panel-body" style="padding-left: 0px;padding-bottom: 0px;">
                                <div class="row">
                                    <div class="col-md-2" style="width:205px;margin-left:0px;padding:0px;">
                                        <a href="/project/item/{{$link[1]->project_id}}" target="_blank" style="color:#333;">
                                            <div class="thumbnail" style="border:0px;margin-bottom: 0px;margin-top: 5px;">
                                                <img src="{{$link[1]->picture_url}}" alt="图片" style="height: 100px;width: 185px;">
                                                <div class="pull-left">
                                                    <font>【推荐】{{$link[1]->title}}</font>
                                                </div>
                                                <div class="pull-right" style="color: grey">
                                                    <span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
                                                    {{$link[1]->click}}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-1" style="margin-top: 5px;width: 30px;margin-right: 30px;">
                                        <div class="well" style="width:20px;background-color: #0b79bd;margin:0px;padding-left: 4px;padding-top: 0px;padding-bottom: 0px;padding-right: 19px;border-radius:0px;">
                                            <b><font style="font-size: 14px;color:white">相关资源推荐</font></b>
                                        </div>
                                    </div>
                                    @foreach($link[1]->getlink as $v)
                                    <div class="col-md-2" style="width:205px;margin-left:0px;padding-left:0px;">
                                        @if($v->type=='video')
                                        <a href="/share/video/{{$v->resource_id}}" target="_blank" style="color:#333;">
                                        @elseif($v->type=='words')
                                        <a href="/share/words/{{$v->resource_id}}" target="_blank" style="color:#333;">
                                        @elseif($v->type=='image')
                                        <a href="/share/image/{{$v->resource_id}}" target="_blank" style="color:#333;">
                                        @endif
                                            <div class="thumbnail" style="border:0px;margin-bottom: 0px;margin-top: 5px;">
                                                <img src="{{$v->picture_url}}" alt="图片" style="height: 100px;width: 185px;">
                                                <div class="pull-left">
                                                    <font>{{$v->title}}</font>
                                                </div>
                                                <div class="pull-right" style="color: grey">
                                                    <span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
                                                    {{$v->click}}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach
                                    <div class="col-md-1" style="margin-left:0px;padding-left:0px;">
                                        <a href="/project/index" target="_blank">
                                            <btton class="btn btn-primary" style="margin-top: 45px;">更多
                                                <span class="fa fa-angle-double-right" aria-hidden="true">
                                                </span>
                                            </btton>
                                        </a>
                                    </div>
                                </div>
                            </div><!--<div class="panel-body">-->
                        </div><!--<div class="panel panel-default" style="margin-bottom: 0px;">-->
                    </div><!--<div class="col-md-9 col-md-offset-2" style="margin-right:-83px;">-->
                </div><!--<div class="row" style="margin-bottom: 30px;">-->
<!--------------------------------------------推荐结束------------------------------------------------->
<!----------------------------------------------图片--------------------------------------------------->
                <div class="row">
                    <div class="col-md-7 col-md-offset-2">
                        <div class="panel panel-default" style="margin-bottom:0px;border:0px;-webkit-box-shadow:none;box-shadow:none;">
                            <div class="panel-body" style="padding-bottom:5px;padding-left:5px;">
                            <p style="margin:0px;color: #131389;font-size:24px;">
                                <i class="fa fa-image" aria-hidden="true"></i>
                                &nbsp;
                                图片
                                <button class="btn btn-default btn-xs pull-right" style="margin-top: 10px;width: 60px;"><a href="/resource/image_page">更多>></a></button>
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="panel panel-default" style="margin-bottom:0px;border:0px;-webkit-box-shadow:none;box-shadow:none;">
                            <div class="panel-body" style="padding-bottom:5px;padding-left:5px;">
                            <p style="margin-left:26px;margin-top:0px;margin-bottom:0px;font-size:20px;">
                                热门图片
                            </p>
                            </div>
                        </div>
                    </div>            
                </div>
                <div class="row" style="margin-bottom: 30px;">
                    <div class="col-md-8 col-md-offset-2" style="margin-right:-83px;">
                        @foreach($data['image'] as $v)
                        <a href="/share/image/{{$v->resource_id}}" target="_blank" style="color:#333;">
                        <div class="col-md-2" style="width:205px;margin-left:0px;padding-left:0px;">
                            <div class="thumbnail" style="border:0px">
                                <img src="{{$v->picture_url}}" alt="图片" style="height: 100px;width: 185px;">
                                <p style="margin-bottom:0px;margin-top:6px;" class="p-title">
                                    <b style="font-weight:500;">{{$v->title}}</b>
                                </p>
                                <div class="pull-left" style="color: grey">
                                    <span class="fa fa-user" aria-hidden="true"></span>
                                    {{$v->account}}
                                </div>
                                <div class="pull-right" style="color: grey">
                                    <span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
                                    {{$v->click}}
                                </div>
                            </div>
                        </div>
                        </a>
                        @endforeach
                    </div><!--<div class="col-md-7 col-md-offset-2">-->
                    <div class="col-md-2">
                        <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <!-- Table -->
                            <table class="table" style="width:0;border:0px;">
                            <?php $i=1;  ?>
                            @foreach($rank['image'] as $m)
                                <tr>
                                    @if($i==1)  
                                    <td><span class="badge" style="background-color:#ff6700">{{$i}}</span></td>                         
                                    @elseif($i==2)
                                    <td><span class="badge" style="background-color:#471b7a">{{$i}}</span></td>
                                    @elseif($i==3)
                                    <td><span class="badge" style="background-color:#3c78d8">{{$i}}</span></td>
                                    @else
                                    <td><span class="badge">{{$i}}</span></td>
                                    @endif
                                    <td>
                                        <a href="/share/image/{{$m->resource_id}}" target="_blank" style="font-size:11px;margin:0px;text-decoration:none;color:#333333e8;"><font class="ranking">{{$m->title}}</font>
                                        </a>
                                    </td>
                                </tr>
                            <?php $i++;  ?> 
                            @endforeach
                            </table>
                        </div>
                    </div>
                </div><!--</div class="row">-->
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p style="text-align: center;color:#808080b5;">底部</p>
                            <p style="text-align: center;color:#808080b5;font-size: 17px;">
                                weall.hd-Start Your Journey Of Learning
                            </p>
                        </div>
                    </div>
                </div>
<!----------------------------------------------其他--------------------------------------------------->
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