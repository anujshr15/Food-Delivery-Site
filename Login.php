<?php 
session_start();
if(isset($_SESSION['sid']))
{
	header("Location: index.php");
}

 ?>


<!DOCTYPE html>
<html>
<head>
	
<title> LOGIN PANEL</title>

<style>
body
{

}
.grad1 
{
  background-image: linear-gradient(to right,rgba(60,120,255,.3),rgba(60,120,255,.3),rgba(60,120,255,0.3));
}

#all
{
margin: auto;
width: 30%;
text-align:center;
margin-top: 100px;
border: 3px solid #f1f1f1;
padding: 30px;
border-radius: 30px;
font-family: arial;
opacity: 1;
background-color: lavender;

}
.button:hover
{
  background-color: lawngreen;
  color: black;
}
.button 
{
  background-color: green;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 60%;
  border-radius: 10px;

}
</style>
</head>
<body class="grad1">
	<?php include 'navbar.php' ?>

    <div id="all">
	<FORM action="validation.php" method="post" >
	
	<h2 style="text-align: center;">LOGIN FORM</h2>
    <img src="login_icon1.png" style="height: 100px;width: 100px;">
    <br>
    <br>
    
		Scholar ID:<br>
        <input type="number" required placeholder="Enter Scholar Id" name="sid" style="width: 60%;height: 30px;border-radius: 10px;padding: 10px;"><br><br>
        Password:<br>
        <input type="password" required placeholder="Enter Password" name="password" style="width: 60%;height: 30px;border-radius: 10px;padding: 10px;">
        <br><br>
        <input type="submit" align="center" class="button">
    
	</FORM>
	</div>
<?php include 'footer.php' ?>
</body>
</html>