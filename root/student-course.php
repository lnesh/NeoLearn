<?php
    include 'backend/connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title name="title">Document</title>
</head>

<body>


    <?php

    if (isset($_POST['view-course']))
    $sql = "SELECT * FROM courses;";
    $result = mysqli_query($conn, $sql);

    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['title'];
        }
    }

    ?>


</body>

</html>