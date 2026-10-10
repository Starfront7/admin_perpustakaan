<?php 
include 'header_menu.php';
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
                <div class="col-12 col-md-4 mb-2 mb-md-0">
                    <h3 class="fw-bold mb-0 text-secondary">Data Peminjaman</h3>
                </div>
                <div class="col-12 col-md-8 text-right">
                    <a href="tambah_peminjaman.php" class="btn btn-primary">Tambah Peminjam</a>
                </div>
            </div>

            <div class="table-responsive shadow-sm rounded bg-white p-3">
                <table class="table table-bordered table-hover align-middle text-center mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>Id Peminjaman</th>
                            <th>Id User</th>
                            <th>Id Buku</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $data = mysqli_query($koneksi, "SELECT * FROM peminjaman");
                        while ($row = mysqli_fetch_assoc($data)) {
                        ?>
                        <tr>
                            <td class="fw-semibold"><?php echo $row['id_peminjaman']; ?></td>
                            <td><?php echo $row['id_user']; ?></td>
                            <td><?php echo $row['id_buku']; ?></td>
                            <td><?php echo $row['tanggal_peminjaman']; ?></td>
                            <td><?php echo $row['tanggal_pengembalian']; ?></td>
                            <td><?php echo $row['status_peminjaman']; ?></td>
                            <td>
                                <a href="edit_peminjaman.php?id=<?php echo $row['id_peminjaman']; ?>"
                                    class="btn btn-warning btn-sm">Edit</a>
                                <a href="hapus_peminjaman.php?id=<?php echo $row['id_peminjaman']; ?>"
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