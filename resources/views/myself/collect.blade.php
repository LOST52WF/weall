<!doctype html>
<html lang="en" class="fixed">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>个人中心</title>
    <link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/bootstrap-3.3.4.css">
    <link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
    <link rel="stylesheet" href="/static/myself/vendor/animate.css/animate.css">
    <link rel="stylesheet" href="/static/myself/vendor/toastr/toastr.min.css">
    <link rel="stylesheet" href="/static/myself/vendor/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="/static/myself/stylesheets/css/style.css">
     <style type="text/css">
        .navbar{
            background: #004E90;    
            font-family:Microsoft YaHei,'黑体' , Tahoma;
            font-weight:525;
            border-radius: 0;
            margin:0;padding:0;
            }
      .navbar-default .navbar-brand {
            color: #eee;
            }
      .navbar-default .navbar-nav>li>a {
            color: #dff0d8;
            font-size: 16px;
            }
      .panel .panel-content {
            padding: 12px;
            border-radius: 4px;
            }

    </style>
</head>

<body>
<div class="wrap">
@extends('myself.index.navbar')    <!--头部导航栏-->
    <div class="page-body">
        <div class="left-sidebar">
            <div class="left-sidebar-header">
                <div class="left-sidebar-title">menu</div>
                <div class="left-sidebar-toggle c-hamburger c-hamburger--htla hidden-xs" data-toggle-class="left-sidebar-collapsed" data-target="html">
                    <span></span>
                </div>
            </div>
            <div id="left-nav" class="nano">
                <div class="nano-content">
                    <nav>
                        <ul class="nav" id="main-nav">
                            <li class="active-item"><a href="index"><i class="fa fa-home" aria-hidden="true"></i><span>个人主页</span></a></li>
                            <li class="has-child-item close-item">
                                <a><i class="fa fa-cubes" aria-hidden="true"></i><span>学习资源</span></a>
                                <ul class="nav child-nav level-1">
                                    <li><a href="/myself/video">视频</a></li>
                                    <li><a href="/myself/words">文档</a></li>
                                    <li><a href="/myself/image">图片</a></li>
                                    <li><a href="/myself/collect">收藏</a></li>
                                </ul>
                            </li>
                            <li class="has-child-item close-item">
                                <a><i class="fa fa-pie-chart" aria-hidden="true"></i><span>学习群组</span></a>
                                <ul class="nav child-nav level-1">
                                    @foreach (session('group') as $v)
                                        <li><a href="/myself/group/{{$v->group_id}}">{{$v->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="has-child-item close-item">
                                <a><i class="fa fa-table" aria-hidden="true"></i><span>资源列表</span></a>
                                <ul class="nav child-nav level-1">
                                    <li><a href="/myself/file_user">个人资源</a></li>
                                    <li><a href="/myself/file_group">群组资源</a></li>
                                </ul>
                            </li>
                           <li class="has-child-item close-item">
                                <a><i class="fa fa-check-square-o" aria-hidden="true"></i><span>审核</span></a>
                                <ul class="nav child-nav level-1">
                                    <li><a href="/myself/checklist">资源审核</a></li>
                                    <li><a href="/myself/numberclick">申请审核</a></li>
                                </ul>
                            </li>
                            <li class="has-child-item close-item">
                                <a><i class="fa fa-cog" aria-hidden="true"></i><span>设置</span></a>
                                <ul class="nav child-nav level-1">
                                    <li><a href="/myself/set/info">个人资料</a></li>
                                    <li class="has-child-item close-item">
                                        <a id="groupset">群组设置</a>
                                        <ul class="nav child-nav level-2 " id="groupsetlist">
                                        </ul>
                                    </li>
                                    <li><a href="/myself/add/group">创建群组</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="content-header" style="background-color:#cccccc;">
                <div class="leftside-content-header">
                    <ul class="breadcrumbs">
                        <li><i class="fa fa-cubes" aria-hidden="true"></i><a href="#">学习资源</a></li>
                        <li><a>收藏</a></li>
                    </ul>
                </div>
            </div>
                @if($page==0)
                    <div class="row">
                        <div class="col-md-2 col-md-offset-5"><h3 style="color:#003366;">您尚未上传资源</h3></div>
                    </div>
                @elseif($page!=0)
                    <div class="row">
                        @foreach ($data as $v)
                        <div class="col-sm-4 col-md-3">
                            <div class="thumbnail" >
                                <img src="{{ $v->picture_url }}" alt="resources" style="width: 240px;height: 135px" >
                                <div class="caption">
                                    <h3>{{ $v->title }}</h3>
                                    <p>点击次数：{{ $v->click }}次</p>
                                    <p>上传时间：{{date("Y-m-d H:i",$v->upload_time)}}</p>
                                    <p>
                                        <a href="/share/{{$v->type}}/{{$v->resource_id}}" class="btn btn-primary" target="_blank" role="button">播放</a>
                                        <a href="#" class="btn btn-default" role="button">删除</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @for($i=count($data)+1;$i< 9; $i++)
                        <div class="col-sm-4 col-md-3">
                            <div class="thumbnail"  style="visibility:hidden;">
                                <img src="/uploads/videopage/null.jpg" alt="resources" style="width: 240px;height: 135px"  >
                                <div class="caption">
                                    <h3>NULL</h3>
                                    <p>点击次数：NULL次</p>
                                    <p>上传时间：NULL</p>
                                    <p><a href="#" class="btn btn-primary" target="_blank" role="button">播放</a> <a href="#" class="btn btn-default" role="button">删除</a></p>
                                </div>
                            </div>
                        </div>
                        @endfor
                @endif
        </div>
<!---------------------------------------页码----------------------------------------------->
                @if($page!=0)
                <div class="row"  > 
                <div class="text-center ">
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-lg">
                <!----------上一页设置---------->
                        @if($current==1)
                        <li class="disabled">
                            <a href="#" disabled="ture" aria-label="Previous" style="pointer-events:none;cursor:not-allowed;">
                            上一页
                            </a>
                        </li>
                        @else
                        <li>
                            <a href="/myself/video/{{$current-1}}" aria-label="Previous">
                            上一页
                            </a>
                        </li>
                        @endif
                <!----------中间页设置---------->
                        @if($current <= 4)
                            @for($i=1;$i<=7;$i++)
                                @if($i==$current&&$i<=$page)
                                <li><a href="/myself/video/{{$i}}" style="color:red"><b>{{$i}}</b></a></li>
                                @elseif($i!=$current&&$i<=$page)
                                <li><a href="/myself/video/{{$i}}">{{$i}}</a></li>
                                @endif
                                @if($i>$page)
                                <li class="disabled"><a disabled="ture" href="/myself/video/{{$i}}" style="pointer-events:none;cursor:not-allowed;">{{$i}}</a></li>
                                @endif
                            @endfor
                        @elseif($current > 4)
                            @for($i=$current-3;$i<=$current+3;$i++)
                                @if($i==$current&&$i<=$page)
                                <li><a href="/myself/video/{{$i}}" style="color:red"><b>{{$i}}</b></a></li>
                                @elseif($i!=$current&&$i<=$page)
                                <li><a href="/myself/video/{{$i}}">{{$i}}</a></li>
                                @endif
                                @if($i>$page)
                                <li class="disabled"><a disabled="ture" href="/myself/video/{{$i}}" style="pointer-events:none;cursor:not-allowed;">{{$i}}</a></li>
                                @endif
                            @endfor
                        @endif
                <!----------中间页设置结束---------->
                <!----------下一页设置---------->
                        @if($current==$page)
                        <li class="disabled">
                            <a href="#" disabled="ture" aria-label="Next" style="pointer-events:none;cursor:not-allowed;">
                            下一页
                            </a>
                        </li>
                        @else
                        <li>
                            <a href="/myself/video/{{$current+1}}" aria-label="Previous">
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
<!---------------------------------------页码设置结束--------------------------------------------->
<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script src="/static/myself/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/static/myself/vendor/nano-scroller/nano-scroller.js"></script>
<script src="/static/myself/javascripts/template-script.min.js"></script>
<script src="/static/myself/javascripts/template-init.min.js"></script>
<script src="/static/myself/vendor/toastr/toastr.min.js"></script>
<script src="/static/myself/vendor/chart-js/chart.min.js"></script>
<script src="/static/myself/javascripts/jquery.form.js"></script>
<script src="/static/myself/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script type="text/javascript">
 $(function(){  
    var num=1;
    $("#groupset").click(function(){
        if(num==1){
            $.ajax({
                type: "GET",
                url: "/myself/groupset",
                success: function(data){
                    //alert(data);
                    var ob = JSON.parse(data);
                    //alert(ob[0].name+ob[1].name);
                    var str = '';
                    for (var i = 0, len = ob.length; i < len; i++) {
                        //console.log(t_files[i]);
                        str += "<li><a href='/myself/set/group/"+ob[i].group_id+"'>"+ob[i].name+"</a></li>";
                                                                        };     
                    document.getElementById('groupsetlist').innerHTML = str;
                      }
            });
        num=2;
        }else{
            num=1;
        }
    });
})
</script>
</body>

</html>
