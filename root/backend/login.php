<?php 
session_start();
require('connect.php'); //το αρχείο όπου καθορίσαμε τη σύνδεση με τη βάση δεδομένων

$mail = $_POST['mail'];
$password = $_POST['password'];

if(isset($_POST['student-login'])){
	if($mail && $password){
		$check = mysqli_query($conn,"SELECT * FROM student WHERE mail='".$mail."'");
		$rows = mysqli_num_rows($check);
		
		if(mysqli_num_rows($check) != 0){
			while($row = mysqli_fetch_assoc($check)){
				$db_mail = $row['mail'];
				$db_password = $row['password'];
			}
			if($mail == $db_mail && ($password) == $db_password){
				$_SESSION["mail"] = $mail;
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

if(isset($_POST['teacher-login'])){
	if($mail && $password){
		$check = mysqli_query($conn,"SELECT * FROM teacher WHERE mail='".$mail."'");
		$rows = mysqli_num_rows($check);
		
		if(mysqli_num_rows($check) != 0){
			while($row = mysqli_fetch_assoc($check)){
				$db_mail = $row['mail'];
				$db_password = $row['password'];
			}
			if($mail == $db_mail && ($password) == $db_password){
				$_SESSION["mail"] = $mail;
				header("Location: ../teacher-main.php");
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