<?php include 'database.php'; ?>

<?php

$company_name=$_POST['company_name'];
$company_address=$_POST['company_address'];
$city=$_POST['city'];
$state=$_POST['state'];
$email=$_POST['email'];
$phone=$_POST['phone'];

mysqli_query($connect, "INSERT INTO employer (company_name, company_address, city, state, email, phone)
	VALUES ('$company_name', '$company_address', '$city', '$state', '$email', '$phone')");

	if(mysqli_affected_rows($connect) > 0){
		echo "<p>Employer Added</p>";
		echo "<a href='employer.php'>Go Back</a>";
	}
	else {
		echo "Employer info NOT Added<br />";
		echo mysqli_error ($connect);
	}
?>