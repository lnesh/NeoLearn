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
    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Title</th>';
    echo '<th>Content</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    while ($row = mysqli_fetch_assoc($results)) {
        $title = $row['title'];
   

        echo '<tr>';
        echo '<td><a href="post.php?id=' . $row['course_id'] . '">' . $title . '</a></td>';
        echo '<td>' . $title . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
} else {
    echo 'No results found for "' . $searchTerm . '"';
}

// Close the database connection
mysqli_close($conn);