<!DOCTYPE html>
<html>
<head>
	<title>ANU</title>
	<style type="text/css">

	


		body{
			background-color: powderblue ;
			

		}
		
     
       
    

		

	</style>
	<link rel="stylesheet" type="text/css" href="nav.css">

</head>
<body> 
	<header>
		<?php include 'navbar.php'?>
	</header>
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



</body>
</html>