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
    <title>Loop</title>
</head>
<body>
    <h1>form Loop</h1>
    <form action="" method="post">

    Text
    <input type="text" name="text"><br>
    Jumlah Perulangan
    <input type="text" name= "jumlah"> <br> 
    <button type= "submit" name="cetak"> Cetak</button>
 </form>
 <?php 
   if(isset($_POST["cetak"])){
    $text = $_POST["text"];
    $jumlah =$_POST["jumlah"];
    for($i=1; $i<=$jumlah; $i++)
    echo "<p style = 'color:black;'>". $i. "-$text <br>"."</p>";
}
   ?> 
 
</body>
</html>


