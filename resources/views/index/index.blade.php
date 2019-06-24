<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>weall.hd</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template" />

	

  	<!-- Facebook and Twitter integration -->
	

	<!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="static/index/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="static/index/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="static/index/css/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="static/index/css/style.css">
	<!-- Modernizr JS -->
	<script src="static/index/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						<li class="active"><a href="resource/index">首页</a></li>
						<li class="has-dropdown">
							<a href="#">服务</a>
							<ul class="dropdown">
								<li><a href="#">个人资源</a></li>
								<li><a href="#">群组资源</a></li>
								<li><a href="#">资源库</a></li>
							</ul>
						</li>
						<li><a href="contact.html">联系</a></li>
						@if(empty($account))
						<li class="btn-cta"><a href="account/register"><span>登录/注册</span></a></li>
						@else
						<li class="btn-cta"><a href="myself/index"><span>个人中心</span></a></li>
						@endif
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(static/index/images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h2>Start Your Journey Of Learning</h2>
							<div class="row">
								<form class="form-inline" id="fh5co-header-subscribe" method="get" action="/resource/result/video" target="block">
									<div class="col-md-8 col-md-offset-2">
										<div class="form-group">
											<input type="text" class="form-control" name="searchcon" id="content" placeholder="检索资源">
											<button type="submit" class="btn btn-default">搜索</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>


    

	<div id="fh5co-services" class="fh5co-bg-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-eye"></i>
						</span>
						<h3>个人资源</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-command"></i>
						</span>
						<h3>群组资源</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 text-center">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-power"></i>
						</span>
						<h3>资源库</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="fh5co-project">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Want Some Cool Stuff</span>
					<h2>Our Project</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
		</div>
		<div class="project-content">
			<div class="col-half">
				<div class="project animate-box" style="background-image:url(static/index/images/project-3.jpg);">
					<div class="desc">
						<span>Application</span>
						<h3>Project Name</h3>
					</div>
				</div>
			</div>
			<div class="col-half">
				<div class="project-grid animate-box" style="background-image:url(static/index/images/project-5.jpg);">
					<div class="desc">
						<span>Illustration</span>
						<h3>Project Name</h3>
					</div>
				</div>
				<div class="project-grid animate-box" style="background-image:url(static/index/images/project-2.jpg);">
					<div class="desc">
						<span>Branding</span>
						<h3>Project Name</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	


	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Lets Get Started</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-md-offset-3 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Get In Touch</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	
	

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="static/index/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="static/index/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="static/index/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="static/index/js/jquery.waypoints.min.js"></script>
	<!-- Main -->
	<script src="static/index/js/main.js"></script>
	<script src="/static/tools/js/classie.js"></script>
    <script src="/static/tools/js/uiMorphingButton_fixed.js"></script>
	</body>
</html>

