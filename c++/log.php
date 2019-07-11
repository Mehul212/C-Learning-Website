<?php 
session_start();
$conn= mysqli_connect("localhost", "root", "", "c++") or die('Error connecting to DB');
$em=$_POST["email"];
$pw=$_POST["psw"];
$myquery=mysqli_query($conn,"select * from user where email='$em'");
if (!$myquery) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
$array = mysqli_fetch_array($myquery);
        if(($array['email']==$em && $array['pw']==$pw ))
 {
 	setcookie("email",$em);
 	setcookie("psw",$pw);
 	$_SESSION['email']=$array['email'];
    header("location:home.php");
}
else {
    echo 'Login fail';    
}       
?>