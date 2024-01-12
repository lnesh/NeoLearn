<?php
include_once 'connect.php';

$searchTerm = $_GET['search'];
$query = "SELECT * FROM courses WHERE title LIKE '%$searchTerm%'";
$results = mysqli_query($conn, $query);

if (mysqli_num_rows($results) > 0) {
    while ($row = mysqli_fetch_assoc($results)) {
        echo "<div>";
        echo "<h2>" . $row['title'] . "</h2>";
        echo "<p>" . $row['description'] . "</p>";
        echo "</div>";
    }
} else {
    echo 'No results found.';
}

mysqli_close($conn);
?>
