<?php
session_start();

if (!isset($_SESSION['mail'])) {
    header('Location: login.php');
}
?>

<?php
// Update course details in the database
include_once 'connect.php';



if (isset($_POST['save'])) {

    $mail = $_SESSION['mail'];

$sql = "SELECT * FROM student WHERE mail = '$mail'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_assoc($result);
$student_Id = $row['student_id'];

} else {
echo "No student found with that email address";
}

    // Get course details from the form
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $mail = $_POST['mail'];

    // Check for changes before updating
    if ($fullname == "" || $username == "" || $mail == "") {
        // No changes were made, so don't update the database
        echo "No changes were made to the course details.";
    } else {
        
        // Update the database with the new values
        $query = "UPDATE student SET fullname='$fullname', username='$username', mail='$mail' WHERE student_id = $student_Id";
        if (mysqli_query($conn, $query)) {
            echo "Course details updated successfully.";
            header("location: ../student-main.php");
        } else {
            echo "Error updating profile details: " . mysqli_error($conn);
        }
    }
}