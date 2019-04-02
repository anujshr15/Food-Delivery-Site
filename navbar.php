<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="nav.css">

</head>
<body>
<header style="text-align: center;">
<nav style="margin-top: -25px;">
	<img src="manitlogo.png">
    
	<h2 style="text-align: center;padding-top: 16px;word-spacing: 3px;letter-spacing: 1px;text-shadow: 2px 2px red;"><a href="index.php" style="color: yellow;">Hostel Management System</a></h2>
	<h4 style="color: yellow;text-align: center;word-spacing: 3px;letter-spacing: 1px;padding-top: 0px;">Maulana Azad National Institute of Technology, Bhopal</h4>
		<div id="ham">
		<div></div>
		<div></div>
		<div></div>
	</div>
	<div id="normal" class="close">

	<ul   style="list-style-type: none;">
		<li><a href="index.php">Home</a></li>
		<li><a href="dashboard.php">Dashboard</a></li>
		<li><a class "design" href="room_allot.php">Room Allotment</a></li>
		<li><a href="review_page.php">Review a Room</a></li>
		<li><a  class "design" href="complaint.php">Complaints</a></li>
		<li><a  href="review_handler.php">View Reviews</a></li>
	
		<?php if(isset($_SESSION['sid'])) { ?>
		<li><?php echo "".$_SESSION['sid'] ?> <a class "design" href="logout.php">Logout</a></li>
		<?php } else { ?><li><a  href="login.php">Login </a></li><li><a href="register.php">Register </a></li> <?php } ?>
	</ul>
</div>


</nav>
<script type="text/javascript">
	var el=document.getElementById("ham");
	if(el)
	{
	el.addEventListener("click",function(){
		document.getElementById("normal").classList.toggle("open");
		document.getElementById("normal").classList.toggle("close");
	})
	}


</script>
</header>
</body>
</html>
