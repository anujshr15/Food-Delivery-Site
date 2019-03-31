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
.design
{
width: 60%;
height: 30px;
border-radius: 10px;
padding-top: 5px;
padding-bottom: 5px;
padding-left: 10px;
padding-right: 10px;
}
.grad1 
{
  background-image: linear-gradient(to right,rgba(60,120,255,.3),rgba(60,120,255,.3),rgba(60,120,255,0.3));
}
div
{

margin: auto;
width: 40%;
text-align:center;
margin-top: 100px;
border: 3px solid #f1f1f1;
padding: 30px;
border-radius: 30px;
font-family: arial;
opacity: 1;
background-color: lavender;

}
.button:hover
{
  background-color: lawngreen;
  color: black;
}
.button 
{
  background-color: green;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 60%;
  border-radius: 10px;
}
</style>
</head>
<body class="grad1">
	<?php include 'navbar.php' ?>
	<div>
	<form method="POST" action="reg.php">
        <h2>Registration Form</h2>

        <img src="reg_icon1.png" style="height: 100px;width: 100px;"><br><br>

		Scholar Id:<br>
		<input type="number" name="sid" placeholder="Enter Scholar Id" class="design"><br><br>
		Password:<br>
		<input type="password" name="password" class="design"><br><br>
		Name:<br>
		<input type="text" name="name" class="design"><br><br>
		Phone:<br>
		<input type="number" name="phone" class="design"><br><br><br>
		<!-- Hostel: <select name="hostelno">
			<?php 
			for($i=1;$i<=10;$i++)
	         { echo "<option value=$i>$i</option>";}
	         ?>
		</select>
		Room No: <input type="number" name="roomno" min=1 max=50> -->
		<input type="submit" value="Register" class="button">
		</form>

</div>
<?php include 'footer.php' ?>
</body>
</html>