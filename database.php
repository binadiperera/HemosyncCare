<?php
$servername = "localhost"; // Replace 'localhost' with your database host if needed
$username = "your_username"; // Replace 'your_username' with your MySQL username
$password = "your_password"; // Replace 'your_password' with your MySQL password

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS HospitalHemodialysisDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

// Close connection
$conn->close();
?>
