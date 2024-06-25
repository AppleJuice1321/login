<?php
// Displays the written value of the submitted form - input "username"
$username = $_REQUEST["username"];
echo $username;
// input "password"
$userpassword = $_REQUEST["password"];
echo $userpassword;

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
echo "Connected successfully";

$create_user = "INSERT INTO users (username, psw)
VALUES ('$username', '$userpassword')";
$user_created = $conn->query($create_user);

$conn->close();
?> 

<!-- CREATE TABLE users (
	id int(10) not null PRIMARY KEY AUTO_INCREMENT,
    username varchar(30) not null,
    psw varchar(30) not null,
    date datetime not null
); -->