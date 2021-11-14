<?php
include("../koneksi.php");

if(isset($_POST['tambah'])){
    $nama= $_POST['nama_perangkat_desa'];
    $jabatan = $_POST['jabatan'];

    $sql = "INSERT INTO data_perangkat_desa (nama_perangkat_desa, jabatan) 
            VALUE ('$nama', '$jabatan')";
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