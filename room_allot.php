<?php 
  session_start();
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
#grad1 
{
  background-image: linear-gradient(to right,rgba(60,120,255,.5),rgba(60,120,255,.5),rgba(60,120,255,0.5));
}

.button 
{
  background-color: springgreen;
  border: none;
  color: black;
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
footer 
{
  background-color:black;
  padding: 1px 0;
  text-align: center;
  color: yellow;
  font-size: 18px;
}
body
{
  margin:0;
  background-color: black;
}
</style>
<link rel="stylesheet" type="text/css" href="nav.css">

</head>

<body id="grad1">

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
<br>
<br>
<footer>
<pre>
 Link Road No 3,Near Kali Mata Mandir,Bhopal 462003 |  <a href="http://www.manit.ac.in/" style="color: yellow;">www.manit.ac.in</a>  | Telephone: +91 755 4051000,4052000,2670900 | Fax: +91-755 2670562
</pre>
</footer>

</body>

</html>