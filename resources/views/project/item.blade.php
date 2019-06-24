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
        <link rel="stylesheet" type="text/css" href="/static/tools/css/timeline.css">
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
        <div class="content">
            <div class="row animated fadeInUp" style="background-color: white;">
<!-----------------------------------------------项目主体-------------------------------------------------->
                <div class="row" style="margin-top: 20px;">
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="panel panel-info">
                            <div class="panel-heading"><b style="margin-left: 50px;">项目时间轴</b></div>
                            <div class="panel-body">
                                <div class="main">
                                    <ul class="cbp_tmtimeline">
                                        <li>
                                            <time class="cbp_tmtime" datetime=""></time>
                                            <div class="cbp_tmicon ">#</div>
                                            <div class="cbp_tmlabel" style="padding: 15px;width:270px;">
                                            <a href="/project/create/{{$info->project_id}}" style="text-decoration:none;">
                                                <span class="input-group-addon" style="background-color:#0066ff;color:white;height: 94px;border:0px;">
                                                    发布新版本
                                                </span>
                                            </a>
                                            </div>
                                        </li>
                                        <?php $i=1;  ?>
                                        @foreach($data as $v)
                                            <li>
                                                <time class="cbp_tmtime" datetime=""></time>
                                                <div class="cbp_tmicon ">{{$i}}</div>
                                                <div class="cbp_tmlabel" style="padding: 15px;width:270px;">
                                                    <h2><font style="font-size:20px;">{{$v->title}}</font></h2>
                                                    <p style="font-size: 15px;">
                                                        作者：{{$v->account}}<br>
                                                        上传时间：{{date("Y-m-d H:i",$v->upload_time)}}<br>
                                                        描述：{{$v->info}}<br>
                                                        <a href="/project/download/{{$v->id}}" target="_blank" style="text-decoration: none;color: yellow;">点击下载</a>
                                                    </p>
                                                </div>
                                            </li>
                                            <?php $i++; ?>
                                        @endforeach
                                    </ul>
                                </div><!--<div class="main">-->
                            </div><!--<div class="panel-body">-->
                        </div><!--<div class="<div class="panel panel-info">">-->
                    </div> <!--<div class="col-sm-4 col-sm-offset-1">-->
                    <div class="col-sm-6" style="margin-top: 20px;">
                        <div class="row">
                            <div class="panel panel-primary">
                                <div class="panel-heading"><b>项目学习资源推荐</b></div>
                                <div class="panel-body">
                                    <p style="color:grey;">各种类型的学习资源有利于您更快的深入，掌握，运用项目资源
                                    </p>
                                    @if($item_study!='')
                                        <?php $i=1;  ?>
                                        @foreach($item_study as $s)
                                        <div class="row" style="margin-top: 0px;">
                                            <p>推荐{{$i}}</p>
                                            @foreach($s as  $v)
                                                @if($v->type=='video')
                                                <a href="/share/video/{{$v->resource_id}}" target="_blank" style="color:#333;">
                                                @elseif($v->type=='words')
                                                <a href="/share/words/{{$v->resource_id}}" target="_blank" style="color:#333;">
                                                @elseif($v->type=='image')
                                                <a href="/share/image/{{$v->resource_id}}" target="_blank" style="color:#333;">
                                                @endif    
                                                    <div class="col-sm-2" style="width:190px;margin-left:0px;padding-left:0px;padding-right: 20px;">
                                                        <div class="thumbnail" style="height: 140px;">
                                                            <img src="{{$v->picture_url}}" alt="图片" style="height: 100px;width: 185px;">
                                                            <p style="margin-bottom:0px;margin-top:6px;" class="p-title">
                                                                <b style="font-weight:500;">{{$v->title}}</b>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                            @endforeach
                                        </div>
                                        <?php $i++;  ?>
                                        @endforeach    
                                    @else 
                                    <h4>暂无资源</h4>
                                    @endif 
                                </div>
                            </div><!--<div class="panel panel-primary">-->
                        </div><!--<div class="row">-->
                        <div class="row">
                            <div class="col-sm-6" style="padding-left: 0px;">
                                <div class="panel panel-primary">
                                    <div class="panel-heading"><b>项目信息</b></div>
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr>
                                                <td> 
                                                    <span class="fa fa-user" aria-hidden="true"></span>
                                                </td>
                                                <td>项目创建者：</td>
                                                <td>{{$item_info['user_account']}}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fa fa-align-justify" aria-hidden="true"></span>
                                                </td>
                                                <td>项目主题：</td>
                                                <td>{{$item_info['title']}}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fa fa-calendar-o" aria-hidden="true"></span>
                                                </td>
                                                <td>创建时间：</td>
                                                <td>{{date("Y-m-d",$item_info['upload_time'])}}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fa fa-file-o" aria-hidden="true"></span>
                                                </td>
                                                <td>总项目数：</td>
                                                <td>{{count($data)}}</td>
                                            </tr>   
                                            <tr>
                                                <td>
                                                    <span class="fa fa-eye" aria-hidden="true"></span>
                                                </td>
                                                <td>总点击量：</td>
                                                <td>{{$item_info['click']}}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="fa fa-group" aria-hidden="true"></span>
                                                </td>
                                                <td>参与项目的用户：</td>
                                                <td>{{$item_info['user_count']}}</td>
                                            </tr>                          
                                        </table>
                                    </div>
                                </div><!--<div class="panel panel-primary">-->
                            </div><!--<div class="col-sm-6">-->
                        </div><!--<div class="row">-->
                    </div><!--<div class="col-sm-6">-->
                </div><!--<div class="row" style="margin-top: 20px;">-->
