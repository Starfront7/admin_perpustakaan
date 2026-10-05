<?php
session_start();
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $kategori = $_POST['kategori'];

    $query = "INSERT INTO kategori (kategori) VALUES ('$kategori')";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Berhasil menambahkan kategori!'); window.location='kategori.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan kategori: " . mysqli_error($koneksi) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Kategori</title>
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
                    <h3 class="text-center mb-3">FORM KATEGORI</h3>

                    <form method="POST" action="">
                        <div class="mb-3">
                            <label class="form-label">Kategori:</label>
                            <input type="text" name="kategori" class="form-control" required>
                        </div>

                        <div class="">
                            <button type="submit" name="submit" class="btn btn-primary px-3">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>