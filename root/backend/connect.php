<?php
    // Assuming the MySQL server is on the default port 3306
    $conn = mysqli_connect('localhost', 'root', '', 'neolearn');

    // Check connection
    if (!$conn) {
        // Output a more detailed error message
        die('Connection failed: ' . mysqli_connect_error());
    } else {
        echo 'Connected successfully';
    }
?>
