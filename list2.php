<?php
  require('proses_mhs.php');
  $mhs = getList("SELECT * FROM mahasiswa");
?>
<html>
  <head>
    <title>Belajar</title>
  </head>
  <body>
    <table border = '1' cellpadding="10" cellspacing='0'>
      <tr>
        <th>No</th>
        <th>Aksi</th>
        <th>Nama</th>
        <th>Nip</th>
        <th>Alamat</th>
      </tr>
      <?php $no = 1; ?>
      <?php foreach($mhs as $row):?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><a href="edit.php?id_mhs=<?php echo $row['id_mhs'] ?>">Edit</a> | <a href="hapus.php?id_mhs=<?php echo $row['id_mhs'] ?>">hapus</a></td>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['nip']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
      </tr>
      <?php $no++; ?>
      <?php endforeach; ?>
    </table>
  </body>
</html>