<?php 
include 'header_menu.php';

include 'koneksi.php';
?>

<style>
.main-container {
    width: 1000px;
    margin: 20px auto;
    margin-top: 40px;
    width: 250%;
    margin-left: 75px;
}
</style>

<div class="content-wrapper p-4">
    <div class="container-fluid">

        <div class="main-container">
            <div class="row mb-3 align-items-center">
                <div class="col-12 col-md-4 mb-2 mb-md-0">
                    <h3 class="fw-bold mb-0 text-secondary">Data Kategori</h3>
                </div>
                <div class="col-12 col-md-8 text-right">
                    <a href="tambah_kategori.php" class="btn btn-primary">Tambah Kategori</a>
                </div>
            </div>

            <div class="table-responsive shadow-sm rounded bg-white p-3">
                <table class="table table-bordered align-middle text-center mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>Id Kategori</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $data = mysqli_query($koneksi, "SELECT * FROM kategori");
                        while ($row = mysqli_fetch_assoc($data)) {
                        ?>
                        <tr>
                            <td class="fw-semibold"><?php echo $row['id_kategori']; ?></td>
                            <td><?php echo $row['kategori']; ?></td>
                            <td>
                                <a href="edit_kategori.php?id=<?php echo $row['id_kategori']; ?>"
                                    class="btn btn-warning btn-sm">Edit</a>
                                <a href="hapus_kategori.php?id=<?php echo $row['id_kategori']; ?>"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>