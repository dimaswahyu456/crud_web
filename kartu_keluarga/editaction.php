<?php
include("../koneksi.php");

if(isset($_POST['simpan'])){
    $no_kk = $_POST['no_kk'];
    $nik = $_POST['nik'];

    $sql = "UPDATE data_kartu_keluarga set nik='$nik' WHERE no_kk=$no_kk";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: /crud_web/kartu_keluarga.php?status=sukses');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }

} else {
    die("Akses dilarang...");
}
?>