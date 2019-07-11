

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
<h1>Data Types</h1>
<hr />
<p>While writing program in any language, you need to use various variables to store various information. Variables are nothing but reserved memory locations to store values. This means that when you create a variable you reserve some space in memory.</p>
<p>You may like to store information of various data types like character, wide character, integer, floating point, double floating point, boolean etc. Based on the data type of a variable, the operating system allocates memory and decides what can be stored in the reserved memory.</p>
<h1>Primitive Built-in Types</h1>
<p>C++ offers the programmer a rich assortment of built-in as well as user defined data types. Following table lists down seven basic C++ data types &minus;</p>
<table class="table table-bordered" style="text-align:center;">
<tr>
<th width="50%" style="text-align:center;">Type</th>
<th style="text-align:center;">Keyword</th>
</tr>
<tr>
<td>Boolean</td>
<td>bool</td>
</tr>
<tr>
<td>Character</td>
<td>char</td>
</tr>
<tr>
<td>Integer</td>
<td>int</td>
</tr>
<tr>
<td>Floating point</td>
<td>float</td>
</tr>
<tr>
<td>Double floating point</td>
<td>double</td>
</tr>
<tr>
<td>Valueless</td>
<td>void</td>
</tr>
<tr>
<td>Wide character</td>
<td>wchar_t</td>
</tr>
</table>
<p>Several of the basic types can be modified using one or more of these type modifiers &minus;</p>
<ul class="list">
<li>signed</li>
<li>unsigned</li>
<li>short</li>
<li>long</li>
</ul>
<p>The following table shows the variable type, how much memory it takes to store the value in memory, and what is maximum and minimum value which can be stored in such type of variables.</p>
<table class="table table-bordered" style="text-align:center;">
<tr>
<th style="text-align:center;">Type</th>
<th style="text-align:center;">Typical Bit Width</th>
<th style="text-align:center;">Typical Range</th>
</tr>
<tr>
<td>char</td>
<td>1byte</td>
<td>-127 to 127 or 0 to 255</td>
</tr>
<tr>
<td>unsigned char</td>
<td>1byte</td>
<td>0 to 255</td>
</tr>
<tr>
<td>signed char</td>
<td>1byte</td>
<td>-127 to 127</td>
</tr>
<tr>
<td>int</td>
<td>4bytes</td>
<td>-2147483648 to 2147483647</td>
</tr>
<tr>
<td>unsigned int</td>
<td>4bytes</td>
<td>0 to 4294967295</td>
</tr>
<tr>
<td>signed int</td>
<td>4bytes</td>
<td>-2147483648 to 2147483647</td>
</tr>
<tr>
<td>short int</td>
<td>2bytes</td>
<td>-32768 to 32767</td>
</tr>
<tr>
<td>unsigned short int</td>
<td>Range</td>
<td>0 to 65,535</td>
</tr>
<tr>
<td>signed short int</td>
<td>Range</td>
<td>-32768 to 32767</td>
</tr>
<tr>
<td>long int</td>
<td>4bytes</td>
<td>-2,147,483,648 to 2,147,483,647</td>
</tr>
<tr>
<td>signed long int</td>
<td>4bytes</td>
<td>same as long int</td>
</tr>
<tr>
<td>unsigned long int</td>
<td>4bytes</td>
<td>0 to 4,294,967,295</td>
</tr>
<tr>
<td>float</td>
<td>4bytes</td>
<td>+/- 3.4e +/- 38 (~7 digits)</td>
</tr>
<tr>
<td>double</td>
<td>8bytes</td>
<td>+/- 1.7e +/- 308 (~15 digits)</td>
</tr>
<tr>
<td>long double</td>
<td>8bytes</td>
<td>+/- 1.7e +/- 308 (~15 digits)</td>
</tr>
<tr>
<td>wchar_t</td>
<td>2 or 4 bytes</td>
<td>1 wide character</td>
</tr>
</table>

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