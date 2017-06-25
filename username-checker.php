<?php
    include 'include/connection.php';
    $conn = db();
    if(isset($_POST["username"]) && strlen($_POST["username"]) >= 3 && !empty($_POST["username"]) )
        {
            if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
                die();
            }

            $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
            

            $sql = "SELECT count(*) FROM users WHERE uname = '". $username ."' ";
            $result = $conn->query($sql);
            $row = $result->fetch_array();
            
            $user_count = $row[0];
            if($user_count>0) {
                echo '<span style="color: red"><i class="glyphicon glyphicon-remove"></i> not available</span>';
                exit();
            }
            else {
                echo '<span style="color: green"><i class="glyphicon glyphicon-ok"></i> available</span>';
                exit();
            }
  
  
        }

    if(isset($_POST["username"]) && strlen($_POST["username"]) < 3 && !empty($_POST["username"]) )
        {
            echo '<span style="color: red"><i class="glyphicon glyphicon-remove"></i> username too short!</span>';
        }
?>