<?php
  $host = "127.0.0.1";
  $username = "root";
  $password = "adminmysql";
  $db = "belajarphp";
  // mysqli_connect(host, username, password, dbname, port, socket)

  $koneksi = mysqli_connect($host, $username, $password, $db);

  if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
  }else{
    echo "berhasil";
  }
?>