<!DOCTYPE html>
<html>
<head>
	<title>ANU</title>
	<style type="text/css">

		body{
			background-color: powderblue ;
		}
		h1{
	 width: 1180px ;
	position: absolute;
	top: 5% ;
	left: 50% ;
	font-size: 250% ;
	transform: translate(-50%,-50%);
	color: black ;
	letter-spacing: 3px ;
	word-spacing: 5px ;
	font-weight: lighter;
}
     .main{
         
         margin-top: 320px ;

         background-color: yellow ;
     }
		

	</style>

</head>
<body> 
	<h1>REVIEW SUBMISSION</h1>
	<img src="hostel_1.jpg" width="33%" height="220px">
	<div class="main">
	<form action="review.php" method="POST" style="margin: auto;width: 30%;text-align: center;height: 250px;">

		<fieldset>
			<legend style="text-align: center">REVIEW</legend>
		ROOM:<br><input type="text" name="room"><br>
		NAME:<br><input type="text" name="student"><br>
		SCHOLAR_NO:<br><input type="number" name="rno"><br>
		REVIEW:<br><input type="text" name="rev"><br>
		<input type="submit">
		 </fieldset>

	</form>
	</div>



</body>
</html>