<?php 

session_start();
  $_SESSION['url']=$_SERVER['REQUEST_URI'];
  if(isset($_SESSION['sid'])==0)
  {
    header("Location: login.php");
  }


 ?>
 


<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="nav.css">
	<title>ROOM REVIEWS</title>
	<style type="text/css" rel="stylesheet" href="nav.css">
		
#grad1 
{
  background-image: linear-gradient(to right,rgba(60,120,255,.3),rgba(60,120,255,.3),rgba(60,120,255,0.3));
}
.hey{
  	width: 70px;
  /*border: 1px solid grey;*/
  padding: .5px;
  margin: .5px;
  margin-left: 45% ;
  border-radius: 25px;
  text-decoration: underline;

  
  }

 .re{
  width: 700px;
  border: 5px solid grey;
  padding: 25px;
  margin: 25px;
  margin-left: 20% ;
  border-radius: 25px
  font color: red ;
  background-color: green ;
  height: 500px ;
  background-image: url(pen4.jpg) ;
  text-decoration-color: red ;

}

	</style>
</head>
<body id="grad1"> 
<header>

  <?php include 'navbar.php' ?>

</header>
<body>
	<div class="hey"><h2><?php echo $_POST["hos"] ;?><?php echo $_POST["room"] ;?></h2></div>
  
  
  <div class="re">
	<em><?php 
 $con=mysqli_connect('localhost','root') ;
mysqli_select_db($con,'hostel') ;
$a=$_POST["hos"] ;
$b=$_POST["room"] ;
$q="select description,rid  from reviews where hostel_no=$a and room_no=$b ";
$result=mysqli_query($con,$q) ;
$num=mysqli_num_rows($result) ;
if($num>=1){
for($i=1;$i<=$num;$i++){
	$row=mysqli_fetch_array($result) ;
	echo $row["description"]."<br>By<br>".$row["rid"]."<br><br><br>" ;
}}
else{
	echo "No reviews yet<br>" ;
}
?></em>
</div>

 <!-- <footer>@Copyright 2019</footer> -->
<?php include 'footer.php' ?>
<!-- <script>
		var par=document.querySelector("footer");
		var dt=new Date();
		par.innerText+=" "+(dt.getYear()+1900).toString();
	</script> -->
</body>

