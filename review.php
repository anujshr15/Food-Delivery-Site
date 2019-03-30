<?php 
session_start();
$_SESSION['url']=$_SERVER['REQUEST_URI'];
  if(isset($_SESSION['sid'])==0)
  {
    header("Location: login.php");
  }

 ?>
  <?php 
$a=$_POST["rno"]  ;
$b=$_POST["room"] ;
$c=$_POST["hos"]  ;
$d=$_POST["rev"]  ;

$con=mysqli_connect('localhost','root') ;
mysqli_select_db($con,'hostel') ;
$q="insert into reviews(rid,room_no,hostel_no,description) values('$a','$b','$c','$d')" ;
mysqli_query($con,$q) ;
mysqli_close($con) ;
?>

<!DOCTYPE html>
<html>
<head>

	<link type="text/css" rel="stylesheet" href="nav.css">
	<title>Thank You!!</title>
	<style type="text/css">
		body{
			background-color: powderblue ;
			

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
  height: 200px ;
  background-image: url(pen4.jpg) ;
  text-decoration-color: red ;

}
 .me{
 	margin-left: 75% ;
 	font-size: 30px ;
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
  body
{
  margin:0;
  background-color: black;
}

      

    #grad1 
{
  background-image: linear-gradient(to right,rgba(60,120,255,.5),rgba(60,120,255,.5),rgba(60,120,255,0.5));
}
	</style>
	<link rel="stylesheet" type="text/css" href="nav.css">
</head>
<body id="grad1"> 
	<div class="head">
	<header>

		<?php include 'navbar.php'?>
	</header>
	<div class="hey"><h2><?php echo $_POST["room"] ;?></h2></div>
  <div class="re" ><em>
  <?php echo $_POST["rev"] ; ?><br>By<br><?php  echo $_POST["student"] ; ?><br><?php  echo $_POST["rno"] ; ?></em></div>
  
  </div>

  <!-- <footer>@Copyright 2019</footer> -->
<?php include 'footer.php' ?>
<!-- <script>
		var par=document.querySelector("footer");
		var dt=new Date();
		par.innerText+=" "+(dt.getYear()+1900).toString();
	</script> -->


</body>
</html>