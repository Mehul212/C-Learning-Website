<?php
session_start();
if(!isset($_SESSION['email']))
{
	header("location:login.html");
}
$email=$_SESSION['email'];
?>
<html>
<head>
<link rel="stylesheet" href="home.css">
</head>

<body>
	<div id="logo">
      <img src="logo.gif" width=150px height=90px></img>
      <h1>c++ programming website</h1>
 </div>
 <header>
<nav class="navigation">
  <a href="home.php" >Home</a>&nbsp&nbsp&nbsp&nbsp
  <a href="https://www.codechef.com/ide" ><font style="color:white">Practice</font></a>&nbsp&nbsp&nbsp&nbsp
  <a href="code.php" ><font style="color:white">code</font></a>&nbsp&nbsp&nbsp&nbsp
  <a href="about.php" ><font style="color:white">About</font></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <a href="logout.php" ><font style="color:white" text-align="right">Logout</font></a>
</nav>
</header>
<div id="banner">
	<img src="banner.jpg" width=100%;></img>
</div>
<br><br><br>
<div class="concept">
<h2>VARIOUS OOPS CONCEPTS</h2><br><br>
<a href="basic.php">Basics</a><br><br>
<a href="object.php">Objects</a><br><br>
<a href="data.php">Data Types</a><br><br>
<a href="operators.php">Operators in C++</a><br><br>
<a href="dynamic.php">Dynamic Memory Allocation</a><br><br>

</div>
<footer>
		<nav class="navigation">
  <a href="contact.php" >Contact Us</a>&nbsp&nbsp&nbsp&nbsp
  <a href="carrer.php" >Careers</a>&nbsp&nbsp&nbsp&nbsp
  <a href="help.php" >Help</a>&nbsp&nbsp&nbsp&nbsp
</nav>
		<p>&copy;2019 Cpp. All rights reserved.</p>
	</footer>
</body>
</html>