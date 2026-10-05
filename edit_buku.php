<?php
session_start();
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='$id'");
$row = mysqli_fetch_assoc($data);

// Proses saat tombol update diklik
if (isset($_POST['submit'])) {
    $id_kategori  = $_POST['id_kategori'];
    $judul        = $_POST['judul'];
    $penulis      = $_POST['penulis'];
    $penerbit     = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $deskripsi    = $_POST['deskripsi'];

    $query = "UPDATE buku SET 
                id_kategori='$id_kategori', 
                judul='$judul', 
                penulis='$penulis', 
                penerbit='$penerbit', 
                tahun_terbit='$tahun_terbit', 
                deskripsi='$deskripsi' 
              WHERE id_buku='$id'";
              
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Berhasil mengedit buku!'); window.location='buku.php';</script>";
    } else {
        echo "<script>alert('Gagal mengedit buku: " . mysqli_error($koneksi) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #ffdcb7;
    }
    </style>
</head>

<body class="py-5">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4 shadow">
                    <h3 class="text-center mb-3">EDIT BUKU</h3>

                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label">Kategori:</label>
                            <select name="id_kategori" class="form-control" required>
                                <option value="" disabled>Pilih Kategori</option>
                                <?php
                                $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                                while ($k = mysqli_fetch_assoc($kategori)) {
                                    // Mengecek kategori mana yang sebelumnya dipilih pada buku ini
                                    $selected = ($k['id_kategori'] == $row['id_kategori']) ? "selected" : "";
                                    echo "<option value='" . $k['id_kategori'] . "' $selected>" . $k['kategori'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Judul:</label>
                            <input type="text" name="judul" class="form-control" value="<?= $row['judul']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Penulis:</label>
                            <input type="text" name="penulis" class="form-control" value="<?= $row['penulis']; ?>"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Penerbit:</label>
                            <input type="text" name="penerbit" class="form-control" value="<?= $row['penerbit']; ?>"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tahun Terbit:</label>
                            <input type="number" name="tahun_terbit" class="form-control"
                                value="<?= $row['tahun_terbit']; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Deskripsi:</label>
                            <textarea name="deskripsi" class="form-control" rows="3"
                                required><?= $row['deskripsi']; ?></textarea>
                        </div>

                        <div>
                            <button type="submit" name="submit" class="btn btn-primary px-4">Update</button>
                            <a href="buku.php" class="btn btn-secondary px-3">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>