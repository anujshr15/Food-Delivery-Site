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
	<title>REVIEW</title>
	<style>
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
div
{

  width: 50%;
  background-color: lavender;
  opacity: 1;
  margin:auto;
  margin-top: 55px;
  border-radius: 40px;
}

		
 header 
{
  background-color: black;
  padding: 6px;
  text-align: center;
  font-size: 18px;
  color:yellow;
}
body
{
  margin:0;
}

			

#grad1 
{
  background-image: linear-gradient(to right,rgba(60,120,255,.3),rgba(60,120,255,.3),rgba(60,120,255,0.3));
}

textarea
{
  border-radius: 20px;
  padding:20px;
  font-size: 18px;
  border-style: groove;
  border-width: 1.6px;
  border-color: red;
  overflow: auto;
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
  margin-top: 400px;
}


		

</style>

</head>
<body id="grad1"> 
<header>

  <?php include 'navbar.php' ?>

</header>

<div>
<h2 style="text-align: center;padding-top: 20px;text-decoration: underline;font-family: verdana;">Student Review Portal</h2>
<form  action="review.php"  style="text-align: center;padding-top: 0px;font-family: timesnewroman;" method="POST">

<h3 >Enter Room Number:</h3>
<input type="int" name="room" min="1" max="10" style="width: 36.5%;border-radius: 20px;padding-left: 20px;padding-top: 14px;padding-bottom: 14px;border-bottom-style: 4px groove;border-top-style: none;border-left-style: none;border-right-style: none;border-color: red;">
<h3 >Enter Scholar Number:</h3>
<input type="int" name="rno" min="1" max="10" style="width: 36.5%;border-radius: 20px;padding-left: 20px;padding-top: 14px;padding-bottom: 14px;border-bottom-style: 4px groove;border-top-style: none;border-left-style: none;border-right-style: none;border-color: red;">
<h3 >Enter Name:</h3>
<input type="int" name="student" min="1" max="10" style="width: 36.5%;border-radius: 20px;padding-left: 20px;padding-top: 14px;padding-bottom: 14px;border-bottom-style: 4px groove;border-top-style: none;border-left-style: none;border-right-style: none;border-color: red;">



<h3>Description of Room</h3><br>
<textarea name="rev" rows="12" cols="56">
</textarea>
<br><br>

<input type="submit" class="button">
<input type="reset" class="button">

</form>
</div>

<footer>
  <pre>
 Link Road No 3,Near Kali Mata Mandir,Bhopal 462003 |  <a href="http://www.manit.ac.in/" style="color: yellow;">www.manit.ac.in</a>  | Telephone: +91 755 4051000,4052000,2670900 | Fax: +91-755 2670562
</pre>
	<a href="https://www.facebook.com/MANIT-Bhopal-217608298830555/">
<img src="facebook.png" width="40" height="30">
</a>
<a href="https://twitter.com/manitbpl" >
	<img src="twitter.png" width="30" height="30">
</a>
<a href="https://www.youtube.com/channel/UCXzZC99puUZuJDiQ09p72cw?reload=9">
	<img src="youtube.png" width="50" height="30">
</a>
<a href="https://plus.google.com/u/0/103957241353925049032"></a>
<img src="googleplus.png" width="34" height="30"><br>
Copyright 2019
</footer>
<!-- <script>
		var par=document.querySelector("footer");
		var dt=new Date();
		par.innerText+=" "+(dt.getYear()+1900).toString();
	</script> -->


</body>
</html>