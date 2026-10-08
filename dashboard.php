<?php 
include 'header_menu.php';
include 'koneksi.php';


$jml_kategori = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM kategori"));
$jml_buku = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM buku"));
?>

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

<main class="col-md-12 ml-sm-8 col-lg-10 content">
    <div class="dashboard">

        <div class="box orange bg-primary">
            <h1>200</h1>
            <p>Jumlah peminjam</p>
            <i class="fas fa-users icon"></i>
        </div>

        <div class="box green bg-success">
            <h1><?php echo $jml_kategori; ?></h1>
            <p>Kategori buku</p> <i class="fas fa-book-layers icon"></i>
        </div>

        <div class="box purple bg-info">
            <h1><?php echo $jml_buku; ?></h1>
            <p>Jumlah buku</p> <i class="fas fa-book-book icon"></i>
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