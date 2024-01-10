<?php
// Include the connect.php file to establish the database connection
include_once 'connect.php';


    echo '    <!-- Favicon SEO -->
    <link rel="icon" href="../media/favicon.ico" type="image/icon" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />';



// Get the search term from the URL
$searchTerm = $_GET['search'];

// Prepare the SQL query to search for the term
$query = "SELECT * FROM courses WHERE title LIKE '%$searchTerm%'";

// Execute the query
$results = mysqli_query($conn, $query);

// Check if there were any results found
if (mysqli_num_rows($results) > 0) {

echo '<h2 style="text-align:center; padding:50px; font-weight:600;">Search Results</h2>';
echo '<div class="container-fluid">';
echo '<ul style="display:flex; gap:20px">';
        while ($row = mysqli_fetch_assoc($results)) {
        $courseTitle = $row['title'];
        $courseDescription = $row['description'];


        
echo '<link rel="stylesheet" href="../css/main.css">';
        
        
        echo '<div class="container-fluid">';
            echo '<ul style="display:flex; gap:20px">';
                echo '<div class="card card-item" style="width: 18rem;">
                    <img src="../media/html-system-website-concept.jpg" class="card-img-top card-img" alt="...">

                    <div class="card-body">
                        <h2 class="card-title" style="color: white; font-weight: 600; ">' . $courseTitle . '</h2>
                        <div class="card-text text" style="font-family: " Epilogue"; font-size: 15px;">' .
                            $courseDescription . '</div>

                        <div class="card-footer"
                            style=" display: flex; flex-direction:row; justify-content: center; align-items:flex-end; background-color:black; border-radius: 25px;">


                            <a href="../student-course-preview.php?id=1"
                                style="text-decoration: none; color: #dabafc; padding-left: 3px;">View</a>
                        </div>

                    </div>

                </div>';
                echo '</ul>';
            echo '</div>';

            echo '    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>';
        }




} else {
echo 'No results found for "' . $searchTerm . '"';
}

// Close the database connection
mysqli_close($conn);