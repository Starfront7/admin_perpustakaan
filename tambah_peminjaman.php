<?php
session_start();
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $id_user              = $_POST['id_user'];
    $id_buku              = $_POST['id_buku'];
    $tanggal_peminjaman   = $_POST['tanggal_peminjaman'];
    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
    $status_peminjaman    = $_POST['status_peminjaman'];

    $insert = mysqli_query($koneksi, "INSERT INTO peminjaman (id_user, id_buku, tanggal_peminjaman, tanggal_pengembalian, status_peminjaman) 
              VALUES ('$id_user', '$id_buku', '$tanggal_peminjaman', '$tanggal_pengembalian', '$status_peminjaman')");
    

    if ($insert) {
        echo "<script>alert('Berhasil menambah peminjaman!'); window.location='peminjaman.php';</script>";
    } else {
        echo "<script>alert('Gagal menambah peminjaman: " . mysqli_error($koneksi) . "');</script>";
    }
}
?>

<?php include 'header_menu.php'; ?>

<div class="container py-5 mt-3">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4 shadow">
                <h3 class="text-center mb-3">TAMBAH PEMINJAMAN</h3>

                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label">User:</label>
                        <select name="id_user" class="form-control" required>
                            <option value="" selected disabled>Pilih User</option>
                            <?php
                                $user = mysqli_query($koneksi, "SELECT * FROM user");
                                while ($u = mysqli_fetch_assoc($user)) {
                                    echo "<option value='" . $u['id_user'] . "'>" . $u['username'] . "</option>";
                                }
                                ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Buku:</label>
                        <select name="id_buku" class="form-control" required>
                            <option value="" selected disabled>Pilih Buku</option>
                            <?php
                                $buku = mysqli_query($koneksi, "SELECT * FROM buku");
                                while ($b = mysqli_fetch_assoc($buku)) {
                                    echo "<option value='" . $b['id_buku'] . "'>" . $b['judul'] . "</option>";
                                }
                                ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Peminjaman:</label>
                        <input type="date" name="tanggal_peminjaman" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Pengembalian:</label>
                        <input type="date" name="tanggal_pengembalian" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status Peminjaman:</label>
                        <select name="status_peminjaman" class="form-control" required>
                            <option value="" selected disabled>Pilih Status</option>
                            <option value="selesai">selesai</option>
                            <option value="belum">belum</option>
                        </select>
                    </div>

                    <div>
                        <button type="submit" name="submit" class="btn btn-primary px-4">Simpan</button>
                        <a href="peminjaman.php" class="btn btn-secondary px-3">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>