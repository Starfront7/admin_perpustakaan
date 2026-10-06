<!doctype html>
<html lang="en">

<head>
    <title>Bootstrap 4 Website Example</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="header.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-sm bg-primary header">
            <a class="navbar-brand text-white" href="#"> PERPUSTAKAAN ONLINE </a>
        </nav>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-3 col-lg-2 d-md-block bg-dark sidebar p-3">
                <div class="p-2 d-flex align-items-center">
                    <img src="img/images.jpeg" class="rounded-circle img-fluid shadow-sm mr-2"
                        style="width: 40px; height: 40px; object-fit: cover" alt="Avatar" />
                    <div>
                        <p class="text-white font-weight-bold mb-0" style="font-size: 12px; line-height: 1.2">
                            MUHAMMAD FADIL
                        </p>
                        <p class="text-white-50 font-weight-bold mb-0" style="font-size: 12px; line-height: 1.2">
                            Kelas: 11 RPL
                        </p>
                    </div>
                </div>
                <hr style="border: 1px solid white; margin: 8px 0" />

                <ul class="list-unstyled">
                    <li class="mb-1">
                        <a href="dashboard.php"
                            class="btn btn-dark btn-block text-left text-white d-flex align-items-center py-2 px-3">
                            <i class="fa fa-home mr-2" style="width: 20px; text-align: center"></i>
                            <span style="font-size: 13px">dashboard</span>
                        </a>
                    </li>
                    <li class="mb-1">
                        <a href="kategori.php"
                            class="btn btn-dark btn-block text-left text-white d-flex align-items-center py-2 px-3">
                            <i class="fa  fa-layer-group mr-2" style="width: 20px; text-align: center"></i>
                            <span style="font-size: 13px">kategori</span>
                        </a>
                    </li>
                    <li class="mb-1">
                        <a href="buku.php"
                            class="btn btn-dark btn-block text-left text-white d-flex align-items-center py-2 px-3">
                            <i class="fa-solid fa-book mr-2" style="width: 20px; text-align: center"></i>
                            <span style="font-size: 13px">buku</span>
                        </a>
                    </li>
                    <li>
                        <a href="peminjaman.php"
                            class="btn btn-dark btn-block text-left text-white d-flex align-items-center py-2 px-3">
                            <i class="fa-solid fa-users-gear mr-2" style="width: 20px; text-align: center"></i>
                            <span style="font-size: 13px">peminjaman</span>
                        </a>
                    </li>
                    <li>
                        <a href="ulasan.php"
                            class="btn btn-dark btn-block text-left text-white d-flex align-items-center py-2 px-3">
                            <i class="fa-solid fa-star mr-2" style="width: 20px; text-align: center"></i>
                            <span style="font-size: 13px">Ulasan</span>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php"
                            class="btn btn-dark text-left text-white d-flex align-items-center py-2 px-3">
                            <i class="fas fa-right-from-bracket icon mr-2" style="width: 20px; text-align: center"></i>
                            <span style="font-size: 13px">logout</span>
                        </a>
                    </li>
                </ul>
            </nav>


</body>

</html>