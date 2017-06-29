<?php include 'database.php'; ?>

<?php

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$miles=$_POST['miles'];
$position=$_POST['position'];
$transportation=$_POST['transportation'];

mysqli_query($connect, "INSERT INTO employee (first_name, last_name, dob, address, city, state, email, phone, miles, position, transportation)
	VALUES ('$first_name', '$last_name', '$dob', '$address', '$city', '$state', '$email', '$phone', '$miles', '$position', '$transportation')");

	if(mysqli_affected_rows($connect) > 0){
		echo "<p>Employee Added</p>";
		echo "<a href='contact.php'>Go Back</a>";
	}
	else {
		echo "Employee NOT Added<br />";
		echo mysqli_error ($connect);
	}
?>