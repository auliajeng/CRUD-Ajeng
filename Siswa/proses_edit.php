<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$alamat = $_POST['alamat'];

// update data ke database
mysqli_query($koneksi, "UPDATE tb_siswa SET nama='$nama', nis='$nis', alamat='$alamat' WHERE id='$id'") 
    or die(mysqli_error($koneksi));

// mengalihkan halaman kembali ke index.php
header("Location: login.php");
?>
