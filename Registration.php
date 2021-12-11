
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
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
			<h2 class="text-center" id="h2">Registration</h2>
		</div>
				<form method="post" action="<?php echo site_url('test/enterdata'); ?>">
			<div class="form-group" id="h2">
				<input type="text" name="id" placeholder="Enter Product ID" class="form-control">
			</div>
			<div class="form-group" id="h2">
				<input type="text" name="name" placeholder="Enter Product Name" class="form-control">
			</div>
			<div class="form-group" id="h2">
				<input type="text" name="price" placeholder="Enter Product Price" class="form-control">
			</div>
			<div class="form-group" id="h2">
				<input type="text" name="upc" placeholder="Enter Product Code" class="form-control">
			</div>
			<div class="form-group" id="h2">
				<input type="text" name="status" placeholder="Enter Product Status" class="form-control">
			</div>
			<div class="form-group" id="h2">
				<input type="file" name="file" class="form-control">
			</div>
			<div class="form-group" id="h2">
				<input type="submit" value="Enter Data" name="submit" class="form-control btn btn-info">
			</div>
		</form>
	</div>
	</div>
</div>
</body>
</html>