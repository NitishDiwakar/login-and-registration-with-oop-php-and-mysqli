<?php  
	include 'connection.php';

	class User{
	public $db;

	/*** for registration process ***/
public function reg_user($name,$username,$password,$email){
$conn = db();
$password = md5($password);
$sql="SELECT * FROM users WHERE uname='$username' OR uemail='$email'";

//checking if the username or email is available in db
$check = $conn->query($sql);
$count_row = $check->num_rows;

//if the username is not in db then insert to the table
if ($count_row == 0){
$sql="INSERT INTO users SET uname='$username', upass='$password', fullname='$name', uemail='$email'";
$result = $conn->query($sql);
return $result;
}
else {
	return false;
 }
}

/*** for login process ***/
public function check_login($emailusername, $password){
$conn = db();
$password = md5($password);
$sql="SELECT uid from users WHERE uemail='$emailusername' or uname='$emailusername' and upass='$password'";

//checking if the username is available in the table
$result    = $conn->query($sql);
$user_data = $result->fetch_assoc();
$count_row = $result->num_rows;

if ($count_row == 1) {
// this login variable will use for the session thing
$_SESSION['login'] = true;
$_SESSION['uid'] = $user_data['uid'];
return true;
}
else{
return false;
}
}

/*** for showing the username or fullname ***/
public function get_fullname($uid)
{
	$conn = db();
	$sql="SELECT fullname FROM users WHERE uid = $uid";
	$result = $conn->query($sql);
	$user_data = $result->fetch_assoc();
	echo $user_data['fullname'];
}

/*** starting the session ***/
public function get_session()
{
	return $_SESSION['login'];
}

public function user_logout()
{
	$_SESSION['login'] = FALSE;
	session_destroy();
}

}

?>
