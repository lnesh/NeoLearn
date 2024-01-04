<?php
    $conn = mysqli_connect('localhost', 'root', '', 'neolearn', '3307' ) ;
    if(!$conn){
        echo 'Connection failed' .mysqli_connect_error();
    }