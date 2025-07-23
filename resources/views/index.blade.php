<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.21.2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.bootstrap5.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-success fixed-top">
        <div class="container">
            <a class="navbar-brand text-light" href="#">Sekolah</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="index.html">
                            <i class="bi bi-house-fill"></i>
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-light" href="siswa_jquery.html">
                            <i class="bi bi-people"></i>
                            Siswa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-light" href="guru.html">
                            <i class="bi bi-file-person"></i>
                            Guru
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-light" href="mapel.html">
                            <i class="bi bi-journal-text"></i>
                            Mata Pelajaran
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-light" href="jadwalPelajaran.html">
                            <i class="bi bi-calendar"></i>
                            Jadwal Pelajaran
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-light" href="kelas.html">
                            <i class="bi bi-calendar"></i>
                            Jadwal Pelajaran
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="secction bg-success py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="img/school_svg.svg" alt=""
                        class="animate__animated animate__backInLeft animated-infinite">
                </div>
                <div class="col-md-7 my-auto">
                    <div
                        class="fs-1 fw-semibold text-light text-uppercase animate__animated  animate__backInRight animated-infinite">
                        Selamat Datang di Portal Digital!
                    </div>
                    <p class="text-light">
                        Akses mudah ke info penting — dari profil sekolah, data siswa & guru, mata pelajaran, hingga
                        jadwal pelajaran, semua ada di sini.
                        Belajar jadi lebih seru, cepat, dan terarah bareng teknologi!
                    </p>
                    <a href="mapel.html" class="btn btn-outline-light">
                        Demo Aplikasi
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="secction mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div
                        class="card mb-5 bg-light border-success animate__animated animate__zoomInRight animate__delay-2s">
                        <div class="row g-0">
                            <div class="col-md-4 my-auto text-center">
                                <i class="bi bi-people-fill fs-1"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Siswa</h5>
                                    <p class="card-text">
                                        <a href="siswa_jquery.html" class="text-dark underline">
                                            Selengkapnya
                                            <i class="bi bi-arrow-right-circle-fill"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div
                        class="card mb-5 bg-light border-success animate__animated animate__zoomInRight animate__delay-2s">
                        <div class="row g-0">
                            <div class="col-md-4 my-auto text-center">
                                <i class="bi bi-file-person fs-1"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Guru</h5>
                                    <p class="card-text">
                                        <a href="guru.html" class="text-dark underline">
                                            Selengkapnya
                                            <i class="bi bi-arrow-right-circle-fill"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div
                        class="card mb-5 bg-light border-success animate__animated animate__zoomInRight animate__delay-2s">
                        <div class="row g-0">
                            <div class="col-md-4 my-auto text-center">
                                <i class="bi bi-journal-text fs-1"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Mata Pelajaran</h5>
                                    <p class="card-text">
                                        <a href="mapel.html" class="text-dark underline">
                                            Selengkapnya
                                            <i class="bi bi-arrow-right-circle-fill"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div
                        class="card mb-5 bg-light border-success animate__animated animate__zoomInRight animate__delay-2s">
                        <div class="row g-0">
                            <div class="col-md-4 my-auto text-center">
                                <i class="bi bi-calendar fs-1"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Jadwal</h5>
                                    <p class="card-text">
                                        <a href="jadwalPelajaran.html" class="text-dark underline">
                                            Selengkapnya
                                            <i class="bi bi-arrow-right-circle-fill"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="secction bg-success  py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-7 my-auto">
                    <div class="fs-1 text-light">
                        Tentang Proyek
                    </div>
                    <p class="text-light">
                        Proyek ini dibuat sebagai bagian dari tugas implementasi JavaScript untuk menampilkan dan
                        mengelola informasi penting dalam lingkungan sekolah. Data yang ditampilkan terdiri dari data
                        siswa, guru, mata pelajaran, dan jadwal pelajaran
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="img/Time management-amico.svg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="secction  py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="img/About us page-bro.svg" alt="">
                </div>
                <div class="col-md-7 my-auto">
                    <div class="fs-1">
                        Fitur Aplikasi
                    </div>
                    <p>
                        Aplikasi ini menampilkan data siswa, guru, mata pelajaran, dan jadwal pelajaran secara
                        interaktif. Semua data dapat ditambah, dicari, dan ditampilkan langsung di halaman tanpa reload
                        menggunakan JavaScript. Desain responsif memastikan aplikasi nyaman diakses dari berbagai
                        perangkat.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="bg-success mt-2 py-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <h2 class="text-white h5 mb-0">SEKOLAH</h2>
                        <p class="text-light mb-0">Jl. Jendral Sudirman No. 86 Beru, Wlingi, Blitar, Jawa Timur</p>
                        <p class="text-light mb-0">Telepon (0342) 691224</p>
                        <p class="text-light">email : smkpgri_wlg@yahoo.co.id</p>
                    </div>
                    <div class="col-md-4">
                        <ul class="mb-0 text-white">
                            <li>Siswa</li>
                            <li>Guru</li>
                            <li>Mata Pelajaran</li>
                            <li>Jadwal Pelajaran</li>
                        </ul>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="img/Task-bro.svg" alt="Ilustrasi Tugas" class="img-fluid" style="max-height: 210px;">
                    </div>
                </div>
                <div class="text-center text-light my-3">2025 Devina Ratasya XI RPL 1</div>
            </div>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
        </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous">
        </script>

</body>

</html>