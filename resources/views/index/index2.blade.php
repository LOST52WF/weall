<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>weall.hd</title>
        <link href="/static/tools/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
        <link rel="stylesheet" href="/static/index/try/css/style.css" type="text/css" media="all" charset="utf-8"/>
        <style>
            .jumbotron{
                background:url(static/index/images/bj.jpg);
                padding-top: 0px;
    			      height: 662px;
    			      margin:0px;
            }
            .headnav{
            	margin-left: 5px; 
            	margin-right: 5px;
            }
            .row{
            	margin-left: 0px;
            	margin-right:0px;
            }
            .showmap{
            	background: rgb(255, 255, 255);
            	width: 210px;
            	height: 160px;
            }
          /*三方面介绍*/
          .specil-show-box{
            width: 100%;
            height: 350px;
            background: #f2f2f2;
          }
          .specil-show-center{
            width: 800px;
            height: 100%;
            display: flex;
            margin: 0 auto;
            justify-content: space-between;
            align-items: center;
          }
          .one-specil-show{
            width: 25%;
            height: 100%;
            /*background-color: blue;*/
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
          }
          .one-specil-icon-box{
            width: 155px;
            height: 155px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(0,128,255,0.3);
          }
          .one-specil-icon{
            width: 140px;
            height: 140px;
            border-radius: 50%;
            background: #0276ff;
          }
          .one-specil-name{
            font-size: 18px;
            margin: 10px 0px;
            font-weight: bold;
          }
          .one-specil-decri{
            text-align: center;
          }
        </style>
    </head>
    <body style="margin: 0px;">
    	<div class="jumbotron" style="height: 450px;">
  			<div class="container" style="margin-top: 0px;">
  				<div class="row">
  					<div class="col-sm-3 col-sm-offset-9">
  						<p style="margin-top: 15px;">
  							<a href="/project/index"  class="headnav" style="text-decoration: none;">
  								<font style="color:white;font-size:15px;">项目</font>
  							</a>
  							<a href="/project/index"  class="headnav" style="text-decoration: none;">
  								<font style="color:white;font-size:15px;">论坛</font>
  							</a>
  							<a href="/resource/index" class="headnav" style="text-decoration: none;">
  								<font style="color:white;font-size:15px;">资源库</font>
  							</a>
  							@if(empty($account))
  							<a class="btn btn-danger pull-right" href="/account/register" role="button">
  								登录/注册
  							</a>
  							@else
  							<a class="btn btn-danger pull-right" href="myself/index" role="button">
  								个人中心
  							</a>  							
  							@endif
  						</p>
  					</div>
  				</div>
  				<div class="row" style="margin-top: 150px;">
  					<div class="col-sm-8 col-sm-offset-2">
	                    <form method="get" action="/resource/result/video" target="block">
                          	<div class="input-group" >
                              	<input type="text" class="form-control"  name="searchcon" placeholder="Search" autoComplete="off" style="
                                    height: 48px;
                                    border-top-left-radius: 3px;
                                    border-bottom-left-radius: 3px;
                                ">
                              	<span class="input-group-btn">
                               		<button class="btn btn-default" style="width: 106px;height: 48px;background-color: #ffeb00;border: 0px;">
                                		<font style="font-size: 15px;font-weight: 7px;">搜索</font>
                                	</button>
                              	</span>
                          	</div><!-- /input-group -->
                    	</form>
            </div>
  				</div>
  				<div class="row" style="margin-top:5px;" >
  					<div class="col-sm-4 col-sm-offset-5">
  						<p style="font-size: 10px;color:white;">weall.hd-开启你的学习之旅</p>
  					</div>
				</div>
  			</div>
		</div>
