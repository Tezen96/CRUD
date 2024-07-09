<?php
$servername = "localhost";
$username = "root";
$password = "";
$port = "3306";

// Create connection
$conn = mysqli_connect($servername, $username, $password, "", $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS my_CRUD";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// Select database
mysqli_select_db($conn, 'my_CRUD');

// Create table
$sql = "CREATE TABLE IF NOT EXISTS STUDENT (
    Rollno INT(6) NOT NULL PRIMARY KEY,
    Name VARCHAR(30) NOT NULL,
    Address VARCHAR(50) NOT NULL,
    Course VARCHAR(30) NOT NULL
)";
if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$conn->close(); // Close the connection
?>
