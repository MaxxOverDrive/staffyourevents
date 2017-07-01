<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Uploads</title>
	<link rel="stylesheet" type="text/css" href="main.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center jumbotron">
					<h1>Uploads!!!</h1>
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
			<div class="col-sm-1 col-sm-offset-2">
				<i class="glyphicon glyphicon-circle-arrow-left"></i>
			</div>
			<div class="col-sm-5 col-sm-offset-1 well">
				<form action="upload.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
			<label for='resume'>Upload Resume:</label>
    			<input type="file" name="resume" id="resume"><br />
    			<input type="submit" value="Upload Resume" name="submit">
    		</div>
    		<div class="form-group">
			<label for='resume'>Upload Images:</label>
    			<input type="file" name="image" id="image"><br />
    			<input type="submit" value="Upload Images" name="submit">
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