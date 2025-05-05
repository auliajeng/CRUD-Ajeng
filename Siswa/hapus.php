<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang dikirim dari url
$id = $_GET['id'];

// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM tb_siswa WHERE id='$id'") 
    or die(mysqli_error($koneksi));

// mengalihkan halaman kembali ke index.php
header("Location: index.php");
?>
