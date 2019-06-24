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
<!---content---->
    <div class="content">
        <div class="content-header" style="background-color:#cccccc;">
            <div class="leftside-content-header">
                <ul class="breadcrumbs">
                    <li><i class="fa fa-table" aria-hidden="true"></i><a href="#">资源列表</a></li>
                    <li><a>群组资源</a></li>
                </ul>
            </div>
        </div>
        <div class="row animated fadeInUp">
            <div class="col-sm-12 col-lg-3 pull-left">
                <div class="panel">
                    <div class="panel-content">
                        <p>选择群组<span class="highlight">资源列表</span></p>
                    @for($i=1;$i<= count($group);$i++)
                        @if($i%3==1)
                        <button class="btn btn-darker-1 btn-block">
                            <a href="/myself/file_group/{{$group[$i-1]->group_id}}" style="color:white">{{$group[$i-1]->name}}</a>
                        </button>
                        @elseif($i%3==2)
                        <button class="btn btn-primary btn-block">
                            <a href="/myself/file_group/{{$group[$i-1]->group_id}}" style="color:white">{{$group[$i-1]->name}}</a>
                        </button>
                        @elseif($i%3==0)
                        <button class="btn btn-lighter-1 btn-block">
                            <a href="/myself/file_group/{{$group[$i-1]->group_id}}" style="color:white">{{$group[$i-1]->name}}</a>
                        </button>
                        @endif
                    @endfor
                    </div>
                </div>
<!------------------------------个人在群组中等级说明情况--------------------------------->
                @if($info['rank']==1)
                <div class="list-group">
                    <a href="#" class="list-group-item active">
                        <p style="font-size:3px">组员等级</p>
                        <h4 class="list-group-item-heading">您的等级为<b style="color:#ff9900">1</b></h4>
                        <p class="list-group-item-text">为该资源群组的创建者，允许所有文件操作和管理组员</p>
                        <p class="list-group-item-text">修改组员等级请前往<b href="#" style="color:#783f04"><u>设置>群组设置</u></b></p>
                    </a>
                </div>
                @elseif($info['rank']==2)
                <div class="list-group">
                    <a href="#" class="list-group-item active">
                        <p style="font-size:3px">组员等级</p>
                        <h4 class="list-group-item-heading">您的等级为<b style="color:#f6b26b">2</b></h4>
                        <p class="list-group-item-text">为该资源群组的管理员，允许所有文件操作和删除及添加成员操作</p>
                        <p class="list-group-item-text">修改组员等级请前往<b href="#" style="color:#783f04"><u>设置>群组设置</u></b></p>
                    </a>
                </div>
                @elseif($info['rank']==3)
                <div class="list-group">
                    <a href="#" class="list-group-item active">
                        <p style="font-size:3px">组员等级</p>
                        <h4 class="list-group-item-heading">您的等级为<b style="color:#ffd966">3</b></h4>
                        <p class="list-group-item-text">为该资源群组的普通成员，允许下载,上传及删除(自己上传的)文件</p>
                    </a>
                </div>
                @elseif($info['rank']==4)
                <div class="list-group">
                    <a href="#" class="list-group-item active">
                        <p style="font-size:3px">组员等级</p>
                        <h4 class="list-group-item-heading">您的等级为4</h4>
                        <p class="list-group-item-text">为该资源群组的见习成员，仅允许下载文件</p>
                    </a>
                </div>
                @endif
<!--------------------------------------------------------------------------->
            </div><!--<div class="col-sm-12 col-lg-3">-->
            <div class="col-sm-12 col-lg-9">
                @if($name=='null')
                <div class="panel panel-primary">
                <!-- Default panel contents -->
                    <div class="panel-heading">请选择资源群组</div>
                        <div class="panel-body">
                        <p></p>
                        </div>
                    <!-- Table -->
                    <table class="table">
                    </table>
                </div>
                @else
<form action=""  name="form_file_upload"  id="formSubmit"  method="post" >
    {!! csrf_field() !!}
                <div class="panel panel-primary">
                    <div class="panel-heading">{{$name->name}}的资源列表</div>
                    <!-- Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th><b>#</b></th>
                                <th>标题</th>
                                <th>类型</th>
                                <th>上传时间</th>
                                <th>上传者</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($file_list as $d)
                            <tr>
                                <td><input type="checkbox" name="chk[]" value="{{$d->group_file_id}}"></td>
                                <td>
                                    @if($d -> file_type=="video")
                                        <a href="/myself/group/video/{{$d->group_file_id}}" target="_blank">
                                            {{$d -> title}}
                                        </a>
                                    @elseif($d->file_type=="words")
                                        <a href="/myself/group/words/{{$d->group_file_id}}" target="_blank">
                                            {{$d -> title}}
                                        </a>
                                    @elseif($d->file_type=="image")
                                        <a href="/myself/group/image/{{$d->group_file_id}}" target="_blank">
                                            {{$d -> title}}
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    @if($d -> file_type=="video")
                                        视频
                                    @elseif($d->file_type=="words")
                                        文档
                                    @elseif($d->file_type=="image")
                                        图片
                                    @elseif($d->file_type=="other")
                                        其他
                                    @endif
                                </td>
                                <td>{{date("Y-m-d H:i",$d -> upload_time)}}</td>
                                <td>{{$d -> account}}</td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
