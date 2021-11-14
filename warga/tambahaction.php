<?php
include("../koneksi.php");

if(isset($_POST['tambah'])){
    $no_kk = $_POST['no_kk'];
    $nama_penduduk = $_POST['nama_penduduk'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat_penduduk = $_POST['alamat_penduduk'];

    $sql = "INSERT INTO data_penduduk (no_kk, nama_penduduk, jenis_kelamin, alamat_penduduk) 
            VALUE ('$no_kk', '$nama_penduduk', '$jenis_kelamin', '$alamat_penduduk')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: /crud_web/warga.php?status=sukses');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }

} else {
    die("Akses dilarang...");
}
?>