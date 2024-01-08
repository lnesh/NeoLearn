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
    echo '<ul>';
    while ($row = mysqli_fetch_assoc($results)) {
        echo '<li><a href="post.php">' . $row['title'] . '</a></li>';
    }
    echo '</ul>';
} else {
    echo 'No results found for "' . $searchTerm . '"';
}

// Close the database connection
mysqli_close($conn);