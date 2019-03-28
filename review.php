<!DOCTYPE html>
<html>
<head>
	<title>Thank You!!</title>
	<style type="text/css">
		body{
			background-color: powderblue ;
			

		}
		.head{
	 width: 90%;
	position: absolute;
	margin-top: 5px ;
	margin-left: 80px ;
	font-size: 75% ;
	background-color: black ;
	color: yellow ;
	letter-spacing: 2.5px ;
	word-spacing: 5px ;
	font-weight: lighter;
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
</head>
<body>
	<div class="head">
	<h1>MAULANA AZAD NATIONAL INSTITUTE OF TECHNOLOGY</h1>
	</div>
	<img src="3.jpg" width="100%" height="220px" class="logo" style="margin-top:80px ;">
	<h2><?php echo $_POST["room"] ;?></h2>
  <div class="re"><em>
  <?php echo $_POST["rev"] ; ?></em></div>
  <div class="me">by <?php  echo $_POST["student"] ; ?></div>

</body>
</html>