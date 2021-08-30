<?php
	include('conn.php');
 
	$First_Name=$_POST['First_Name'];
	$Last_Name=$_POST['Last_Name'];
	$Email=$_POST['Email'];
	$Mobile_No=$_POST['Mobile_No'];
 
	mysqli_query($conn,"insert into `user_info` (First_Name,Last_Name,Email,Mobile_No) values ('$First_Name','$Last_Name','$Email','$Mobile_No')");
	header('location:c1.php');
 
?>