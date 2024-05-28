<?php

$servername = "localhost"; // Change this if your database server is on a different host
$username = "your_username"; // Your database username
$password = "your_password"; // Your database password
$database = "icpep"; // Your database name

// Create connection
$mysqli = new mysqli($servername, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>