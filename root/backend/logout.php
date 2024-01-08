<?php
session_start();

if (isset($_SESSION['mail'])) {
    unset($_SESSION['mail']);
    session_destroy();
    header('Location: ../login.php');
} else {
    echo '<script>alert("You are not logged in.")</script>';
    header("Location: ../login.php");
}
?>