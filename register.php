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
<style >
div
{
	margin: auto;
	width: 48%;
}
form
{
	text-align: center;
	font-family: verdana;
}
</style>
</head>
<body>
	<?php include 'navbar.php' ?>
	<div>
	<form method="POST" action="reg.php">
		<h3>Scholar No.</h3> <input type="number" name="sid" placeholder="Enter Scholar Id">
		<h3>Password</h3><input type="password" name="password">
		<h3>Name</h3><input type="text" name="name">
		<h3>Phone</h3><input type="number" name="phone"><br><br>
		<!-- Hostel: <select name="hostelno">
			<?php 
			for($i=1;$i<=10;$i++)
	         { echo "<option value=$i>$i</option>";}
	         ?>
		</select>
		Room No: <input type="number" name="roomno" min=1 max=50> -->
		<input type="submit" value="Register">
		</form>
</div>
</body>
</html>