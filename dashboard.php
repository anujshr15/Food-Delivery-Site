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
	table 
		{
			/*border: 2px solid red;*/
			width:50%;
			margin: 40px auto;
			background: lightyellow;
			height: 40vh;
			border-collapse: collapse;
			text-align: center;
			font-size: 1.1em;
			margin-top: 120px;
		}
		td,th 
		{
			border:2px solid red;
		}

		body 
		{
			 background-image: linear-gradient(to right,rgba(60,120,255,.3),rgba(60,120,255,.3),rgba(60,120,255,0.3));
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

<?php include 'footer.php' ?>

</body>
</html>