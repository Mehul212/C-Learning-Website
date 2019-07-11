<?php
$fn=$_POST["first"];
$pw=$_POST["psw"];
$em=$_POST["email"];
$ln=$_POST["last"];
$conn= mysqli_connect("localhost", "root", "", "c++") or die('Error connecting to DB');
$result= mysqli_query($conn,"insert into user(fname,lname,email,pw) values('$fn','$ln','$em','$pw')");
header("location:login.html");
?>