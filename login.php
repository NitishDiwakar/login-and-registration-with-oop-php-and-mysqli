<?php  
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<div class="row" style="margin-top: 10%;">
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
	<h2 class="text-center">Login Here</h2>
		<form action="include/login.php" method="post" name="login">
		<div class="form-group">
		<label>UserName or Email:</label>
		<input class="form-control" type="text" name="emailusername" required="" />
		</div>
		<div class="form-group">
		<label>Password:</label>
		<input class="form-control" type="password" name="password" required="" />
		</div>
		<input class="btn btn-primary" type="submit" name="login" value="Login" />
		<a href="registration.php">Register new user</a>
		</form>
	<br>
	<?php 
	// Show any success or error message 
		if(isset($_SESSION['msg'])) {
			echo $_SESSION['msg'];
			session_unset($_SESSION['msg']);
		}
	?>
	</div>
	<div class="col-md-3"></div>
	</div> <!-- End row -->
	</div> <!-- End container -->
</body>
</html>