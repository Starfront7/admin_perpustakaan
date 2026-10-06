<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; 

    $query = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
    
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Berhasil mendaftar!'); window.location='dashboard.php';</script>";
    } else {
        echo "<script>alert('Gagal mendaftar: " . mysqli_error($koneksi) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-info d-flex align-items-center justify-content-center min-vh-100">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card p-4 shadow">
                    <h3 class="text-center mb-3">LOGIN PERPUSTAKAAN</h3>

                    <form method="POST" action="">
                        <div class="mb-3">
                            <label class="form-label">Username:</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password:</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="">
                            <button type="submit" name="login" class="btn btn-primary px-3">LOGIN</button>
                        </div>
                        <br>
                        <div class="">
                            <a href="registrasi.php" type="button" name="registrasi"
                                class="btn btn-danger px-3">Registrasi</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>