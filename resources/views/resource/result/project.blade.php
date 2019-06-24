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
        <link rel="stylesheet" href="/static/searchnav/css/xq_navbar.css"/>
        <link rel="stylesheet" href="/static/searchnav/css/xq.css"/>
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
            .xq_navbar{
                background-color: rgb(255, 0, 0);
            }
            .xq_navli{
                color:#333;
                font-size:15px;
                font-weight: 4px;
            }
            .page-header{
                border-bottom: 1px solid #bbb5b5bf;
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
                            <li><a href="/bbs/index/1">上传</a></li>
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
                      <form action="/resource/result/image" method="get" target="_blank">
                          <div class="input-group" style="opacity:0.8;">
                              <input type="text" class="form-control" name="searchcon" placeholder="Search" autoComplete="off">
                                  <span class="input-group-btn">
                                   <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                  </span>
                          </div><!-- /input-group -->
                      </form>
                  </div>
                </div><!--<div class="row">-->
        </div><!--<div class="jumbotron" style="height:170px;margin-bottom:0px">-->
<!------------------------------------------导航栏结束-------------------------------------------->
        <div class="content">
            <div class="row animated fadeInUp" style="background-color: white;">
                <div class="row">
                    <div class="col-md-8">
                    <div class="xq_bag" id="bar3" style="margin-top: 17px; margin-right:0px;margin-left:67px;margin-bottom:0px;">
                        <ul class="xq_navbar">
                            <li class="xq_navli">
                                <a href="/resource/result/video?searchcon={{$arr['searchcon']}}&order=upload_time&page=1" style="color:#333">视频
                                </a>
                            </li>
                            <li class="xq_navli">
                                <a href="/resource/result/words?searchcon={{$arr['searchcon']}}&order=upload_time&page=1" style="color:#333">文档
                                </a>
                            </li>
                            <li class="xq_navli">
                                <a href="/resource/result/image?searchcon={{$arr['searchcon']}}&order=upload_time&page=1" style="color:#333">图片
                                </a>
                            </li>
                            <li class="xq_navli">
                                <a href="/resource/result/project?searchcon={{$arr['searchcon']}}&order=upload_time&page=1" style="color:#333">项目
                                </a>
                            </li>
                        </ul>
                    </div>
                    <h5 class="page-header" style="margin-top: 0px;margin-bottom: 0px;padding-bottom: 0px;margin-left: 66px;width: 1200px;border-bottom: 1px solid #bbb5b5bf;"></h5>
                    </div>
                </div><!--<div class="row">-->
                <div class="row" style=" margin-top: 0px; margin-left: 80px;">
                    <div class="row" style="margin-top: 15px;margin-left: 105px;">
                        <button class="btn btn-primary btn-xs" style="margin-top: 0px;width: 60px;border:0px;" >排序
                        </button>
                        &nbsp;&nbsp;
                        <button class="btn btn-default btn-xs" style="margin-top: 0px;width: 60px;border:0px;" onclick="pppqqq('time');">时间顺序
                        </button>
                        &nbsp;&nbsp;&nbsp;
                        <button class="btn btn-default btn-xs" style="margin-top: 0px;width: 60px;border:0px;" onclick="pppqqq('click');">点击量
                        </button>
                    </div>
                    <h5 class="page-header" style="margin-top: 8px;margin-bottom: 0px;padding-bottom: 0px;width: 1200px;border-bottom: 1px solid #bbb5b552;"></h5>
                </div>
<!--------------------------------------二级导航栏结束------------------------------------------->
                <div class="row" style="margin-top: 25px;margin-left: 80px;">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel">
                            <div class="panel-content">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>标题</th>
                                                <th>上传作者</th>
                                                <th>上传时间</th>
                                                <th>点击量</th>
                                                <th>详情链接</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if($info['cur']!=0)
                                            @foreach($data as $v)
                                            <tr>
                                                <td>{{$v->title}}</td>
                                                <td>{{$v->account}}</td>
                                                <td>{{date("Y-m-d H:i",$v->upload_time)}}</td>
                                                <td>{{$v->click}}</td>
                                                <td>                                           
                                                    <a href="/project/item/{{$v->id}}" target="_blank" style="text-decoration:none">
                                                        详情页面
                                                    </a>
                                                </td>
                                            </tr>
                                           
                                        @endforeach  
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @else 
                        <h4>无查询结果</h4>
                    @endif                      
                    </div>
                </div><!--<div class="row" style="margin-top: 25px;margin-left: 80px;">-->
<!------------------------------------------主体内容结束------------------------------------------------>
<!--------------------------------------------页码开始-------------------------------------------------->
                @if($info['pagecount']!=0)
                <div class="row"  > 
                <div class="text-center ">
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-lg">
                <!----------上一页设置---------->
                        @if($info['cur']==1)
                        <li class="disabled">
                            <a href="#" disabled="ture" aria-label="Previous" style="pointer-events:none;cursor:not-allowed;">
                            上一页
                            </a>
                        </li>
                        @else
                        <li>
                            <a href="/resource/result/image?searchcon={{$arr['searchcon']}}&order={{$arr['order']}}&page={{$info['cur']-1}}" aria-label="Previous">
                            上一页
                            </a>
                        </li>
                        @endif
                <!----------中间页设置---------->
                        @if($info['cur'] <= 4)
                            @for($i=1;$i<=7;$i++)
                                @if($i==$info['cur']&&$i<=$info['pagecount'])
                                <li>
                                    <a href="/resource/result/image?searchcon={{$arr['searchcon']}}&order={{$arr['order']}}&page={{$i}}" style="color:red">
                                        <b>{{$i}}</b>
                                    </a>
                                </li>
                                @elseif($i!=$info['cur']&&$i<=$info['pagecount'])
                                <li>
                                    <a href="/resource/result/image?searchcon={{$arr['searchcon']}}&order={{$arr['order']}}&page={{$i}}">
                                        {{$i}}
                                    </a>
                                </li>
                                @endif
                                @if($i>$info['pagecount'])
                                <li class="disabled">
                                    <a disabled="ture" href="/resource/result/image?searchcon={{$arr['searchcon']}}&order={{$arr['order']}}&page={{$i}}" style="pointer-events:none;cursor:not-allowed;">
                                        {{$i}}
                                    </a>
                                </li>
                                @endif
                            @endfor
                        @elseif($info['cur'] > 4)
                            @for($i=$info['cur']-3;$i<=$info['cur']+3;$i++)
                                @if($i==$info['cur']&&$i<=$info['pagecount'])
                                <li>
                                    <a href="/resource/result/image?searchcon={{$arr['searchcon']}}&order={{$arr['order']}}&page={{$i}}" style="color:red">
                                        <b>{{$i}}</b>
                                    </a>
                                </li>
                                @elseif($i!=$info['cur']&&$i<=$info['pagecount'])
                                <li>
                                    <a href="/resource/result/image?searchcon={{$arr['searchcon']}}&order={{$arr['order']}}&page={{$i}}">
                                        {{$i}}
                                    </a>
                                </li>
                                @endif
                                @if($i>$info['pagecount'])
                                <li class="disabled">
                                    <a disabled="ture" href="/resource/result/image?searchcon={{$arr['searchcon']}}&order={{$arr['order']}}&page={{$i}}" style="pointer-events:none;cursor:not-allowed;">
                                        {{$i}}
                                    </a>
                                </li>
                                @endif
                            @endfor
                        @endif
                <!----------中间页设置结束---------->
                <!----------下一页设置---------->
                        @if($info['cur']==$info['pagecount'])
                        <li class="disabled">
                            <a href="#" disabled="ture" aria-label="Next" style="pointer-events:none;cursor:not-allowed;">
                            下一页
                            </a>
                        </li>
                        @else
                        <li>
                            <a href="/resource/result/image?searchcon={{$arr['searchcon']}}&order={{$arr['order']}}&page={{$info['cur']+1}}" aria-label="Previous">
                            下一页
                            </a>
                        </li>
                        @endif
                <!----------下一页设置结束---------->
                    </ul>
                </nav>
                </div>
                </div>
                @endif
<!--------------------------------------------页码结束-------------------------------------------------->
            </div><!--<div class="row animated fadeInUp">-->
        </div><!--<div class="content">-->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/static/showingmap/js/velocity.js"></script>
    <script src="/static/showingmap/js/shutter.js"></script>
    <script src="/static/searchnav/js/xq_navbar.js"></script>

    <!-- 代码部分end -->
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
<script>
    $(function(){
        $("#bar3").xq_navbar({"type":"line","liwidth":"avg","bgcolor":"white"});
    });
</script>
<script type="text/javascript">
    function pppqqq(a){
        if(a=='time'){
            window.location.href="?searchcon={{$arr['searchcon']}}&order=upload_time&page=1"
        }else if(a=='click'){
            window.location.href="?searchcon={{$arr['searchcon']}}&order=click&page=1"
        }
    }
</script>

</html>