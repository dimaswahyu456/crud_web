<?php
include("../koneksi.php");

if(isset($_POST['simpan'])){
    $id = $_POST['id_perangkat_desa'];
    $nama = $_POST['nama_perangkat_desa'];
    $jabatan = $_POST['jabatan'];

    $sql = "UPDATE data_perangkat_desa set nama_perangkat_desa='$nama', jabatan='$jabatan'
            WHERE id_perangkat_desa=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: /crud_web/pengurus.php?status=sukses');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }

} else {
    die("Akses dilarang...");
}
?>