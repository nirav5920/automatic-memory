<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Assets/css/bootstrap-theme.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Assets/css/bootstrap.min.css')?>">
	<style type="text/css">
	</style>
</head>
<body>
 <div class="container-fluid">
	<div class="container">
	<div class="row col-sm-4 col-xs-6 col-sm-offset-4 col-xs-offset-3 border">
		<div class="form-group">
			<h2 class="text-center" id="h2">Login</h2>
		</div>
				<form method="post" action="<?php echo site_url('test/register') ?>">
			<div class="form-group" id="h2">
				<input type="text" name="username" placeholder="Enter Your Username" class="form-control">
			</div>
			<div class="form-group" id="h2">
				<input type="password" name="password" placeholder="Enter Your Password" class="form-control">
			</div>
			<div class="form-group" id="h2">
				<input type="submit" value="Login" name="submit" class="form-control btn btn-info">
			</div>
		</form>
	</div>
	</div>
	<div class="container text-center">
		<a href="<?php echo site_url('test/forgot'); ?>">Forgot Password</a>
	</div>
</div>
</body>
</html>