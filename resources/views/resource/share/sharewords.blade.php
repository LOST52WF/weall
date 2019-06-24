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
        /* 重置文本格式元素 */
        .clearfix::after{ 
            display:block; 
            content:''; 
            height:0; 
            overflow:hidden; 
            clear:both;
        } 

        /*星星样式*/
        .title{ 
            font-size:14px; 
            background:#dfdfdf; 
            padding:10px; 
            margin-bottom:10px;
        }
        .block{ 
            width:100%; 
            margin:0 0 20px 0; 
            padding-top:10px; 
            padding-left:50px; 
            line-height:21px;
        }
        .block .star_score{ 
            float:left;
        }
        .star_list{
            height:21px;
            margin:50px; 
            line-height:21px;
        }
        .block p,.block .attitude{ 
            padding-left:20px; 
            line-height:21px; 
            display:inline-block;
        }
        .block p span{ 
            color:#C00; 
            font-size:16px; 
            font-family:Georgia, "Times New Roman", Times, serif;
        }

        .star_score { 
            background:url(images/stark2.png); 
            width:160px; 
            height:21px;  
            position:relative; 
        }

        .star_score a{ 
            height:21px; 
            display:block; 
            text-indent:-999em; 
            position:absolute;
            left:0;
        }

        .star_score a:hover{ 
            background:url(images/stars2.png);
            left:0;
        }

        .star_score a.clibg{ 
            background:url(images/stars2.png);
            left:0;
        }

        #starttwo .star_score { 
            background:url(/static/score/images/starky.png);
        }

        #starttwo .star_score a:hover{ 
            background:url(/static/score/images/starsy.png);
            left:0;
        }

        #starttwo .star_score a.clibg{ 
            background:url(/static/score/images/starsy.png);
            left:0;
        }

        /*星星样式*/

        .show_number{ 
            padding-left:50px; 
            padding-top:20px;
        }

        .show_number li{ 
            width:240px; 
            border:1px solid #ccc; 
            padding:10px; 
            margin-right:5px; 
            margin-bottom:20px;
        }

        .atar_Show{
            background:url(images/stark2.png); 
            width:160px; height:21px;  
            position:relative; 
            float:left; 
        }

        .atar_Show p{ 
            background:url(images/stars2.png);
            left:0; 
            height:21px; 
            width:134px;
        }

        .show_number li span{ 
            display:inline-block; 
            line-height:21px;
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
                            <li><a href="/bbs/index/1">论坛</a></li>
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
<!-------------------------------------------主体部分--------------------------------------------->
        <div class="content" style="background-color: white">
            <div class="row animated fadeInUp">
                <div class="row" style="margin-top:10px;height: 250px;">
                    <div class="col-md-9 col-md-offset-1" style="height: 250px;"> 
                        <div class="panel panel-default" style="margin-top: 20px; margin-left: 45px;margin-bottom:0px;height: 300px;">
                            <div class="panel-body" style="padding-bottom: 0px;">
                                <div class="row">
                                    <div class="col-sm-3" style="padding: 0px;">
                                        <div class="thumbnail" style="border:0px;">
                                          <img src="/static/img/book.png" alt="book">
                                        </div>
                                    </div>
                                    <div class="col-sm-3" style="padding: 0px;">
                                        <p style="visibility:hidden;font-size: 20px;">NULL</p>
                                        <h3>{{$data->title}}</h3>
                                        <p>
                                            <font style="color:grey;">上传者:</font>
                                            {{$data->account}}
                                        </p>
                                        <p>
                                            <font style="color:grey;">上传时间:</font>
                                            {{date("Y-m-d H:i",$data->upload_time)}}
                                        </p>
                                        <p>
                                            <font style="color:grey;">标签:</font>
                                            {{$data->tag}}
                                        </p>
                                        <p>
                                            <font style="color:grey;">点击次数:</font>
                                            {{$data->click}}
                                        </p>
                                        <p>
                                            <font style="color:grey;">原创/转载声明：</font>
                                            {{$data->spead}}
                                        </p>
                                    </div>
                                    <div class="col-sm-2 col-sm-offset-1" style="padding: 0px;margin-top: 80px;">
                                      <div class="row">
                                @if($sc['sc']==1)
                                    <button class="btn btn-default" onclick="collect('{{$data->resource_id}}')" id='collectbtn' >
                                    <span class="glyphicon glyphicon-star-empty" aria-hidden="true">
                                    </span>收藏
                                    </button>
                                @else
                                    <button class="btn btn-default" onclick="collect('{{$data->resource_id}}')" id='collectbtn' style="background-color:yellow;">
                                    <span class="glyphicon glyphicon-star-empty" aria-hidden="true">
                                    </span>已收藏
                                    </button>
                                @endif
                                    </div>
                                    <div class="row" style="margin-top: 0PX;">
                                        <div id="starttwo" class="block clearfix" style=" padding-left: 0px;">
                                            <div  class="star_score" onclick="submit_score('{{$data->resource_id}}')">
                                            </div>
                                            <br>
                                            <p style="float:left;padding-left: 0px;margin-bottom: 0px;">您的评分：<span class="fenshu">{{$sc['score']}}</span> 分</p>
                                            <p style="padding-left: 0px;margin-bottom:0px;">
                                                共有<font id="score_count">{{$sc['count']}}</font>人打分
                                            </p>
                                            <p style="padding-left: 0px;margin-bottom:0px;">
                                                平均分为：<font id="score_average">{{$sc['average']}}</font>分
                                            </p>
                                        </div>  
                                    </div>
                                    </div>
                                    <div class="col-sm-3" style="padding: 0px;padding-bottom:0px;">
                                        <p style="visibility:hidden;font-size: 5px;margin-bottom: 0px;">NULL</p>
                                        <a href="/share/view/words/{{$data->resource_id}}">
                                            <button class="btn btn-default" style="padding:0px;width: 182px;height: 102px;background-color:#ff7600;">
                                                <font style="color:white">在线阅读</font>
                                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="color:white">     
                                                </span>
                                            </button>
                                        </a>
                                        <a href="/share/download/words/{{$data->resource_id}}" target="_blank">
                                            <button class="btn btn-default" style="padding:0px;width: 182px;height: 102px;background-color:#0066ff;">
                                                <font style="color:white">下载</font>
                                                <span class="glyphicon glyphicon-save" aria-hidden="true" style="color:white">     
                                                </span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!-------------------------------------------主体结束--------------------------------------------->
<!---------------------------------------------推荐----------------------------------------------->
                <div class=" col-md-9 col-md-offset-1" style="margin-top: 10px;">
                    <div class="panel panel-default" style="margin-left:60px;width: 960px;">
                        <div class="panel-heading" style="padding-top: 6px;padding-bottom: 6px;background: rgba(0,0,0,0);margin-top:0px;">
                            <h4 style="margin: 0px;">相关项目推荐</h4>
                        </div>
                        <div class="panel-body" style="padding-left: 0px;padding-bottom: 0px;">
                            <div class="row">
                            @foreach($link as $v)
                                <div class="col-md-2" style="width:189px;margin-left:0px;padding:0px;">
                                    <a href="/project/item/{{$v->project_id}}" target="_blank" style="color:#333;text-decoration:none;">
                                        <div class="thumbnail" style="border:0px;margin-bottom: 0px;margin-top: 5px;">
                                            <img src="{{$v->picture_url}}" alt="图片" style="height: 95px;width: 171px;">
                                            <div style="margin-left: 7px;">
                                                <font style="color:grey;">{{$v->title}}</font>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                            </div><!--<div class="row">-->
                        </div>
                    </div><!--panel--> 
                </div>
<!---------------------------------------------结束----------------------------------------------->
<!--------------------------------------------评论区---------------------------------------------->
        <div class=" col-md-9 col-md-offset-1">
            <div class="panel panel-default" style="margin-left:60px;width: 960px;">
                <div class="panel-heading" style="padding-top: 6px;padding-bottom: 6px;background: rgba(0,0,0,0);margin-top: 20px;">
                    <h3 style="margin: 0px;" >评论</h3>
                </div>
                <div class="panel-body">
                    <div class="row" style="margin-top:0px;" >
                        <div class="col-md-2" style="padding-right: 0px;">
                            <span class="input-group-addon" style=" height: 74px;border:0px;border-bottom-left-radius: 5px;border-top-left-radius: 5px;">我的评论</span>
                            </div>
                        <div class="col-md-7" style="padding-left: 0px;padding-right: 10px;">
                            <textarea name="textareaname" id="user_comment" rows="3" cols="5" style="height: 75px; width:550px; margin: 0px;resize:none;border-bottom-right-radius: 5px;border-top-right-radius: 5px;"></textarea>
                        </div>
                        <div class="col-md-2" style="padding-left: 20px;width: 140px;">
                            <span class="input-group-addon" onclick="sendcomment();" style="background-color:#0066ff;color:white;height: 74px;border-radius: 5px;">
                                发送
                            </span>
                        </div>
                    </div>
                </div>
            </div>  
            @if(!empty($comment['hot']))
                @foreach($comment['hot'] as $h)
                    <div class="panel panel-default" style="margin-left:60px;width: 960px;">
                        <div class="panel-body">
                            <div class="row" style="margin-top:0px;" >
                                <div class="col-md-1">
                                    <img alt="Brand" src="{{$h->headimage}}" style="height:45px;margin-top: 0px;border-radius:50%;-webkit-border-radius:50%;-moz-border-radius:50%;">
                                </div>
                                <div class="col-md-11">
                                    <p style="color:grey">{{$h->account}}</p>
                                    <p>{{$h->content}}
                                    </p>
                                    <div class="col-md-3" style="padding-left: 0px;">
                                        <font style="color:grey">{{date("Y-m-d H:i",$h->upload_time)}}</font>
                                    </div>
                                    <div class="col-md-1 col-md-offset-2" style="margin-left: 0px;padding-left: 0px;">
                                        <button type="button" class="btn btn-default btn-xs" style="border:0px;" onclick="zan({{$h->id}});">
                                             <span class="fa fa-thumbs-o-up" aria-hidden="true">
                                             </span>       
                                        </button><font style="color:grey" id="zan{{$h->id}}">{{$h->p_click}}</font>
                                    </div>
                                    <div class="col-md-3" style="margin-left: 0px;padding-left: 0px;">
                                        <button type="button" class="btn btn-default btn-xs"  style="border:0px;" onclick="xu({{$h->id}});">
                                              <span class="fa fa-thumbs-o-down" aria-hidden="true">
                                             </span>  
                                        </button><font style="color:grey" id="xu{{$h->id}}">{{$h->c_click}}</font>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach 
                    <p style="text-align: center;font-size: 12px;color: blue">以上为热评</p>
                    <div class="divider"></div> 
            @else
                    <div class="divider"></div> 
            @endif  
            <!------------------------------热评部分结束------------------------------->
                <div id="comment">
            @if(!empty($comment['first']))
                @foreach($comment['first'] as $f)
                    <div class="panel panel-default" style="margin-left:60px;width: 960px;">
                        <div class="panel-body">
                            <div class="row" style="margin-top:0px;" >
                                <div class="col-md-1">
                                    <img alt="Brand" src="{{$f->headimage}}" style="height:45px;margin-top: 0px;border-radius:50%;-webkit-border-radius:50%;-moz-border-radius:50%;">
                                </div>
                                <div class="col-md-11">
                                    <p style="color:grey">{{$f->account}}</p>
                                    <p>{{$f->content}}
                                    </p>
                                    <div class="col-md-3" style="padding-left: 0px;">
                                        <font style="color:grey">{{date("Y-m-d H:i",$f->upload_time)}}</font>
                                    </div>
                                    <div class="col-md-1 col-md-offset-2" style="margin-left: 0px;padding-left: 0px;">
                                        <button type="button" class="btn btn-default btn-xs" style="border:0px;" onclick="zan({{$f->id}});">
                                             <span class="fa fa-thumbs-o-up" aria-hidden="true">
                                             </span>       
                                        </button><font style="color:grey" id="zan{{$f->id}}">{{$f->p_click}}</font>
                                    </div>
                                    <div class="col-md-3" style="margin-left: 0px;padding-left: 0px;">
                                        <button type="button"  class="btn btn-default btn-xs"  style="border:0px;" onclick="xu({{$f->id}});">
                                              <span class="fa fa-thumbs-o-down" aria-hidden="true">
                                             </span>  
                                        </button><font style="color:grey" id="xu{{$f->id}}">{{$f->c_click}}</font>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                
                @endforeach
            @endif
                </div><!---<div id="comment">--->
                <div style="text-align: center">
                    <button type="button" onclick="load_comment();" class="btn btn-default" style="width: 500px;">
                        点击加载评论
                    </button>
                </div>
        </div><!--<div class=" col-md-9 col-md-offset-1">---->
<!---------------------------------------------结束----------------------------------------------->
            </div><!--<div class="row animated fadeInUp">-->
        </div><!--<div class="content">-->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/static/score/js/starScore.js"></script>
    <script>
        function zan(a){
            var comment_id = a;
            $.ajax({
                type:"POST",
                url:"/share/comment/zan",
                dataType:"json",   
                data:{
                    '_token':'{{csrf_token()}}',
                    'comment_id':comment_id,
                },  
                success: function(data){
                    if(data==1){
                        var zannum = $("#zan"+comment_id+"").text();
                        $("#zan"+comment_id+"").html(++zannum);
                        $("#zan"+comment_id+"").prev().attr("disabled","disabled");
                    }   
                },  
                error:function(){

                }         
            })
        }

        function xu(a){
            var comment_id = a;
            $.ajax({
                type:"POST",
                url:"/share/comment/xu",
                dataType:"json",   
                data:{
                    '_token':'{{csrf_token()}}',
                    'comment_id':comment_id,
                },  
                success: function(data){
                    if(data==1){
                        var zannum = $("#xu"+comment_id+"").text();
                        $("#xu"+comment_id+"").html(++zannum);
                        $("#xu"+comment_id+"").prev().attr("disabled","disabled");
                    }   
                },  
                error:function(){

                }         
            })
        }

        function sendcomment(){
            var user_comment = $("#user_comment").val();
            if(user_comment!=''){
            $.ajax({
                type:"POST",
                url:"/share/comment/send",
                dataType:"json",
                data:{
                    '_token':'{{csrf_token()}}',
                    'resource_id':'{{$data->resource_id}}',
                    'content':user_comment,
                    'user_id':"{{$user_info['user_id']}}",
                    'upload_time':'{{time()}}'
                },
                success:function(data){
                    console.log(data);
                    var preapp = "<div class='panel panel-default' style='margin-left:60px;width: 960px;'><div class='panel-body'><div class='row' style='margin-top:0px;'><div class='col-md-1'><img alt='Brand' src="+"{{$user_info['headimage']}}"+" style='height:45px;margin-top: 0px;border-radius:50%;-webkit-border-radius:50%;-moz-border-radius:50%;'></div><div class='col-md-11'><p style='color:grey'>"+"{{$user_info['account']}}"+"</p><p>"+user_comment+"</p><div class='col-md-3' style='padding-left: 0px;'><font style='color:grey'>"+data.time+"</font></div><div class='col-md-1 col-md-offset-2' style='margin-left: 0px;padding-left: 0px;'><button type='button' class='btn btn-default btn-xs' style='border:0px;' onclick='zan("+data.id+");'><span class='fa fa-thumbs-o-up' aria-hidden='true'></span></button><font style='color:grey' id='zan"+data.id+"'>0</font></div><div class='col-md-3' style='margin-left: 0px;padding-left: 0px;'><button type='button' class='btn btn-default btn-xs' style='border:0px;' onclick='xu("+data.id+")'><span class='fa fa-thumbs-o-down' aria-hidden='true'></span></button><font style='color:grey' id='xu"+data.id+"'>0</font></div></div></div></div></div>";
                        $("#comment").prepend(preapp); 
                        $("#user_comment").val('');                    
                },
                error:function(){
                    alert("error");
                }
            });
            }
        }


        var load_num=1;
        function load_comment()
        {
            $.ajax({
                type:"GET",
                url:"/share/load_comment/{{$data->resource_id}}/"+load_num,
                success:function(data){
                    var ob = JSON.parse(data);
                    var str = '';
                    for (var i = 0, len = ob.length; i < len; i++) 
                    {
                    var preapp = "<div class='panel panel-default' style='margin-left:60px;width: 960px;'><div class='panel-body'><div class='row' style='margin-top:0px;'><div class='col-md-1'><img alt='Brand' src="+ob[i].headimage+" style='height:45px;margin-top: 0px;border-radius:50%;-webkit-border-radius:50%;-moz-border-radius:50%;'></div><div class='col-md-11'><p style='color:grey'>"+ob[i].account+"</p><p>"+ob[i].content+"</p><div class='col-md-3' style='padding-left: 0px;'><font style='color:grey'>"+UnixToDate(ob[i].upload_time,'Y-m-d')+"</font></div><div class='col-md-1 col-md-offset-2' style='margin-left: 0px;padding-left: 0px;'><button type='button' class='btn btn-default btn-xs' style='border:0px;' onclick='zan("+ob[i].id+");'><span class='fa fa-thumbs-o-up' aria-hidden='true'></span></button><font style='color:grey' id='zan"+ob[i].id+"'>0</font></div><div class='col-md-3' style='margin-left: 0px;padding-left: 0px;'><button type='button' class='btn btn-default btn-xs' style='border:0px;' onclick='xu("+ob[i].id+")'><span class='fa fa-thumbs-o-down' aria-hidden='true'></span></button><font style='color:grey' id='xu"+ob[i].id+"'>0</font></div></div></div></div></div>";
                        $("#comment").append(preapp); 
                    }
                },
                error:function(){
                    alert("error")
                }
            });
            load_num++;
        }




function UnixToDate(unixTime, isFull, timeZone) {
    if (typeof (timeZone) == 'number'){
        unixTime = parseInt(unixTime) + parseInt(timeZone) * 60 * 60;
    }
    var time = new Date(unixTime * 1000);
    var ymdhis = "";
    ymdhis += time.getUTCFullYear() + "-";
    ymdhis += (time.getUTCMonth()+1) + "-";
    ymdhis += time.getUTCDate();
    if (isFull === true){
        ymdhis += " " + time.getUTCHours() + ":";
        ymdhis += time.getUTCMinutes() + ":";
    }
    return ymdhis;
}
    </script>
    <script type="text/javascript">
        var num=1;
        var tik = '';
        function collect(resource_id)
        {   
            if(num==1){
                tik = 'collect';
                num=2;
            }else if(num==2){
                tik =  'dontcollect';
                num=1;
            }

        $.ajax({
            type:"POST",
            url:"/share/collect",
            dataType:"json",
            data:{
                '_token':'{{csrf_token()}}',
                'resource_id':resource_id,
                'tik':tik  
            },
            success:function(data){
                if(data==1){
                    $("#collectbtn").html("<span class='glyphicon glyphicon-star-empty' aria-hidden='true'>已收藏");
                    $("#collectbtn").css("background-color","yellow");
                }else{
                    $("#collectbtn").html("<span class='glyphicon glyphicon-star-empty' aria-hidden='true'>收藏");
                    $("#collectbtn").css("background-color","");
                }
            }
        })
        }

    </script>
    <script>
     scoreFun($("#starttwo"),{
           fen_d:22,//每一个a的宽度
           ScoreGrade:5//a的个数5
         });
     //显示分数
      $(".show_number li p").each(function(index, element) {
        var num=$(this).attr("tip");
        var www=num*2*16;//
        $(this).css("width",www);
        $(this).parent(".atar_Show").siblings("span").text(num+"分");
    });
    </script>
    <script type="text/javascript">
        function submit_score(resource_id){
            var fenshu = $(".fenshu").html();
            var count = $("#score_count").html();
            var average = $("#score_average").html();
            $.ajax({
                type:"POST",
                url:"/share/score",
                dataType:"json",
                data:{
                    '_token':'{{csrf_token()}}',
                    'fenshu':fenshu,   //用户打的分数
                    'count':count,     //总共打分的人数
                    'average':average, //平均分
                    'resource_id':resource_id  //资源ID
                },
                success:function(data){
                    if(data){
                        $("#score_count").html(data.count);
                        $("#score_average").html(data.average);
                        //alert(data);
                    }else{
                        alert("评分失败");
                    }
                }
            })
        }
    </script>
  </body>
</html>