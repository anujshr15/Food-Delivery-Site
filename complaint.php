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
	<title>COMPLAINTS</title>

	<style>
#grad1 {
  background-image: linear-gradient(to right,rgba(255,0,0,0),rgba(0,0,255,0.3),rgba(255,0,0,0));
}

.button 
{
  background-color: lightgreen;
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
  height: 148px;
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
	padding: 20px 0;
	margin-left: 40px;
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
}
</style>
<link rel="stylesheet" type="text/css" href="nav.css">
</head>

<body id="grad1">

<header>
  <img src="manitlogo.png" style="width: 120px;height: 120x;float: left;padding: 10px 20px;">
  <h2>GRIEVANCE REDRESSAL PORTAL </h2>
  <?php include 'navbar.php' ?>

</header>

<form  action="complaint_handler.php"  style="text-align: center;" method="POST">
	
<h3 >Enter Hostel Number:</h3>
<input type="number" name="hostelno" min="1" max="10" style="width: 36.5%;height: 25px;border-radius: 10px;padding-left: 20px;padding-top: 5px;padding-bottom: 5px;">

<h3>Select Complaint Category:</h3>
<select name="Complaint" style="width: 38%;">
<option value="MESS">MESS</option>
<option value="ROOM">ROOM</option>
<option value="ELECTRICITY">ELECTRICITY</option>
<option value="WATER AND SANITATION">WATER AND SANITATION</option>
<option value="OTHERS">OTHERS</option>
</select>
	
<br>

<h3>Write a brief description of your complaint:</h3><br>
<textarea name="message" rows="12" cols="60" style="border-radius: 20px;padding-left: 20px;padding-right: 20px;font-size: 18px;">
</textarea>
<br><br>

<input type="submit" class="button">
<input type="reset" class="button">

</form>
<br>
<br>
<footer>
<pre>
 Link Road No 3,Near Kali Mata Mandir,Bhopal 462003 |  <a href="http://www.manit.ac.in/" style="color: yellow;">www.manit.ac.in</a>  | Telephone: +91 755 4051000,4052000,2670900 | Fax: +91-755 2670562
</pre>
</footer>

</body>

</html>