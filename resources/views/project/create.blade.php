<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>weall.hd</title>
        <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
        <link rel="stylesheet" type="text/css" href="/static/tools/css/timeline.css">
        <link rel="stylesheet" href="/static/select/css/citySelect.css">
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
            <div class="row animated fadeInUp" style="background-color: white" onsubmit="return gettag()">
                <div class="row" style="margin-top: 20px;">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default" style="height: 550px;">
                        <div class="panel-heading" style="background-color: #28a9da;"><h4>项目扩展</h4></div>
                        <div class="panel-body">
                        <form method="post" action="/project/item_upload" enctype="multipart/form-data" >
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">标题</label>
                                <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="标题" style="width: 426px;">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">文件上传</label>
                                <input type="file" name="project_file">
                                <p class="help-block">请以压缩包的形式上传</p>
                            </div>
                            <label for="info">内容简述</label><br>
                            <textarea name="text" id="info" rows="3" cols="5" style="height: 95px; width: 600px; margin: 0px;resize:none"  maxlength="200">
                            </textarea>
                            <br>
                            <label for="info">选择标签</label><br>
                            <div class="search" style="margin:0px;" >
                                <div class="citySelect">
                                    <span class="cityName" id="tag">项目类型</span>
                                    <i class="iconDown"></i>
                                    <i class="line"></i>
                                </div>
                                <div class="dropDown">
                                    <div class="dropProv">
                                        <ul class="dropProvUl dropUl"></ul>
                                    </div>
                                    <div class="dropCity">
                                        <ul class="dropCityUl dropUl"></ul>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <input type="hidden" name="project_id" value="{{$project_id}}">
                            <input type="hidden" name="tag" id="gettag" value="">
                            <button type="submit" class="btn btn-default">上传</button>
                        </form>
                        </div><!--<div class="panel-body">--->
                        </div><!--<div class="panel panel-default">-->
                    </div>
                </div>
            <!--------------------------------最新项目-------------------------------->
            </div><!--<div class="row animated fadeInUp">-->
        </div><!--<div class="content">-->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/static/select/js/citySelect.js"></script>
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

})
</script>
    <script>
        function gettag(){
            var tag = $("#tag").html();
            //alert(tag);
            //return false;
            $("#gettag").val(tag);
        }
    </script>
</html>