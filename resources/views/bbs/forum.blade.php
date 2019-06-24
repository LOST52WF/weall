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
                margin-left: 14%;
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
                border:10px;
            }
            .p-title:hover{
                color:#3cb5d8;
            }
            .panel-title:hover{
                text-decoration:none;
                color:#3cb5d8;
            }
            .list-group-item {
                padding: 3px;
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
                  <div class="panel panel-default" style="visibility:hidden;margin-bottom: 40px;">
                      <div class="panel-body"></div>
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
        <div class="content">
            <div class="row animated fadeInUp" style="background-color: white">
    <!----------------------------------------主体开始------------------------------------->
                <div class="row" style="margin-top: 20px;">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="well" style="margin-left: 10px;margin-bottom: 0px;margin-top: 15px;">
                            <h4>{{$info['title']}}</h4>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col-md-8 col-md-offset-2" id="comment_field">
        <?php  $i=($info['current']-1)*10+1;  ?>
        @foreach($data as $v)
            <div class="panel">
                <div class="row" style="margin-top:25px;margin-top: 10px;">
                        <div class="panel panel-default" style="margin-left:0px;">
                        <div class="panel-body" style="padding:0px;">
                            <div class="row" style="margin-top:0px;" >
                                <div class="col-md-1">
                                    <img alt="Brand" src="{{$v->headimage}}" style="height:45px;margin-top: 0px;border-radius:50%;-webkit-border-radius:50%;-moz-border-radius:50%;">
                                </div>
                                <div class="col-md-11">
                                    <p style="color:grey">{{$v->account}}</p>
                                    <p>{{$v->info}}
                                    </p>
                                    <div class="col-md-4 col-md-offset-8" style="padding-left: 0px;">
                                        <font style="color:grey">{{date("Y-m-d H:i",$v->create_time)}}</font>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <font style="color:grey">{{$i}}楼</font>
                                    </div>
                                </div>
                            </div><!--<div class="row" style="margin-top:0px;" >-->
                        </div><!--<div class="panel-body">-->
                        
                        <div class="panel-content">
                            <ul class="list-group" id="floor{{$v->floor_id}}">
                            @if(isset($v->reply))
                                @foreach($v->reply as $r)
                                <li class="list-group-item" id="reply{{$r->reply_id}}">
                                <font style="color:#0086c8;">{{$r->user_account}}：</font>回复：
                                <font style="color:#0086c8;">{{$r->reply_account}}</font>：
                                <font>{{$r->info}}</font>
                                <font class="pull-right" style="color:grey;">{{date("m-d H:i:s",$r->create_time)}}</font>
                                <button class="btn btn-xs btn-default pull-right" style="background-color:#80808036;" onclick="floorreply('{{$r->reply_id}}','{{$v->floor_id}}')">
                                回复
                                </button>
                                </li>
                                @endforeach
                            @endif
                            </ul>
                        </div>
                        
                            <div class="panel-footer" style="padding-top: 5px;padding-bottom: 5px;background-color: #8080800d;">
                                    我的回复：<input type="text" id="{{$v->floor_id}}" style="width:300px;" name="reply" value="" placeholder="说一句">
                                    <button class="btn btn-xs btn-primary" onclick="replyfun('{{$v->floor_id}}','{{$v->user_id}}')">回复</button>
                            </div>
                        </div><!--<div class="panel panel-default" style="margin-left:60px;width: 960px;">-->
                </div><!--<div class="row" style="margin-top:25px;margin-top: 40px;">-->
            <!--<div class="panel">-->
        <?php   $i++; ?>       
        @endforeach 
                    </div><!--<div class="col-md-8 col-md-offset-2">-->
                </div><!--<div class="row">-->
<!------------------------------------页码设置-------------------------------------------------------------->
        <div class="panel-body">
            @if($info['page']!=0&&$data!='')
            <div class="row">
                <div class="col-md-7 col-md-offset-3">
                <nav aria-label="Page navigation pull-right" >
                    <ul class="pagination " style="margin-top: 0px;margin-bottom: 0px;">
                <!----------上一页设置---------->
                        @if($info['current']==1)
                        <li class="disabled">
                            <a href="#" disabled="ture" aria-label="Previous" style="pointer-events:none;cursor:not-allowed;">
                            上一页
                            </a>
                        </li>
                        @else
                        <li>
                            <a href="/bbs/forum/{{$info['forum_id']}}/{{$info['current']-1}}" aria-label="Previous">
                            上一页
                            </a>
                        </li>
                        @endif
                <!----------中间页设置---------->
                        @if($info['current'] <= 4)
                            @for($i=1;$i<=7;$i++)
                                @if($i==$info['current']&&$i<=$info['page'])
                                <li><a href="/bbs/forum/{{$info['forum_id']}}/{{$i}}" style="color:red"><b>{{$i}}</b></a></li>
                                @elseif($i!=$info['current']&&$i<=$info['page'])
                                <li><a href="/bbs/forum/{{$info['forum_id']}}/{{$i}}">{{$i}}</a></li>
                                @endif
                                @if($i>$info['page'])
                                <li class="disabled"><a disabled="ture" href="#" style="pointer-events:none;cursor:not-allowed;">{{$i}}</a></li>
                                @endif
                            @endfor
                        @elseif($info['current'] > 4)
                            @for($i=$info['current']-3;$i<=$info['current']+3;$i++)
                                @if($i==$info['current']&&$i<=$info['page'])
                                <li><a href="/bbs/forum/{{$info['forum_id']}}/{{$i}}" style="color:red"><b>{{$i}}</b></a></li>
                                @elseif($i!=$info['current']&&$i<=$info['page'])
                                <li><a href="/bbs/forum/{{$info['forum_id']}}/{{$i}}">{{$i}}</a></li>
                                @endif
                                @if($i>$info['page'])
                                <li class="disabled"><a disabled="ture" href="#" style="pointer-events:none;cursor:not-allowed;">{{$i}}</a></li>
                                @endif
                            @endfor
                        @endif
                <!----------中间页设置结束---------->
                <!----------下一页设置---------->
                        @if($info['current']==$info['page'])
                        <li class="disabled">
                            <a href="#" disabled="ture" aria-label="Next" style="pointer-events:none;cursor:not-allowed;">
                            下一页
                            </a>
                        </li>
                        @else
                        <li>
                            <a href="/bbs/forum/{{$info['forum_id']}}/{{$info['current']+1}}" aria-label="Previous">
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
<!------------------------------------页码设置结束---------------------------------------------------------->
                </div><!--<div class="row" style="margin-left:40px;">---->
            </div><!--<div class="panel">-->

    <!----------------------------------------主体结束------------------------------------->
    <!-----------------------------------------尾部---------------------------------------->
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row" style="margin-top: 0px;">
                                <div class="col-md-3 col-md-offset-2">
                                    <p><b>发表回复</b></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <textarea name="textareaname" id="user_comment" rows="3" cols="5" style="height: 95px; width: 600px; margin: 0px;resize:none"></textarea>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-3 col-md-offset-2">
                                    <button class="btn btn-primary" style="width: 80px;height:30px;" onclick="replytoforum('{{$info['forum_id']}}')">
                                        发送
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
        <!---------------------------------------尾部结束-------------------------------------->
            </div><!--<div class="row animated fadeInUp">-->
        </div><!--<div class="content">-->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/static/showingmap/js/velocity.js"></script>
    <script src="/static/showingmap/js/shutter.js"></script>
    <script type="text/javascript">
        function replyfun(floor_id,user_id){
            var info = $("#"+floor_id).val();
            $.ajax({
               type:"POST",
               url:"/bbs/forum/reply",
               dataType:"json",
               data:{
                    '_token':'{{csrf_token()}}',
                    'reply_user_id':user_id,
                    'info':info,
                    'floor_id':floor_id
                },
                success:function(data){
                    if(data==0){
                        alert("发送失败");
                    }else{
                        var preapp = "<li class='list-group-item'><font style='color:#0086c8;'>"+data.user_account+"：</font>回复：<font style='color:#0086c8;'>"+data.reply_account+"</font>：<font>"+data.info+"</font><font class='pull-right' style='color:grey;'>"+data.create_time+"</font><button class='btn btn-xs btn-default pull-right' style='background-color: #80808036';onclick="+"\"floorreply(\'"+data.reply_id+"',\'"+data.floor_id+"')\""+">回复</button></li>";
                        $("#floor"+floor_id).append(preapp);
                        $("#"+floor_id).val("");
                    }
                }
            })
        }

        var num=1;
        function floorreply(reply_id,floor_id){
            if(num==1){
                var endapp = "<li class='list-group-item' id='"+"replyto"+reply_id+"'+><input type='text' id='replytext"+reply_id+"' style='width:300px;'><button class='btn btn-xs btn-primary' onclick="+"\"floorreplyto(\'"+floor_id+"',\'"+reply_id+"')\""+"> 发送</button></li>";
                $("#reply"+reply_id).after(endapp);
                num=2;
            }else{
                num=1;
                $("#replyto"+reply_id).remove();
            }

        }

    </script>
    <script type="text/javascript">
        
        function floorreplyto(floor_id,reply_id){
            var info = $("#replytext"+reply_id).val();
            $.ajax({
                type:"POST",
                url :"/bbs/floor/reply",
                dataType:"json",
                data:{
                    '_token':'{{csrf_token()}}',
                    'reply_id':reply_id,
                    'info':info,
                    'floor_id':floor_id
                },
                success:function(data){
                    if(data==0){
                        alert("发送失败");
                    }else{
                        var preapp = "<li class='list-group-item'><font style='color:#0086c8;'>"+data.user_account+"：</font>回复：<font style='color:#0086c8;'>"+data.reply_account+"</font>：<font>"+data.info+"</font><font class='pull-right' style='color:grey;'>"+data.create_time+"</font><button class='btn btn-xs btn-default pull-right' style='background-color: #80808036';onclick="+"\"floorreply(\'"+data.reply_id+"',\'"+data.floor_id+"')\""+">回复</button></li>";
                        $("#floor"+floor_id).append(preapp); 
                        $("#replyto"+reply_id).remove();                      
                    }
                }                
            })
        }


        function replytoforum(answer)
        {
            var info = $("#user_comment").val();
            $.ajax({
                type:"POST",
                url:"/bbs/forum/answer",
                dataType:"json",
                data:{
                    '_token':'{{csrf_token()}}',
                    'forum_id':'{{$info['forum_id']}}',
                    'info':info
                },
                success:function(data){
                    if(data==0){
                        alert("发送失败");
                    }else if(data==1){
                         window.location.reload();
                    }
                }
            })
        }
    </script>
    <script type="text/javascript">
$(function () {
    $(".dropdown").mouseover(function () {
        $(this).addClass("open");
    });

    $(".dropdown").mouseleave(function(){
        $(this).removeClass("open");
    });
})
    </script>
  </body>
</html>