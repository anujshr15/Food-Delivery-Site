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
	<title>REVIEW</title>
	<style>
.button 
{
  background-color: springgreen;
  border: none;
  color: black;
  padding: 12px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 24px;
}
#all
{

  width: 50%;
  background-color: lavender;
  opacity: 1;
  margin:auto;
  margin-top: 55px;
  border-radius: 40px;
}

		
 header 
{
  background-color: black;
  padding: 6px;
  text-align: center;
  font-size: 18px;
  color:yellow;
}
body
{
  margin:0;
}

			

#grad1 
{
  background-image: linear-gradient(to right,rgba(60,120,255,.3),rgba(60,120,255,.3),rgba(60,120,255,0.3));
}

textarea
{
  border-radius: 20px;
  padding:20px;
  font-size: 18px;
  border-style: groove;
  border-width: 1.6px;
  border-color: red;
  overflow: auto;
}

	


       
form
{
	padding: 20px 0;
	margin-left: 40px;
}



		

</style>

</head>
<?php include 'navbar.php' ?>
<body id="grad1"> 
<div id="all">
<h3 ><a style="margin-top: 5px; text-align: center;text-decoration: none; margin-left: 33% ;" href="yourrev.php">View Your Review</a></h3>
<h2 style="text-align: center;padding-top: 20px;text-decoration: underline;font-family: verdana;">Student Review Portal</h2>
<form  action="review.php"  style="text-align: center;padding-top: 0px;font-family: timesnewroman;" method="POST">






<h3>Description of Room</h3><br>
<textarea name="rev" rows="12" cols="50">
</textarea>
<br><br>

<input type="submit" class="button">
<input type="reset" class="button">

</form>
</div>


<!-- <script>
		var par=document.querySelector("footer");
		var dt=new Date();
		par.innerText+=" "+(dt.getYear()+1900).toString();
	</script> -->

<?php include 'footer.php' ?>
</body>
</html>