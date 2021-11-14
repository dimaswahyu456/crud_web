<?php
include("../koneksi.php");

if(isset($_POST['simpan'])){
    $nik = $_POST['nik'];
    $no_kk = $_POST['no_kk'];
    $nama_penduduk = $_POST['nama_penduduk'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat_penduduk = $_POST['alamat_penduduk'];

    $sql = "UPDATE data_penduduk set no_kk='$no_kk', nama_penduduk='$nama_penduduk', jenis_kelamin='$jenis_kelamin', alamat_penduduk='$alamat_penduduk'
            WHERE nik=$nik";
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