<!DOCTYPE html>
<html>
<head>
	<title>ANU</title>
	<style type="text/css">
	*{
	margin: 0px ;
	padding: 0px ;
	box-sizing: border-box;
}


		body{
			background-color: powderblue ;
			

		}
		h1{
	 width: 100%;
	position: absolute;
	margin-top: 5px ;
	margin-left: 80px ;
	font-size: 180% ;
	
	color: black ;
	letter-spacing: 3px ;
	word-spacing: 5px ;
	font-weight: lighter;
}
     .main{
         
         margin-top: 20px ;

         /*background-color: yellow ;*/
     }
       
    

		

	</style>

</head>
<body> 
	<h1>MAULANA AZAD NATIONAL INSTITUTE OF TECHNOLOGY</h1>
	<img src="3.jpg" width="100%" height="220px" class="logo" style="margin-top:80px ;">
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