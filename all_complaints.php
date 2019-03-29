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
	<style type="text/css">
		.box {
			border:1px solid black;
			box-shadow: 0 0 10px rgba(0,0,0,0.6);
			width:50%;
			min-height: 80px;
			height: auto;
			margin: 20px auto;
			font-size: 1.2em;
			text-align: center;
		}

		.box:hover {
			transform: scale(1.1);
			transition: all 200ms ease-in;

		}
	</style>
</head>
<body>
	<?php include 'navbar.php' ?>

	
<?php 
function getcol($s)
	{
		if($s==="PENDING")
			return "red";
		else
			return "green";
	}
if($num==0)
{
	echo "<div class=\"box\">YOU HAVE NOT FILED A COMPLAINT YET !</div>";
}
else{
for($i=0;$i<$num;$i++)
{
	$row=mysqli_fetch_array($res);
	if($row['status']==0)
		$status='PENDING';
	else
		$status='RESOLVED';
	$cid=$row['cid'];
	$category=$row['category'];
	$description=$row['description'];

	

	$clr=getcol($status);
		
	echo "<div class=\"box\">
		<span><strong>Complaint ID: $cid</strong></span>
		<hr width=\"50%\"/>
		<span><strong>Category: $category</strong></span>
		<span>Status: <span style=\"color:$clr;\">$status</span></span>
		<hr width=\"50%\"/>
		<p>$description</p>
	</div>";
}
}
 ?>

<!-- </table> -->

</body>
</html>