<!------------------------------------主体结束------------------------------------------->
<!------------------------------------讨论区开始----------------------------------------->
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="panel panel-default" style="margin-left:60px;width: 960px;" id="field_question">
                            <div class="panel-heading" style="padding-top: 6px;padding-bottom: 6px;background: rgba(0,0,0,0);margin-top: 20px;">
                                <h3 style="margin: 0px;" >项目问答区</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row" style="margin-top:0px;" >
                                    <div class="col-md-2" style="padding-right: 0px;">
                                        <span class="input-group-addon" style=" height: 74px;border:0px;border-bottom-left-radius: 5px;border-top-left-radius: 5px;">我的提问
                                        </span>
                                    </div>
                                    <div class="col-md-8" style="padding-left: 0px;">
                                        <textarea name="textareaname" id="user_questiont" rows="3" cols="5" style="height: 75px; width: 600px; margin: 0px;resize:none;border-bottom-right-radius: 5px;border-top-right-radius: 5px;"></textarea>
                                    </div>
                                    <div class="col-md-2">
                                        <span class="input-group-addon" onclick="sendquestion();" style="background-color:#0066ff;color:white;height: 74px;border-radius: 5px;">
                                            发送
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div><!--<div class="panel panel-default" style="margin-left:60px;width: 960px;">-->
                        @foreach($qs as $v)
                        <div class="panel" style="margin-left:110px;margin-bottom:5px;margin-top: 20px;" id="questionid{{$v->question_id}}">
                            <div class="row" style="margin-top:25px;">
                                <div class="panel panel-default" style="margin-left:0px;margin-bottom: 0px;">
                                    <div class="panel-body" style="padding:0px;width: 850px;background-color: #ff00000f;">
                                        <div class="row" style="margin-top:0px;" >
                                            <div class="col-md-1">
                                                <img alt="Brand" src="{{$v->headimage}}" style="height:45px;margin-top: 0px;border-radius:50%;-webkit-border-radius:50%;-moz-border-radius:50%;">
                                            </div>
                                            <div class="col-md-11">
                                                <p style="color:grey">
                                                    {{$v->account}}
                                                    <font style="color:#c11d1d;">
                                                        [<span class="fa fa-question" aria-hidden="true"></span>提问]
                                                    </font>
                                                </p>
                                                <p>{{$v->content}}</p>
                                                <div class="col-md-3 col-md-offset-9" style="padding-left: 0px;">
                                                    <font style="color:grey">{{date("Y-m-d H:i",$v->create_time)}}</font>
                                                </div>
                                            </div>
                                        </div><!--<div class="row" style="margin-top:0px;" >-->
                                    </div><!--<div class="panel-body">-->
                                    <div class="panel-footer" style="padding-right: 0px;padding-top: 0px;padding-left: 10px;padding-bottom: 0px;width: 850px;">
                                        我的回答：<input type="text" style="width: 500px;" id="forquestion{{$v->question_id}}">
                                        <input type="button" class="btn btn-primary btn-xs" onclick="answer('{{$v->question_id}}');" value="回答">
                                    </div>
                                </div><!--<div class="col-sm-10 col-sm-offset-1">-->
                            </div>
                        </div>
                            @foreach($v->answer as $a)
                        <div class="panel" style="margin-left:110px;margin-bottom: 0px;" id="answertoquestion{{$a->answer_id}}">
                            <div class="row" style="margin-top:0px;">
                                <div class="panel panel-default" style="margin-left:0px;margin-bottom: 0px;">
                                    <div class="panel-body" style="padding:0px;width:850px;background-color: #0000ff14">
                                        <div class="row" style="margin-top:0px;" >
                                            <div class="col-md-1">
                                                <img alt="Brand" src="{{$a->headimage}}" style="height:45px;margin-top: 0px;border-radius:50%;-webkit-border-radius:50%;-moz-border-radius:50%;">
                                            </div>
                                            <div class="col-md-11">
                                                <p style="color:grey">
                                                    {{$a->account}}
                                                    <font style="color:green;">
                                                        [<span class="fa fa-check" aria-hidden="true"></span>回答]
                                                    </font>
                                                </p>
                                                <p>{{$a->info}}</p>
                                                <div class="col-md-3 col-md-offset-9" style="padding-left: 0px;">
                                                    <font style="color:grey">{{date("Y-m-d H:i",$a->create_time)}}</font>
                                                </div>
                                            </div>
                                        </div><!--<div class="row" style="margin-top:0px;" >-->
                                    </div>
                                </div>
                            </div><!--<div class="row" style="margin-top:0px;">-->
                        </div><!--class="panel"-->
                            @endforeach
                        @endforeach
                    </div><!--<div class="col-sm-10 col-sm-offset-1">-->
                </div><!--<div class="row">-->
