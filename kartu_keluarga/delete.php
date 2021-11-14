<?php
include("../koneksi.php");

$no_kk = $_GET['id'];
$sql = "DELETE FROM data_kartu_keluarga WHERE nik=$no_kk";

if(mysqli_query($db, $sql)){
    header("location:/crud_web/kartu_keluarga.php");
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
  }
?>