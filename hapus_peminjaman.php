<?php
session_start();
include 'koneksi.php';

$id = $_GET['id'];

$hapus = mysqli_query($koneksi, "DELETE FROM peminjaman WHERE id_peminjaman='$id'");

if ($hapus) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='peminjaman.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus data!'); window.location='peminjaman.php';</script>";
}
?>