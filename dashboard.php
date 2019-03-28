<?php 
session_start();
$id=$_SESSION['sid'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<?php include 'navbar.php' ?>
	<?php 
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'hostel');
	$q="select * from student where sid=$id;";
	$res=mysqli_query($con,$q);
	$arr=mysqli_fetch_array($res);
	$name=$arr['name'];
	$phone=$arr['phone'];
	if(!empty($arr['roomid']))

	 {
	 	$roomno="";
	 	$hostelno="";
	 	$roomid=$arr['roomid'];
	 	for($i=0;$i<strlen($roomid),$roomid[$i]!='_';$i++)
	 	{
	 		$hostelno+=$roomid[$i];
	 	}
	 	for(;$i<strlen($roomid);$i++)
	 	{
	 		$roomno+=$roomid[$i];
	 	}
	 }
	 else{
	 	$roomno="NA";
	 	$hostelno="NA";
	 
	 }

	 echo "<table><tr><th>Name: </th><td>$name</td></tr><tr><th>Phone: </th><td>$phone</td></tr><tr><th>Hostel No: </th><td>$hostelno</td></tr><tr><th>Room No:  </th><td>$roomno</td></tr></table>";

	 ?>

</body>
</html>