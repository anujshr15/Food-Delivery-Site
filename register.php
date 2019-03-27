<?php 
	session_start();
	if(isset($_SESSION['sid']))
	{
		header("Location: index.php");
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="nav.css">
</head>
<body>
	<?php include 'navbar.php' ?>
	<form method="POST" action="reg.php">
		Scholar Id: <input type="number" name="sid" placeholder="Enter Scholar Id">
		Password: <input type="password" name="password">
		Name: <input type="text" name="name">
		Phone: <input type="number" name="phone">
		<!-- Hostel: <select name="hostelno">
			<?php 
			for($i=1;$i<=10;$i++)
	         { echo "<option value=$i>$i</option>";}
	         ?>
		</select>
		Room No: <input type="number" name="roomno" min=1 max=50> -->
		<input type="submit" value="Register">
		</form>

</body>
</html>