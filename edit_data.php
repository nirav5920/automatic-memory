
<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
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
				<form method="post" action="<?php echo site_url('test/update'); ?>">
			<div class="form-group" id="h2">
				<label for="name">Product Name:</label>
				<input type="text" name="name" placeholder="Enter Product Name" class="form-control" value="<?php echo($info[0]->p_name); ?>">
			</div>
			<div class="form-group" id="h2">
				<label for="name">Product Price:</label>
				<input type="text" name="price" placeholder="Enter Product Price" class="form-control" value="<?php echo($info[0]->p_price); ?>">
			</div>
			<div class="form-group" id="h2">
				<label for="name">Product Code:</label>
				<input type="text" name="upc" placeholder="Enter Product Code" class="form-control" value="<?php echo($info[0]->code); ?>">
			</div>
			<div class="form-group" id="h2">
				<label for="name">Product Status:</label>
				<input type="text" name="status" placeholder="Enter Product Status" class="form-control" value="<?php echo($info[0]->status); ?>">
			</div>
			<input type="hidden" name="id" value="<?php echo($info[0]->id); ?>">
			<div class="form-group" id="h2">
				<input type="submit" value="Update Data" name="submit" class="form-control btn btn-info">
			</div>
		</form>
	</div>
	</div>
</div>
</body>
</html>