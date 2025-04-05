<?php
$servername = "localhost";
$username = "root"; // Adjust if necessary
$password = ""; // Adjust if necessary
$dbname = "brawl_vlog"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
