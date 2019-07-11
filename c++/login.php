<!DOCTYPE html>
<html lang="en">
<head>
  <script> 
function validateform()
{  
  
  var x = document.register.email.value;
  var atpos = x.indexOf("@");
  var dotpos = x.lastIndexOf(".");
  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
    alert("Not a valid e-mail address");
    return false;
  }    

 var a = document.getElementById("psw").value;
  if (a==null || a==""){  
  alert("Pass can't be blank");  
  return false; 
  }
  } 
</script> 
<link rel="stylesheet" href="login.css">
  <title>login</title>
</head>
<body>
    <div id="logo">
      <img src="logo.gif" width=150px height=90px></img>
      <h1>c++ programming website</h1>
 </div>
   <form action="log.php" method="post" name="register" onsubmit="return validateform()">
  <div class="center">
    <h2>Login</h2>
    
    <label for="email"><b>Email</b></label>
    <input type="text" name="email"><br><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" name="psw" id="psw"><br><br>

    <p>click here to login</p>
    <button type="submit">Login</button>
  
    <p>Are you a new user? <a href="register.html">Create account</a>.</p>
  </div>
</form>
</body>
</html>