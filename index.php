<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Staff Your Events!!!</title>
	<link rel="stylesheet" type="text/css" href="main.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<div class="row text-center">
			<div class="col-sm-12">
					<h1>STAFF YOUR EVENTS!!!</h1>
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
	</div>	
	<div class="container">
		<div class="row text-center">
			<a href="employee_forms1.php"><div class="col-md-4 col-md-offset-1 well">
				<h1>APPLY</h1>
			</div></a>
			<a href="employer_forms1.php"><div class="col-md-4 col-md-offset-1 well">
				<h1>HIRE</h1>
			</div></a>
		</div>
	</div>	
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<h3>User Login:</h3>
				<form>
					<div class="form-group">
					<label for='username'>Username:</label>
						<i class="glyphicon glyphicon-user"></i><input type="username" name="username" placeholder="Username" class="form-control">
					</div>
					<div class="form-group">
					<label for='password'>Password:</label>
						<i class="glyphicon glyphicon-lock"></i><input type="password" name="password" placeholder="Password" class="form-control">
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="remember"> Remember me</label>
					</div>
					<div class="form-group">
					<input type="submit" name="submit" class='btn btn-info'>
					</div>
				</form>
			</div>
		</div>
	</div>	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php  
					include 'footer.php';
				?>
			</div>
		</div>
	</div>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>