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
                <li><i class="fa fa-cog" aria-hidden="true"></i><a href="#">设置</a></li>
                <li><a>个人资料</a></li>
            </ul>
        </div>
    </div>
    <div class="row animated fadeInUp">
                <div class="col-sm-12">
                    <h4 class="section-subtitle"><b>修改个人信息</b></h4>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form  class="form-horizontal form-stripe">
                                        <div class="form-group">
                                            <label for="name" class="col-sm-3 control-label">昵称<span class="required">*</span></label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="{{$info->account}}" value="{{$info->account}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="col-sm-3 control-label">电子邮箱<span class="required">*</span></label>
                                            <div class="col-sm-6">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="{{$info->email}}" disabled="true">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="number" class="col-sm-3 control-label">联系方式</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="number" name="number" placeholder="{{$info->number}}" value="{{$info->number}}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="city" class="col-sm-3 control-label">所在城市</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="city" name="city" placeholder="{{$info->city}}" value="{{$info->city}}" >
                                            </div>
                                        </div>  
                                        <div class="form-group">  
                                            <label for="city" class="col-sm-3 control-label">性别</label> 
                                            <div class="col-sm-6">
                                            @if($info->sex=='m'||$info->sex=='')                     
                                                <input type="radio" name="sex" id="optionsRadios1" value="m" checked>
                                                男
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="sex" id="optionsRadios2" value="f">
                                                女
                                                @elseif($info->sex=='f')
                                                <input type="radio" name="sex" id="optionsRadios1" value="m">
                                                男
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="sex" id="optionsRadios2" value="f" checked>
                                                女                                                
                                                @endif
                                            </div> 
                                        </div>                                  
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <input type="button" id="setinfo" class="btn btn-primary" value="修改">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!--<div class="row">-->
                        </div><!--<div class="panel-content">-->
                    </div><!--<div class="panel">-->
                </div><!--<div class="col-sm-12">-->
                <div class="col-sm-12">
                    <h4 class="section-subtitle"><b>修改密码</b></h4>
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="#" class="form-horizontal form-stripe" method="post">
                                        <div class="form-group">
                                            <label for="pwd" class="col-sm-3 control-label">原密码</label>
                                            <div class="col-sm-6">
                                                <input type="password" class="form-control" id="pwd" name="pwd" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="newpwd" class="col-sm-3 control-label">新密码</label>
                                            <div class="col-sm-6">
                                                <input type="password" class="form-control" id="newpwd" name="newpwd" required="required">
                                            </div>
                                        </div>  
                                        <div class="form-group">  
                                            <label for="cofpwd" class="col-sm-3 control-label">确认密码</label> 
                                            <div class="col-sm-6">
                                                <input type="password" class="form-control" id="cofpwd" name="cofpwd" required="required">
                                            </div>
                                        </div>                                  
                                        <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <input type="button" id="setpwd"  value="修改" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </form>
                                </div><!--<div class="col-md-12">-->
                            </div><!--<div class="row">-->
                        </div><!--<div class="panel-content">-->
                    </div><!--<div class="panel">-->
                </div><!--<div class="col-sm-12">-->
    </div><!--<div class="row animated fadeInUp">-->
</div><!--<div class="content">-->
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
<script type="text/javascript">
    $(function(){
        $("#setinfo").click(function(){
            //alert(1);
            var name=$("#name").val();
            var number=$("#number").val();
            var city=$("#city").val();
            var sex=$("input[name='sex']").val();
            $.ajax({
                headers: {
                        'X-CSRF-TOKEN':'{{csrf_token()}}'
                    },
                type:'POST',
                url:'/myself/set/modinfo',
                data: {name:name,number:number,city:city,sex:sex},
                dataType:'json',
                success:function(data){
                    if(data==1)
                    {
                        alert("修改成功");
                        //console.log(data);
                        location.reload();
                    }else{
                        alert("修改失败");
                    }
                },
                error:function(){
                    alert("内部错误");
                }
            });             
        });
/*****************************************************************/
        $("#setpwd").click(function(){
            var pwd=$("#pwd").val();
            var newpwd=$("#newpwd").val();
            var cofpwd=$("#cofpwd").val();
            if(pwd==""||newpwd==""||cofpwd==""){
                alert("不能为空");
            }else if(pwd==newpwd){
                alert("新密码不能与原密码相同");
            }else if(pwd!=newpwd&&newpwd!=cofpwd){
                alert("两次输入密码不一致");
            }else if((pwd!=newpwd)&&(newpwd==cofpwd)){
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN':'{{csrf_token()}}'
                        },
                    type:'POST',
                    url:'/myself/set/modpwd',
                    data: {pwd:pwd,newpwd:newpwd,cofpwd:cofpwd},
                    dataType:'json',
                    success:function(data){
                        if(data==1)
                        {
                            alert("修改成功");
                            //console.log(data);
                        }else if(data==4){
                            alert("原密码输入错误！");
                        }else if(data==3){
                            alert("输入有误！");
                        }else if(data==2){
                            alert("修改失败");
                        }
                    },
                    error:function(){
                        alert("内部错误");
                    }

                });        
            }
        });
    })
</script>
</body>

</html>
