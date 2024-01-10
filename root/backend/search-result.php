<?php

include('./connect.php');
?>

<?php

// Get the search query
$search_query = isset($_GET['query']) ? $_GET['query'] : '';

// Your SQL query to fetch results
// IMPORTANT: Use prepared statements to prevent SQL injection
$stmt = $conn->prepare("SELECT * FROM courses WHERE title LIKE CONCAT('%', ?, '%')");
$stmt->bind_param("s", $search_query);
$stmt->execute();
$result = $stmt->get_result();

// HTML for displaying results
echo "<h1>Search Result</h1>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<h2>" . $row["title"] . "</h2>";
        // Add more details you want to show from your courses
        echo "</div>";

        echo '<div class="container-fluid">';
        echo '<h1 style="padding:20px;">Enrolled Courses</h1>';
        echo '<ul style="display:flex; gap:20px">';
        echo '<div class="card card-item" style="width: 18rem;">
        <img src="./media/html-system-website-concept.jpg" class="card-img-top card-img" alt="...">
        
        <div class="card-body">
        <h2 class="card-title" style="color: white; font-weight: 600; ">' . $courseTitle . '</h2>
        <div class="card-text text" style="font-family: "Epilogue"; font-size: 15px;">' . $courseDescription . '</div>
        
        <div class="card-footer" style=" display: flex; flex-direction:row; justify-content: space-between; align-items:flex-end;">
            
         <p>' . $fullname . '</p>         
         <a href="student-course.php?id=1"
         style="text-decoration: none; color: #dabafc; padding-left: 3px;">View</a> 
         </div>
  
        </div>
 
        </div>';
    echo '</ul>';
    echo '</div>';
    }
} else {
    echo "0 results found.";
}

// Close connection
$conn->close();
?>