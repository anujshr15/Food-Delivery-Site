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
	<title>YOUR REVIEW !!</title>
	<style type="text/css">
			body
{
  margin:0;
}
#grad1 
{
  background-image: linear-gradient(to right,rgba(60,120,255,.3),rgba(60,120,255,.3),rgba(60,120,255,0.3));
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
  .btn{
  margin-top:10px ;
  color: blue ;
  display: inline-block;
  padding: 10px 30px ;
  text-decoration: none;
  text-transform: uppercase;
  transition: background-color0.2s,border 0.2s,color 0.2s ;
  margin-left: 42% ;
  border-radius: 5px ;
}
.btn-a{
  background-color: green;
  color: black ;
  margin-right: 15px ;
  border: 1px solid grey  ;

}
.btn-b{
  background-color: transparent;
  color: black ;
  margin-right: 15px ;
  border: 1px solid grey ;

}
.btn-a:hover{
  background-color:green ;
}
.btn-b:hover{
  background-color: grey ;
}

	</style>
</head>
<body id="grad1"> 
<header>

  <?php include 'navbar.php' ?>

</header>
	<div class="hey"><h2><?php 
  $m=$_SESSION['sid'] ;
$con=mysqli_connect('localhost','root') ;
mysqli_select_db($con,'hostel') ;
$q="select * from student ,reviews,writes_rev where student.sid=$m and writes_rev.sid=student.sid and reviews.rid=writes_rev.rid";
$res=mysqli_query($con,$q);
$arr=mysqli_fetch_array($res);

  echo $arr["roomid"] ;?></h2></div>
  <div class="re" ><em>
  <?php echo $arr["description"] ; ?><br>By<br><?php  echo $_SESSION['sid']  ; ?><br></em></div>
  <a href="delete.php" class="btn btn-a">Delete</a>

    <!-- <footer>@Copyright 2019</footer> -->
<?php include 'footer.php' ?>
<!-- <script>
		var par=document.querySelector("footer");
		var dt=new Date();
		par.innerText+=" "+(dt.getYear()+1900).toString();
	</script> -->
</body>
</html>