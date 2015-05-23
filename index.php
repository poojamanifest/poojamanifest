<?php

echo "This is Testing Lamping Server....";
echo "<br /> This is working fine... <br />";


$servername = "localhost";
$username = "root";
$password = "123456";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Database Connected successfully";
?> 


