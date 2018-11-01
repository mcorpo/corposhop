<!DOCTYPE>
<html>
	<head>
		<title>Admin Login</title>
<link rel="stylesheet" href="styles/login_style.css" media="all" />
		
	</head>	
<body>
<div class="login">
<h2 style="color:white; text-align:center;"><?php echo @$_GET['not_admin']; ?>

<h2 style="color:white; text-align:center;"><?php echo @$_GET['logged_out']; ?>
</h2>
	<h1>Admin Login</h1>
    <form method="post">
    	<input type="text" name="email" placeholder="Email" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large" name="login">Login</button>
    </form>
</div>

</body>
</html>
<?php
session_start();

include("includes/db.php");

	if(isset($_POST['login'])){
		
		$email = mysql_real_escape_string($_POST['email']);
		$pass = mysql_real_escape_string($_POST['password']);
	
	$sel_user = "select * from admin where user_email='$email' AND user_pass='$pass'";
	
	$run_user = mysqli_query($con, $sel_user);
	
	$check_user = mysqli_num_rows($run_user);
	
	if($check_user==0){
		
	echo "<script>alert('Password or Email is incorrect, please try again!')</script>";	
		
	}
	else{
	
	$_SESSION['user_email']=$email;
	
	echo "<script>window.open('index.php?logged_in=You have successfully Logged in','_self')</script>";
		
	}
		
	}




?>