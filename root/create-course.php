<?php
session_start();

if (!isset($_SESSION['mail'])) {
    header('Location: login.php');
}
?>

<?php
 include('./backend/connect.php');

     $mail = $_SESSION['mail'];

 if(isset($_POST["add_course"])){


    

    $sql = "SELECT teacher_id FROM teacher WHERE mail = '$mail'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $teacher_id = $row['teacher_id'];
    
    } else {
    echo "No teacher found with that email address";
    }
    
    $course_title = $_POST['course_title'];
    $course_description = $_POST['description'];
    $course_link = $_POST['course_link'];
    

    mysqli_query($conn, "INSERT INTO courses VALUES(NULL, '$course_title', '$course_description', '$teacher_id', '$course_link')");



    
    
    
    header("location: teacher-main.php");

    
 }
 
 ?>