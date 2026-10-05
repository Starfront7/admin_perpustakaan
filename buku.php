<?php 
include 'header.php';
include 'koneksi.php';
?>

<style>
.main-container {
    max-width: 1000px;
    margin: 20px auto;
    margin-top: 40px;
    margin-left: 75px;
}
</style>

<div class="content-wrapper p-4">
    <div class="container-fluid">

        <div class="main-container">
            <div class="row mb-3 align-items-center">
                <div class="col-12 col-md-6">
                    <h3 class="fw-bold mb-0 text-secondary">Data Buku</h3>
                </div>
                <div class="col-12 col-md-6 text-end">
                    <a href="tambah_buku.php" class="btn btn-primary">Tambah Buku</a>
                </div>
            </div>

            <div class="table-responsive shadow-sm rounded bg-white p-2">
                <table class="table table-bordered table-hover align-middle text-center mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>Id Buku</th>
                            <th>Id Kategori</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = mysqli_query($koneksi, "SELECT * FROM buku");
                        
                        while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                        <tr>
                            <td class="fw-semibold"><?php echo $row['id_buku']; ?></td>
                            <td><?php echo $row['id_kategori']; ?></td>
                            <td><?php echo $row['judul']; ?></td>
                            <td><?php echo $row['penulis']; ?></td>
                            <td><?php echo $row['penerbit']; ?></td>
                            <td><?php echo $row['tahun_terbit']; ?></td>
                            <td><?php echo $row['deskripsi']; ?></td>
                            <td>
                                <a href="edit_buku.php?id=<?php echo $row['id_buku']; ?>"
                                    class="btn btn-warning btn-sm px-2">Edit</a>
                                <a href="hapus_buku.php?id=<?php echo $row['id_buku']; ?>"
                                    class="btn btn-danger btn-sm px-2"
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