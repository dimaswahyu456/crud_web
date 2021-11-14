<?php
include("../koneksi.php");

$nik = $_GET['id'];
$sql = "DELETE FROM data_penduduk WHERE nik=$nik";

if(mysqli_query($db, $sql)){
    header("location:/crud_web/warga.php");
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
  }
?>