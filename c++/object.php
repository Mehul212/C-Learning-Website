

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
<h1>Objects in C++</h1>
<p> 
Class is mere a blueprint or a template. No storage is assigned when we define a class. Objects are instances of class, which holds the data variables declared in class and the member functions work on these class objects.Each object has different data variables. Objects are initialised using special class functions called Constructors.
</p><br><br>
<p>The classes are the most important feature of C++ that leads to Object Oriented programming. Class is a user defined data type, which holds its own data members and member functions, which can be accessed and used by creating instance of that class.

The variables inside class definition are called as data members and the functions are called member functions.</p></br></br>

<p>
	You may have noticed two keywords: private and public in the above example.

The private keyword makes data and functions private. Private data and functions can be accessed only from inside the same class.

The public keyword makes data and functions public. Public data and functions can be accessed out of the class.

Here, data1 and data2 are private members where as function1() and function2() are public members.

If you try to access private data from outside of the class, compiler throws error. This feature in OOP is known as data hiding.
</p>


<p><img class="imagec" src="object.png"></p>




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