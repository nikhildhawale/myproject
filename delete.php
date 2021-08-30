<?php
	$First_Name=$_GET['First_Name'];
	include('conn.php');
	mysqli_query($conn,"delete from `user_info` where First_Name='$First_Name'");
	header('location:c1.php');
?>
