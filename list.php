<?php
  $conn = mysqli_connect('127.0.0.1', 'root', 'adminmysql', 'belajarphp');

  $getMhs = mysqli_query($conn, "SELECT * FROM mahasiswa");
  if(!$getMhs){
    echo mysqli_error($conn);
  }
  //mysqli_fetch_row() //array numeric
  //mysqli_fetch_assoc() //array associative
  //mysqli_fetch_array() //array keduanya
  //mysqli_fetch_object() //object

  // $getRow = mysqli_fetch_assoc($getMhs);
  
  // while ($row = mysqli_fetch_assoc($getMhs)) {
  //   var_dump($row);
  // }

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
      <?php while ($row = mysqli_fetch_assoc($getMhs)):?>
      <tr>
        <td><?php echo $no; ?></td>
        <td>edit | hapus</td>
        <td><?php echo $row['nama']; ?></td>
        <td><?php echo $row['nip']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
      </tr>
      <?php $no++; ?>
      <?php endwhile; ?>
    </table>
  </body>
</html>