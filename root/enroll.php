<?php
session_start();

if (!isset($_SESSION['mail'])) {
    header('Location: ../login.php');
}
?>

<?php

// Include the connect.php file to establish the database connection
include_once './backend/connect.php';

{

$mail = $_SESSION['mail'];

$sql = "SELECT student_id FROM student WHERE mail = '$mail'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_assoc($result);
$student_Id = $row['student_id'];

} else {
echo "No student found with that email address";
}


// Get the course ID from the URL
$course_Id = $_GET['id'];

// Prepare the SQL query to check if the student is already enrolled in the course
$query = "SELECT * FROM enrollments WHERE student_id = $student_Id AND course_id = $course_Id";

// Execute the query
$result = mysqli_query($conn, $query);

// Check if the student is already enrolled in the course
if (mysqli_num_rows($result) > 0) {
    // Display an error message
    echo "The student is already enrolled in this course.";
    
} else {
    // Prepare the SQL query to enroll the student in the course
    $query = "INSERT INTO enrollments  VALUES ( $course_Id,$student_Id)";

    // Execute the query
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Display a success message
        header("location: student-main.php");
    } else {
        // Display an error message
        echo "Failed to enroll the student.";
    }
}

}

// Close the database connection
mysqli_close($conn);