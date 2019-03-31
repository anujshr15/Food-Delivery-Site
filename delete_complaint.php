<?php 
session_start();
$deleteid=$_GET['deleteid'];
$sid=$_SESSION['sid'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hostel');
$q="delete from complaints where cid=$deleteid";
			$res2=mysqli_query($con,$q);
			if($res2)
				 {
				 	$q2="delete from writes_com where sid=$sid and cid=$deleteid";
				 	$res3=mysqli_query($con,$q2);
				 	if($res3)
				 	{
				 		header("Location: all_complaints.php");
				 	}
				 }



 ?>