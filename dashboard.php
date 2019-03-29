<?php 
session_start();
$_SESSION['url']=$_SERVER['REQUEST_URI'];
  if(isset($_SESSION['sid'])==0)
  {
    header("Location: login.php");
  }
$id=$_SESSION['sid'];

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<style type="text/css">
		table {
			/*border: 2px solid red;*/
			width:50%;
			margin: 40px auto;
			background: lightyellow;
			height: 40vh;
			border-collapse: collapse;
			text-align: center;
			font-size: 1.1em;
		}
		td,th {
			border:2px solid red;
		}

		body {
			 background-image: linear-gradient(to right, rgba(255,104,240,.3), rgba(20,180,170,.4));
		}
footer 
{
  background-color:black;
  padding: 1px 0;
  text-align: center;
  color: yellow;
  font-size: 18px;
  margin-top: 400px;
}
		
	</style>
</head>
<body>
	<?php include 'navbar.php' ?>
	<?php 
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'hostel');
	$q="select * from student where sid=$id;";
	$res=mysqli_query($con,$q);
	$arr=mysqli_fetch_array($res);
	$name=strtoupper($arr['name']);
	$phone=$arr['phone'];
	if(!empty($arr['roomid']))

	 {
	 	$roomno="";
	 	$hostelno="";
	 	$roomid=$arr['roomid'];
	 	for($i=0;$i<strlen($roomid),$roomid[$i]!='_';$i++)
	 	{
	 		$hostelno.="$roomid[$i]";
	 	}
	 	$i++;
	 	for(;$i<strlen($roomid);$i++)
	 	{
	 		$roomno.="$roomid[$i]";
	 	}
	 }
	 else{
	 	$roomno="NA";
	 	$hostelno="NA";
	 
	 }

	 echo "<table cellspacing=0><tr><th>Scholar ID: </th><td>$id</td></tr><tr><th>Name: </th><td>$name</td></tr><tr><th>Phone: </th><td>$phone</td></tr><tr><th>Hostel No: </th><td>$hostelno</td></tr><tr><th>Room No:  </th><td>$roomno</td></tr></table>";

	 ?>

<footer>
<pre>
 Link Road No 3,Near Kali Mata Mandir,Bhopal 462003 |  <a href="http://www.manit.ac.in/" style="color: yellow;">www.manit.ac.in</a>  | Telephone: +91 755 4051000,4052000,2670900 | Fax: +91-755 2670562
</pre>
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

</body>
</html>