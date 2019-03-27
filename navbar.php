<link rel="stylesheet" type="text/css" href="nav.css">
<nav>
	<span><a href="index.php">HOSTEL MANAGEMENT SYSTEM</a></span>
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