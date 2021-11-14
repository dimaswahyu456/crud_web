<!DOCTYPE html>
<html>
<head>
    <title>Form Penambahan Data Perangkat Desa</title>
</head>

<body>
    <header>
        <h3>Form Penambahan Data Perangkat Desa</h3>
    </header>

    <form action="tambahaction.php" method="POST">
        <fieldset>
        <p>
            <label for="nama_perangkat_desa">Nama : </label>
            <input type="text" name="nama_perangkat_desa" placeholder="Nama Lengkap" />
        </p>
        <p>
            <label for="jabatan">Jabatan : </label>
            <input type="text" name="jabatan" placeholder="Jabatan" />
        </p>
        <p>
            <input type="submit" value="Tambah" name="tambah" />
        </p>
        <p>
            <a href="/crud_web/pengurus.php"><span>Kembali</span></a>
        </p>
        </fieldset>
    </form>

</body>
</html>