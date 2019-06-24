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
                <li><a>群组设置</a></li>
            </ul>
        </div>
    </div>
    <div class="row animated fadeInUp">
        <div class="col-sm-9">
            <h4 class="section-subtitle">群组设置</h4>
            <div class="panel">
                <div class="panel-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>姓名</th>
                                <th>性别</th>
                                <th>等级</th>
                                <th><b>操作</b></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($number as $n)
                            <tr>
                                <td>{{$n->account}}</td>
                                <td>
                                	@if($n->sex=='m')
                                	男
                                	@elseif($n->sex=='f')
                                	女
                                	@else
            						<font> </font>
                                	@endif
                                </td>
                                <td>
                                	@if($n->rank==1)
                                	<b style="color:#ff9900">群主</b>
                                	@elseif($n->rank==2)
                                	<b style="color:#f6b26b">管理员</b>
                                	@elseif($n->rank==3)
                                	<b style="color:#ffd966">普通成员</b>
                                	@elseif($n->rank==4)
                                	<b>见习成员</b>
                               	 	@endif
                        		</td>
                            	<td>
                            		@if($rank==1)
                            			@if($n->rank==1)
                            			<b style="color:#ff9900">群主</b>
                            			@else
                            			<form>
                            			<select  id="rank[{{$n->id}}]">
                            				<option value="2">2#管理员</option>
                            				<option value="3">3#普通成员</option>
                            				<option value="4">4#见习成员</option>
                            			</select>
                            			<div class="pull-right">
                            				<button type="button" name="btn" class="btn btn-xs" onclick="setrank({{$n->id}})">
                            				修改
                            				</button>
                            			</div>
                			            </form>
                            			@endif
                            		@elseif($rank==2)
                            			@if($n->rank==1)
                            			<b style="color:#ff9900">群主</b>
                            			@elseif($n->rank==2)
                            			<b style="color:#f6b26b">管理员</b>
                            			@else
                            			<form>
                            			<select id="rank[{{$n->id}}]">
                            				<option value="3">3#普通成员</option>
                            				<option value="4">4#见习成员</option>
                            			</select>
                            			<div class="pull-right">
                            			<input type="button" name="btn" class="btn btn-xs" value="确认修改">
                            			</div>
                            			</form>
                            			@endif                            			
                            		@endif
                            	</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div><!--<div class="table-responsive">--->
                </div><!--<div class="panel-content">--->
            </div><!--<div class="panel">--->
        </div><!--<div class="col-sm-9">-->

    	<div class="col-sm-3">
    		<h4 class="section-subtitle">添加成员</h4>
    		<div class="panel panel-primary">
  			<div class="panel-body">
				<form class="form" method="post">
                        <div class="form-group">
                            <p>电子邮箱</p>
                            <input type="text" class="form-control" id="email" placeholder="Email">
                        </div>
                        <input type="hidden" id="group_id" value="{{$group_id}}">
						<input type="button" id="searchbtn" class="btn btn-default"" value="查询" />
                        <div id="searchcontent">查询结果</div>
                        <br>
                       	<input type="button" id="join" class="btn btn-primary" value="邀请加入">
    			</form>
  			</div>
			</div>
    	</div>
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
<script type="text/javascript">
	$(function(){
		$("#searchbtn").click(function(){
			var email = $("#email").val();
			var group_id = $("#group_id").val();
			if(email==""){
				$("#searchcontent").text("请输入正确的电子邮箱");
			}else{
            	$.ajax({
            	    headers: {
            	            'X-CSRF-TOKEN':'{{csrf_token()}}'
            	        },
            	    type:'POST',
            	    url:'/myself/set/search',
            	    data: {'email':email,'group_id':group_id},
            	    dataType:'json',
            	    success:function(data){
            	        if(data!=''&&data!=null)
            	        {
            	            console.log(data);
             	           	$("#searchcontent").text(data);
            	        }else if(data==null){
            	            $("#searchcontent").text("无查询结果");
            	        }
            	    },
            	    error:function(){
            	        alert("内部错误");
            	    }
            	});
            }             			
			//$("#searchcontent").text("123");
		});

/****************************************************/
		$("#join").click(function(){
			var email = $("#email").val();
			var group_id = $("#group_id").val();
			if(email==""){
				$("#searchcontent").text("请输入正确的电子邮箱");
			}else{
            	$.ajax({
            	    headers: {
            	            'X-CSRF-TOKEN':'{{csrf_token()}}'
            	        },
            	    type:'POST',
            	    url:'/myself/set/join',
            	    data: {'email':email,'group_id':group_id},
            	    dataType:'json',
            	    success:function(data){
            	        if(data==1)
            	        {
             	           	$("#searchcontent").text("邀请成功");
            	        }else if(data==3){
            	            $("#searchcontent").text("邀请失败");
            	        }else if(data==0){
            	        	$("#searchcontent").text("无该用户");
            	        }
            	    },
            	    error:function(){
            	        alert("内部错误");
            	    }
            	});
            } 
		});
	});
</script>
<script>
	function setrank(id)
	{
		console.log(id);
		var rank = document.getElementById("rank["+id+"]").value;
		var group_id = {{$group_id}};
		$.ajax({
    	    headers: {
	            'X-CSRF-TOKEN':'{{csrf_token()}}'
	        },
    	    type:'POST',
    	    url:'/myself/set/rank',
    	    data: {'user_id':id,'group_id':group_id,'rank':rank},
    	    dataType:'json',
    	    success:function(data){
    	    	if(data==1){
	    	    	alert("修改成功");
    	    		location.reload();		
    	    	}

    	    },
    	    error:function(){
    	        alert("内部错误");
    	    }
		});
	}
</script>
</html>
