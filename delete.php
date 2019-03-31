<?php 
session_start();
$_SESSION['url']=$_SERVER['REQUEST_URI'];
  if(isset($_SESSION['sid'])==0)
  {
    header("Location: login.php");
  }

 ?>

<?php 
$m=$_SESSION['sid'] ;
$con=mysqli_connect('localhost','root') ;
mysqli_select_db($con,'hostel') ;

$q="delete from reviews where rid =(select rid from writes_rev where sid=$m)" ;
mysqli_query($con,$q) ;
$p="delete from writes_rev  where sid=$m" ;
mysqli_query($con,$p) ;
mysqli_close($con) ; 
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

	.box {
			border:1px solid black;
			box-shadow: 0 0 10px rgba(0,0,0,0.6);
			width:50%;
			min-height: 80px;
			height: auto;
			margin: 20px auto;
			font-size: 1.2em;
			text-align: center;
			background: white;
		}		

		.box:hover {
			transform: scale(1.1);
			transition: all 200ms ease-in;

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
<div class=\"box\">YOUR REVIEW HAS BEEN DELETED !</div>
  <!-- <footer>@Copyright 2019</footer> -->
<?php include 'footer.php' ?>
<!-- <script>
		var par=document.querySelector("footer");
		var dt=new Date();
		par.innerText+=" "+(dt.getYear()+1900).toString();
	</script> -->
</body>
</html>
