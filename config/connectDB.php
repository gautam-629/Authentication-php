<?php
// Database configuration
$hostname = 'localhost';      // Replace with your database server host
$username = 'root';  // Replace with your database username
$password = '';  // Replace with your database password
$database = 'mydb';  // Replace with your database name

// Create a connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo("Connected");
}