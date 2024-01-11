<!-- //Πρόσβαση στο περιεχόμενο μόνο εφόσον έχει γίνει σύνδεση -->
<?php
session_start();

if (!isset($_SESSION['mail'])) {
    header('Location: login.php');
}

// Include the connect.php file to establish the database connection
include_once './backend/connect.php';


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neolearn: Dashboard</title>

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
    <link rel="stylesheet" href="css/navbar.css">

</head>


<body>

    <!-- Navbar -->
    <nav class="navbar sticky-top" style="background-color:#492a6c; border-radius: 50px; margin: 20px;">
        <div class="container-fluid">
            <div class="navbar-brand">
            </div>
            <form action="./backend/search.php" method="GET" style="display: flex; gap: 18px;">
                <input class="form-control" name="search" style=" border-radius: 25px; border: 1px solid #492a6c; "
                    type="search" placeholder="Search" aria-label="Search">
                <button class="btn" name="search-submit"
                    style=" background-color: #492a6c; color: aliceblue; border-radius: 25px;" type="submit"><svg
                        style="width:30px; height:30px; " class=" text-purple-800 dark:text-purple" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg></button>
            </form>
            <a style="background-color:white; color:purple; border: solid 3px;" class="btn btn-secondary"
                href="teacher-add-course.php">Add
                course</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
                <svg fill="#EDF" width="40px" height="40px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M20,22 C18.8954305,22 18,21.1045695 18,20 C18,18.8954305 18.8954305,18 20,18 C21.1045695,18 22,18.8954305 22,20 C22,21.1045695 21.1045695,22 20,22 Z M20,14 C18.8954305,14 18,13.1045695 18,12 C18,10.8954305 18.8954305,10 20,10 C21.1045695,10 22,10.8954305 22,12 C22,13.1045695 21.1045695,14 20,14 Z M20,6 C18.8954305,6 18,5.1045695 18,4 C18,2.8954305 18.8954305,2 20,2 C21.1045695,2 22,2.8954305 22,4 C22,5.1045695 21.1045695,6 20,6 Z M12,22 C10.8954305,22 10,21.1045695 10,20 C10,18.8954305 10.8954305,18 12,18 C13.1045695,18 14,18.8954305 14,20 C14,21.1045695 13.1045695,22 12,22 Z M12,14 C10.8954305,14 10,13.1045695 10,12 C10,10.8954305 10.8954305,10 12,10 C13.1045695,10 14,10.8954305 14,12 C14,13.1045695 13.1045695,14 12,14 Z M12,6 C10.8954305,6 10,5.1045695 10,4 C10,2.8954305 10.8954305,2 12,2 C13.1045695,2 14,2.8954305 14,4 C14,5.1045695 13.1045695,6 12,6 Z M4,22 C2.8954305,22 2,21.1045695 2,20 C2,18.8954305 2.8954305,18 4,18 C5.1045695,18 6,18.8954305 6,20 C6,21.1045695 5.1045695,22 4,22 Z M4,14 C2.8954305,14 2,13.1045695 2,12 C2,10.8954305 2.8954305,10 4,10 C5.1045695,10 6,10.8954305 6,12 C6,13.1045695 5.1045695,14 4,14 Z M4,6 C2.8954305,6 2,5.1045695 2,4 C2,2.8954305 2.8954305,2 4,2 C5.1045695,2 6,2.8954305 6,4 C6,5.1045695 5.1045695,6 4,6 Z" />
                </svg>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header" style="background-color: #492a6c">

                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"
                        style="background-color: #dabafc;"></button>
                </div>

                <!-- Body -->
                <div class="offcanvas-body" style="background-color: #492a6c">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3" style="gap: 20px;">
                        <li class="nav-item">

                            <a href="#" class="nav-link menu-text">
                                <svg fill="#EDF" width="30px" height="30px" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M20,22 C18.8954305,22 18,21.1045695 18,20 C18,18.8954305 18.8954305,18 20,18 C21.1045695,18 22,18.8954305 22,20 C22,21.1045695 21.1045695,22 20,22 Z M20,14 C18.8954305,14 18,13.1045695 18,12 C18,10.8954305 18.8954305,10 20,10 C21.1045695,10 22,10.8954305 22,12 C22,13.1045695 21.1045695,14 20,14 Z M20,6 C18.8954305,6 18,5.1045695 18,4 C18,2.8954305 18.8954305,2 20,2 C21.1045695,2 22,2.8954305 22,4 C22,5.1045695 21.1045695,6 20,6 Z M12,22 C10.8954305,22 10,21.1045695 10,20 C10,18.8954305 10.8954305,18 12,18 C13.1045695,18 14,18.8954305 14,20 C14,21.1045695 13.1045695,22 12,22 Z M12,14 C10.8954305,14 10,13.1045695 10,12 C10,10.8954305 10.8954305,10 12,10 C13.1045695,10 14,10.8954305 14,12 C14,13.1045695 13.1045695,14 12,14 Z M12,6 C10.8954305,6 10,5.1045695 10,4 C10,2.8954305 10.8954305,2 12,2 C13.1045695,2 14,2.8954305 14,4 C14,5.1045695 13.1045695,6 12,6 Z M4,22 C2.8954305,22 2,21.1045695 2,20 C2,18.8954305 2.8954305,18 4,18 C5.1045695,18 6,18.8954305 6,20 C6,21.1045695 5.1045695,22 4,22 Z M4,14 C2.8954305,14 2,13.1045695 2,12 C2,10.8954305 2.8954305,10 4,10 C5.1045695,10 6,10.8954305 6,12 C6,13.1045695 5.1045695,14 4,14 Z M4,6 C2.8954305,6 2,5.1045695 2,4 C2,2.8954305 2.8954305,2 4,2 C5.1045695,2 6,2.8954305 6,4 C6,5.1045695 5.1045695,6 4,6 Z" />
                                </svg><span class=" ms-4 d-none d-sm-inline"
                                    style="font-size: 25px; padding-top: 10px; padding-right: 35px;">Home</span></a>
                        </li>

                        <li class="nav-item">
                            <a href="#courses" class="nav-link menu-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#EDF"
                                    class="bi bi-book" viewBox="0 0 16 16">
                                    <path
                                        d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                                </svg><span class="ms-4 d-none d-sm-inline">My courses</span>
                            </a>
                        </li>



                        <li class="nav-item disabled">
                            <a href="#notes" class="nav-link menu-text ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="25" fill="#EDF"
                                    class="bi bi-journal" viewBox="0 0 16 16">
                                    <path
                                        d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2" />
                                    <path
                                        d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z" />
                                </svg><span class="ms-4 d-none d-sm-inline ">My Notes</span>
                            </a>
                        </li>

                        <li class="nav-item dropdown" style="align-items: end;">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Profile
                            </a>


                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">View profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <form action="./backend/logout.php">
                                    <li><input type="submit" class="dropdown-item" value="Logout"></li>
                                </form>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>


    <?php
