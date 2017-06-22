<?php 
	session_start(); 
	//n
	include 'class.user.php';
	$user = new User(); // Checking for user logged in or not

	if (isset($_REQUEST['register'])){
	extract($_REQUEST);
	$register = $user->reg_user($fullname, $uname,$upass, $uemail);
	if ($register) {
	// Registration Success
	// echo 'Registration successful <a href="login.php">Click here</a> to login';
		$_SESSION['msg'] = '<div class="alert alert-success alert-dismissable">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Success</strong>! Registration successful. <a href="login.php">Click here</a> to login.
	</div>';
		header("location: ../registration.php");
		exit();

	} else {
	// Registration Failed
	// echo 'Registration failed. Email or Username already exits please try again';
		$_SESSION['msg'] = '<div class="alert alert-danger alert-dismissable">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>Registration failed</strong>! Email or Username already exists.
	</div>';
		header("location: ../registration.php");
		exit();
	}
	}
?>