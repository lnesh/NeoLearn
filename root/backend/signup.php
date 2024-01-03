<?php

include('./connect.php');
?>

<?php

    
    if(isset($_POST["submit"])){
        $fullname = $_POST["fullname"];
        $username = $_POST["username"];
        $mail = $_POST["mail"];
        $password = $_POST["password"];
        $pwdRpt = $_POST["passwordRpt"];


        mysqli_query($conn, "INSERT INTO student VALUES(NULL, '$fullname', '$username', '$mail', '$password')");
		if(mysqli_affected_rows($conn) ==1) {
		echo "<font color =green size =14>Επιτυχής Υποβολή! :)</font><br />";
        
		}
		else {
		echo "<font color =red size =14>Αποτυχία Υποβολής :(</font> <br />";
		}	

    }

    ?>