<?php
$connect=mysqli_connect('localhost', 'root', 'sealteam7', 'events');

if(mysqli_connect_errno($connect)) {
	echo 'Failed to Connect';
}

?>