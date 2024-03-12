<?php
session_start();

if (!isset($_SESSION['mail'])) {
    header('Location: ../login.php');
}
?>

<?php

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


$course_Id = $_GET['id'];

$query = "SELECT * FROM enrollments WHERE student_id = $student_Id AND course_id = $course_Id";

$result = mysqli_query($conn, $query);

// Check if the student is already enrolled in the course
if (mysqli_num_rows($result) > 0) {
    echo "The student is already enrolled in this course.";
    
} else {
    //SQL query to enroll the student in the course
    $query = "INSERT INTO enrollments  VALUES ( $course_Id,$student_Id)";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location: student-main.php");
    } else {
        echo "Failed to enroll the student.";
    }
}

}

mysqli_close($conn);