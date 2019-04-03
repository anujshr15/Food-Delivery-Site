<?php 
    session_start();
	$sid=$_POST['sid'];
	$password=$_POST['password'];
    $con=mysqli_connect('localhost','root');
    mysqli_select_db($con,"Hostel");
    $q="select * from users where sid=$sid and password='$password'";
    $res=mysqli_query($con,$q);
    $num=mysqli_num_rows($res); 
    if($num==1)
    {
    	$_SESSION['sid']=$sid;
        ?>
        <?php
    	 if(isset($_SESSION['url']))
        {$ur=$_SESSION['url'];
        header("Location: $ur");
        ?>
        <?php 
            }
        else{
            header("Location: index.php");
        }
    
    ?>
    <?php
    
    }
    else{
     echo "<script>alert(\"Login not successful! Please try again\");window.location.href=\"login.php\"</script>";

    }

    mysqli_close($con);
 ?>