// Get the user ID from the current session
$mail = "elonmusk@mail.com";


$sql = "SELECT student_id FROM student WHERE mail = '$mail'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_assoc($result);
$student_id = $row['student_id'];
} else {
echo "No student found with that email address";
}

// Prepare SQL query to retrieve the enrolled courses for the user
$query = "SELECT c.title, c.description, c.teacher_id FROM courses c JOIN enrollments e ON c.course_id = e.course_id
WHERE e.student_id = $student_id";

// Execute the query
$result1 = mysqli_query($conn, $query);

// Check if the user has enrolled in any courses
if (mysqli_num_rows($result1) > 0) {
// Display the list of enrolled courses

echo '<div class="container-fluid">';
echo '<h1 style="padding:20px;">Created Courses</h1>';
echo '<ul style="display:flex; gap:20px">';
    while ($row = mysqli_fetch_assoc($result1)) {
 

    $courseTitle = $row['title'];
    $courseDescription = $row['description'];
    $teacher_id = $row['teacher_id'];

    $sql2 = "SELECT fullname FROM teacher WHERE teacher_id = '$teacher_id'";

    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {
    $row = mysqli_fetch_assoc($result2);
    $fullname = $row['fullname'];
    } else {
    echo "No teacher found with that name";
    }
    

    echo '<div class="card card-item" style="width: 18rem;">
        <img src="./media/html-system-website-concept.jpg" class="card-img-top card-img" alt="...">
        
        <div class="card-body">
        <h2 class="card-title" style="color: white; font-weight: 600; ">' . $courseTitle . '</h2>
        <div class="card-text text" style="font-family: "Epilogue"; font-size: 15px;">' . $courseDescription . '</div>
        
        <div class="card-footer" style=" ">
            
         <p>' . $fullname . '</p>         
         <a href="student-course.php?id=1"
         style="text-decoration: none; color: #dabafc; padding-left: 3px;">Edit</a> 
         </div>
  
        </div>
 
        </div>';
    }
    echo '</ul>';
    echo '</div>';
} else {
// No enrolled courses found
echo '<h1 style="padding:50px;">You are not enrolled in any courses.</h1>';
}

// Close the database connection
mysqli_close($conn);
?>






    <footer style="height: 20vh; display: flex; justify-content: center; align-items: end; margin: 20px;">
        Copyright 2024. All rights reserved.
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>