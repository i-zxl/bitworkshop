<!DOCTYPE html>
<html lang="en">
<head>
	<?php $url = base_url()."asset/" ?>
	<meta charset="UTF-8">
	<title>比特工场</title>
	<link rel="stylesheet" href="<?php echo $url; ?>style/login_in.css">
	<nav class="nav">
		<img src="<?php echo $url; ?>/image/logo.png" alt="LOGO">
		<p class="admin_login">管理员登录页</p>
		<p class="index"><a href="<?php $href = base_url();echo $href; ?>">返回首页</a></p>
	</nav>
</head>
<body>
	<div class="contain_in">
		<form  class="form-signin" role="form" method="post">
			<h2 class="form-signin-heading">管理员登录</h2>
			<label for="user-name">用户名</label>
			<input type="text" id="user-name" name="lg_name"><br/>
			<label for="password">密码&nbsp;</label>
			<input type="password" id="password" name="password"><br>
			<button class="btn" type="submit" value="submit">登陆</button>
			<button class="reset" type="reset" value="reset">重置</button>
		</form>
</div>
</body>
</html>