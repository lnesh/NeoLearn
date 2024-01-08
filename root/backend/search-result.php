<!-- search_results.php -->
<?php
// Database connection
$host = 'localhost'; // or your database host
$user = 'username'; // your database username
$password = 'password'; // your database password
$dbname = 'your_database'; // your database name

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the search query
$search_query = isset($_GET['query']) ? $_GET['query'] : '';

// Your SQL query to fetch results
// IMPORTANT: Use prepared statements to prevent SQL injection
$stmt = $conn->prepare("SELECT * FROM courses WHERE title LIKE CONCAT('%', ?, '%')");
$stmt->bind_param("s", $search_query);
$stmt->execute();
$result = $stmt->get_result();

// HTML for displaying results
echo "<h1>Search Results</h1>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h2>" . $row["title"] . "</h2>";
        // Add more details you want to show from your courses
        echo "</div>";
    }
} else {
    echo "0 results found.";
}

// Close connection
$conn->close();
?>
