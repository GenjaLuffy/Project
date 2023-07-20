<?php

$con = new mysqli('localhost', 'root', '', 'user_account');

if (!$con) {
    die(mysqli_error($con));
}
?>

<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "user_account"; // Replace with your database name

// Create a database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
