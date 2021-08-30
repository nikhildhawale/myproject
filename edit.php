<?php

$conn = mysqli_connect("localhost","root","","Users");
 
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else
  {
  	echo "success";
  }


	//include('conn.php');
	$First_Name=$_GET['First_Name'];
	$query=mysqli_query($conn,"select * from 'user_info' where FirstName=".$First_Name.";");
	if($query)
	{
		echo $query;
	}	
	// if($row=mysqli_fetch_array($query))
//	{
  //  	header('location:update.php');
	//}
?>

<html>
<head>
<title>Form</title>
</head>
<body>
	<h2>Edit</h2>
	while($row=mysqli_fetch_array($query,$row))
	{
		<form method="POST" action="update.php?First_Name=<?php echo $First_Name;?>">
		<label>First_Name:</label><input type="text" value="<?php echo $row['First_Name']; ?>" name="First_Name"/>
		<label>Last_name:</label><input type="text" value="<?php echo $row['Last_Name']; ?>" name="Last_Name"/>
		<label>Email:</label><input type="text" value="<?php echo $row['Email']; ?>" name="Email"/>
		<label>Mobile_No:</label><input type="Digit" value="<?php echo $row['Mobile_No']; ?>" name="Mobile_No "/>

		<input type="submit" name="submit">
		<a href="c1.php">Back</a>
	}

	</form>
</body>
</html>
