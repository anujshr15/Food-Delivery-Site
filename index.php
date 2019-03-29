<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>MANIT HOSTEL</title>

	<link type="text/css" rel="stylesheet" href="index.css">
	<link rel="stylesheet" type="text/css" href="nav.css">
<style >
  footer 
{
  background-color:black;
  padding: 1px 0;
  text-align: center;
  color: yellow;
  font-size: 18px;
  margin-top: 400px;
}
</style>
</head>
<body style="background-color: lightcyan;">
<?php include 'navbar.php' ?>
<marquee scrollamount="10" direction="right">Welcome to MANIT Hostel Management Site</marquee>


<div class="slideshow-container" style="margin-top: 50px;">

<div class="mySlides fade" >
  <img src="hostel1.png" style="width:100%;height: 360px;">
</div>

<div class="mySlides fade">
  <img src="hostel2.png" style="width:100%;height: 360px;">
</div>

<div class="mySlides fade">
  <img src="hostel3.png" style="width:100%;height: 360px;">
</div>

<div class="mySlides fade" >
  <img src="hostel4.png" style="width:100%;height: 360px;">
</div>

<div class="mySlides fade" >
  <img src="hostel5.png" style="width:100%;height: 360px;">
</div>

<div class="mySlides fade" >
  <img src="hostel6.png" style="width:100%;height: 360px;">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>
<!--
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
-->
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>






<!-- <footer>@Copyright 2019</footer> -->
<footer>
  <pre>
 Link Road No 3,Near Kali Mata Mandir,Bhopal 462003 |  <a href="http://www.manit.ac.in/" style="color: yellow;">www.manit.ac.in</a>  | Telephone: +91 755 4051000,4052000,2670900 | Fax: +91-755 2670562
</pre>
	<a href="https://www.facebook.com/MANIT-Bhopal-217608298830555/">
<img src="facebook.png" width="40" height="30">
</a>
<a href="https://twitter.com/manitbpl" >
	<img src="twitter.png" width="30" height="30">
</a>
<a href="https://www.youtube.com/channel/UCXzZC99puUZuJDiQ09p72cw?reload=9">
	<img src="youtube.png" width="50" height="30">
</a>
<a href="https://plus.google.com/u/0/103957241353925049032"></a>
<img src="googleplus.png" width="34" height="30"><br>
Copyright 2019
</footer>
<!-- <script>
		var par=document.querySelector("footer");
		var dt=new Date();
		par.innerText+=" "+(dt.getYear()+1900).toString();
	</script> -->


</body>
</html>