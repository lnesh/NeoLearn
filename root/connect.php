<?php
$servername = "localhost";
$dbname = "neolearn"
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

return $conn;
?> 