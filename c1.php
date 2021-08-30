<html>
<head>
<title>Update</title>
</head>
<body>
	<div>
		<form method="POST" action="add.php">
			<label>First_Name:</label><input type="text" name="First_Name">
			<label>Last_Name:</label><input type="text" name="Last_Name">
			<label>Email:</label><input type="text" name="Email">
			<label>Moblie_No</label><input type="Digit" name="Mobile_No">
			<input type="submit" name="add">
		</form>
	</div>
	<br>
	<div>
		<table border="1">
			<thead>
				<th>First_Name</th>
				<th>Last_Name</th>
				<th>Email</th>
				<th>Mobile_No</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `user_info`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['First_Name']; ?></td>
							<td><?php echo $row['Last_Name']; ?></td>
							<td><?php echo $row['Email']; ?></td>
							<td><?php echo $row['Mobile_No']; ?></td>
							<td>
								<a href="edit.php?First_Name=<?php echo $row['First_Name']; ?>">Edit</a>
								<a href="delete.php?First_Name=<?php echo $row['First_Name']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>