<!DOCTYPE html>
<html>
<head>
	<title>login form</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<center>
<div class="container">

 <form id="admin" method="POST" action="new.php">

    <div class="header">

         <h3 align="center">Admin Login</h3>

    </div>

         <div class="sep"></div>

         <div class="inputs">
                <h3>username:</h3>
                <input type="text"  value="" name="username" />
             <h3>password:</h3>
 
                  <input type="password"  value="password" name="password" />

                  <div class="checkboxy">
            <input name="checky" id="checky" value="1" type="checkbox" />
              <label class="terms">remember me</label>
            </div>

            <input type="submit" id="submit" value="login" name="submit"></input>

            </div>

 </form>
 </div>
 </center><br>
 <center>
     <a href="login.php">Users Login</a><br><br>
     <a href="guest.php">Guest Login</a>
 </center>
 <?php

if (isset($_POST['submit']))
{
 $username=$_POST['username'];
 $password=$_POST['password'];
 if(!empty($username )&& ($password))
 {
 if($username=="sawe" && $password=="1234")
 	
 {
 	header("location:index.php");
 	
}else{


	echo "invalid username";
}
}else{

 echo "username cannot be blank";
}
   
}
?>

</body>
</html>