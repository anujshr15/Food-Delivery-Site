<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="nav.css">
	<title>Thank You!!</title>
	<style type="text/css">
		body{
			background-color: powderblue ;
			

		}

	

 .re{
  width: 300px;
  border: 5px solid grey;
  padding: 25px;
  margin: 25px;
  margin-left: 33% ;
  border-radius: 25px;
}
 .me{
 	margin-left: 62% ;
 }
  h2{
  	font-size: 120%
  	text-align  
  }
	</style>
	<link rel="stylesheet" type="text/css" href="nav.css">
</head>
<body>
	<div class="head">
	<header>

		<?php include 'navbar.php'?>
	</header>
	<h2><?php echo $_POST["room"] ;?></h2>
  <div class="re"><em>
  <?php echo $_POST["rev"] ; ?></em></div>
  <div class="me">by <?php  echo $_POST["student"] ; ?></div>

  <!-- <footer>@Copyright 2019</footer> -->
<footer style="margin-top: 300px;text-align: center;background-color: black;padding-top: 20px;color: white;padding-bottom: 10px;">
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