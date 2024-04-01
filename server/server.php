<?php

header('Access-Control-Allow-origin: http://localhost:3000');

// Assuming database credentials are stored securely (e.g., environment variables)
$servername = "localhost";
$username = "root";
$password = "";

// Connect to MySQL
$conn = mysqli_connect($servername, $username, $password);

$sql = "CREATE DATABASE credentials";
mysqli_query($conn,$sql);
// Check connection
if ($conn) {
  echo "Connection was successful";
} else {
  echo "Connection failed: " . mysqli_connect_error();
}

?>
