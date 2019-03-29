<?php 
    session_start();
    $_SESSION['url']=$_SERVER['REQUEST_URI'];
     if(isset($_SESSION['sid']))
    {   $ur=$_SESSION['url'];
        header("Location: $ur");
    }
	$sid=$_POST['sid'];
	$password=$_POST['password'];
    $con=mysqli_connect('localhost','root');
    mysqli_select_db($con,"Hostel");
    $q="select * from users where sid='$sid' and password='$password'";
    $result=mysqli_query($con,$q);
    $num=mysqli_num_rows($result);
    $url=$_SESSION['url'];    
    if($num==1)
    {
    	$_SESSION['sid']=$sid;
    	header("Location: $url");
    }
    else{
     header("Location: login.php");

    }

    mysql_close($con);
 ?>