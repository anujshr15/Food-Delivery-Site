<?php 
session_start();
if(!isset($_SESSION['sid']))
  {
  	header("Location: index.php");
  }
$id=$_SESSION['sid'];
$hostelno=$_POST['hostelno'];
$category=$_POST['complaint'];
$description=$_POST['message'];
$q="insert into complaints(category,description,hostelno) values ('$category','$description','$hostelno');";
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'Hostel');
mysqli_query($con,$q);
$resid=mysqli_query($con,"select cid from complaints;");
$num=mysqli_num_rows($resid);
$nextid=$num;
$q2="insert into writes_com(sid,cid) values($id,$nextid)";
$final=mysqli_query($con,$q2);
mysqli_close($con);
if($final==1)
{
	header("Location: index.php");
}
 ?>
