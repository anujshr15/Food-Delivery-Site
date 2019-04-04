<?php 
session_start();
$_SESSION['url']=$_SERVER['REQUEST_URI'];
  if(isset($_SESSION['sid'])==0)
  {
    header("Location: login.php");
  }

 ?>
  <?php 

$m=$_SESSION['sid'] ;
$con=mysqli_connect('localhost','root') ;
mysqli_select_db($con,'hostel') ;
$n="select * from reviews ,writes_rev,student where reviews.rid=writes_rev.rid and student.sid='$m' and student.roomid=reviews.roomid and student.sid=writes_rev.sid" ;
$result=mysqli_query($con,$n) ;
$num=mysqli_num_rows($result) ;
$filename=$_FILES["uploadfile"]["name"] ;
$tempname=$_FILES["uploadfile"]["tmp_name"] ;
$folder="photos/".$filename ;

move_uploaded_file($tempname, $folder) ;

if($num>=1)
{echo "<script type='text/javascript'>
                alert('You have already reviewed ,delete your response then edit');
            </script>";}
else{
$q="select * from student where sid='$m'";
$res=mysqli_query($con,$q);
$arr=mysqli_fetch_array($res);
$roomid=$arr['roomid'];

$d=$_POST["rev"] ;
echo $d ;
$roomno="";
    $hostelno="";
    
    for($i=0;$i<strlen($roomid),$roomid[$i]!='_';$i++)
    {
      $hostelno.="$roomid[$i]";
    }
    $i++;
    for(;$i<strlen($roomid);$i++)
    {
      $roomno.="$roomid[$i]";
    }
    $r="select max(rid) from reviews" ;
    $add=mysqli_query($con,$r);
    $ar=mysqli_fetch_array($add);
    $ri=$ar['max(rid)'] ;
    $rid=$ri+1 ;

    $a="insert into reviews(roomid,description,rid,photo) values('$roomid','$d',$rid,'$folder')" ;
mysqli_query($con,$a) ;
    $b="insert into writes_rev(rid,sid) values($rid,$m)" ;
    mysqli_query($con,$b) ;

}

mysqli_close($con) ;
?>
<?php 
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
  background-color: white ;
  height: 600px ;
  /*background-image: url(pen4.jpg) ;*/
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
 

      

    #grad1 
{
  background-image: linear-gradient(to right,rgba(60,120,255,.5),rgba(60,120,255,.5),rgba(60,120,255,0.5));
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
.pic{
  margin-left: 35% ;
}

	</style>
	<link rel="stylesheet" type="text/css" href="nav.css">
</head>
<body id="grad1"> 
	<div class="head">
	<header>

		<?php include 'navbar.php'?>
	</header>
	
  <div class="re" >
    <div class="hey"><h2><?php 
  $m=$_SESSION['sid'] ;
$con=mysqli_connect('localhost','root') ;
mysqli_select_db($con,'hostel') ;
$q="select * from student ,reviews,writes_rev where student.sid='$m' and writes_rev.sid=student.sid and reviews.rid=writes_rev.rid";
$res=mysqli_query($con,$q);
$arr=mysqli_fetch_array($res);

  echo $arr["roomid"] ;?></h2> </div><em>
 <?php 
 if(!$arr['photo']||$arr['description']){
 if(!$arr['photo']){
   echo "<p align=center><a href='".$arr['photo']."'><img src='".$arr['photo']."' width='200'  height='200' ></a></p> ";}
    
   
  echo "<br><br><br>".$arr["description"]."<br>By<br>".$_SESSION['sid']  ;}

  else
     echo "No reviews yet" ;
   ?><br></em></div>

  <a href="delete.php" class="btn btn-a">Delete</a>
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