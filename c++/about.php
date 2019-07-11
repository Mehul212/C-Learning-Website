
<?php
session_start();
if(!isset($_SESSION['email']))
{
	header("location:login.html");
}
$email=$_SESSION['email'];
?><html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
	<div id="logo">
      <img src="logo.gif" width=150px height=90px></img>
     <h2>c++ tutorial.</h2>
     </div>
<div id="navbar">
<ul>
<li><a  href="home.php" >Home</a></li>
<li><a  href="https://www.codechef.com/ide" >Practice</a></li>
<li><a  href="code.php" >Code</a></li>
<li><a  href="about.php" >About</a></li>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <li> <a href="logout.php" >Logout</a></li>
</ul>
</div>
<div class="main">
<h1>About</h1>
<p>C++tutorial.com was created as a platform to help programmers make it big in the world of computer programming .  we work hard to revive the geek in you . We also aim to have training sessions and discussions related to algorithms, binary search, technicalities like array size and the likes. Apart from providing a platform for programming competitions, CodeChef also has various algorithm tutorials and forum discussions to help those who are new to the world of computer programming.</p>
</div>
<div id="footer">
<ul>
<li><a  href="carrer.php" >Careers</a></li>
<li><a  href="help.php" >Help</a></li>
<li><a  href="contact.php" >Contact Us</a></li>
  <p class="copy">&copy; 2019 c++tutorial.com All Rights Reserved.</p>

</ul>
</div>
</body>
</html>