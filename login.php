<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>

    <link href="css/header2.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
  
</head>

<body>

<?php
include("connection/connect.php"); 
error_reporting(0); 
session_start(); 
if(isset($_POST['submit']))  
{
	$username = $_POST['username'];  
	$password = $_POST['password'];
	
	if(!empty($_POST["submit"]))   
     {
	$loginquery ="SELECT * FROM users WHERE username='$username' && password='".md5($password)."'"; //selecting matching records
	$result=mysqli_query($db, $loginquery); //executing
	$row=mysqli_fetch_array($result);
	
	                        if(is_array($row)) 
								{
                                    	$_SESSION["user_id"] = $row['u_id']; 
										 header("refresh:1;url=index.php"); 
	                            } 
							else
							    {
                                      	$message = "Invalid Username or Password!"; 
                                }
	 }
	
	
}
?>

<div class="header">
    <h1 style="text-indent: 50px;">
        <a href="index.php" style="text-decoration: none; color: inherit; display: inline-block;">
            <img src="images/logo.png" alt="Murni Fried Chicken Logo" style="height: 40px;"> <!-- Adjust height as needed -->
        </a>
    </h1>
</div>
 <br> <br>

 <div class="container">
        <div class="box form-box">

        <header>Login to your account</header>
        <br>
        <span style="color:red;"><?php echo $message; ?></span> 
        <span style="color:green;"><?php echo $success; ?></span>
        <br>

            <form action="" method="post">
                
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Don't have account? <a href="registration.php">Sign Up Now</a>
                </div>
            </form>
        </div>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <div class="container-fluid pt-3">
	<p></p>
  </div>
   
        <footer class="footer">

        </footer>
       


</body>

</html>
