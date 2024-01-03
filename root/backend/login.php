<?php 
session_start();
require('connect.php'); //το αρχείο όπου καθορίσαμε τη σύνδεση με τη βάση δεδομένων
$username = $_POST['mail'];
$password = $_POST['password'];

if(isset($_POST['student-login'])){
	if($username && $password){
		$check = mysqli_query($conn,"SELECT * FROM student WHERE mail='".$username."'");
		$rows = mysqli_num_rows($check);
		
		if(mysqli_num_rows($check) != 0){
			while($row = mysqli_fetch_assoc($check)){
				$db_username = $row['mail'];
				$db_password = $row['password'];
			}
			if($username == $db_username && ($password) == $db_password){
				$_SESSION["mail"] = $username;
				header("Location: ../student-main.php");
			}else{
				echo "Your password is wrong.";
			}
		}else{
			die("Couldn't find username.");
		}
	}else{
		echo "Please fill in all the fields.";
	}
}
?>