<?php
session_start();
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $kategori = $_POST['kategori'];

    $insert = mysqli_query($koneksi, "INSERT INTO kategori (kategori) VALUES ('$kategori')");

    if ($insert) {
        echo "<script>alert('Berhasil menambah kategori!'); window.location='kategori.php';</script>";
    } else {
        echo "<script>alert('Gagal menambah kategori!');</script>";
    }
}
?>

<?php include 'header_menu.php'; ?>

<div class="container py-5 mt-3">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card p-4 shadow">
                <h3 class="text-center mb-3">FORM KATEGORI</h3>

                <form method="POST" action="">
                    <div class="mb-3">
                        <label class="form-label">Kategori:</label>
                        <input type="text" name="kategori" class="form-control" required>
                    </div>

                    <div class="">
                        <button type="submit" name="submit" class="btn btn-primary px-3">Submit</button>
                        <a href="kategori.php" class="btn btn-secondary px-3">kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>