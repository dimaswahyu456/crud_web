<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>

<head>
	<title>Data Warga</title>
    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
    </style>
</head>

<body>
    <?php include("header.php")?>
	<header>
	<h1>Data Warga</h1>
	</header>

	<nav>
		<a href="./warga/tambahview.php">[+] Tambah Baru</a>
	</nav>
	<br>

    <table>
<tr>
    <th>NIK</th>
    <th>No Kartu Keluarga</th>
    <th>Nama Penduduk</th>
    <th>Jenis Kelamin</th>
    <th>Alamat</th>
    <th>Action</th>
  </tr>

<?php
$warga = mysqli_query($db,"select * from data_penduduk");
while($row = mysqli_fetch_array($warga)) : ?>
    <tr>
        <td align="center">
            <?= $row['nik']?>
        </td>
        <td> <?= $row['no_kk']?> </td>
        </td>
        <td> <?= $row['nama_penduduk']?> </td>
        </td>
        <td> <?= $row['jenis_kelamin']?> </td>
        </td>
        <td> <?= $row['alamat_penduduk']?> </td>
        <td> <a href="/crud_web/warga/editview.php?id=<?= $row['nik']?>">edit</a> 
             <a href="/crud_web/warga/delete.php?id=<?= $row['nik']?>">delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
</body>
</html>