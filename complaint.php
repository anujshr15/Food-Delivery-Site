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

	<title>COMPLAINTS</title>

<style>
a.design:hover
{
  background-color: orchid;
}
.design
{
  text-align: center;
  color: black;
  text-decoration: none;
  height: 50px;
  padding: 16px;
  width: 100px;
  background-color: orangered;
  border-radius: 20px;

}
#all
{
  width: 50%;
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
  padding-left: 20px;
  padding-top: 16px;
  padding-bottom: 16px;
  background-color: #f1f1f1;
  border-radius: 20px;
  border-bottom-style: groove;
  border-bottom-width: 2px;
  border-top-style: none;
  border-left-style: none;
  border-right-style: none;
  border-color: red;
}
form
{
	padding: 20px;
}

body
{
  margin:0;
}
textarea
{
  border-radius: 20px;
  padding: 20px;
  font-size: 18px;
  border-style: groove;
  border-width: 1.6px;
  border-color: red;
  overflow: auto;
  width: 70%;
}


</style>

<link rel="stylesheet" type="text/css" href="nav.css">
</head>

 <?php include 'navbar.php' ?>
<body class="grad1">


<div id="all">

  
<form  action="complaint_handler.php"  style="text-align: center;padding-top: 0px;font-family: timesnewroman;" method="POST">

<h2 style="text-align: center;padding-top: 20px;text-decoration: underline;font-family: verdana;">Grievance Redressal Portal</h2>
<h3 >Enter Hostel Number:</h3>
<input type="number" name="hostelno" min="1" max="10" style="width: 36.5%;border-radius: 20px;padding-left: 20px;padding-top: 14px;padding-bottom: 14px;border-bottom-style: 4px groove;border-top-style: none;border-left-style: none;border-right-style: none;border-color: red;">

<h3>Select Complaint Category:</h3>
<select name="Complaint">
<option value="MESS">MESS</option>
<option value="ROOM">ROOM</option>
<option value="ELECTRICITY">ELECTRICITY</option>
<option value="WATER AND SANITATION">WATER AND SANITATION</option>
<option value="OTHERS">OTHERS</option>
</select>
	
<br>

<h3>Write a brief description of your complaint:</h3><br>
<textarea name="message" rows="12" cols="56">
</textarea>
<br><br>

<input type="submit" class="button">
<input type="reset" class="button">

</form>
</div>
<h2 style="text-align: center;margin-top: 60px;"><a class="design" href="all_complaints.php">View Your Complaints</a></h2>


<!-- <script>
    var par=document.querySelector("footer");
    var dt=new Date();
    par.innerText+=" "+(dt.getYear()+1900).toString();
  </script> -->


<?php include 'footer.php' ?>
</body>

</html>