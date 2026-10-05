<?php
session_start();
include 'koneksi.php';

// Proses saat tombol submit diklik
if (isset($_POST['submit'])) {
    $id_kategori  = $_POST['id_kategori'];
    $judul        = $_POST['judul'];
    $penulis      = $_POST['penulis'];
    $penerbit     = $_POST['penerbit'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $deskripsi    = $_POST['deskripsi'];

    $query = "INSERT INTO buku (id_kategori, judul, penulis, penerbit, tahun_terbit, deskripsi) 
              VALUES ('$id_kategori', '$judul', '$penulis', '$penerbit', '$tahun_terbit', '$deskripsi')";
    
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Berhasil menambah buku!'); window.location='buku.php';</script>";
    } else {
        echo "<script>alert('Gagal menambah buku: " . mysqli_error($koneksi) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Buku</title>
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
                    <h3 class="text-center mb-3">TAMBAH BUKU</h3>

                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label">Kategori:</label>
                            <select name="id_kategori" class="form-control" required>
                                <option value="" selected disabled>Pilih Kategori</option>
                                <?php
                                $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                                while ($k = mysqli_fetch_assoc($kategori)) {
                                    echo "<option value='" . $k['id_kategori'] . "'>" . $k['kategori'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Judul:</label>
                            <input type="text" name="judul" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Penulis:</label>
                            <input type="text" name="penulis" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Penerbit:</label>
                            <input type="text" name="penerbit" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tahun Terbit:</label>
                            <input type="number" name="tahun_terbit" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Deskripsi:</label>
                            <textarea name="deskripsi" class="form-control" rows="3" required></textarea>
                        </div>

                        <div>
                            <button type="submit" name="submit" class="btn btn-primary px-4">Simpan</button>
                            <a href="buku.php" class="btn btn-secondary px-3">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>