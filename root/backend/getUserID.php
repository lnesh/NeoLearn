<?php
// Include the connect.php file to establish the database connection
include_once 'connect.php';

if(isset($_POST['student-login'])){
    // Get the user's email from the URL
$mail = $_GET['mail'];

// Prepare the SQL query to retrieve the user's ID
$query = "SELECT id FROM student WHERE mail = '$mail'";

// Execute the query
$result = mysqli_query($conn, $query);

// Check if there is a matching user
if (mysqli_num_rows($result) > 0) {
    // Get the user's ID from the result
    $row = mysqli_fetch_assoc($result);
    $userId = $row['id'];

    // Display the user's ID
    echo $userId;
} else {
    // No matching user found
    echo "No user found with that email address";
}
}


if(isset($_POST['teacher-login'])){
    // Get the user's email from the URL
$mail = $_GET['mail'];

// Prepare the SQL query to retrieve the user's ID
$query = "SELECT id FROM teacher WHERE mail = '$mail'";

// Execute the query
$result = mysqli_query($conn, $query);

// Check if there is a matching user
if (mysqli_num_rows($result) > 0) {
    // Get the user's ID from the result
    $row = mysqli_fetch_assoc($result);
    $userId = $row['id'];

    $userId = $userId;
} 
}



// Close the database connection
mysqli_close($conn);