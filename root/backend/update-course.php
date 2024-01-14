<?php
// Update course details in the database
include_once 'connect.php';

if (isset($_POST['save'])) {
    if (isset($_POST['course_id'])) {
        $course_id = $_POST['course_id'];
    } else {
        // If course ID is not set, throw an error
        echo "Error updating course details: No course ID found.";
        exit;
    }

    if (isset($_POST['teacher_id'])) {
        $teacher_id = $_POST['teacher_id'];
    } else {
        // If teacher ID is not set, throw an error
        echo "Error updating course details: No teacher ID found.";
        exit;
    }

    // Get course details from the form
    $course_title = $_POST['course_title'];
    $description = $_POST['description'];
    $course_link = $_POST['course_link'];

    // Check for changes before updating
    if ($course_title == "" || $description == "" || $course_link == "") {
        // No changes were made, so don't update the database
        echo "No changes were made to the course details.";
    } else {
        // Update the database with the new values
        $query = "UPDATE courses SET title='$course_title', description='$description', youtube_link='$course_link', teacher_id='$teacher_id' WHERE course_id = $course_id";
        if (mysqli_query($conn, $query)) {
            header("location: ../teacher-main.php");
        } else {
            echo "Error updating course details: " . mysqli_error($conn);
        }
    }
}