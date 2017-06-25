<?php  
	session_start();
	include 'include/class.user.php';
	$user = new User();
	$uid = $_SESSION['uid'];
	if (!$user->get_session()){
	header("location:login.php");
	exit();
	}

	if (isset($_GET['q'])){
	$user->user_logout();
	header("location:login.php");
	exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	
	<!-- n -->
	<div class="jumbotron text-center">
		<h2>Hello <small><?php $user->get_fullname($uid); ?>!</small></h2>
		<a class="btn btn-primary btn-md" href="home.php?q=logout">LOGOUT</a>

	</div>
</body>
</html>
