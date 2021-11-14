<?php
include("../koneksi.php");

if(isset($_POST['tambah'])){
    $nik = $_POST['nik'];

    $sql = "INSERT INTO data_kartu_keluarga (nik) VALUE ($nik)";
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