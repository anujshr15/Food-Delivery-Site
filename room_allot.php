<?php 
  session_start();
 $_SESSION['url']=$_SERVER['REQUEST_URI'];
  if(isset($_SESSION['sid'])==0)
  {
    header("Location: login.php");
  }
 ?>


<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="nav.css">
	<title>ROOM ALLOTMENT</title>

	<style>
div
{
  width: 46%;
  background-color: lavender;
  opacity: 1;
  margin:auto;
  margin-top: 55px;
  border-radius: 40px;
}
.grad1 
{
  background-image: linear-gradient(to right,rgba(60,120,255,.3),rgba(60,120,255,.3),rgba(60,120,255,0.3));
}
.button:hover
{
  background-color: lawngreen;
  color: black;
}
.button 
{
  background-color: green;
  border: none;
  color: white;
  padding: 12px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 24px;
}
header 
{
  background-color: black;
  padding: 6px;
  text-align: center;
  font-size: 18px;
  color:yellow;
}
select 
{
  width: 38%;
  padding: 16px 20px;
  border: none;
  border-radius: 10px;
  background-color: #f1f1f1;
}
form
{
  padding-top: 70px;
  height: 430px;
}

body
{
  margin:0;
}
</style>

</head>

<body class="grad1">

<header>

 <?php include 'navbar.php' ?>
</header>
<div>
  <h2 style="text-align: center;padding-top: 20px;text-decoration: underline;font-family: verdana;padding-top: 20px;">Room Allotment Portal</h2>
<form  action="room_allot_handler.php"  style="text-align: center;font-family: timesnewroman;padding-top: 20px;" method="POST">
	
<h3 >Select Hostel Number:</h3>
<input type="number" name="hostelno" min="1" max="10" style="width: 28%;height: 25px;border-radius: 10px;padding-left: 20px;padding-top: 5px;padding-bottom: 5px;">
<h3>Select Room Number:</h3>
<input type="number" name="roomno" min="1" max="50" style="width: 28%;height: 25px;border-radius: 10px;padding-left: 20px;padding-top: 5px;padding-bottom: 5px;">
	
<br><br><br>

<input type="submit" class="button">
<input type="reset" class="button">

</form>
</div>

<?php include 'footer.php' ?>

</body>

</html>