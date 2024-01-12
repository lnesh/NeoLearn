<?php
    $conn = mysqli_connect('localhost', 'root', '', 'neolearn' ) ;
    if(!$conn){
        echo 'Connection failed' .mysqli_connect_error();
    }