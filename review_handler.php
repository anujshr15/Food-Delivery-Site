

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
	<title>ROOM REVIEWS</title>
	<style type="text/css" rel="stylesheet" href="nav.css">
#all
{
  width: 50%;
  background-color: lavender;
  opacity: 1;
  margin:auto;
  margin-top: 55px;
  border-radius: 40px;
  padding-top: 5px;
  padding-bottom: 40px;
  height: 450px;
}
		
#grad1 
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
	</style>
</head>
<body id="grad1"> 

  <?php include 'navbar.php' ?>

<div id="all">
<h2 style="text-align: center;padding-top: 20px;text-decoration: underline;font-family: verdana;">VIEW REVIEW OF ROOMS</h2>
<form  action="view.php"  style="text-align: center;padding-top: 0px;font-family: timesnewroman;" method="POST">

<h3 >Enter Hostel Number:</h3>
<input type="int" name="hos" min="1" max="10" style="width: 36.5%;border-radius: 20px;padding-left: 20px;padding-top: 14px;padding-bottom: 14px;border-bottom-style: 4px groove;border-top-style: none;border-left-style: none;border-right-style: none;border-color: red;">
<h3 >Enter Room Number:</h3>
<input type="int" name="room" min="1" max="10" style="width: 36.5%;border-radius: 20px;padding-left: 20px;padding-top: 14px;padding-bottom: 14px;border-bottom-style: 4px groove;border-top-style: none;border-left-style: none;border-right-style: none;border-color: red;"><br><br><br>
<input type="submit" class="button">
<input type="reset" class="button">
</form>
</div>
<?php include 'footer.php' ?>
<!-- <script>
    var par=document.querySelector("footer");
    var dt=new Date();
    par.innerText+=" "+(dt.getYear()+1900).toString();
  </script> -->
</html>