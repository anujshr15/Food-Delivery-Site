<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>MANIT HOSTEL</title>
	<link type="text/css" rel="stylesheet" href="index.css">
	<style type="text/css">
		nav a {
			color:white;
		}

		nav li {
			color:white;
		}

		


	</style>
</head>
<body>
<nav>
	<span style="color:white;"><a href="index.php">HOSTEL MANAGEMENT SYSTEM V2.0</a></span>
	<ul>
		<?php if(isset($_SESSION['sid'])) {?>
		<li>Dashboard</li>
		<li>Room Allotment</li>
		<li>Review a Room</li>
		<li><a  href="complaint.php">Complaints</a></li>
	<?php } ?>
		<?php if(isset($_SESSION['sid'])) { ?>
		<li><?php echo "".$_SESSION['sid'] ?> <a href="logout.php">Logout</a></li>
		<?php } else { ?><li><a  href="login.php">Login </a></li><li><a href="register.php">Register </a></li> <?php } ?>
	</ul>
</nav>
<div>
	<img src="hostel_1.jpg" width="100%" height="350px">
<div>
<marquee scrollamount="10" direction="right">Welcome to MANIT Hostel Management Site</marquee>
<!-- <footer>@Copyright 2019</footer> -->
<footer>
	Copyright 2019
</footer>
<!-- <script>
		var par=document.querySelector("footer");
		var dt=new Date();
		par.innerText+=" "+(dt.getYear()+1900).toString();
	</script> -->


</body>
</html>