<!-------------------------------------------巨幕区-------------------------------------------->
		<div class="content">
			<div class="row animated fadeInUp" style="background-color: white;">
				<div class="row" >
					<div id="wrapper">
						<div id="content">
							<div id="view" style="margin: 0px;width: 0px;height: 0px;">
							</div>
							<div id="thumbs" style="margin-top:30px;height: 120px;">
								<div id="nav-left-thumbs" style="top: 70px;"><</div>
									<div id="pics-thumbs">
									@foreach($data as $v)
										@if($v->type=="video")
										<a href="/share/video/{{$v->resource_id}}" target="_blank">
											<img src="{{$v->picture_url}}" class="showmap" style="background: rgb(255, 255, 255);width: 210px;height: 130px;" />
										</a>
										@elseif($v->type=="words")
										<a href="/share/words/{{$v->resource_id}}" target="_blank">
											<img src="{{$v->picture_url}}" class="showmap" style="background: rgb(255, 255, 255);width: 210px;height: 130px;"/>
										</a>
										@elseif($v->type=="image")
										<a href="/share/image/{{$v->resource_id}}" target="_blank">
											<img src="{{$v->picture_url}}" class="showmap" style="background: rgb(255, 255, 255);width: 210px;height: 130px;"/>
										</a>
										@endif
									@endforeach
									</div>
								<div id="nav-right-thumbs" style="top: 70px;">></div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
                      <div class="panel">
                      	<div class="panel-heading">
                  		<h4><b>资源</b>推荐</h4>
                      	</div>
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="tabs">
                                        <ul class="nav nav nav-pills">
                                            <li class="active"><a href="#home" data-toggle="tab">视频</a></li>
                                            <li><a href="#profile" data-toggle="tab">文档</a></li>
                                            <li><a href="#messages" data-toggle="tab">图片</a></li>
                                            <li><a href="##" data-toggle="tab">更多>></a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="home">
<!---------------------------视频推荐----------------------------->
				<div class="row" style="margin-top: 10px;margin-left: 20px;">
                    @if($resource['video']!='')
                        @foreach($resource['video'] as $v)
                        <div class="col-sm-2" style="width:250px;margin-left:0px;padding-left:17px;padding-right: 17px;">
                        <a href="/share/video/{{$v->resource_id}}" target="_blank" style="color:#333;text-decoration: none;">
                            <div class="thumbnail" style="height: 200px;">
                                <img src="{{$v->picture_url}}" alt="图片" style="height: 120px;width: 240px;">
                                   <h5>
                                   		<font style="font-size:15px;">
                                   			{{$v->title}}
                                   		</font>
                                   </h5>
                                <div  style="color: grey;font-size:13px;">
                                    <span class="fa fa-calendar-o" aria-hidden="true"></span>
                                    {{date("m-d H:i",$v->upload_time)}}
                                </div>  
                            </div>
                        </a>
                        </div>
                        @endforeach    
                    @else 
                        <h4>暂无资源</h4>
                    @endif 
                </div>
<!---------------------------推荐结束----------------------------->
                                            </div>
                                            <div class="tab-pane fade" id="profile">
<!---------------------------文档推荐----------------------------->
				<div class="row" style="margin-top: 10px;margin-left: 20px;">
                    @if($resource['words']!='')
                        @foreach($resource['words'] as $v)
                        <div class="col-sm-2" style="width:250px;margin-left:0px;padding-left:17px;padding-right: 17px;">
                        <a href="/share/video/{{$v->resource_id}}" target="_blank" style="color:#333;text-decoration: none;">
                            <div class="thumbnail" style="height: 200px;">
                                <img src="{{$v->picture_url}}" alt="图片" style="height: 120px;width: 240px;">
                                   <h5>
                                   		<font style="font-size:15px;">
                                   			{{$v->title}}
                                   		</font>
                                   </h5>
                                <div  style="color: grey;font-size:13px;">
                                    <span class="fa fa-calendar-o" aria-hidden="true"></span>
                                    {{date("m-d H:i",$v->upload_time)}}
                                </div>  
                            </div>
                        </a>
                        </div>
                        @endforeach    
                    @else 
                        <h4>暂无资源</h4>
                    @endif 
                </div>
<!---------------------------推荐结束----------------------------->
                                            </div>
                                            <div class="tab-pane fade" id="messages">
