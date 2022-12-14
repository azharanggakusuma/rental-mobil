<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Daftar Mobil</title>
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
                <li class="nav-item"><a href="index.php" class="nav-link text-dark" aria-current="page">Beranda</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-dark">Tentang Kami</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-dark">Kontak</a></li>
            </ul>
        </nav>
    </div>
    <br><br>

    <div class="container" id="con-card">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card" id="card-1" style="width: 18rem;">
                    <img src="img/mobil/03012020235744.jpg" class="card-img-top" alt="Mobil Avanza" loading="lazy">
                    <div class="card-body">
                        <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                        <div class="caption text-center">
                            <h4>Avanza</h4>
                            <h5 class="small">Rp.500000,- MPV - Toyota</h5>
                            <h6 class="small">E 3141 RI</h6>
                            <span class="badge rounded-pill label bg-success">&nbsp; Tersedia &nbsp;</span>
                        </div>
                        <br>
                        <div class="text-center">
                            <button onclick="window.location.href='pemesanan.php'" type="button" class="btn btn-sm btn-success">Sewa Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" id="card-2" style="width: 18rem;">
                    <img src="img/mobil/04012020000026.jpg" class="card-img-top" alt="Mobil Grand Livina" loading="lazy">
                    <div class="card-body">
                        <div class="caption text-center">
                            <h4>Grand Livina</h4>
                            <h5 class="small">Rp.510000,- MPV - Nissan</h5>
                            <h6 class="small">E 6996 SX</h6>
                            <span class="badge rounded-pill label bg-danger">&nbsp; Tidak Tersedia &nbsp;</span>
                        </div>
                        <br>
                        <div class="text-center">
                            <button type="button" class="btn btn-sm btn-success" disabled>Sewa Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" id="card-3" style="width: 18rem;">
                    <img src="img/mobil/04012020000301.jpg" class="card-img-top" alt="Mobil Pajero Sport" loading="lazy">
                    <div class="card-body">
                        <div class="caption text-center">
                            <h4>Pajero Sport</h4>
                            <h5 class="small">Rp.700000,- SUV - Mitsubishi</h5>
                            <h6 class="small">E 4441 XS</h6>
                            <span class="badge rounded-pill label bg-success">&nbsp; Tersedia &nbsp;</span>
                        </div>
                        <br>
                        <div class="text-center">
                            <button onclick="window.location.href='pemesanan.php'" type="button" class="btn btn-sm btn-success">Sewa Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" id="card-4" style="width: 18rem;">
                    <img src="img/mobil/04012020000521.jpg" class="card-img-top" alt="Mobil Almaz" loading="lazy">
                    <div class="card-body">
                        <div class="caption text-center">
                            <h4>Almaz</h4>
                            <h5 class="small">Rp.680000,- SUV - Wuling</h5>
                            <h6 class="small">E 1451 ZW</h6>
                            <span class="badge rounded-pill label bg-success">&nbsp; Tersedia &nbsp;</span>
                        </div>
                        <br>
                        <div class="text-center">
                            <button onclick="window.location.href='pemesanan.php'" type="button" class="btn btn-sm btn-success">Sewa Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" id="card-5" style="width: 18rem;">
                    <img src="img/mobil/04012020000701.jpg" class="card-img-top" alt="Mobil Civic" loading="lazy">
                    <div class="card-body">
                        <div class="caption text-center">
                            <h4>Civic</h4>
                            <h5 class="small">Rp.650000,- Sedan - Honda</h5>
                            <h6 class="small">E 4564 UV</h6>
                            <span class="badge rounded-pill label bg-success">&nbsp; Tersedia &nbsp;</span>
                        </div>
                        <br>
                        <div class="text-center">
                            <button onclick="window.location.href='pemesanan.php'" type="button" class="btn btn-sm btn-success">Sewa Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" id="card-6" style="width: 18rem;">
                    <img src="img/mobil/04012020001126.jpg" class="card-img-top" alt="Mobil Model X" loading="lazy">
                    <div class="card-body">
                        <div class="caption text-center">
                            <h4>Model X</h4>
                            <h5 class="small">Rp.780000,- Sedan - Tesla</h5>
                            <h6 class="small">E 3535 LA</h6>
                            <span class="badge rounded-pill label bg-success">&nbsp; Tersedia &nbsp;</span>
                        </div>
                        <br>
                        <div class="text-center">
                            <button onclick="window.location.href='pemesanan.php'" type="button" class="btn btn-sm btn-success">Sewa Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" id="card-7" style="width: 18rem;">
                    <img src="img/mobil/04012020001437.jpg" class="card-img-top" alt="Mobil Jazz" loading="lazy">
                    <div class="card-body">
                        <div class="caption text-center">
                            <h4>Jazz</h4>
                            <h5 class="small">Rp.600000,- City Car - Honda</h5>
                            <h6 class="small">E 1111 IL</h6>
                            <span class="badge rounded-pill label bg-success">&nbsp; Tersedia &nbsp;</span>
                        </div>
                        <br>
                        <div class="text-center">
                            <button onclick="window.location.href='pemesanan.php'" type="button" class="btn btn-sm btn-success">Sewa Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" id="card-8" style="width: 18rem;">
                    <img src="img/mobil/04012020001710.jpg" class="card-img-top" alt="Mobil Ranger" loading="lazy">
                    <div class="card-body">
                        <div class="caption text-center">
                            <h4>Ranger</h4>
                            <h5 class="small">Rp.710000,- Double Cabin - Ford</h5>
                            <h6 class="small">E 9821 YBY</h6>
                            <span class="badge rounded-pill label bg-success">&nbsp; Tersedia &nbsp;</span>
                        </div>
                        <br>
                        <div class="text-center">
                            <button onclick="window.location.href='pemesanan.php'" type="button" class="btn btn-sm btn-success">Sewa Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
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
            ?? 2022 Copyright -
            <a class="text-white" style="text-decoration: none;" href="#">Rental Mobil Cirebon</a>
        </div>
        <!-- Copyright -->
    </footer>
    
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>