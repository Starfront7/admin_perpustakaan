<?php
session_start();
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $id_buku = $_POST['id_buku'];
    $id_user = $_POST['id_user'];
    $ulasan  = $_POST['ulasan'];
    $rating  = $_POST['rating'];

    $query = "INSERT INTO ulasan (id_buku, id_user, ulasan, rating) 
              VALUES ('$id_buku', '$id_user', '$ulasan', '$rating')";
    
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Berhasil menambah ulasan!'); window.location='ulasan.php';</script>";
    } else {
        echo "<script>alert('Gagal menambah ulasan: " . mysqli_error($koneksi) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Ulasan</title>
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
                    <h3 class="text-center mb-3">TAMBAH ULASAN</h3>

                    <form method="POST">
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
                            <label class="form-label">Ulasan:</label>
                            <textarea name="ulasan" class="form-control" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Rating (1 - 5):</label>
                            <input type="number" name="rating" class="form-control" required>
                        </div>

                        <div>
                            <button type="submit" name="submit" class="btn btn-primary px-4">Simpan</button>
                            <a href="ulasan.php" class="btn btn-secondary px-3">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>