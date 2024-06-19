<?php 
/**
* NIM : 2257401051
* Nama : Asyifa Rindu Hatini
* Kelas : MI22B
*/
include'index.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="post">

    Username:
    <input type="text" name="username"><br>
    password:
    <input type="password" name= "password"> <br> 
    <button type= "submit" name="login"> Login</button>
 </form>
 <?php 
   if(isset($_POST["login"])){
    if($_POST["username"] == "admin" && $_POST["password"] == "admin"){
       echo"<p style='color:green;'>" . "Login Berhasil"."</p>";

    } else {
      $error=true;
    } 
    
}
   ?> 
   <?php if (isset($error)):?>
    <P style="color : red; font-style:italic"> username atau password tidak sesuai </p>
    <?php endif; ?>
</body>
</html>


