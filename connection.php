<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "elps";
$port = "3306"; // Set this to your phpMyAdmin port if different

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}