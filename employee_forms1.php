	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Employee Forms1</title>
	<link rel="stylesheet" type="text/css" href="main.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
					<h1>Employee Forms1!!!</h1>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php
					include 'nav.php';
				?>
			</div>
		</div>
	</div><br /><br />	
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<form id="" action="employee_process.php" method="POST" enctype="multipart/form-data">
		<div class="form-group">
					<label for='first_name'>First Name:</label>
			<input type="text" name="first_name" class="form-control">
			</div>
			<div class="form-group">
					<label for='last_name'>Last Name:</label>
			<input type="text" name="last_name" class="form-control">
			</div>
			<div class="form-group">
					<label for='email'>Email:</label>
			<input type="" name="email" class="form-control">
		</div>
		<div class="form-group">
					<label for='username'>Username:</label>
			<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
					<label for='password'>Password:</label>
			<input type="password" name="password" class="form-control" placeholder="Password">
		</div>
		<div class="form-group">
			<label for='cpassword'>Confirm Password:</label>
			<input type="password" name="cpassword" class="form-control" placeholder="Password">
		</div>
		<div class="form-group">
			<input class='btn btn-danger' type="reset" name="reset" />
			<input class='btn btn-info' type="submit" name="submit" />
		</div>
	</form>
			</div>
		</div>
	</div>	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				
			</div>
		</div>
	</div>	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>		
</body>
</html>