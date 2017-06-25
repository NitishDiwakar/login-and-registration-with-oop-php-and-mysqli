<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript">
            $(document).ready(function() {
                var x_timer;    
                $("#username").keyup(function (e){
                    clearTimeout(x_timer);
                    var user_name = $(this).val();
                    x_timer = setTimeout(function(){
                        check_username_ajax(user_name);
                    }, 1000);
                }); 

            function check_username_ajax(username){
                $("#user-result").html(' loading...');
                $.post('username-checker.php', {'username':username}, function(data) {
                $("#user-result").html(data);
                });
            }
            });
        </script>
</head>
<body>
<div class="container">
<div class="row" style="margin-top: 4%;">
<div class="col-md-4"></div>
<div class="col-md-4 well">
<h1 class="text-center">Register Here</h1>
	<form action="include/register.php" method="post" name="reg">
		<div class="form-group">
		<label>Full Name:</label>
		<input class="form-control" type="text" name="fullname" required="" />
		</div>
		<div class="form-group">
                    <div id="registration-form">
                    <label>User Name:</label> 
                    <input class="form-control" type="text" minlength="3" maxlength="15" name="uname" autocomplete="off" id="username" required="" /> <span id="user-result"></span> 
                    </div>
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
<div class="col-md-4"></div>
</div> <!-- End row -->
</div> <!-- End container -->
</body>
</html>
