<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM tb_siswa");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>CRUD Data Siswa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #74ebd5, #acb6e5);
            min-height: 100vh;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
        }

        .tambah-btn {
            display: inline-block;
            background-color: #2ecc71;
            color: white;
            padding: 10px 18px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .tambah-btn:hover {
            background-color: #27ae60;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 8px 16px rgba(0,0,0,0.15);
            margin-top: 20px;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #2980b9;
            color: white;
            font-size: 16px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #eaf2f8;
        }

        .aksi a {
            margin-right: 10px;
            padding: 6px 12px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .aksi a.edit {
            background-color: #f1c40f;
            color: #fff;
        }

        .aksi a.edit:hover {
            background-color: #d4ac0d;
        }

        .aksi a.hapus {
            background-color: #e74c3c;
            color: #fff;
        }

        .aksi a.hapus:hover {
            background-color: #c0392b;
        }

        .center {
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Data Siswa SMK N 1 Wonosobo</h2>

<div class="center">
    <a href="form_tambah.php" class="tambah-btn">+ TAMBAH DATA SISWA</a>
</div>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIS</th>
        <th>Alamat</th>
        <th>Opsi</th>
    </tr>
    <?php
    $no = 1;
    while ($d = mysqli_fetch_array($data)) {
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $d['nama']; ?></td>
        <td><?= $d['nis']; ?></td>
        <td><?= $d['alamat']; ?></td>
        <td class="aksi">
            <a href="form_edit.php?id=<?= $d['id']; ?>" class="edit">EDIT</a>
            <a href="hapus.php?id=<?= $d['id']; ?>" class="hapus" onclick="return confirm('Yakin ingin menghapus data ini?')">HAPUS</a>
        </td>
    </tr>
    <?php } ?>
</table>

</body>
</html>
