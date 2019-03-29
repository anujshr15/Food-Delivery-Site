<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="nav.css">
	<title>ANU</title>
	<style type="text/css">



		body{
			background-color: powderblue ;
			

		}
	
	
}

       
    

		

	</style>

</head>
<body> 
	<header>

  <?php include 'navbar.php' ?>

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



</body>
</html>