<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="nav.css">
	<title>ANU</title>
	<style type="text/css">




		body{
			background-color: lavender ;
			

		}

	
	
}

       
    

		

	</style>
	<link rel="stylesheet" type="text/css" href="nav.css">

</head>
<body> 
	<header>

		<?php include 'navbar.php'?>
	</header>



</header>
	<!--<h1>MAULANA AZAD NATIONAL INSTITUTE OF TECHNOLOGY</h1>
	<img src="3.jpg" width="100%" height="220px" class="logo" style="margin-top:80px ;">-->

	<div class="main">
	<form action="review.php" method="POST"  style="margin-top:5px ;width: 50%;text-align: center;height: 250px; margin-left: 25%">

		<fieldset>
			<legend style="text-align: center">REVIEW</legend>
		ROOM:<br><input type="text" name="room"><br>
		NAME:<br><input type="text" name="student"><br>
		SCHOLAR_NO:<br><input type="number" name="rno"><br>
		REVIEW:<br><input type="text" name="rev" style="width:90% ; height:100px ; "><br>
		<input type="submit">
		 </fieldset>

	</form>
	</div>
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