<?php
// Include the connect.php file to establish the database connection
include_once 'connect.php';




// Get the search term from the URL
$searchTerm = $_GET['search'];

// Prepare the SQL query to search for the term
$query = "SELECT * FROM courses WHERE title LIKE '%$searchTerm%'";

// Execute the query
$results = mysqli_query($conn, $query);

// Check if there were any results found
if (mysqli_num_rows($results) > 0) {
// Display the search results
// Display the search results
echo '<h2>Search Results</h2>';
echo '<div class="container-fluid">';
echo '<h1 style="padding:20px;">Enrolled Courses</h1>';
echo '<ul style="display:flex; gap:20px">';
        while ($row = mysqli_fetch_assoc($results)) {
        $courseTitle = $row['title'];
        $courseDescription = $row['description'];



        echo '<link rel="stylesheet" href="../css/main.css">';

        echo '<div class="container-fluid">';
            echo '<h1 style="padding:20px;">Enrolled Courses</h1>';
            echo '<ul style="display:flex; gap:20px">';
                echo '<div class="card card-item" style="width: 18rem;">
                    <img src="../media/html-system-website-concept.jpg" class="card-img-top card-img" alt="...">

                    <div class="card-body">
                        <h2 class="card-title" style="color: white; font-weight: 600; ">' . $courseTitle . '</h2>
                        <div class="card-text text" style="font-family: " Epilogue"; font-size: 15px;">' .
                            $courseDescription . '</div>

                        <div class="card-footer"
                            style=" display: flex; flex-direction:row; justify-content: space-between; align-items:flex-end;">


                            <a href="student-course.php?id=1"
                                style="text-decoration: none; color: #dabafc; padding-left: 3px;">View</a>
                        </div>

                    </div>

                </div>';
                echo '</ul>';
            echo '</div>';
        }




} else {
echo 'No results found for "' . $searchTerm . '"';
}

// Close the database connection
mysqli_close($conn);