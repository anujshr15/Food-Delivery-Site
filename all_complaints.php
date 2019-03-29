<?php 
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hostel');
$sid=$_SESSION['sid'];
$q="select * from complaints where cid in (select cid from writes_com where sid=$sid)";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
?>
<!DOCTYPE html>
<html>
<head>
	<title>ALL COMPLAINTS</title>
</head>
<body>
	<?php include 'navbar.php' ?>

	<table>
	<tr>
		<th>
			Complaint ID
		</th>
		<th>
			Hostel No.
		</th>
		<th>
			Description
		</th>
		<th>
			Status
		</th>

	</tr>
<?php 
for($i=0;$i<$num;$i++)
{
	$row=mysqli_fetch_array($res);
	if($row['status']==0)
		$status='PENDING';
	else
		$status='RESOLVED';

	echo "<tr><td>".$row["cid"]."</td><td>".$row['hostelno']."</td><td>".$row['description']."</td><td>$status</td></tr>";
}
 ?>

</table>

</body>
</html>


