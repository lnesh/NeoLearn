<?php

include_once './backend/connect.php';

$course_Id = $_GET['id'];



// Prepare SQL query to retrieve course details
$query = "SELECT c.course_id, c.title, c.description, c.teacher_id, c.youtube_link FROM courses c WHERE c.course_id = $course_Id";

// Execute the query
$result = mysqli_query($conn, $query);

// Check if the course exists
if (mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_assoc($result);
$courseTitle = $row['title'];
$courseDescription = $row['description'];
$teacher_id = $row['teacher_id'];
$videoURL = $row['youtube_link'];



function generateYouTubeFrame($videoURL) {
  // Extract the video ID from the URL
  $videoID = preg_match('/watch\?v=(.*)/', $videoURL, $matches);

  // Generate the iframe code
  $iframeCode = '<iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/' . $videoID . '" frameborder="0" allowfullscreen></iframe>';

  return $iframeCode;
}


$iframeCode = generateYouTubeFrame($videoURL);



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
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/course-preview.css">


</head>

<body>

    <!-- Navbar -->
    <nav class="navbar sticky-top" style="background-color:#492a6c; border-radius: 50px; margin: 20px;">
        <div class="container-fluid">
            <div class="navbar-brand"></div>
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
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar"><svg fill="#EDF" width="40px" height="40px" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M20,22 C18.8954305,22 18,21.1045695 18,20 C18,18.8954305 18.8954305,18 20,18 C21.1045695,18 22,18.8954305 22,20 C22,21.1045695 21.1045695,22 20,22 Z M20,14 C18.8954305,14 18,13.1045695 18,12 C18,10.8954305 18.8954305,10 20,10 C21.1045695,10 22,10.8954305 22,12 C22,13.1045695 21.1045695,14 20,14 Z M20,6 C18.8954305,6 18,5.1045695 18,4 C18,2.8954305 18.8954305,2 20,2 C21.1045695,2 22,2.8954305 22,4 C22,5.1045695 21.1045695,6 20,6 Z M12,22 C10.8954305,22 10,21.1045695 10,20 C10,18.8954305 10.8954305,18 12,18 C13.1045695,18 14,18.8954305 14,20 C14,21.1045695 13.1045695,22 12,22 Z M12,14 C10.8954305,14 10,13.1045695 10,12 C10,10.8954305 10.8954305,10 12,10 C13.1045695,10 14,10.8954305 14,12 C14,13.1045695 13.1045695,14 12,14 Z M12,6 C10.8954305,6 10,5.1045695 10,4 C10,2.8954305 10.8954305,2 12,2 C13.1045695,2 14,2.8954305 14,4 C14,5.1045695 13.1045695,6 12,6 Z M4,22 C2.8954305,22 2,21.1045695 2,20 C2,18.8954305 2.8954305,18 4,18 C5.1045695,18 6,18.8954305 6,20 C6,21.1045695 5.1045695,22 4,22 Z M4,14 C2.8954305,14 2,13.1045695 2,12 C2,10.8954305 2.8954305,10 4,10 C5.1045695,10 6,10.8954305 6,12 C6,13.1045695 5.1045695,14 4,14 Z M4,6 C2.8954305,6 2,5.1045695 2,4 C2,2.8954305 2.8954305,2 4,2 C5.1045695,2 6,2.8954305 6,4 C6,5.1045695 5.1045695,6 4,6 Z" />
                </svg></button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header" style="background-color: #492a6c"><button type="button" class="btn-close"
                        data-bs-dismiss="offcanvas" aria-label="Close" style="background-color: #dabafc;"></button>
                </div>
                < !-- Body -->
                    <div class="offcanvas-body" style="background-color: #492a6c">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3" style="gap: 20px;">
                            <li class="nav-item"><a href="#" class="nav-link menu-text"><svg fill="#EDF" width="30px"
                                        height="30px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M20,22 C18.8954305,22 18,21.1045695 18,20 C18,18.8954305 18.8954305,18 20,18 C21.1045695,18 22,18.8954305 22,20 C22,21.1045695 21.1045695,22 20,22 Z M20,14 C18.8954305,14 18,13.1045695 18,12 C18,10.8954305 18.8954305,10 20,10 C21.1045695,10 22,10.8954305 22,12 C22,13.1045695 21.1045695,14 20,14 Z M20,6 C18.8954305,6 18,5.1045695 18,4 C18,2.8954305 18.8954305,2 20,2 C21.1045695,2 22,2.8954305 22,4 C22,5.1045695 21.1045695,6 20,6 Z M12,22 C10.8954305,22 10,21.1045695 10,20 C10,18.8954305 10.8954305,18 12,18 C13.1045695,18 14,18.8954305 14,20 C14,21.1045695 13.1045695,22 12,22 Z M12,14 C10.8954305,14 10,13.1045695 10,12 C10,10.8954305 10.8954305,10 12,10 C13.1045695,10 14,10.8954305 14,12 C14,13.1045695 13.1045695,14 12,14 Z M12,6 C10.8954305,6 10,5.1045695 10,4 C10,2.8954305 10.8954305,2 12,2 C13.1045695,2 14,2.8954305 14,4 C14,5.1045695 13.1045695,6 12,6 Z M4,22 C2.8954305,22 2,21.1045695 2,20 C2,18.8954305 2.8954305,18 4,18 C5.1045695,18 6,18.8954305 6,20 C6,21.1045695 5.1045695,22 4,22 Z M4,14 C2.8954305,14 2,13.1045695 2,12 C2,10.8954305 2.8954305,10 4,10 C5.1045695,10 6,10.8954305 6,12 C6,13.1045695 5.1045695,14 4,14 Z M4,6 C2.8954305,6 2,5.1045695 2,4 C2,2.8954305 2.8954305,2 4,2 C5.1045695,2 6,2.8954305 6,4 C6,5.1045695 5.1045695,6 4,6 Z" />
                                    </svg><span class=" ms-4 d-none d-sm-inline"
                                        style="font-size: 25px; padding-top: 10px; padding-right: 35px;">Home</span></a>
                            </li>
                            <li class="nav-item"><a href="#courses" class="nav-link menu-text"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#EDF"
                                        class="bi bi-book" viewBox="0 0 16 16">
                                        <path
                                            d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                                    </svg><span class="ms-4 d-none d-sm-inline">My courses</span></a></li>
                            <li class="nav-item"><a href="#instructors" class="nav-link menu-text"><svg
                                        xmlns="http://www.w3.org/2000/svg" height="30" width="30" fill="#EDF"
                                        viewBox="0 0 640 512">
                                        < !-- !Font Awesome Free 6.5.1 by @fontawesome - https: //fontawesome.com
                                            License - https://fontawesome.com/license/free Copyright 2023 Fonticons,
                                            Inc.-->
                                            <path
                                                d="M160 64c0-35.3 28.7-64 64-64H576c35.3 0 64 28.7 64 64V352c0 35.3-28.7 64-64 64H336.8c-11.8-25.5-29.9-47.5-52.4-64H384V320c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32v32h64V64L224 64v49.1C205.2 102.2 183.3 96 160 96V64zm0 64a96 96 0 1 1 0 192 96 96 0 1 1 0-192zM133.3 352h53.3C260.3 352 320 411.7 320 485.3c0 14.7-11.9 26.7-26.7 26.7H26.7C11.9 512 0 500.1 0 485.3C0 411.7 59.7 352 133.3 352z" />
                                    </svg><span class=" ms-4 d-none d-sm-inline ">Instructors</span></a></li>
                            <li class="nav-item"><a href="#saved" class="nav-link  menu-text"><svg
                                        xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                        fill="#EDF" viewBox="0 0 48 48">
                                        <path
                                            d="M 16.5 5 C 12.916 5 10 7.916 10 11.5 L 10 41.5 C 10 42.063 10.315406 42.579938 10.816406 42.835938 C 11.317406 43.092937 11.918953 43.045797 12.376953 42.716797 L 22.039062 35.759766 C 22.024062 35.506766 22 35.257 22 35 C 22 27.832 27.832 22 35 22 C 36.034 22 37.035 22.134281 38 22.363281 L 38 11.5 C 38 7.916 35.084 5 31.5 5 L 16.5 5 z M 35 24 C 28.925 24 24 28.925 24 35 C 24 41.075 28.925 46 35 46 C 41.075 46 46 41.075 46 35 C 46 28.925 41.075 24 35 24 z M 35 28 C 35.48 28 35.908453 28.305766 36.064453 28.759766 L 37.177734 32 L 40.875 32 C 41.358 32 41.787406 32.308625 41.941406 32.765625 C 42.095406 33.223625 41.939687 33.729484 41.554688 34.021484 L 38.560547 36.292969 L 39.574219 39.539062 C 39.720219 40.005063 39.548391 40.510969 39.150391 40.792969 C 38.955391 40.930969 38.727 41 38.5 41 C 38.263 41 38.025172 40.925391 37.826172 40.775391 L 35 38.660156 L 32.173828 40.775391 C 31.782828 41.068391 31.248609 41.076922 30.849609 40.794922 C 30.451609 40.512922 30.279781 40.005063 30.425781 39.539062 L 31.439453 36.294922 L 28.445312 34.021484 C 28.060312 33.729484 27.904594 33.225578 28.058594 32.767578 C 28.213594 32.309578 28.642 32 29.125 32 L 32.822266 32 L 33.935547 28.759766 C 34.091547 28.305766 34.52 28 35 28 z">
                                        </path>
                                    </svg><span class=" ms-4 d-none d-sm-inline ">Saved</span></a></li>
                            <li class="nav-item disabled"><a href="#notes" class="nav-link menu-text "><svg
                                        xmlns="http://www.w3.org/2000/svg" width="30" height="25" fill="#EDF"
                                        class="bi bi-journal" viewBox="0 0 16 16">
                                        <path
                                            d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2" />
                                        <path
                                            d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z" />
                                    </svg><span class="ms-4 d-none d-sm-inline ">My Notes</span></a></li>
                            <li class="nav-item dropdown" style="align-items: end;"><a class="nav-link dropdown-toggle"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profile </a>
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


    <div class="container container1">




        <div class="header">
            <h1><?php echo $courseTitle; ?></h1>
            <p style="text-align:center; padding:20px;"><?php echo $courseDescription; ?>
            </p>

            <div class=" profile-container">


                <img src="media/professor.jpg" alt="Instructor's Photo" class="profile-photo">

                <div class="instructor-info">
                    <p style="color: #f5f5f5; text-align:center; padding:0; "><strong>Instructor:</strong></p>
                    <p class="name" style="color: #E08231; padding:0;"><?php echo $teacherName; ?></p>
                </div>


                <form>
                    <button style="background-color:#4F9F33; color:white; " class=" enroll-button">Enrolled</button>
                </form>

                <div id="save">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="70" height="50"
                        viewBox="0,0,256,256">
                        <g fill="#cea4fb" fill-rule="nonzero" stroke="none" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <g transform="scale(5.33333,5.33333)">
                                <path
                                    d="M16.5,5c-3.57194,0 -6.5,2.92806 -6.5,6.5v30c0.00017,0.56293 0.31547,1.07839 0.81656,1.33491c0.50109,0.25652 1.10362,0.21091 1.56039,-0.11811l11.62305,-8.36914l11.62305,8.36914c0.45677,0.32902 1.0593,0.37463 1.56039,0.11811c0.50109,-0.25652 0.8164,-0.77198 0.81656,-1.33491v-30c0,-3.57194 -2.92806,-6.5 -6.5,-6.5zM16.5,8h15c1.95006,0 3.5,1.54994 3.5,3.5v27.07227l-10.12305,-7.28906c-0.52374,-0.37736 -1.23016,-0.37736 -1.75391,0l-10.12305,7.28906v-27.07227c0,-1.95006 1.54994,-3.5 3.5,-3.5z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <p class="saved" style="color:#E08231; padding-left:15px; ">Save</p>
                </div>
            </div>



        </div>

    </div>

    </div>
    <div class="container " style="margin:50px; display:flex; flex-direction:column;">
        <h2 class="label" style="padding: left 40px; font-size:25px; color:">Lecture</h2>
        <!-- <iframe src="https://www.youtube.com/embed/FQdaUv95mR8" frameborder="0" allowfullscreen class="video"></iframe> -->
        <?php echo $iframeCode; ?>
        <p>Video URL: <a href="<?php echo $videoURL; ?>" target="_blank">Click here to watch</a></p>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>