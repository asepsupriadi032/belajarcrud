<?php
  $conn = mysqli_connect('127.0.0.1', 'root', 'adminmysql', 'belajarphp');

  function getList($query)
  {
    global $conn;
    $getMhs = mysqli_query($conn, "SELECT * FROM mahasiswa");
    $rows = [];

    while ($row = mysqli_fetch_assoc($getMhs)) {
      $rows[] = $row;
    }

    return $rows;
  }

  function tambah($data)
  {
    global$conn;
    $nama = $data['nama'];
    $nip = $data['nip'];
    $alamat = $data['alamat'];
    $query = "INSERT INTO mahasiswa 
              (nama, nip, alamat)
              VALUES 
              ('$nama', '$nip', '$alamat')
              ";
    $insert = mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
  }

  function hapus($id_mhs)
  {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id_mhs = $id_mhs");
    return mysqli_affected_rows($conn);
  }

  function update($data)
  {
    global$conn;
    $nama = $data['nama'];
    $nip = $data['nip'];
    $alamat = $data['alamat'];
    $id_mhs = $data['id_mhs'];
    $query = "UPDATE mahasiswa SET
              nama = '$nama'
              WHERE id_mhs = $id_mhs
              ";
    $insert = mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
  }
?>