<!---------------------------图片结束----------------------------->
				<div class="row" style="margin-top: 10px;margin-left: 20px;">
                    @if($resource['image']!='')
                        @foreach($resource['image'] as $v)
                        <div class="col-sm-2" style="width:250px;margin-left:0px;padding-left:17px;padding-right: 17px;">
                        <a href="/share/video/{{$v->resource_id}}" target="_blank" style="color:#333;text-decoration: none;">
                            <div class="thumbnail" style="height: 200px;">
                                <img src="{{$v->picture_url}}" alt="图片" style="height: 120px;width: 240px;">
                                   <h5>
                                   		<font style="font-size:15px;">
                                   			{{$v->title}}
                                   		</font>
                                   </h5>
                                <div  style="color: grey;font-size:13px;">
                                    <span class="fa fa-calendar-o" aria-hidden="true"></span>
                                    {{date("m-d H:i",$v->upload_time)}}
                                </div>  
                            </div>
                        </a>
                        </div>
                        @endforeach    
                    @else 
                        <h4>暂无资源</h4>
                    @endif 
                </div>
<!---------------------------推荐结束----------------------------->
                                            </div>
                                        </div>
                                    </div><!--<div class="tabs">-->
                                </div><!--<div class="col-sm-12">-->
                        	</div><!--<div class="row">-->
                    	</div><!--<div class="panel-content">-->
					</div><!--<div class="panel">-->
				  </div><!--<div class="col-sm-10 col-sm-offset-1">-->
				</div><!--<div class="row">-->
        <!-- 三个方面的介绍开始 -->
        <div class="specil-show-box">
          <div class="specil-show-center">
            <div class="one-specil-show">
              <div class="one-specil-icon-box"><div class="one-specil-icon">
                  <i class="fa fa-users" style="font-size:80px;color:#ececdf;margin-top: 30px;margin-left: 27px;"></i>
                </div></div>
              <div class="one-specil-name">资源群组</div>
              <div class="one-specil-decri">多人可创建群组<br>共享空间，分享资源<br>共同学习更方便</div>
            </div>
            <div class="one-specil-show">
              <div class="one-specil-icon-box"><div class="one-specil-icon">
                <i class="fa fa-database" style="font-size:80px;color:#ececdf;margin-top: 30px;margin-left: 35px;"></i>
              </div></div>
              <div class="one-specil-name">项目库</div>
              <div class="one-specil-decri">共享项目资源<br>驱动学习，转化能力<br>辅助推荐资源</div>
            </div>
            <div class="one-specil-show">
              <div class="one-specil-icon-box"><div class="one-specil-icon">
                <i class="fa fa-comments-o" style="font-size:90px;color:#ececdf;margin-top: 27px;margin-left: 27px;"></i>
              </div></div>
              <div class="one-specil-name">论坛</div>
              <div class="one-specil-decri">促进交流<br>求资源，解难题<br>使学习变得更简单</div>
            </div>
          </div>
        </div>
        <!-- 三个方面的介绍结束 -->
<!------------------------------底部------------------------------->
                <div class="row">
                    <div class="panel panel-default" style="margin-bottom: 0px;">
                        <div class="panel-body">
                            <!-- <p style="text-align: center;color:#808080b5;">底部</p> -->
                            <p style="text-align: center;color:#808080b5;font-size: 14px;line-height: 50px;height: 50px;">
                                weall.hd-Start Your Journey Of Learning
                            </p>
                        </div>
                    </div>
                </div>
<!------------------------------------------主体结束-------------------------------------------->
            </div><!--<div class="row animated fadeInUp">-->
        </div><!--<div class="content">-->
    <script src="/static/tools/js/jquery-3.2.1.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="/static/tools/js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function() {
		$('#view').setZoomPicture({
			thumbsContainer: '#pics-thumbs',
			prevContainer: '#nav-left-thumbs',
			nextContainer: '#nav-right-thumbs',
			zoomContainer: '#zoom',
			zoomLevel: 2,
			loadMsg: 'Chargement...'
		}); 
	});
		</script>
  </body>
</html>