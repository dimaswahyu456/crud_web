<?php 
include("../koneksi.php");

if( !isset($_GET['id']) ){
    header('Location: /crud_web/warga.php');
}

$nik = $_GET['id'];

$sql = "SELECT * FROM data_penduduk WHERE nik=$nik";
$query = mysqli_query($db, $sql);
$data_awal = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Form Edit Data Warga</title>
</head>

<body>
	<header>
        <h3>Form Edit Data Warga</h3>
    </header>
		<br />
		<form action="editaction.php" method="POST">
        <fieldset>

		<input type="hidden" name="nik" value="<?=$data_awal['nik'] ?>" />
        <p>
            <label for="no_kk">No Kartu Keluarga : </label>
            <input type="text" name="no_kk" placeholder="No Kartu Keluarga" value="<?=$data_awal['no_kk']?>" />
        </p>
        <p>
            <label for="nama_penduduk">Nama : </label>
            <input type="text" name="nama_penduduk" placeholder="Nama Lengkap" value="<?=$data_awal['nama_penduduk']?>" />
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin : </label>
            <select name="jenis_kelamin">
                <option>Pria</option>
                <option>Wanita</option>
            </select>
        </p>
        <p>
            <label for="alamat_penduduk">Alamat : </label>
            <input type="text" name="alamat_penduduk" placeholder="Alamat Lengkap" value="<?=$data_awal['alamat_penduduk']?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>
        <p>
            <a href="/crud_web/warga.php"><span>Kembali</span></a>
        </p>
        </fieldset>
    </form>
	</div>
</body>
</html>