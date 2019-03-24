<!DOCTYPE html>
<html>
<head>
	<title>COMPLAINTS</title>

	<style>

.button 
{
  background-color: lightgreen;
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
header 
{
  background-color: #666;
  padding: 6px;
  text-align: center;
  font-size: 18px;
  color: white;
}
select 
{
  width: 38%;
  padding: 16px 20px;
  border: none;
  border-radius: 10px;
  background-color: #f1f1f1;
}
form
{
	padding: 20px 0;
	margin-left: 40px;
}
footer 
{
  background-color:black;
  padding: 1px 0;
  text-align: center;
  color: yellow;
  font-size: 18px;
}

</style>

</head>

<body style="background-color:dodgerblue;">

<header>
  <img src="C:\Users\HP\Desktop\manitlogo.png" style="width: 100px;height: 100x;float: left;padding: 5px 20px;">
  <h2>GRIEVANCE REDRESSAL PORTAL </h2>
  <H4>Maulana Azad National Institute of Technology, Bhopal</H4>
</header>

<form  action=" " target="_blank" style="text-align: center;">
	
<h3 >Enter Hostel Number:</h3>
<input type="number" name="hostelno" min="1" max="10" style="width: 36.5%;height: 25px;border-radius: 10px;padding-left: 20px;padding-top: 5px;padding-bottom: 5px;">

<h3>Select Complaint Category:</h3>
<select name="Complaint" style="width: 38%;">
<option>MESS</option>
<option>ROOM</option>
<option>ELECTRICITY</option>
<option>WATER AND SANITATION</option>
<option>OTHERS</option>
</select>
	
<br>

<h3>Write a brief description of your complaint:</h3><br>
<textarea name="message" rows="12" cols="60" style="border-radius: 20px;padding-left: 20px;padding-right: 20px;font-size: 18px;">
</textarea>
<br><br>

<input type="submit" class="button">
<input type="reset" class="button">

</form>
<br>
<br>
<footer>
<pre>
 Link Road No 3,Near Kali Mata Mandir,Bhopal 462003 |  <a href="http://www.manit.ac.in/" style="color: yellow;">www.manit.ac.in</a>  | Telephone: +91 755 4051000,4052000,2670900 | Fax: +91-755 2670562
</pre>
</footer>

</body>
</html>