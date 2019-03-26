<?php 
session_start();
if(!isset($_SESSION['sid']))
  {
  	header("Location: index.php");
  }

 if(empty($_POST))
 {
 	header("Location: room_allot.php");
 }
/*elseif(!is_numeric($_POST['hostelno']))
{	
	?>
	<script type="text/javascript">
		alert("inside hostelno");
	</script>
	<?php
	header("Location: room_allot.php");
}

elseif(!is_numeric($_POST['roomno']))
{
	?>
	<script type="text/javascript">
		alert("inside roomno");
	</script>
	<?php
	header("Location: room_allot.php");
}
*/
else {
	$id=$_SESSION['sid'];
$hostelno=$_POST['hostelno'];
$roomno=$_POST['roomno'];
$roomid="$hostelno"."_"."$roomno";
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hostel');
$checker="select * from student where roomid='$roomid'";
$res_checker=mysqli_query($con,$checker);
$num=mysqli_num_rows($res_checker);
if($num>=1)
{
?>
<script type="text/javascript">
	alert("Sorry! room is already alloted");
</script>

<?php
header("Location: room_allot.php");
}
else{
$q="update student set roomid='$roomid' where sid=$id";
$res=mysqli_query($con,$q);
if($res==1)
{
	
	header("Location: index.php");
}
else{
	
	header("Location: room_allot.php");
}

}





}



 ?>