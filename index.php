<?php
  $conn = mysqli_connect('127.0.0.1', 'root', 'adminmysql', 'belajarphp');

  $getMhs = mysqli_query($conn, "SELECT * FROM mahasiswa");
  if(!$getMhs){
    echo mysqli_error($conn);
  }
  // $getRow = $getMhs->fetch_array();
  var_dump($getMhs);

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
      <tr>
        <td>1</td>
        <td>edit | hapus</td>
        <td>a</td>
        <td>b</td>
        <td>c</td>
      </tr>
      
    </table>
  </body>
</html>