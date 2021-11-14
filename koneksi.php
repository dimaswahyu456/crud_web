<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "db_ekampung";

$db = mysqli_connect($server, $user, $password, $database);

if( !$db ){
    die("Error, Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>