<?php 
    session_start();
	$username=$_POST['username'];
	$password=$_POST['password'];
    $con=mysqli_connect('localhost','root');
    mysqli_select_db($con,"Users");
    $q="select * from users where username='$username' and password='$password'";
    $result=mysqli_query($con,$q);
    $num=mysqli_num_rows($result);
    if($num==1)
    {
    	$_SESSION['username']=$username;
    	header("Location: index.php");
    }
    else{
     header("Location: login.php");

    }

    mysql_close($con);
 ?>