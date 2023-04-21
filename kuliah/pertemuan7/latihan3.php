<?php 
require 'function.php';
$menu = query("SELECT * FROM menu_seblak");
?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seblak</title>
</head>
<body>
  <h3>Menu Seblak</h3>
  <a href="tambah.php">Tambah Menu</a>
  <br>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
    <th>#</th>
    <th>Menu</th>
    <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach($menu as $m) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><?= $m['menu']; ?></td>
      <td><a href="detail.php?id_order=<?= $m['id_order']; ?>">lihat detail</a></td>
    </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>