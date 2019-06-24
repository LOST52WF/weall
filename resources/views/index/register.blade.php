<!DOCTYPE html>
<html lang="zh" class="no-js">
	<head>
		<title>登录&注册</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="stylesheet" type="text/css" href="/static/register/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="/static/register/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="/static/register/css/component.css" />
		<link rel="stylesheet" type="text/css" href="/static/register/css/content.css" />
		<script src="/static/register/js/modernizr.custom.js"></script>
		<script src="/static/tools/js/jquery-3.2.1.min.js"></script>
	</head>
	<body>
		<div class="container">
			<header class="codrops-header">
				<h1>Start Your Journey Of Learning</h1>
				<p>一个整理与分享的学习网站</p><!--
				<nav class="codrops-demos">
					<a class="current-demo" href="index.html">Login/Signup</a>
					<a href="index2.html">1</a>
					<a href="index3.html">2</a>
					<a href="index4.html">3</a>
					<a href="index5.html">4</a>
					<a href="index6.html">5</a>
					<a href="index7.html">6</a>
				</nav>-->
			</header>
			<section>
				<p><font size="2em">注册时请仔细检查您的账号,密码,邮箱。注册完成后将无法修改您的绑定邮箱。</font></p>
				<div class="mockup-content">
					<p ></p>
					<div class="morph-button morph-button-modal morph-button-modal-2 morph-button-fixed">
						<button type="button" >登录</button>
						<div class="morph-content">
							<div>
								<div class="content-style-form content-style-form-1">
									<span class="icon icon-close">Close the dialog</span>
									<h2><b>登录</b></h2>  <!--登录 -->
									<form name="form" action="login" method="post">
										<input type="hidden" name="_token" value="{{ csrf_token() }}" />
										<p><label>电子邮箱/账号</label><input type="text" name="email" /></p>
										<p><label>密码</label><input type="password" name="pwd" /></p>
										<p><input type="submit" value="登录" style="
										    display: block;
										    margin-top: 2.5em;
    				    					padding: 1.5em;
    										width: 100%;
    										border: none;
      										background: #e75854;
    										color: #f9f6e5;
    										text-transform: uppercase;
    										letter-spacing: 1px;
    										font-weight: 800;
    										font-size: 1.25em;">
    									</p>
									</form>
								</div>
							</div>
						</div>
					</div><!-- morph-button -->
					<strong class="joiner">or</strong>
					<div class="morph-button morph-button-modal morph-button-modal-3 morph-button-fixed">
						<button type="button">注册</button>
						<div class="morph-content">
							<div>
								<div class="content-style-form content-style-form-2">
									<span class="icon icon-close">Close the dialog</span>
									<h2><b>注册</b></h2>
									<form  action="signup" method="post">
										<input type="hidden" name="_token" value="{{ csrf_token() }}" />
										<p><label>账号</label><input type="text" name="account"/></p>
										<p><label>电子邮箱</label><input type="text" name="email" /></p>
										<p><label>密码</label><input type="password" name="password" /></p>
										<p><label>重复密码</label><input type="password" /></p>
										<p><input type="submit" value="注册" style="
										    display: block;
										    margin-top: 2.5em;
    				    					padding: 1.5em;
    										width: 100%;
    										border: none;
      										background: #e75854;
    										color: #f9f6e5;
    										text-transform: uppercase;
    										letter-spacing: 1px;
    										font-weight: 800;
    										font-size: 1.25em;">
    									</p>
									</form>
								</div>
							</div>
						</div>
					</div><!-- morph-button -->
					<p>Powered by Laravel MySQL Redis Bootstrap</p>
				</div><!-- /form-mockup -->
			</section>
		</div><!-- /container -->
		<script src="/static/register/js/classie.js"></script>
		<script src="/static/register/js/uiMorphingButton_fixed.js"></script>
		<script>
			(function() {
				var docElem = window.document.documentElement, didScroll, scrollPosition;

				// trick to prevent scrolling when opening/closing button
				function noScrollFn() {
					window.scrollTo( scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0 );
				}

				function noScroll() {
					window.removeEventListener( 'scroll', scrollHandler );
					window.addEventListener( 'scroll', noScrollFn );
				}

				function scrollFn() {
					window.addEventListener( 'scroll', scrollHandler );
				}

				function canScroll() {
					window.removeEventListener( 'scroll', noScrollFn );
					scrollFn();
				}

				function scrollHandler() {
					if( !didScroll ) {
						didScroll = true;
						setTimeout( function() { scrollPage(); }, 60 );
					}
				};

				function scrollPage() {
					scrollPosition = { x : window.pageXOffset || docElem.scrollLeft, y : window.pageYOffset || docElem.scrollTop };
					didScroll = false;
				};

				scrollFn();

				[].slice.call( document.querySelectorAll( '.morph-button' ) ).forEach( function( bttn ) {
					new UIMorphingButton( bttn, {
						closeEl : '.icon-close',
						onBeforeOpen : function() {
							// don't allow to scroll
							noScroll();
						},
						onAfterOpen : function() {
							// can scroll again
							canScroll();
						},
						onBeforeClose : function() {
							// don't allow to scroll
							noScroll();
						},
						onAfterClose : function() {
							// can scroll again
							canScroll();
						}
					} );
				} );

				// for demo purposes only
				[].slice.call( document.querySelectorAll( 'form button' ) ).forEach( function( bttn ) { 
					bttn.addEventListener( 'click', function( ev ) { ev.preventDefault(); } );
				} );
			})();
		</script>
		<script type="text/javascript">
			$(function(){
				
			});
		</script>
	</body>
</html>