<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
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
			<h2 class="text-center" id="h2">Forgot Password</h2>
		</div>
				<form method="post" action="<?php echo site_url('test/edit_pass') ?>">
			<div class="form-group" id="h2">
				<input type="password" name="pass" placeholder="Enter Your New Password" class="form-control">
			</div>
			<div class="form-group" id="h2">
				<input type="password" name="new_pass" placeholder="Confirm Password" class="form-control">
			</div>
			<input type="hidden" name="hidden" value="<?php echo($pass_info[0]->username); ?>">
			<div class="form-group" id="h2">
				<input type="submit" value="Update Password" name="submit" class="form-control btn btn-info">
			</div>
		</form>
	</div>
	</div>
</div>
</body>
</html>