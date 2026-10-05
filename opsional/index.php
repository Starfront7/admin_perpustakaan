<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perpustakaan Online</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .box {
        background-color: #f0ceff;
        width: 400px;
        height: auto;
        min-height: 400px;
        margin-top: 50px;
        margin-left: auto;
        padding: 20px;
        border: 1px solid black;
    }

    .box2 {
        background-color: #f1f1f1;
        width: 545px;
        height: 400px;
        margin-top: -400px;
        margin-left: -20px;
        padding: 20px;
        border: 1px solid black;
        background-image: url("img/perpus.jpeg");
        background-size: cover;
        background-position: center;
    }

    footer {
        margin-top: auto;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid px-4">
            <span class="navbar-brand fw-bold">Perpustakaan Online</span>
            <span class="navbar-text text-white me-auto d-none d-md-inline">Novel, Sejarah, Kitab, DLL</span>
            <div class="d-flex">
                <a href="login.php" class="btn btn-primary btn-sm text-white text-decoration-none mr-2">Login</a>
                <button class="btn btn-light btn-sm" type="button">Reset Password</button>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="box">
            <h4 class="text-center mb-4">Sign in / Daftar</h4>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username"
                        placeholder="Masukkan username" required />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Masukkan password" required />
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select class="form-control" id="role" name="role" required>
                        <option value="" selected disabled>Pilih Role</option>
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Sign In / Daftar
                </button>
            </form>
        </div>
        <div class="box2">
            <img src="perpus.jpeg" alt="">
        </div>
    </div>
    <br />
    <footer class="bg-dark text-white text-center py-2">
        <small>&copy; 2026 PERPUSTAKAAN ONLINE</small><br />
        <small>Muhammad Fadil | KONTAK: +62 895-3600-27324</small>
    </footer>
</body>

</html>