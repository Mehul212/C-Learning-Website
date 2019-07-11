

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
<h1>Dynamic Memory Allocation</h1>

<p>A good understanding of how dynamic memory really works in C++ is essential to becoming a good C++ programmer. Memory in your C++ program is divided into two parts &minus;</p>
<ul class="list">
<li><p><b>The stack</b> &minus; All variables declared inside the function will take up memory from the stack.</p></li>
<li><p><b>The heap</b> &minus; This is unused memory of the program and can be used to allocate the memory dynamically when program runs.</p></li>
</ul>
<p>Many times, you are not aware in advance how much memory you will need to store particular information in a defined variable and the size of required memory can be determined at run time.</p>
<p>You can allocate memory at run time within the heap for the variable of a given type using a special operator in C++ which returns the address of the space allocated. This operator is called <b>new</b> operator.</p>
<p>If you are not in need of dynamically allocated memory anymore, you can use <b>delete</b> operator, which de-allocates memory that was previously allocated by new operator.</p>

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