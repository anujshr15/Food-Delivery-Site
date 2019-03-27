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
$resid=mysqli_query($con,"select max(cid) from complaints;");
$row=mysqli_fetch_row($resid);
$nextid=(int)$row[0]+1;
echo $nextid;
$q="insert into complaints(cid,category,description,hostelno) values ($nextid,'$category','$description','$hostelno');";

$done=mysqli_query($con,$q);
if($done){
$q2="insert into writes_com(sid,cid) values($id,$nextid)";
$final=mysqli_query($con,$q2);
}
mysqli_close($con);

header("Location: index.php");

}
 ?>
