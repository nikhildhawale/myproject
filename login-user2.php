<html>
<head>
<title>Record Details</title>
<style>
body
{
background-image: url("https://us.123rf.com/450wm/foreverrich/foreverrich1711/foreverrich171100371/90923533-degradado-suave-fondo-naranja-simple.jpg?ver=6");
background-size: cover;
font-size: 30px;
color: black;
}
</style>
</head>
<body>
<?php
$First_Name=$_POST['fname'];
$Last_Name=$_POST['lname'];
$Email=$_POST['Email'];
$Mobile_No=$_POST['number'];
$servername="localhost";
$username="root";
$dbname="Users";
$conn=mysqli_connect($servername,$username,"",$dbname);
if(!$conn)
{
die("Connection failed : ".mysqli_connect_error());
}
$sql="INSERT INTO User_info (First_Name,Last_Name,
Email,Mobile_No) VALUES ('$First_Name','$Last_Name',
'$Email','$Mobile_No')";
if(mysqli_query($conn,$sql))
{
echo "<h1><font color=yellow>..Record Inserted successfully..</h1></font>";
}
else
{
echo "Error ".mysqli_error($conn);
}
mysqli_close($conn);
echo "First Name : ".$First_Name."<br>";
echo "Last Name : ".$Last_Name."<br>";
echo "Email : ".$Email."<br>";
echo "Mobile_No : ".$Mobile_No."<br>";
?>
</body>
</html>
