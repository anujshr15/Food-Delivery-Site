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
$q="select * from writes_rev where sid=$m" ;
$result=mysqli_query($con,$q) ;
$num=mysqli_num_rows($result) ;

for($i=1;$i<=$num;$i++){
	$row=mysqli_fetch_array($result) ;
	$a=$row['rid'] ;
	$p="delete from reviews where rid=$a " ;
	mysqli_query($con,$p) ;
}
$p="delete from writes_rev where sid=$m " ;
	mysqli_query($con,$p) ;



 ?>
<!DOCTYPE html>
<html>
<head>
	<title>DELETED!!</title>
	<style type="text/css">
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

		body {
			 background-image: linear-gradient(to right, rgba(255,104,240,.3), rgba(20,180,170,.4));
		}
	</style>
</head>
<body>
	<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="nav.css">

</head>
<body>
<header style="text-align: center;">
<nav style="margin-top: -25px;">
	<img src="manitlogo.png" style="width:140px; height: 140px; float: left;padding-top: 20px;padding-left: 20px;">
    
	<h2 style="text-align: center;padding-top: 16px;word-spacing: 3px;letter-spacing: 1px;text-shadow: 2px 2px red;"><a href="index.php" style="color: yellow;">Hostel Management System</a></h2>
	<h4 style="color: yellow;text-align: center;word-spacing: 3px;letter-spacing: 1px;padding-top: 0px;">Maulana Azad National Institute of Technology, Bhopal</h4>

	<ul   style="list-style-type: none;margin: 0;">
		<li><a href="index.php">Home</a></li>
		<li><a href="dashboard.php">Dashboard</a></li>
		<li><a class "design" href="room_allot.php">Room Allotment</a></li>
		<li><a href="review_page.php">Review a Room</a></li>
		<li><a  class "design" href="complaint.php">Complaints</a></li>
		<li><a  href="review_handler.php">View Reviews</a></li>
	
				<li>171112028 <a class "design" href="logout.php">Logout</a></li>
			</ul>
</nav>
</header>
</body>
</html>

	
<div class="box">YOUR REVIEW HAS BEEN DELETED!!</div>
<!-- </table> -->
<?php include 'footer.php' ?>
<!-- <script>
		var par=document.querySelector("footer");
		var dt=new Date();
		par.innerText+=" "+(dt.getYear()+1900).toString();
	</script> -->
</body>
</html>

