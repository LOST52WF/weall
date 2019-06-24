<!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>多资多彩后台登录界面</title>
	<link rel="stylesheet" type="text/css" href="/static/admin/css/styles.css">
	<!--[if IE]>
		<script src="http://libs.baidu.com/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="jq22-container" style="padding-top:0px;">
		<div class="login-wrap">
			<div class="login-html">
				<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">登录</label>
				<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
				<div class="login-form">
					<div class="sign-in-htm">
						<form method="post" action="/admin/login_post">
							{!!csrf_field()!!}
							<div class="group">
								<label for="user" class="label">用户名</label>
								<input id="user" type="text" class="input" autoconplete="off" name="admin_name">
							</div>
							<div class="group">
								<label for="id" class="label">工号</label>
								<input id="id" type="text" class="input" value=''name="id">
							</div>
							<div class="group">
								<label for="pass" class="label">密码</label>
								<input id="pass" type="password" class="input" value='' name="password">
							</div>
							<div class="group">
								<input type="submit" class="button" value="登录">
							</div>
						</form>
						<div class="hr"></div>
						<div class="foot-lnk">
							<a href="">多资多彩后台登录</a>
							<br>
							<p>weall.hd</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>