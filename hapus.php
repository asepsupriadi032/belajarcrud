<?php 
  require "proses_mhs.php";
  $id_mhs = $_GET['id_mhs'];

  if( hapus($id_mhs)>0){
    echo "berhasil";
  }else{
    echo "berhasil";
  }

?>