<?php
  require "proses_mhs.php";
  $id_mhs = $_GET['id_mhs'];
  $getMhs = getList("SELECT * FROM mahasiswa WHERE id_mhs = $id_mhs")[0];

  if(isset($_POST['ubah'])){
    if(update($_POST) > 0){
      echo "berhasil";
    }else{
      echo "gagal";
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
          <td><input type="text" name="nama" id="nama" value="<?php echo $getMhs['nama'] ?>"></td>
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
          <input type="hidden" name="id_mhs" value="<?php echo $getMhs['id_mhs'] ?>">
          <td colspan="3" align="right"><button type="submit" name="ubah">Update</button></td>
        </tr>
      </table>
    </form>
  </body>
</html>