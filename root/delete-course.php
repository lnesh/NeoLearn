<?php
// Include database connection file
include_once './backend/connect.php';

// Check for a course ID to delete
{
    $course_id = $_GET['id'];

    // Delete course from database
    $query = "DELETE FROM courses WHERE course_id = $course_id";

    if (mysqli_query($conn, $query)) {
        // Course deleted successfully
        echo "Course deleted successfully.";
    } else {
        // Error deleting course
        echo "An error occurred while deleting the course: " . mysqli_error($conn);
    }
} 

mysqli_close($conn);
?>