<?php 
session_start();
if(!isset($_SESSION['sid']))
  {
  	header("Location: index.php");
  }
elseif(strlen($_POST['message'])==0)
{
	header("Location: complaint.php");
}
else{
$id=$_SESSION['sid'];
$hostelno=$_POST['hostelno'];
$category=$_POST['Complaint'];
$description=$_POST['message'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'Hostel');
$resid=mysqli_query($con,"select cid from complaints;");
$num=mysqli_num_rows($resid);
$nextid=$num+1;
$q="insert into complaints(cid,category,description,hostelno) values ($nextid,'$category','$description','$hostelno');";

mysqli_query($con,$q);

$q2="insert into writes_com(sid,cid) values($id,$nextid)";
$final=mysqli_query($con,$q2);
mysqli_close($con);
if($final==1)
{
	header("Location: index.php");
}
}
 ?>
