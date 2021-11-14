<!DOCTYPE html>
<html>
<head>
    <title>Form Penambahan Data Kartu Keluarga</title>
</head>

<body>
    <header>
        <h3>Form Penambahan Data Kartu Keluarga</h3>
    </header>

    <form action="tambahaction.php" method="POST">
        <fieldset>
        <p>
            <label for="no_kk">NIK : </label>
            <input type="text" name="nik" placeholder="NIK" />
        </p>
        <p>
            <input type="submit" value="Tambah" name="tambah" />
        </p>
        <p>
            <a href="/crud_web/kartu_keluarga.php"><span>Kembali</span></a>
        </p>
        </fieldset>
    </form>

</body>
</html>