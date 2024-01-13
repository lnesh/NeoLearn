<?php

include('./connect.php');
?>

<?php

    
    if(isset($_POST["student-register"])){
        $fullname = $_POST["fullname"];
        $username = $_POST["username"];
        $mail = $_POST["mail"];
        $password = $_POST["password"];
        $pwdRpt = $_POST["passwordRpt"];


        mysqli_query($conn, "INSERT INTO student VALUES(NULL, '$fullname', '$username', '$mail', '$password')");
		if(mysqli_affected_rows($conn) ==1) {
		header ("Location: ../student-main.php");
        
		}
		else {
		echo "<font color =red size =14>Αποτυχία Υποβολής :(</font> <br />";
		}	

    }

        if(isset($_POST["teacher-register"])){
        $fullname = $_POST["fullname"];
        $username = $_POST["username"];
        $mail = $_POST["mail"];
        $password = $_POST["password"];
        $pwdRpt = $_POST["passwordRpt"];
        $profession = '';
        $bio = '';


        mysqli_query($conn, "INSERT INTO teacher VALUES(NULL, '$fullname', '$username', '$mail', '$password','$profession', '$bio')");
		if(mysqli_affected_rows($conn) ==1) {
		header ("Location: ../teacher-main.php");
		}
		else {
		echo "<font color =red size =14>Αποτυχία Υποβολής :(</font> <br />";
		}	

    }

    ?>