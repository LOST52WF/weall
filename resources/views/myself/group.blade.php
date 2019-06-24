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
                            <li class="active-item"><a href="/myself/index"><i class="fa fa-home" aria-hidden="true"></i><span>个人主页</span></a></li>
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
<!---content--->
<div class="content">
    <div class="content-header" style="background-color:#cccccc;">
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-pie-chart" aria-hidden="true"></i><a href="#">群组资源</a></li>
            </ul>
        </div>
    </div>
    <div class="row animated fadeInUp">
<!------------------------------文件列表------------------------------>
        <div class="col-sm-12 col-lg-9">
                <div class="row">
                        <div class="tabs mt-none">
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="active"><a href="#home" data-toggle="tab">视频</a></li>
                                    <li><a href="#profile" data-toggle="tab">文档</a></li>
                                    <li><a href="#messages" data-toggle="tab">图片</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="home">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                <tr>
                                                    <th>标题</th>
                                                    <th>上传者</th>
                                                    <th>上传时间</th>
                                                    <th>点击次数</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($file["video"] as $v )
                                                <tr>
                                                    <td><a href="/myself/group/video/{{$v->group_file_id}}" target="_blank">{{$v->title}}</td>
                                                    <td>{{$v->account}}</td>
                                                    <td>{{date("Y-m-d H:i",$v->upload_time)}}</td>
                                                    <td>{{$v->click}}</td>
                                                </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="3"></td>
                                                    <td><a href="/myself/file_group">更多内容>></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                <tr>
                                                    <th>标题</th>
                                                    <th>上传者</th>
                                                    <th>上传时间</th>
                                                    <th>点击次数</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($file["words"] as $v )
                                                <tr>
                                                    <td><a href="/myself/group/words/{{$v->group_file_id}}" target="_blank">{{$v->title}}</td>
                                                    <td>{{$v->account}}</td>
                                                    <td>{{date("Y-m-d H:i",$v->upload_time)}}</td>
                                                    <td>{{$v->click}}</td>
                                                </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="3"></td>
                                                    <td><a href="/myself/file_group">更多内容>></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="messages">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                <tr>
                                                    <th>标题</th>
                                                    <th>上传者</th>
                                                    <th>上传时间</th>
                                                    <th>点击次数</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($file["image"] as $v )
                                                <tr>
                                                    <td><a href="/myself/group/image/{{$v->group_file_id}}" target="_blank">{{$v->title}}</td>
                                                    <td>{{$v->account}}</td>
                                                    <td>{{date("Y-m-d H:i",$v->upload_time)}}</td>
                                                    <td>{{$v->click}}</td>
                                                </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="3"></td>
                                                    <td><a href="/myself/file_group">更多内容>></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div><!--<div class="tab-content">-->
                        </div><!--<div class="tabs mt-none">-->
                </div><!--<div class="row">-->
                <div class="row">
                    <div class="col-sm-3 col-lg-2">
                        <div class="panel widgetbox wbox-3 bg-success">
                                <div class="panel-content">
                                    <span class="icon fa fa-user"></span>
                                    <h1 class="title">人数</h1>
                                    <h4 class="subtitle">{{$count['number']}}人</h4>
                                </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-sm-3">
                        <div class="panel widgetbox wbox-3 bg-primary">
                                <div class="panel-content">
                                    <span class="icon fa fa-files-o"></span>
                                    <h1 class="title">上传文件数</h1>
                                    <h4 class="subtitle">{{$count['file']}}个</h4>
                                </div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-lg-7">
                        <div class="panel panel-default">
                            <!-- Default panel contents -->
                            <div class="panel-heading">群组成员</div>
                            <!-- Table -->
                            <table class="table">
                            @for($i=0;$i<=2;$i++)
                            <tr>
                                @for($j=$i*4;$j<=$i*4+3;$j++)
                                        @if($j< count($number)&&$j!=11)
                                        <td>{{$number[$j]->account}}</td>
                                        @elseif($j>=count($number)&&$j!=11)
                                        <td><font style="visibility:hidden;">null</font></td>
                                        @elseif($j==11)
                                        <td><a href="#">详情>></a></td>
                                        @endif
                                @endfor
                            </tr>
                            @endfor                            
                            </table>
                        </div>
                    </div>
                </div>
        </div><!--<div class="col-sm-12 col-lg-9">-->   
<!------------------------------文件列表结束------------------------------>    
<!------------------------------群组成员列表------------------------------>      
        <div class="col-sm-12 col-lg-3 pull-right">
            <div class="timeline">
                    <div class="timeline-box">
                        <div class="timeline-icon bg-primary">
                            <i class="fa fa-list"></i>
                        </div>
                        <div class="timeline-content">
                                <h4 class="tl-title">近期上传文件</h4>
                                <p></p>
                                <p></p>
                        </div>
                    </div>
                @foreach($record as $v)
                    <div class="timeline-box">
                        <div class="timeline-icon bg-primary">
                            <i class="fa fa-chain"></i>
                        </div>
                        <div class="timeline-content">
                                <h4 class="tl-title">{{$v->title}}</h4>
                                @if($v->file_type=="video")
                                <p>文件类型：视频</p>
                                @elseif($v->file_type=="words")
                                <p>文件类型：文档</p>
                                @elseif($v->file_type=="image")
                                <p>文件类型：图片</p>
                                @elseif($v->file_type=="other")
                                <p>文件类型：其他</p>
                                @endif
                                <p>上传者：{{$v->account}}</p>
                        </div>
                        <div class="timeline-footer">
                            <span>上传时间：{{date("Y-m-d H:i",$v->upload_time)}}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
<!------------------------------成员列表结束--------------------------->
    </div>  <!-- <div class="row animated fadeInUp">-->
</div>  <!--<div class="content">-->
<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script src="/static/myself/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/static/myself/vendor/nano-scroller/nano-scroller.js"></script>
<script src="/static/myself/javascripts/template-script.min.js"></script>
<script src="/static/myself/javascripts/template-init.min.js"></script>
<script src="/static/myself/vendor/toastr/toastr.min.js"></script>
</body>
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
</html>
