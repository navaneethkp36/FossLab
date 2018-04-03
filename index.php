<?php
  session_start();
  require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>  Login Form  </title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">   
</head>
    <body>
    <div class="login-box1">
    <img src="img/avatar.png" class="avatar">
        <h1>Login Here</h1>
            <form class="myform" action="index.php" method="post">
            <p>Username :</p>
            <input type="text" name="username" placeholder="Enter Username" required>
            <p>Password :</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input name="submit_btn" type="submit" id="signup_btn" value="Log In" />
            <a href="#">Forget Password?</a><br><br>
            <a href="register1.php">Create an account</a><br>
            </form>
          <?php
         if(isset($_POST['submit_btn']))
	     {
		 // echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
		  $username = $_POST['username'];
		  $password = $_POST['password'];
		  $query = "select * from userinfo where username='$username' AND password='$password'";
	      $query_run = mysqli_query($con,$query);
			
			if(mysqli_num_rows($query_run)>0)
			{
				//valid
				$_SESSION['username']= $username;
				header('location:homepage.php');
			}
            else
			{
				echo '<script type="text/javascript"> alert("invalid username or password") </script>';
				//invalid
			}				
		 }			  
		  ?>
        
        </div>
    
    </body>
</html>