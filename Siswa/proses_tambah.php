<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$alamat = $_POST['alamat'];

// memasukkan data ke database tanpa menyertakan id (karena auto_increment)
mysqli_query($koneksi, "INSERT INTO tb_siswa (nama, nis, alamat) VALUES ('$nama', '$nis', '$alamat')") 
    or die(mysqli_error($koneksi));

// mengalihkan halaman kembali ke index.php
header("Location: login.php");
?>
