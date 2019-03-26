<?php 
  session_start();
  if(isset($_SESSION['sid'])==0)
  {
    header("Location: login.php");
  }
 ?>


<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="nav.css">
	<title>ROOM ALLOTMENT</title>

	<style>
#grad1 {
  background-image: linear-gradient(to right,rgba(0,30,240,0),rgba(240,25,0,.2),rgba(0,30,240,0));
}

.button 
{
  background-color: dodgerblue;
  border: none;
  color: black;
  padding: 12px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 24px;
}
header 
{
  background-color: black;
  padding: 6px;
  text-align: center;
  font-size: 18px;
  color:yellow;
  height: 148px;
}
select 
{
  width: 38%;
  padding: 16px 20px;
  border: none;
  border-radius: 10px;
  background-color: #f1f1f1;
}
form
{
  padding-top: 70px;
  height: 430px;
}
footer 
{
  background-color:black;
  padding: 1px 0;
  text-align: center;
  color: yellow;
  font-size: 18px;
}
body
{
  margin:0;
}
</style>

</head>

<body id="grad1">

<header>
  <img src="manitlogo.png" style="width: 120px;height: 120x;float: left;padding: 10px 20px;">
  <h2>ROOM ALLOTMENT PORTAL </h2>
  <nav>
  <span style="color:white;"><a href="index.php"></a></span>
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

</header>

<form  action="room_allot_handler.php"  style="text-align: center;" method="POST">
	
<h3 >SELECT HOSTEL NO:</h3>
<input type="number" name="hostelno" min="1" max="10" style="width: 22%;height: 25px;border-radius: 10px;padding-left: 20px;padding-top: 5px;padding-bottom: 5px;">
<h3>SELECT ROOM NO:</h3>
<input type="number" name="roomno" min="1" max="50" style="width: 22%;height: 25px;border-radius: 10px;padding-left: 20px;padding-top: 5px;padding-bottom: 5px;">
	
<br><br><br>

<input type="submit" class="button">
<input type="reset" class="button">

</form>
<br>
<br>
<footer>
<pre>
 Link Road No 3,Near Kali Mata Mandir,Bhopal 462003 |  <a href="http://www.manit.ac.in/" style="color: yellow;">www.manit.ac.in</a>  | Telephone: +91 755 4051000,4052000,2670900 | Fax: +91-755 2670562
</pre>
</footer>

</body>

</html>