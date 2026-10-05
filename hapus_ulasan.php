<?php
session_start();
include 'koneksi.php';

$id = $_GET['id'];

$hapus = mysqli_query($koneksi, "DELETE FROM ulasan WHERE id_ulasan='$id'");

if ($hapus) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='ulasan.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus data!'); window.location='ulasan.php';</script>";
}
?>