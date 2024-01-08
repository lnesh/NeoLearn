<?php
// Database connection
// Replace with your database connection details
$db = new mysqli("hostname", "username", "password", "database_name");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$search = $db->real_escape_string($_POST['search']);

$query = "SELECT * FROM courses WHERE title LIKE '%$search%'"; // 'courses' and 'title' should be replaced with your actual table name and column
$result = $db->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>" . $row['title'] . "</p>"; // Customize how you want to display the courses
    }
} else {
    echo "<p>No results found</p>";
}

$db->close();
?>
