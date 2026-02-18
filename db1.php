<?php
$servername = "localhost"; 
$username = "bbcap25_6";    
$password = "BBBqdVoW";     
$dbname = "wp_bbcap25_6";     

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
