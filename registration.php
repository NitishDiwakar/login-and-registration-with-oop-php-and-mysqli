<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="row" style="margin-top: 4%;">
<div class="col-md-3"></div>
<div class="col-md-6 well">
<h1 class="text-center">Register Here</h1>
	<form action="include/register.php" method="post" name="reg">
		<div class="form-group">
		<label>Full Name:</label>
		<input class="form-control" type="text" name="fullname" required="" />
		</div>
		<div class="form-group">
		<label>User Name:</label>
		<input class="form-control" type="text" name="uname" required="" />
		</div>
		<div class="form-group">
		<label>Email:</label>
		<input class="form-control" type="email" name="uemail" required="" />
		</div>
		<div class="form-group">
		<label>Password:</label>
		<input class="form-control" type="password" name="upass" required="" />
		</div>
		<button class="btn btn-primary" type="submit" name="register">Register</button>
		<a href="login.php">Already registered! Click Here!</a></td>
	</form>
	<br>
	<?php 
	// Show any error or success message 
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