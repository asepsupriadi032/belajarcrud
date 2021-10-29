<?php
  // mysqli_connect(host, username, password, dbname, port, socket)
  $conn = mysqli_connect("127.0.0.1", "root", "adminmysql", "belajarphp");

  if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO mahasiswa 
              (nama, nip, alamat)
              VALUES 
              ('$nama', '$nip', '$alamat')
              ";
    $insert = mysqli_query($conn, $query);

    if(mysqli_affected_rows($conn) > 0){
      echo "berhasil";
    }else{
      echo mysqli_error($conn);
    }
  }
?>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <form action="" method="POST">
      <table>
        <tr>
          <td><label for="nama">Nama</label></td>
          <td>:</td>
          <td><input type="text" name="nama" id="nama"></td>
        </tr>
        <tr>
          <td>NIP</td>
          <td>:</td>
          <td><input type="text" name="nip"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td><textarea name="alamat" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
          <td colspan="3" align="right"><button type="submit" name="simpan">Simpan</button></td>
        </tr>
      </table>
    </form>
  </body>
</html>