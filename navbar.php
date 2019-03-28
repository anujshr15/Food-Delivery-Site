<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="nav.css">
</head>
<body>
<header style="text-align: center;">
<nav style="margin-top: -25px;">
	<img src="manitlogo.png" style="width: 140px;height: 140x;float: left;padding-top: 20px;padding-left: 20px;">
	<h2 style="color: yellow;text-align: center;padding-top: 16px;word-spacing: 3px;letter-spacing: 1px;text-shadow: 2px 2px red;">Hostel Management System V2.0</h2>
	<h4 style="color: yellow;text-align: center;word-spacing: 3px;letter-spacing: 1px;padding-top: 0px;">Maulana Azad National Institute of Technology, Bhopal</h4>
	<span style="text-align: center;"><a href="index.php"></a></span>
	<ul>
		<?php if(isset($_SESSION['sid'])) {?>
		<li>Dashboard</li>
		<li><a href="room_allot.php">Room Allotment</a></li>
		<li>Review a Room</li>
		<li><a  href="complaint.php">Complaints</a></li>
	<?php } ?>
		<?php if(isset($_SESSION['sid'])) { ?>
		<li><?php echo "".$_SESSION['sid'] ?> <a href="logout.php">Logout</a></li>
		<?php } else { ?><li><a  href="login.php">Login </a></li><li><a href="register.php">Register </a></li> <?php } ?>
	</ul>
</nav>
</header>
</body>
</html>
