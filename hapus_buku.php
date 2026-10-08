<?php
session_start();
include 'koneksi.php';

$id = $_GET['id'];

$hapus = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku='$id'");

if ($hapus) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='buku.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus data!'); window.location='buku.php';</script>";
}
?>
```