<?php 
session_start();
$sid=$_POST['sid'];
$password=$_POST['password'];
$name=$_POST['name'];
$phone=$_POST['phone'];

$con=mysqli_connect('localhost','root');
if($con){
mysqli_select_db($con,"Hostel");
$q="insert into users values($sid,'$password');insert into student(sid,name,phone) values($sid,'$name',$phone);";
$res=mysqli_multi_query($con,$q);

if($res)
{

	$_SESSION['sid']=$sid;
	if(isset($_SESSION['url']))
	{
		$url=$_SESSION['url'];
		header("Location: $url");
	}
	header("Location: index.php");
	
}
else {
	echo "<script>alert('cannot complete registration. Please try again');
		window.location.href=\"register.php\";
		</script>";

}
}
else 	echo "<script type=\"text/javascript\">alert('cannot complete registration. Please try again');
		window.location.href=\"register.php\";
		</script>";

mysqli_close($con);
 ?>
 