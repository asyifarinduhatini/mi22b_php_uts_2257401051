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
    <title>Profile</title>
</head>
<body>
    <h1>form Profile</h1>
    <form action="" method="post">

    NIM
    <input type="text" name="nim"><br>
    NAME
    <input type="text" name= "name"> <br> 
    KELAS
    <input type="text" name="kelas"><br>
    EMAIL
    <input type="text" name="email"><br>
    NOMOR HP
    <input type="text" name="nomor"><br>
    <button type= "submit" name="simpan"> Simpan</button>
 </form>
   <div class ="table">
    <table>
        <tr>
            <th>NIM</th>
            <td><?php if (isset($_POST["simpan"])) {echo htmlspecialchars($_POST["nim"]);} ?></td>
        </tr>
        <tr>
            <th>NAME</th>
            <td><?php if (isset($_POST["simpan"])) {echo htmlspecialchars($_POST["name"]);} ?></td>
        </tr>
        <tr>
            <th>KELAS</th>
            <td><?php if (isset($_POST["simpan"])) {echo htmlspecialchars($_POST["kelas"]);} ?></td>
        </tr>
        <tr>
            <th>EMAIL</th>
            <td><?php if (isset($_POST["simpan"])) {echo htmlspecialchars($_POST["email"]);} ?></td>
        </tr>
        <tr>
            <th>NOMOR HP</th>
            <td><?php if (isset($_POST["simpan"])) {echo htmlspecialchars($_POST["nomor"]);} ?></td>
        </tr>
</table>
 </body>
</html>
  