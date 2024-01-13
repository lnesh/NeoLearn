<?php
session_start();

if (!isset($_SESSION['mail'])) {
    header('Location: login.php');
}
?>

<?php
    include 'backend/connect.php';

// Get the course ID from the URL
$course_Id = $_GET['id'];



// Include the connect.php file to establish the database connection
include_once './backend/connect.php';

// Prepare SQL query to retrieve course details
$query = "SELECT c.course_id, c.title, c.description, c.youtube_link, c.teacher_id FROM courses c WHERE c.course_id = $course_Id";

// Execute the query
$result = mysqli_query($conn, $query);

// Check if the course exists
if (mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_assoc($result);


$courseTitle = $row['title'];
$courseDescription = $row['description'];
$courseLink = $row['youtube_link'];
$teacher_id = $row['teacher_id'];

} else {
echo "Course not found.";
exit;
}

    $sql2 = "SELECT fullname FROM teacher WHERE teacher_id = '$teacher_id'";

    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {
    $row = mysqli_fetch_assoc($result2);
    $teacherName = $row['fullname'];
    } else {
    echo "No teacher found with that name";
    }



// Close the database connection
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title name="title">Course view</title>

    <!-- Favicon SEO -->
    <link rel="icon" href="media/favicon.ico" type="image/icon" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />


    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/navbar.css">


</head>

<body>



    <div class="container-fluid" style="width:40%;  ">
        <h1
            style="height: 100px;  background-color: #491774; color: white; text-align: center; padding-top: 25px; border-radius: 35px; border-top-left-radius: 0px; font-family: 'Epilogue', sans-serif;">
            Edit course</h1>
    </div>

    <form action="./backend/update-course.php" method="POST">
        <div class="container-fluid" style="width:70%; margin-top: 30px;">

            <h2>Course Info</h2>
            <div class="form-floating mb-3">

                <input type="text" name="course_title" class="form-control " id="floatingInput" placeholder=""
                    value="<?php echo $courseTitle ?>">
                <!-- <label for="floatingInput"><?php echo $courseTitle ?> -->

            </div>

            <div class="form-floating mb-3">
                <textarea type="text" name="description" class="form-control" id="floatingInput"
                    placeholder=""><?php echo $courseDescription ?></textarea>
                <!-- <label for="floatingInput"><?php echo $courseDescription ?>
                </label> -->
            </div>

            <div class="input-group mb-3" style="color: #491774;">
                <label class="input-group-text" style="font-weight: 700; background-color: #491774; color: white;"
                    for="inputGroupFile01">Preview image</label>
                <input style="color: #492a6c;" type="file" class="form-control" id="inputGroupFile01">
            </div>


            <br>
            <h2>Course Material</h2>
            <div class="form-floating mb-3">
                <input type="text" name="course_link" class="form-control" id="floatingInput" placeholder=""
                    value="<?php echo $courseLink ?>">
                <!-- <label for=" floatingInput"><span>
                        <?php echo $courseLink ?></span>
                </label> -->
            </div>

            <div class="input-group mb-3" style="color: #491774;">
                <label class="input-group-text" style="font-weight: 700; background-color: #491774; color: white;"
                    for="inputGroupFile01">Course material files</label>
                <input style="color: #492a6c;" type="file" class="form-control" id="inputGroupFile01">
            </div>

            <div style="display: flex; justify-content: center; margin-top: 30px; margin-bottom: 30px; ">


                <input type="submit" name="save" id="addCourse" value="Save" style="width: 250px; height: 50px; border: none; border-radius: 20px; background-color: #491774; color:
                white; font-weight: 700; font-size: 30px;">


                <input type="hidden" name="course_id" value="<?php echo $course_Id ?>">
                <input type="hidden" name="teacher_id" value="<?php echo $teacher_id ?>">

            </div>


    </form>



    <div class="container " style="margin:50px; display:flex; flex-direction:column;">
        <h2 class="label" style="padding: left 40px; font-size:25px; color:">Lecture</h2>
        <iframe src="https://www.youtube.com/embed/FQdaUv95mR8" frameborder="0" allowfullscreen class="video"></iframe>
    </div>
</body>

</html>