<?php
include "koneksi.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Daily Journal</title>
    <!-- link bootstrap begin -->
    <link rel="icon" href="img/PG.webp" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- link bootstrap end -->
    <style>
        /* Tema gelap */
        .dark-mode {
            background-color: #121212 !important;
            color: white !important;
        }

        .dark-mode .card {
            background-color: #1e1e1e !important;
            color: white !important;
        }

        .dark-mode .navbar,
        .dark-mode footer {
            background-color: #212121 !important;
        }

        .dark-mode .navbar a,
        .dark-mode footer a {
            color: white !important;
        }

        .dark-mode .bg-danger-subtle {
            background-color: #2c2c2c !important;
        }
    </style>
</head>

<body>

    <!-- nav begin -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">My Daily Journal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#article">Article</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#schedule">Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" target="_blank">Login</a>
                    </li>
                </ul>
                <!-- Tombol theme switcher -->
                <div class="d-flex ms-3">
                    <button id="darkBtn" class="btn btn-dark me-2"><i class="bi bi-moon"></i></button>
                    <button id="lightBtn" class="btn btn-light"><i class="bi bi-sun"></i></button>
                </div>
            </div>
        </div>
    </nav>
    <!-- nav end -->

    <!-- hero begin -->
    <section id="hero" class="text-center p-5 bg-danger-subtle text-sm-start">
        <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse align-items-center">
                <img src="img/banner.jpg" class="img.fluid" width="300">
                <div>
                    <h1 class="fw-bold display-4">
                        Create Memories, Save Memories, Everyday
                    </h1>
                    <h4 class="lead display-6">
                        Mencatat semua kegiatan sehari-hari yang ada tanpa terkecuali
                    </h4>
                </div>
            </div>
        </div>
    </section>
    <!-- hero end -->

    <!-- article begin -->
    <section id="article" class="text-center p-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">article</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                <?php
                $sql = "SELECT * FROM article ORDER BY tanggal DESC";
                $hasil = $conn->query($sql);

                while ($row = $hasil->fetch_assoc()) {
                ?>
                    <div class="col">
                        <div class="card h-100">
                            <img src="img/<?= $row["gambar"] ?>" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title"><?= $row["judul"] ?></h5>
                                <p class="card-text">
                                    <?= $row["isi"] ?>
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">
                                    <?= $row["tanggal"] ?>
                                </small>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <!-- article end -->

    <!-- gallery begin -->
    <section id="gallery" class="text-center p-5 bg-danger-subtle">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Gallery</h1>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/MTK1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/MTK2.webp" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/MTK3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/MTK4.webp" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/MTK5.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- gallery end -->

    <!-- schedule begin -->
    <section id="schedule" class="text-center p-5 bg-body text-body">
        <div class="container">
            <h1 class="fw-bold mb-4">Schedule</h1>

            <div class="row justify-content-center g-3">

                <div class="col-md-3 col-sm-6">
                    <div class="card h-100 border-primary">
                        <div class="card-header text-light bg-primary">Senin</div>
                        <div class="card-body">
                            <h5 class="card-title">09:30-12:00</h5>
                            <p class="card-text">Probabilitas & Statistik<br>Ruang H.5.11</p>
                            <h5 class="card-title">15:30-18:00</h5>
                            <p class="card-text">Logika Informatika<br>Ruang H.3.9</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card h-100 border-success">
                        <div class="card-header text-light bg-success">Selasa</div>
                        <div class="card-body">
                            <h5 class="card-title">10:20-12:00</h5>
                            <p class="card-text">Basis Data<br>Ruang D.2.K</p>
                            <h5 class="card-title">12:30-14.10</h5>
                            <p class="card-text">Pemrograman Berbasis Web<br>Ruang D.2.J</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card h-100 border-danger">
                        <div class="card-header text-light bg-danger">Rabu</div>
                        <div class="card-body">
                            <h5 class="card-title">09:30-12:00</h5>
                            <p class="card-text">Rekayasa Perangkat Lunak<br>Ruang H.3.10</p>
                            <h5 class="card-title">12:30-15:00</h5>
                            <p class="card-text">Kriptografi<br>Ruang H.5.9</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card h-100 border-warning">
                        <div class="card-header text-dark bg-warning">Kamis</div>
                        <div class="card-body">
                            <h5 class="card-title">10:20-12:00</h5>
                            <p class="card-text">Basis Data<br>Ruang H.5.6</p>
                            <h5 class="card-title">12:30-15:00</h5>
                            <p class="card-text">Sistem Operasi<br>Ruang H.3.10</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card h-100 border-info">
                        <div class="card-header text-light bg-info">Jumat</div>
                        <div class="card-body">
                            <h5 class="card-title">13:30-15:30</h5>
                            <p class="card-text">Penambangan Data<br>Ruang H.4.3</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card h-100 border-secondary">
                        <div class="card-header text-light bg-secondary">Sabtu</div>
                        <div class="card-body">
                            <h5 class="card-title">Libur</h5>
                            <p class="card-text">Waktu Istirahat</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card h-100 border-secondary">
                        <div class="card-header text-light bg-secondary">Minggu</div>
                        <div class="card-body">
                            <h5 class="card-title">Libur</h5>
                            <p class="card-text">Waktu Istirahat</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- schedule end -->

    <!-- profile begin -->
    <section id="profile" class="text-center text-md-start p-5 bg-body text-body">
        <div class="container">
            <h1 class="fw-bold mb-4 text-center">Profil Mahasiswa</h1>

            <div class="row align-items-center justify-content-center">
                <!-- Foto Profil -->
                <div class="col-md-3 mb-4 mb-md-0 text-center">
                    <img src="img/Foto.jpeg" alt="Foto Profil"
                        class="rounded-circle img-fluid border border-3 border-primary shadow">
                </div>

                <!-- Data Diri -->
                <div class="col-md-6">
                    <table class="table table-borderless text-start align-middle">
                        <tbody>
                            <tr>
                                <h2 scope="row">Puguh Wibowo</h2>
                            </tr>
                            <tr>
                                <th scope="row">NIM</th>
                                <td>: A11.2024.15942</td>
                            </tr>
                            <tr>
                                <th scope="row">Program Studi</th>
                                <td>: Teknik Informatika</td>
                            </tr>
                            <tr>
                                <th scope="row">Email</th>
                                <td>: 111202415942@mhs.dinus.ac.id</td>
                            </tr>
                            <tr>
                                <th scope="row">Telepon</th>
                                <td>: +62 812 4668 2326</td>
                            </tr>
                            <tr>
                                <th scope="row">Alamat</th>
                                <td>: Jl. Nakula 1 No.44 Pendrikan Kidul, Semarang</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- profile end -->


    <!-- footer begin -->
    <footer class="text-center p-5">
        <div>
            <a href="https://www.instagram.com/pg.hxn"><i class="bi bi-instagram h2 p-2 text-body"></i></a>
            <a href="https://youtu.be/_5vMezwKINU"><i class="bi bi-youtube h2 p-2 text-body"></i></a>
            <a href="https://wa.me/+6281246682326"><i class="bi bi-whatsapp h2 p-2 text-body"></i></a>
        </div>
        <div>
            Puguh Wibowo - 15942 @2025
        </div>
    </footer>
    <!-- footer end -->

    <!-- script bootstrap begin -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- script bootstrap end -->

    <!-- Script Begin -->
    <script>
        const darkBtn = document.getElementById('darkBtn');
        const lightBtn = document.getElementById('lightBtn');

        const headings = document.querySelectorAll("h1, h2, h3, h4, h5");

        darkBtn.addEventListener("click", function() {
            document.body.setAttribute("data-bs-theme", "dark");
            headings.forEach(h => h.classList.add("text-white"));
        });

        lightBtn.addEventListener("click", function() {
            document.body.setAttribute("data-bs-theme", "light");
            headings.forEach(h => h.classList.remove("text-white"));
        });
    </script>
    <!-- Script End -->

</body>

</html>