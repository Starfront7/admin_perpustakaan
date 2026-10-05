<?php
session_start();
include 'koneksi.php';

$id = $_GET['id'];

$hapus = mysqli_query($koneksi, "DELETE FROM kategori WHERE id_kategori='$id'");

if ($hapus) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='kategori.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus data!'); window.location='kategori.php';</script>";
}
?>