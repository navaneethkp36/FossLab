<?php
  //php comment
  require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title> Sign Up </title>
    <link rel="stylesheet" type="text/css" href="style.css">   
</head>
    <body>
    <div class="login-box">
    <img src="https://raw.githubusercontent.com/AswinPG/FossLab/master/avatar.png" class="avatar">
        <h1>Register Here</h1>
            <form class="myform"action="tablemanipulation.php" method="post">
            <p>Username :</p>
             <input name="username" type="text" class="inputvalue" placeholder=" Your Username" required/>
            <p>Password :</p>
            <input name="password" type="password" class="inputvalue" placeholder=" Your Password" required/>
            <p>Confirm Password : </p>
			<input name="cpassword" type="password" class="inputvalue" placeholder="Confirm Password" required/>
			<input name="submit_btn" type="submit" id="signup_btn" value="Sign Up" />
            <a href="loginhome1.html">>>>LOG IN NOW</a><br>
            </form>
	 <?php
    if(isset($_POST['submit_btn']))
	{
		//echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
		$username = $_POST['username'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		if($password==$cpassword)
		{
			$query = "select * from userinfo where username='$username'";
			$query_run = mysqli_query($con,$query);
			
			if(mysqli_num_rows($query_run)>0)
			{
				// there is already a user with same username 
				echo '<script type="text/javascript"> alert("Username already exist") </script>';
            }
            else
            {
				$query = "insert into userinfo values('$username','$password')";
				$query_run = mysqli_query($con,$query);
				
				if($query_run)
				{
					echo '<script type="text/javascript"> alert("User Registered ... Go To Login Page To Login") </script>';
				}
				else
				{
					echo '<script type="text/javascript"> alert("ERROR!!") </script>';
				}
			}				
		}
		else
		{
			echo '<script type="text/javascript"> alert("Password and confirm password does not match!") </script>';
		}
	}
 	?>	
    </div>
    </body>
</html
