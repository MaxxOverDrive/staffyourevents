<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Staff Your Events!!!</title>
	<link rel="stylesheet" type="text/css" href="main.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
					<h1>Employer Info!!!</h1>
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
		<div class="row">
			<div class="col-sm-12">
				<h2>Home</h2>
			</div>
		</div>
	</div>	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<form action="process.php" method="post">
					First Name: <input type="text" name="first_name" /><br />
					 Last Name: <input type="text" name="last_name" /><br />
					     Email: <input type="text" name="email" /><br />
					     <input type="reset" name="reset" />
					     <input type="submit" name="submit" />
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
</body>
</html>