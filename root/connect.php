<?php
  $HOSTNAME ='localhost';
  $FULLNAME = 'Andrew G. Mate';
  $USERNAME ='root';
  $PASSWORD ='password123!@#';
  $EMAIL='andrew-gmate@dumpmail.eu';
  $DATABASE ='signupforms';

  $con=mysqli_connect($HOSTNAME,$FULLNAME,$USERNAME,$PASSWORD,$EMAIL,$DATABASE);

  if($con){
    echo "Connection successful";
  
  }else{
    die(mysqli_error($con));
  }


?>