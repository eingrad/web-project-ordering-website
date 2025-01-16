<!DOCTYPE html>
<html lang="en">
<?php

session_start(); 
error_reporting(0); 
include("connection/connect.php"); 
if(isset($_POST['submit'] )) 
{
     if(empty($_POST['firstname']) || 
   	    empty($_POST['lastname'])|| 
		empty($_POST['email']) ||  
		empty($_POST['phone'])||
		empty($_POST['password'])||
		empty($_POST['cpassword']) ||
		empty($_POST['cpassword']))
		{
			$message = "All fields must be Required!";
		}
	else
	{
	
	$check_username= mysqli_query($db, "SELECT username FROM users where username = '".$_POST['username']."' ");
	$check_email = mysqli_query($db, "SELECT email FROM users where email = '".$_POST['email']."' ");
		

	
	if($_POST['password'] != $_POST['cpassword']){  
       	
          echo "<script>alert('Password not match');</script>"; 
    }
	elseif(strlen($_POST['password']) < 6)  
	{
      echo "<script>alert('Password Must be >=6');</script>"; 
	}
	elseif(strlen($_POST['phone']) < 10)  
	{
      echo "<script>alert('Invalid phone number!');</script>"; 
	}

    elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
    {
          echo "<script>alert('Invalid email address please type a valid email!');</script>"; 
    }
	elseif(mysqli_num_rows($check_username) > 0) 
     {
       echo "<script>alert('Username Already exists!');</script>"; 
     }
	elseif(mysqli_num_rows($check_email) > 0) 
     {
       echo "<script>alert('Email Already exists!');</script>"; 
     }
	else{
       
	 
	$mql = "INSERT INTO users(username,f_name,l_name,email,phone,password,address) VALUES('".$_POST['username']."','".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".$_POST['phone']."','".md5($_POST['password'])."','".$_POST['address']."')";
	mysqli_query($db, $mql);
	
		 header("refresh:0.1;url=login.php");
    }
	}

}


?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Registration</title>

    <link href="css/style2.css" rel="stylesheet">
    <link  href="css/header2.css" rel="stylesheet">
    
<body>
<div class="header">
    <h1 style="text-indent: 50px;">
        <a href="index.php" style="text-decoration: none; color: inherit; display: inline-block;">
            <img src="images/logo.png" alt="Murni Fried Chicken Logo" style="height: 40px;"> <!-- Adjust height as needed -->
        </a>
    </h1>
</div>

<br><br>

 <div class="container">
    <div class="box form-box">

    <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="example-text-input" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="username">First Name</label>
                    <input type="text" name="firstname" id="example-text-input" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="username">Last Name</label>
                    <input type="text" name="lastname" id="example-text-input-2" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="exampleInputEmail1" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="Phone">Phone Number</label>
                    <input type="text" name="phone" id="example-tel-input-3" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="exampleInputPassword1" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" name="cpassword" id="exampleInputPassword2" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="textarea">Address</label>
                    <textarea class="form-control" id="exampleTextarea"  name="address" rows="3"></textarea>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Already a member? <a href="login.php">Sign In</a>
                </div>
            </form>
        </div>
</div>
</div>
</body>

</html>