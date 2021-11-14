<?php 
include("../koneksi.php");

if( !isset($_GET['id']) ){
    header('Location: /crud_web/kartu_keluarga.php');
}

$no_kk = $_GET['id'];

$sql = "SELECT * FROM data_kartu_keluarga WHERE no_kk=$no_kk";
$query = mysqli_query($db, $sql);
$data_awal = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Form Edit Data Kartu Keluarga</title>
</head>

<body>
	<header>
        <h3>Form Edit Kartu Keluarga</h3>
    </header>
		<br />
		<form action="editaction.php" method="POST">
        <fieldset>

		<input type="hidden" name="no_kk" value="<?=$data_awal['no_kk'] ?>" />
        <p>
            <label for="nik">NIK : </label>
            <input type="text" name="nik" placeholder="NIK" value="<?=$data_awal['nik']?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>
        <p>
            <a href="/crud_web/kartu_keluarga.php"><span>Kembali</span></a>
        </p>
        </fieldset>
    </form>
	</div>
</body>
</html>