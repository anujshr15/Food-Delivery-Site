<?php 
    session_start();
	$sid=$_POST['sid'];
	$password=$_POST['password'];
    $con=mysqli_connect('localhost','root');
    mysqli_select_db($con,"Hostel");
    $q="select * from users where sid='$sid' and password='$password'";
    $result=mysqli_query($con,$q);
    $num=mysqli_num_rows($result);
    if($num==1)
    {
    	$_SESSION['sid']=$sid;
    	header("Location: index.php");
    }
    else{
     header("Location: login.php");

    }

    mysql_close($con);
 ?>