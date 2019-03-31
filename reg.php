<?php 
session_start();
$sid=$_POST['sid'];
$password=$_POST['password'];
$name=$_POST['name'];
$phone=$_POST['phone'];
// $roomno=$_POST['roomno'];
// $hostelno=$_POST['hostelno'];
// $roomid="$hostelno"."_"."$roomno";
$con=mysqli_connect('localhost','root');
if($con){
mysqli_select_db($con,"Hostel");
$q="insert into users values($sid,'$password');insert into student(sid,name,phone) values($sid,'$name',$phone);";
$res=mysqli_multi_query($con,$q);

if($res)
{
	echo "response received";
	$_SESSION['sid']=$sid;
	if(isset($_SESSION['url']))
	{
		$url=$_SESSION['url'];
		header("Location: $url");
	}
	header("Location index.php");
	
}
else {

	echo "cannot complete registration. Please try again";
}
}
else echo "connection not made";

mysqli_close($con);
 ?>