<?php

<html>
   <body>
     <form method="post" action="">
        login: <input type="text" name="login" value=""><br/><br/>
        password: <input type="password" name="password"><br/><br/>
      <input type="submit"><br/>
     </form>
<?php
$login = $_POST['login'];
$password = $_POST['password'];
if ($login == "admin" && $password == "123456"){
echo "Hello, you may enter <a href='http://www.uom.gr'>UOM</a>";
} else {
echo "Wrong login or password. Please try again!";
}
?>
   </body>
</html>

