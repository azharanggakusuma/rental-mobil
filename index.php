<?php
    require_once("koneksi.php");

    $sql = "SELECT * FROM form_kontak";
    $dataKontak = mysqli_query($kon, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website | Rental Mobil Cirebon</title>
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <nav class="navbar fixed-top bg-white d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom-1 shadow rounded">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4 fw-bold" id="logo">Rental Mobil</span>
            </a>

            <ul class="nav nav-pills" id="navbar">
                <li class="nav-item"><a href="#beranda" class="nav-link active" aria-current="page">Beranda</a></li>
                <li class="nav-item"><a href="#tentang-kami" class="nav-link text-dark">Tentang Kami</a></li>
                <li class="nav-item"><a href="#kontak" class="nav-link text-dark">Kontak</a></li>
            </ul>
        </nav>
        <br id="beranda"><br><br><br>

        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="img/bg.jpg" class="d-block mx-lg-auto img-fluid" alt="Mobil" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Selamat Datang</h1>
                    <h2 class="display-7 lh-1 mb-3">Di Website Rental Mobil Cirebon</h2>
                    <p class="lead">Kami menyediakan solusi menyeluruh dalam hal layanan transportasi. Transportasi untuk penyewaan Kendaraan pribadi dan Transportasi Logistik</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button onclick="window.location.href='mobil.php'" type="button" class="btn btn-primary btn-lg px-4 me-md-2">Sewa Sekarang</button>
                        <button onclick="window.location.href='#tentang-kami'" type="button" class="btn btn-outline-secondary btn-lg px-4">Selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>
        <br id="tentang-kami"><br>

        <section class="mb-4">
            <h1 class="h1-responsive font-weight-bold text-center my-4">Tentang Kami</h1>
            <p class="text-justify w-responsive mx-auto mb-4">PT Rental Mobil Cirebon menyediakan solusi menyeluruh dalam hal layanan transportasi. Sebagai salah satu perusahaan penyewaan kendaraan di Indonesia, kami memahami setiap detil kebutuhan bisnis dan memastikan solusi terbaik yang dipersonalisasi sesuai kebutuhan Anda.</p>
            <p class="text-justify w-responsive mx-auto mb-4">Visi:<br>Menjadi perusahaan rental mobil yang terbaik di Indonesia.</p>
            <p class="text-justify w-responsive mx-auto mb-4">Misi:<br>Menjadi pilihan utama pelanggan dengan menciptakan kepuasan pelanggan yang luar biasa dan menghadirkan produk yang berkualitas, pelayanan terbaik, serta mampu memberikan solusi yang inovatif.</p>
        </section>
        <br id="kontak"><br><br>

            <?php
                if($_POST){
                    $nama = $_POST['fnama'];
                    $email = $_POST['femail'];
                    $pesan = $_POST['fpesan'];

                    $sql_insert = "INSERT INTO form_kontak (nama_lengkap, email, pesan) VALUES ('$nama', '$email', '$pesan')";

                    mysqli_query($kon, $sql_insert);
                    header("location:index.php");
                }
            ?>

        <section class="mb-4">
            <h1 class="h1-responsive font-weight-bold text-center my-4">Kontak Kami</h1>
            <p class="text-center w-responsive mx-auto mb-5">Apakah Anda memiliki pertanyaan? Jangan ragu untuk menghubungi kami secara langsung. Silahkan isi form dibawah.</p>

            <form action="index.php" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="fnama" placeholder="Ketikan nama lengkap">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="femail" placeholder="Ketikan e-mail">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Pesan</label>
                    <textarea class="form-control" rows="5" name="fpesan" placeholder="Ketikan sesuatu"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </section>
        <br><br>
    </div>

    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
        </section>
        <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright -
            <a class="text-white" style="text-decoration: none;" href="#">Rental Mobil Cirebon</a>
        </div>
        <!-- Copyright -->
    </footer>
    
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>