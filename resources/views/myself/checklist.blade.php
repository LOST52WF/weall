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
<!--content-->
    <div class="content">
        <div class="content-header" style="background-color:#cccccc;">
            <div class="leftside-content-header">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-check-square-o" aria-hidden="true"></i><a href="#">资源审核</a></li>
                    <li><a>审核情况</a></li>
                </ul>
            </div>
        </div>
        <div class="row animated fadeInUp">
            <div class="col-sm-12 col-lg-12">
                <h4 class="section-subtitle">分享至资源库<b>资源审核</b>列表</h4>
                <div class="panel">
                    <div class="panel-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><b>#</b></th>
                                        <th>标题</th>
                                        <th>类型</th>
                                        <th>分享时间</th>
                                        <th>标签</th>
                                        <th>原创/转载</th>
                                        <th>审核情况</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; ?>
                                @foreach($data as $v)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$v->title}}</td>
                                        @if($v->file_type=='video')
                                        <td>视频</td>
                                        @elseif($v->file_type=='words')
                                        <td>文档</td>
                                        @elseif($v->file_type=='image')
                                        <td>图片</td>
                                        @endif
                                        <td>{{date("Y-m-d H:i",$v->create_time)}}</td>
                                        <td>{{$v->tag}}</td>
                                        <td>{{$v->spead}}</td>
                                        <td>{{$v->auditing}}</td>
                                    <tr>
                                <?php  $i++; ?>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
<!---------------------------------------页码----------------------------------------------->
            @if($page_info['count']!=0)
            <div class="row"  > 
                <div class="text-center ">
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-lg">
                            <!----------上一页设置---------->
                            @if($page_info['current']==1)
                            <li class="disabled">
                                <a href="#" disabled="ture" aria-label="Previous" style="pointer-events:none;cursor:not-allowed;">
                                上一页
                                </a>
                            </li>
                            @else
                            <li>
                                <a href="/myself/checklist/{{$page_info['current']-1}}" aria-label="Previous">
                                上一页
                                </a>
                            </li>
                            @endif
                            <!----------中间页设置---------->
                            @if($page_info['current'] <= 4)
                                @for($i=1;$i<=7;$i++)
                                    @if($i==$page_info['current']&&$i<=$page_info['count'])
                            <li><a href="/myself/checklist/{{$i}}" style="color:red"><b>{{$i}}</b></a></li>
                                    @elseif($i!=$page_info['current']&&$i<=$page_info['count'])
                            <li><a href="/myself/checklist/{{$i}}">{{$i}}</a></li>
                                    @endif
                                    @if($i>$page_info['count'])
                            <li class="disabled"><a disabled="ture" href="/myself/checklist/{{$i}}" style="pointer-events:none;cursor:not-allowed;">{{$i}}</a></li>
                                    @endif
                                @endfor
                            @elseif($page_info['current'] > 4)
                                @for($i=$page_info['current']-3;$i<=$page_info['current']+3;$i++)
                                    @if($i==$page_info['current']&&$i<=$page_info['count'])
                            <li><a href="/myself/checklist/{{$i}}" style="color:red"><b>{{$i}}</b></a></li>
                                    @elseif($i!=$page_info['current']&&$i<=$page_info['count'])
                            <li><a href="/myself/checklist/{{$i}}">{{$i}}</a></li>
                                    @endif
                                    @if($i>$page_info['count'])
                            <li class="disabled"><a disabled="ture" href="/myself/checklist/{{$i}}" style="pointer-events:none;cursor:not-allowed;">{{$i}}</a></li>
                                    @endif
                                @endfor
                            @endif
                <!----------中间页设置结束---------->
                <!----------下一页设置---------->
                            @if($page_info['current']==$page_info['count'])
                            <li class="disabled">
                                <a href="#" disabled="ture" aria-label="Next" style="pointer-events:none;cursor:not-allowed;">
                                下一页
                                </a>
                            </li>
                            @else
                            <li>
                                <a href="/myself/checklist/{{$page_info['current']+1}}" aria-label="Previous">
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
        </div>
    </div>
<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script src="/static/myself/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/static/myself/vendor/nano-scroller/nano-scroller.js"></script>
<script src="/static/myself/javascripts/template-script.min.js"></script>
<script src="/static/myself/javascripts/template-init.min.js"></script>
    <script type="text/javascript">
/******************************删除按钮****************************************/
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
