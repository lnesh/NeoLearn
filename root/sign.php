<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    include 'connect.php';
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="insert into 'registration'(fullname, email, username, password)
    values('$fullname', '$email', '$username', '$password')";
    $result=mysqli_query($con, $sql);

    if($result){
      echo "Data inserted successfully";
    }else{
      die(mysqli_error($con));
    }
}

?>


<!doctype html>
 <!--<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Signup page</title>
  </head>
  <body>
    <h1 class="text-center">Sign Up Page</h1>
    <div class="container mt-5">
  <form action="sign.php" method="post">
  <div class="form-group">
    <label for="exampleInputName1">Fullname</label>
    <input type="text" class="form-control" id="exampleInputName1" aria-describedby="fullname" placeholder="Enter your full name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputUsername1">Username</label>
    <input type="text" class="form-control" id="exampleInputUsername1" aria-describedby="username" placeholder="Enter your username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary w-100">Submit</button>
  </form>
 </div>

</body>
</html> 