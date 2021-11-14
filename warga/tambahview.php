<!DOCTYPE html>
<html>
<head>
    <title>Form Penambahan Data Warga</title>
</head>

<body>
    <header>
        <h3>Form Penambahan Data Warga</h3>
    </header>

    <form action="tambahaction.php" method="POST">
        <fieldset>
        <p>
            <label for="no_kk">No Kartu Keluarga : </label>
            <input type="text" name="no_kk" placeholder="No Kartu Keluarga" />
        </p>
        <p>
            <label for="nama_penduduk">Nama : </label>
            <input type="text" name="nama_penduduk" placeholder="Nama Lengkap" />
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
            <input type="text" name="alamat_penduduk" placeholder="Alamat Lengkap" />
        </p>
        <p>
            <input type="submit" value="Tambah" name="tambah" />
        </p>
        <p>
            <a href="/crud_web/warga.php"><span>Kembali</span></a>
        </p>
        </fieldset>
    </form>

</body>
</html>