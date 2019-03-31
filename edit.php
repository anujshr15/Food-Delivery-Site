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
	<title>Deleted!!</title>
	<style type="text/css">
			body
{
  margin:0;
}
#grad1 
{
  background-image: linear-gradient(to right,rgba(60,120,255,.3),rgba(60,120,255,.3),rgba(60,120,255,0.3));
}

	</style>
</head>
<body id="grad1"> 
<header>

  <?php include 'navbar.php' ?>

</header>
</body>