<?php
// Displays the written value of the submitted form - input "username"
$username = $_REQUEST["username"];
// input "password"
$userpassword = $_REQUEST["password"];

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "accounts";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

// FIND USERNAME IN DB
$find_username = "SELECT username FROM users WHERE username='$username'";
$found_username = $conn->query($find_username);

// FIND USERPASSWORD IN DB
$find_userpassword = "SELECT psw FROM users WHERE psw='$userpassword'";
$found_userpassword = $conn->query($find_userpassword);

if($found_username == $username && $found_userpassword == $userpassword) {
    
} if($found_username == $username && $found_userpassword = ) {

} else {

}

$conn->close();
?>