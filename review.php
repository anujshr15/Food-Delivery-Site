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
	<title>Thank You!!</title>
	<style type="text/css">
		body{
			background-color: powderblue ;
			

		}

	

 .re{
  width: 700px;
  border: 5px solid grey;
  padding: 25px;
  margin: 25px;
  margin-left: 20% ;
  border-radius: 25px
  font color: red ;
  background-color: green ;
  height: 200px ;
  background-image: url(pen4.jpg) ;
  text-decoration-color: red ;

}
 .me{
 	margin-left: 75% ;
 	font-size: 30px ;
 }
  .hey{
  	width: 70px;
  /*border: 1px solid grey;*/
  padding: .5px;
  margin: .5px;
  margin-left: 45% ;
  border-radius: 25px;
  text-decoration: underline;

  
  }
  body
{
  margin:0;
  background-color: black;
}

      

    #grad1 
{
  background-image: linear-gradient(to right,rgba(60,120,255,.5),rgba(60,120,255,.5),rgba(60,120,255,0.5));
}
	</style>
	<link rel="stylesheet" type="text/css" href="nav.css">
</head>
<body id="grad1"> 
	<div class="head">
	<header>

		<?php include 'navbar.php'?>
	</header>
	<div class="hey"><h2><?php echo $_POST["room"] ;?></h2></div>
  <div class="re" ><em>
  <?php echo $_POST["rev"] ; ?><br>By<br><?php  echo $_POST["student"] ; ?><br><?php  echo $_POST["rno"] ; ?></em></div>
  
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