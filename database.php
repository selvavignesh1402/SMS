<?php
$servername = "localhost";
$username = "root";
$password = ""; // Replace 'your_password' with the actual password
$dbname = "sms";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
