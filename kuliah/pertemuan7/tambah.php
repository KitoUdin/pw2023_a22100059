<?php 
require 'function.php';
if(isset($_POST['tambah'])){
 if( tambah($_POST) > 0){
  echo "<script> 
alert('Menu Berhasil Ditambahkan');
document.location.href = 'latihan3.php';
</script>";
 } else{
  echo "Menu Gagal Ditambahkan";
 }

}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Menu</title>
</head>
<body>
  <h3>Form Tambah Menu</h3>
  <h3><a href="latihan3.php">Kembali Ke Menu Utama</a></h3>
  <form action="" method="POST">
    <ul>
<li>
  <label>
    Menu
    <input type="text" name="menu" autofocus required>
  </label>
</li>
<li>
  <label>
    Harga
    <input type="number" name="harga" required>
  </label>  
</li>
<li>
  <label>
  Deskripsi
  <input type="text" name="deskripsi">
  </label>
</li>
<li>
  <button type="submit" name="tambah">Tambah Menu</button>
</li>
    </ul>
  </form>
</body>
</html>