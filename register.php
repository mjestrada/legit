<?php
// register.php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "icpep";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $studentId = $_POST['stdID'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hashing the password

    $sql = "INSERT INTO users (first_name, last_name, student_id, password) VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $firstName, $lastName, $studentId, $password);

    if ($stmt->execute()) {
        // Redirect to sign-in page after successful sign-up
        header("Location: signIn.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>