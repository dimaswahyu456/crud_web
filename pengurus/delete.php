<?php
include("../koneksi.php");

$id = $_GET['id'];
$sql = "DELETE FROM data_perangkat_desa WHERE id_perangkat_desa=$id";

if(mysqli_query($db, $sql)){
    header("location:/crud_web/pengurus.php");
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
  }
?>