<?php 
include 'header.php';

// Koneksi ke database (opsional jika nanti ingin menampilkan angka dari database)
$host = "localhost";
$user = "root";
$pass = "";
$db   = "perpustakaan";
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Contoh jika ingin mengambil total data asli dari database secara dinamis:
// $jml_peminjam = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM peminjam"));
// $jml_kategori = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kategori"));
// $jml_buku     = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM buku"));
?>

<!-- Tambahan CSS agar kotak dipastikan berjajar ke samping (horizontal) -->
<style>
.dashboard {
    display: flex !important;
    flex-wrap: wrap !important;
    gap: 20px !important;
}

.dashboard .box {
    flex: 1 1 200px;
    min-width: 220px;
    min-height: 180px;
}
</style>


<!-- Content di Samping Kanan -->
<main class="col-md-12 ml-sm-8 col-lg-10 content">
    <div class="dashboard">

        <div class="box orange bg-primary">
            <h1>200</h1>
            <p>Jumlah peminjam</p>
            <i class="fas fa-users icon"></i>
        </div>

        <div class="box green bg-success">
            <h1>8</h1>
            <p>Kategori buku</p>
            <i class="fas fa-book-bookmark icon"></i>
        </div>

        <div class="box purple bg-info">
            <h1>98</h1>
            <p>Stock-Buku</p>
            <i class="fas fa-book-bookmark icon"></i>
        </div>

        <div class="box red bg-warning">
            <h1>130</h1>
            <p>Yang sudah di kembalikan</p>
            <i class="fas fa-book-medical icon"></i>
        </div>

    </div>
</main>

</div>
</div>