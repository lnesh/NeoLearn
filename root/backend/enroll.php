<?php
// Include the connect.php file to establish the database connection
include_once 'connect.php';
include 'id.php';


if (isset($_POST["student-register"])){

$studentId = $_GET['userId'];

// Get the course ID from the URL
$courseId = $_GET['courseId'];

// Prepare the SQL query to check if the student is already enrolled in the course
$query = "SELECT * FROM enrollments WHERE student_id = $studentId AND course_id = $courseId";

// Execute the query
$result = mysqli_query($conn, $query);

// Check if the student is already enrolled in the course
if (mysqli_num_rows($result) > 0) {
    // Display an error message
    echo "The student is already enrolled in this course.";
} else {
    // Prepare the SQL query to enroll the student in the course
    $query = "INSERT INTO enrollments (student_id, course_id) VALUES ($studentId, $courseId)";

    // Execute the query
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Display a success message
        echo "The student has been enrolled successfully.";
    } else {
        // Display an error message
        echo "Failed to enroll the student.";
    }
}

}

// Close the database connection
mysqli_close($conn);