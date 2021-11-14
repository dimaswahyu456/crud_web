<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>

<head>
	<title>Data Perangkat Desa</title>
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
	<h1>Data Perangkat Desa</h1>
	</header>

	<nav>
		<a href="./pengurus/tambahview.php">[+] Tambah Baru</a>
	</nav>
	<br>

    <table>
<tr>
    <th>Id</th>
    <th>Nama Perangkat Desa</th>
    <th>Jabatan</th>
    <th>Action</th>
  </tr>

<?php
$pengurus = mysqli_query($db,"select * from data_perangkat_desa");
while($row = mysqli_fetch_array($pengurus)) : ?>
    <tr>
        <td align="center">
            <?= $row['id_perangkat_desa']?>
        </td>
        <td> <?= $row['nama_perangkat_desa']?> </td>
        </td>
        <td> <?= $row['jabatan']?> </td>
        </td>
        <td> <a href="/crud_web/pengurus/editview.php?id=<?= $row['id_perangkat_desa']?>">edit</a> 
             <a href="/crud_web/pengurus/delete.php?id=<?= $row['id_perangkat_desa']?>">delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
</body>
</html>