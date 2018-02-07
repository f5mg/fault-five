<?php
$servername = "localhost";
$username = "fault5_admin";
$password = "DJMS1234i!";
$dbname = "fault5_leads";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>