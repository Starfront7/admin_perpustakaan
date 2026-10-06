<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $nama     = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email    = $_POST['email'];
    $alamat   = $_POST['alamat'];
    $no_tlp   = $_POST['no_tlp'];
    $level    = $_POST['level'];

    $query = "INSERT INTO user (nama, username, password, email, alamat, no_tlp, level) 
            VALUES ('$nama', '$username', '$password', '$email', '$alamat', '$no_tlp', '$level')";
    
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Berhasil mendaftar!'); window.location='dashboard.php';</script>";
    } else {
        echo "<script>alert('Gagal mendaftar!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-info d-flex align-items-center justify-content-center min-vh-200">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card p-4 shadow">
                    <h3 class="text-center mb-3">LOGIN PERPUSTAKAAN</h3>

                    <form method="POST" action="">

                        <div class="mb-3">
                            <label class="form-label">nama:</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Username:</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password:</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">email:</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">alamat:</label>
                            <textarea type="text" name="alamat" class="form-control" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">no tlp:</label>
                            <input type="text" name="no_tlp" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">level:</label>

                            <select name="level" class="form-control" id="">
                                <option value="">--pilih--</option>
                                <option value="admin">PEMINJAMAN</option>
                                <option value="user">USER</option>
                                <option value="petugas">PETUGAS</option>
                            </select>
                        </div>


                        <div class="">
                            <button type="submit" name="login" class="btn btn-primary px-3">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>