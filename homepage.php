<?php
  //php comment
  session_start();
?>
<!DOCTYPE html>
<html>

 <head>
      <title>Login page</title>
	  <link rel="stylesheet" href="css/styles1.css">
	  <script async src="https://static.addtoany.com/menu/page.js"></script>
 </head>
 <body style="background-color:#ffffff">
    <div id="main-box">
	   <center>
		 <img src="https://png.icons8.com/color/1600/circled-user-male-skin-type-5.png" class="avatar">
	      <h2>Home page</h2>
		  <h2>Welcome....<big> <?php echo $_SESSION['username'] ?></big></h2>
	  </center>	 
	  <form class="myform"action="homepage.php" method="post">
	   <input name="logout" type="submit" id="logout_btn" value="Log Out" /><br>
	  </form>
	  <div class="a2a_kit a2a_kit_size_32 a2a_default_style" id="my_centered_buttons">
    <a class="a2a_button_facebook"></a>
    <a class="a2a_button_twitter"></a>
    <a class="a2a_button_google_plus"></a>
    <a class="a2a_button_pinterest"></a>
    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
    </div>
       <?php
	     if(isset($_POST['logout']))
		 {
			 session_destroy();
			 header('location:index.php');
		 }
	   ?>	  
    </div>
	

    

 </body>
 
</html>
