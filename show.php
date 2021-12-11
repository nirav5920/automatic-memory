<html>
<head>
	<title>Display Data</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Assets/css/bootstrap-theme.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Assets/css/bootstrap.min.css')?>">
	<style type="text/css">
		table
		{
			margin-left: 38%;
		}
	</style>
</head>
<body>
<div class="row">
	<div class="col-sm-7 text-center">
			<form action="<?php echo site_url('DB_Connection/add');?>">
	<table border="" align="center" class="table table-hover">
		<tr>
			<th>Product Id</th>
			<th>Product Name</th>
			<th>Product price</th>
			<th>Product code</th>
			<th>product status</th>
			<th>Action</th>
		</tr>
				<?php 
				foreach ($product_info  as $row) {
					echo "<tr>
				<td>$row->id</td>
				<td>$row->p_name</td>
				<td>$row->p_price  </td>
				<td>$row->code</td>
				<td>$row->status</td>
				<td><a href=".site_url('test/delete/').$row->id." target='_blank'><lable class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span>Delete</lable></a> | <a href=".site_url('test/registration/')." target='_blank'><lable class='btn btn-success btn-xs'>Add</lable></a></a> | <a href=".site_url('test/edit/').$row->id." target='_blank'><lable class='btn btn-warning btn-xs'>Edit</lable></a></a></td>
			</tr>";
				}
				?>
	</table>
	</form>
	</div>
</div>
</body>
</html>