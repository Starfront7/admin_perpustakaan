<?php
session_start();
include 'koneksi.php';

$id = $_GET['id'];
$row = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori='$id'"));

if (isset($_POST['submit'])) {
    $kategori = $_POST['kategori'];
    $update = mysqli_query($koneksi, "UPDATE kategori SET kategori='$kategori' WHERE id_kategori='$id'");

    if ($update) {
        echo "<script>alert('Berhasil diedit!'); window.location='kategori.php';</script>";
    } else {
        echo "<script>alert('Gagal diedit!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #ffdcb7;
    }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center min-vh-100">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card p-4 shadow">
                    <h3 class="text-center mb-3">EDIT KATEGORI</h3>

                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label">Kategori:</label>
                            <input type="text" name="kategori" class="form-control" value="<?= $row['kategori']; ?>"
                                required>
                        </div>

                        <div>
                            <button type="submit" name="submit" class="btn btn-primary px-3">Update</button>
                            <a href="kategori.php" class="btn btn-secondary px-3">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>