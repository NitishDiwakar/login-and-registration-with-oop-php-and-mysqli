<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'oop');
// Create connection
/*$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
	if($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}*/

function db () {
    static $conn;
    if ($conn===NULL){ 
        $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    }
    return $conn;
}

