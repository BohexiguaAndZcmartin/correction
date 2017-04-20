<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title></title>
		<base href="<?php echo site_url()?>">
		<link rel="stylesheet" href="assets/css/core.css" />
		<link rel="stylesheet" href="assets/css/menu.css" />
		<link rel="stylesheet" href="assets/css/amazeui.css" />
		<link rel="stylesheet" href="assets/css/component.css" />
		<link rel="stylesheet" href="assets/css/page/form.css" />
	</head>
	<body>
		<div class="account-pages">
			<div class="wrapper-page">
				<div class="text-center">
	                <a href="index.html" class="logo"><span>社区<span>矫正系统</span></span></a>
	            </div>
	            
	            <div class="m-t-40 card-box">
	                <div class="panel-body">
	                	<form class="am-form" action="welcome/check_login" method="post">
	                		<div class="am-g">
	                			<div class="am-form-group">
							      <input type="text" id="username" class="am-radius" name="username" placeholder="用户名">
							    </div>
							
							    <div class="am-form-group form-horizontal m-t-20">
							      <input type="password" id="password" class="am-radius" name="password" placeholder="密码">
							    </div>

		              
		                        <div class="am-form-group ">
		                        	<button type="submit" class="am-btn am-btn-primary am-radius" style="width: 100%;height: 100%;">登录</button>
		                        </div>
	                		</div>

	                	</form>
							
	                </div>
	            </div>
			</div>
		</div>
<!-- 		<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script> -->
		<script src="assets/js/jquery-2.1.0.js"></script>
		<script src='assets/js/form.js'></script>
		<script>
			$username=$('#username');
			$username.reg=/^[a-z]+$/;
			$password=$('#password');
			$password.reg=/^[a-zA-Z0-9]+$/;
			let arr=[$username,$password];
			let form=new Form(arr);
			form.listen();
		</script>
	</body>
</html>
