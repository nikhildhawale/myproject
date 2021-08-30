<?php
	include('conn.php');
	$First_Name=$_GET['First_Name'];
 
	$First_Name=$_POST['First_Name'];
	$Last_Name=$_POST['Last_Name'];
	$Email=$_POST['Email'];
	$Mobile_No=$_POST['Mobile_No'];

	mysqli_query($conn,"update `user_info` set Last_Name='$Last_Name',Email='$Email',Moblie_No='$Mobile_No'where First_Name='$First_Name'");
	header('location:c1.php');
?>
