<?php 
include("../koneksi.php");

if( !isset($_GET['id']) ){
    header('Location: /crud_web/pengurus.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM data_perangkat_desa WHERE id_perangkat_desa=$id";
$query = mysqli_query($db, $sql);
$data_awal = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Form Edit Data Perangkat Desa</title>
</head>

<body>
	<header>
        <h3>Form Edit Perangkat Desa</h3>
    </header>
		<br />
		<form action="editaction.php" method="POST">
        <fieldset>

		<input type="hidden" name="id_perangkat_desa" value="<?=$data_awal['id_perangkat_desa'] ?>" />
        <p>
            <label for="nama_perangkat_desa">Nama : </label>
            <input type="text" name="nama_perangkat_desa" placeholder="Nama Lengkap" value="<?=$data_awal['nama_perangkat_desa']?>" />
        </p>
        <p>
            <label for="jabatan">Jabatan : </label>
            <input type="text" name="jabatan" placeholder="Jabatan" value="<?=$data_awal['jabatan']?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>
        <p>
            <a href="/crud_web/pengurus.php"><span>Kembali</span></a>
        </p>
        </fieldset>
    </form>
	</div>
</body>
</html>