<!------------------------------------讨论区结束----------------------------------------->
<!---------------------------------------底部-------------------------------------------->
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-5">
                        <div class="panel panel-default" style="margin-bottom: 0px;">
                            <div class="panel-body">
                            <!-- <p style="text-align: center;color:#808080b5;">底部</p> -->
                                <p style="color:#808080b5;font-size: 14px;line-height: 50px;height: 50px;">
                                    weall.hd-Start Your Journey Of Learning
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
<!---------------------------------------结束-------------------------------------------->
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
    })
    </script>
    <script>
        function sendquestion(){
            var question = $("#user_questiont").val();
            $.ajax({
                type:"POST",
                url:"/project/question",
                dataType:"json",
                data:{
                    '_token':'{{csrf_token()}}',
                    "content":question,
                    "project_id":'{{$info->project_id}}'
                },
                success:function(data){
                    if(data){
                        var after = "<div class='panel' style='margin-left:110px;margin-bottom:5px;margin-top: 20px;' id=\""+"questionid"+data.question_id+"\"><div class='row' style='margin-top:25px;'><div class='panel panel-default' style='margin-left:0px;margin-bottom: 0px;'><div class='panel-body' style='padding:0px;width: 850px;background-color: #ff00000f;'><div class='row' style='margin-top:0px;' ><div class='col-md-1'><img alt='Brand' src=\"{{$user_info['headimage']}}\" style='height:45px;margin-top:0px;border-radius:50%;-webkit-border-radius:50%;-moz-border-radius:50%;'></div><div class='col-md-11'><p style='color:grey'>{{$user_info['account']}}<font style='color:#c11d1d;'>[<span class='fa fa-question' aria-hidden='true'></span>提问]</font></p><p>"+data.content+"</p><div class='col-md-3 col-md-offset-9' style='padding-left: 0px;'><font style='color:grey'>"+data.create_time+"</font></div></div></div></div><div class='panel-footer' style='padding-right: 0px;padding-top: 0px;padding-left: 10px;padding-bottom: 0px;width: 850px;'>我的回答：<input type='text' style='width: 500px;' id=\"forquestion"+data.question_id+"\"><input type='button' class='btn btn-primary btn-xs' onclick=\"answer('"+data.question_id+"');\" value='回答'></div></div></div></div>";

                            $("#field_question").after(after); 
                            $("#user_questiont").val(""); 
                    }else{
                        alert("发送失败");
                    }

                },
                error:function(){
                    alert("错误");
                }
            });
        };

        function answer(question_id){
            var answer = $("#forquestion"+question_id).val();
            $.ajax({
                type:"POST",
                url:"/project/answer",
                dataType:"json",
                data:{
                    '_token':'{{csrf_token()}}',
                    "question_id":question_id,
                    "info":answer
                },
                success:function(data){
                    if(data){
                        var after = "<div class='panel' style='margin-left:110px;margin-bottom:0px;' id='answertoquestion"+data.answer_id+"'><div class='row' style='margin-top:0px;'><div class='panel panel-default' style='margin-left:0px;margin-bottom:0px;'><div class='panel-body' style='padding:0px;width:850px;background-color: #0000ff14'><div class='row' style='margin-top:0px;' ><div class='col-md-1'><img alt='Brand' src=\"{{$user_info['headimage']}}\" style='height:45px;margin-top: 0px;border-radius:50%;-webkit-border-radius:50%;-moz-border-radius:50%;'></div><div class='col-md-11'><p style='color:grey'>{{$user_info['account']}}<font style='color:green;'>[<span class='fa fa-check' aria-hidden='true'></span>回答]</font></p><p>"+data.info+"</p><div class='col-md-3 col-md-offset-9' style='padding-left: 0px;'><font style='color:grey'>"+data.create_time+"</font></div></div></div></div></div></div></div>";
                            $("#questionid"+question_id).after(after); 
                            $("#forquestion"+question_id).val(""); 
                    }else{
                        alert("发送失败");
                    }

                },
                error:function(){
                    alert("错误");
                }
            });
        }
    </script>
</html>