<?php
include('./backend/connect.php');
?>

<html>

<head>
    <title>update people</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>


<body>
    <?php
		if ($_POST['fullname']) {
		$fullname = $_POST['fullname'];
	
		$result = mysqli_query($conn, "UPDATE student SET username='12345' WHERE fullname = '$fullname'") or
				die("Query error: " . mysqli_error($conn));
		echo "Row updated!";
		
		
	} else {
	
		?>
    <form method="POST" action="">
        Update username people name is <input type="text" name="fullname"> <br /><br />
        <input type="submit" name="submit" value="Update">
    </form>

    <?php
			}
	
	?>
</body>

</html>