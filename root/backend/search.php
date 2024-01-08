<?php

include('./connect.php');
?>

<?php

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