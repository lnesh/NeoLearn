<?php
session_start();

if (isset($_SESSION['mail'])) {
    unset($_SESSION['mail']);
    session_destroy();
    header('Location: ../index.html');
} else {

    header("Location: ../login.php");
}
?>