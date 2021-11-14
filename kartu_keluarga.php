<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>

<head>
	<title>Data Kartu Keluarga</title>
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
	<h1>Data Kartu Keluarga</h1>
	</header>

	<nav>
		<a href="./kartu_keluarga/tambahview.php">[+] Tambah Baru</a>
	</nav>
	<br>

    <table>
<tr>
    <th>No Kartu Keluarga</th>
    <th>NIK</th>
    <th>Action</th>
  </tr>

<?php
$kartu_keluarga = mysqli_query($db,"select * from data_kartu_keluarga");
while($row = mysqli_fetch_array($kartu_keluarga)) : ?>
    <tr>
        <td align="center">
            <?= $row['no_kk']?>
        </td>
        <td> <?= $row['nik']?> </td>
        <td> <a href="/crud_web/kartu_keluarga/editview.php?id=<?= $row['no_kk']?>">edit</a> 
             <a href="/crud_web/kartu_keluarga/delete.php?id=<?= $row['no_kk']?>">delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
</body>
</html>