<!---------------------------------------页码----------------------------------------------->
        <div class="panel-body">
            @if($page!=0)
            <div class="row">
                <div class="col-lg-1">
                <input type="button" class="btn btn-danger" value="删除" style="width: 80px" id="submitBtn">
                <input type="hidden" id="ajaxParam" name="ajaxParam">
                </div>
                <div class="col-lg-7 col-lg-offset-2">
                <nav aria-label="Page navigation pull-right">
                    <ul class="pagination ">
                <!----------上一页设置---------->
                        @if($info['current']==1)
                        <li class="disabled">
                            <a href="#" disabled="ture" aria-label="Previous" style="pointer-events:none;cursor:not-allowed;">
                            上一页
                            </a>
                        </li>
                        @else
                        <li>
                            <a href="/myself/file_group/{{$info['group_id']}}/{{$info['current']-1}}" aria-label="Previous">
                            上一页
                            </a>
                        </li>
                        @endif
                <!----------中间页设置---------->
                        @if($info['current'] <= 4)
                            @for($i=1;$i<=7;$i++)
                                @if($i==$info['current']&&$i<=$page)
                                <li><a href="/myself/file_group/{{$info['group_id']}}/{{$i}}" style="color:red"><b>{{$i}}</b></a></li>
                                @elseif($i!=$info['current']&&$i<=$page)
                                <li><a href="/myself/file_group/{{$info['group_id']}}/{{$i}}">{{$i}}</a></li>
                                @endif
                                @if($i>$page)
                                <li class="disabled"><a disabled="ture" href="/myself/file_group/{{$info['group_id']}}/{{$i}}" style="pointer-events:none;cursor:not-allowed;">{{$i}}</a></li>
                                @endif
                            @endfor
                        @elseif($info['current'] > 4)
                            @for($i=$info['current']-3;$i<=$info['current']+3;$i++)
                                @if($i==$info['current']&&$i<=$page)
                                <li><a href="/myself/file_group/{{$info['group_id']}}/{{$i}}" style="color:red"><b>{{$i}}</b></a></li>
                                @elseif($i!=$info['current']&&$i<=$page)
                                <li><a href="/myself/file_group/{{$info['group_id']}}/{{$i}}">{{$i}}</a></li>
                                @endif
                                @if($i>$page)
                                <li class="disabled"><a disabled="ture" href="/myself/file_group/{{$info['group_id']}}/{{$i}}" style="pointer-events:none;cursor:not-allowed;">{{$i}}</a></li>
                                @endif
                            @endfor
                        @endif
                <!----------中间页设置结束---------->
                <!----------下一页设置---------->
                        @if($info['current']==$page)
                        <li class="disabled">
                            <a href="#" disabled="ture" aria-label="Next" style="pointer-events:none;cursor:not-allowed;">
                            下一页
                            </a>
                        </li>
                        @else
                        <li>
                            <a href="/myself/file_group/{{$info['group_id']}}/{{$info['current']+1}}" aria-label="Previous">
                            下一页
                            </a>
                        </li>
                        @endif
                <!----------下一页设置结束---------->
                    </ul>
                </nav>
                @endif
            </div>
            </div>
        </div> <!--<div class="panel-body">---> 
<!---------------------------------------页码设置结束--------------------------------------------->

                @endif
                <!--1.解决复选框问题-->
                <!--2.解决翻页还是滚动条-->
                <!--3.ajax问题-->
                </div><!--<div class="panel panel-primary">-->
</form>
            </div><!--<div class="col-sm-12 col-lg-9">-->   
        </div><!--<div class="row animated fadeInUp">-->
    </div><!--<div class="content">-->
</div>
<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<script src="/static/myself/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/static/myself/vendor/nano-scroller/nano-scroller.js"></script>
<script src="/static/myself/javascripts/template-script.min.js"></script>
<script src="/static/myself/javascripts/template-init.min.js"></script>
<script src="/static/myself/vendor/toastr/toastr.min.js"></script>
<script src="/static/myself/javascripts/jquery.form.js"></script>
<script type="text/javascript">
$("#submitBtn").click(function(){
　　var chk=$("[input='checkbox']").val();
　　uploadJsonData="{'chk':"+chk+"}";
　　$("#ajaxParam").val(uploadJsonData);
　　$("#formSubmit");
　　var options = {
　　　　url:'/myself/group/delete',
　　　　type:'post',
       resetForm: false,
　　　　success:function(data){     
　　　　　　if(data){
　　　　　　　　  alert(data);
                location.reload();
　　　　　　}
　　　　　},
　　　　error:function(){
　　　　}
　　　}; 
 
　　　$("#formSubmit").ajaxSubmit(options);
　　});
</script>
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
