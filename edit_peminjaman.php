<?php
session_start();
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE id_peminjaman='$id'");
$row = mysqli_fetch_assoc($data);

if (isset($_POST['submit'])) {
    $id_user              = $_POST['id_user'];
    $id_buku              = $_POST['id_buku'];
    $tanggal_peminjaman   = $_POST['tanggal_peminjaman'];
    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
    $status_peminjaman    = $_POST['status_peminjaman'];

    $update = mysqli_query($koneksi, "UPDATE peminjaman SET 
                id_user='$id_user', 
                id_buku='$id_buku', 
                tanggal_peminjaman='$tanggal_peminjaman', 
                tanggal_pengembalian='$tanggal_pengembalian', 
                status_peminjaman='$status_peminjaman' 
              WHERE id_peminjaman='$id'");
              

    if ($update) {
        echo "<script>alert('Berhasil mengedit peminjaman!'); window.location='peminjaman.php';</script>";
    } else {
        echo "<script>alert('Gagal mengedit peminjaman: " . mysqli_error($koneksi) . "');</script>";
    }
}
?>

<?php include 'header_menu.php'; ?>

<div class="container py-5 mt-3">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4 shadow">
                <h3 class="text-center mb-3">EDIT PEMINJAMAN</h3>

                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label">User:</label>
                        <select name="id_user" class="form-control" required>
                            <option value="" disabled>Pilih User</option>
                            <?php
                                $user = mysqli_query($koneksi, "SELECT * FROM user");
                                while ($u = mysqli_fetch_assoc($user)) {
                                    $selected = ($u['id_user'] == $row['id_user']) ? "selected" : "";
                                    echo "<option value='" . $u['id_user'] . "' $selected>" . $u['username'] . "</option>";
                                }
                                ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Buku:</label>
                        <select name="id_buku" class="form-control" required>
                            <option value="" disabled>Pilih Buku</option>
                            <?php
                                $buku = mysqli_query($koneksi, "SELECT * FROM buku");
                                while ($b = mysqli_fetch_assoc($buku)) {
                                    $selected = ($b['id_buku'] == $row['id_buku']) ? "selected" : "";
                                    echo "<option value='" . $b['id_buku'] . "' $selected>" . $b['judul'] . "</option>";
                                }
                                ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Peminjaman:</label>
                        <input type="date" name="tanggal_peminjaman" class="form-control"
                            value="<?= $row['tanggal_peminjaman']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Pengembalian:</label>
                        <input type="date" name="tanggal_pengembalian" class="form-control"
                            value="<?= $row['tanggal_pengembalian']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status Peminjaman:</label>
                        <select name="status_peminjaman" class="form-control" required>
                            <option value="" disabled>Pilih Status</option>
                            <option value="selesai" <?= ($row['status_peminjaman'] == 'selesai') ? 'selected' : ''; ?>>
                                selesai
                            </option>
                            <option value="belum" <?= ($row['status_peminjaman'] == 'belum') ? 'selected' : ''; ?>>
                                belum
                            </option>
                        </select>
                    </div>

                    <div>
                        <button type="submit" name="submit" class="btn btn-primary px-4">Update</button>
                        <a href="peminjaman.php" class="btn btn-secondary px-3">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>/