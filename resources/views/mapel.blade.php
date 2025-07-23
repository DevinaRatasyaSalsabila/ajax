<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Mapel</title>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/sweetalert2@11.21.2/dist/sweetalert2.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.bootstrap5.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7"
        crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD"
        crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-success fixed-top">
        <div class="container">
            <a class="navbar-brand text-light" href="#">Sekolah</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
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
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-3 pt-5">
        <div class="card outline-success animate__animated animate__zoomInRight">
            <div class="card-header bg-success  text-light">
                Data Mata Pelajaran
                <button class="btn-outline-light btn-sm btn float-end" data-bs-toggle="modal"
                    data-bs-target="#tambah_mapel">
                    Tambah
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="data-mapel">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama Mapel</th>
                                <th class="text-center">Kelas</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">Bahasa Indonesia</td>
                                <td class="text-center">Normatif</td>
                                <td class="text-center">
                                    <button class="btn-warning btn-sm btn m-1"
                                        data-bs-toggle="modal" data-bs-target="#edit_mapel"
                                        data-bs-mapel="Bahasa Indonesia"
                                        data-bs-kategori="Normatif">
                                        Edit
                                    </button>
                                    <button class="btn-danger btn-sm btn m-1"
                                        onclick="btnHapus('Bahasa Indonesia', 'Normatif')">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-center">Matematika</td>
                                <td class="text-center">Normatif</td>
                                <td class="text-center">
                                    <button class="btn-warning btn-sm btn m-1"
                                        data-bs-toggle="modal" data-bs-target="#edit_mapel"
                                        data-bs-mapel="Matematika" data-bs-kategori="Normatif">
                                        Edit
                                    </button>
                                    <button class="btn-danger btn-sm btn m-1"
                                        onclick="btnHapus('Matematika', 'Normatif')">
                                        Hapus
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">3</td>
                                <td class="text-center">Pemrograman Dasar</td>
                                <td class="text-center">Produktif</td>
                                <td class="text-center">
                                    <button class="btn-warning btn-sm btn m-1"
                                        data-bs-toggle="modal" data-bs-target="#edit_mapel"
                                        data-bs-mapel="Pemrograman Dasar"
                                        data-bs-kategori="Produktif">
                                        Edit
                                    </button>
                                    <button class="btn-danger btn-sm btn m-1"
                                        onclick="btnHapus('Pemrograman Dasar', 'Produktif')">
                                        Hapus
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">4</td>
                                <td class="text-center">Jaringan Komputer</td>
                                <td class="text-center">Produktif</td>
                                <td class="text-center">
                                    <button class="btn-warning btn-sm btn m-1"
                                        data-bs-toggle="modal" data-bs-target="#edit_mapel"
                                        data-bs-mapel="Jaringan Komputer"
                                        data-bs-kategori="Produktif">
                                        Edit
                                    </button>
                                    <button class="btn-danger btn-sm btn m-1"
                                        onclick="btnHapus('Jaringan Komputer', 'Produktif')">
                                        Hapus
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">5</td>
                                <td class="text-center">Bahasa Inggris</td>
                                <td class="text-center">Normatif</td>
                                <td class="text-center">
                                    <button class="btn-warning btn-sm btn m-1"
                                        data-bs-toggle="modal" data-bs-target="#edit_mapel"
                                        data-bs-mapel="Bahasa Inggris"
                                        data-bs-kategori="Normatif">
                                        Edit
                                    </button>
                                    <button class="btn-danger btn-sm btn m-1"
                                        onclick="btnHapus('Bahasa Inggris', 'Normatif')">
                                        Hapus
                                    </button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
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
                        <p class="text-light mb-0">Jl. Jendral Sudirman No. 86 Beru, Wlingi,
                            Blitar, Jawa Timur</p>
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
                        <img src="img/Task-bro.svg" alt="Ilustrasi Tugas" class="img-fluid"
                            style="max-height: 210px;">
                    </div>
                </div>
                <div class="text-center text-light my-3">2025 Devina Ratasya XI RPL 1</div>
            </div>
        </div>
    </footer>



    <!-- Modal Tambah Mapel-->
    <div class="modal fade" id="tambah_mapel" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Mata Pelajaran</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3 row">
                            <label for="nama_mapel" class="form-label col-sm-2">Nama Mapel</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama-tambah"
                                    onkeyup="tambah_mapel()" placeholder="Masukkan Nama Mapel">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="form-label col-sm-2">Kategori</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Pilih Kategori</option>
                                    <option value="Normatif">Normatif</option>
                                    <option value="Produktif">Produktif</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary"
                        onclick="btnTambah()">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Siswa -->
    <div class="modal fade" id="edit_mapel" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Mapel</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3 row">
                            <label for="nama_mapel" class="form-label col-sm-2">Nama Mapel</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control nama_Mapel"
                                    id="mapel" name="mapel"
                                    placeholder="Masukkan Nama Mapel" value="Bahasa Indonesia">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="form-label col-sm-2">Kategori</label>
                            <div class="col-sm-10">
                                <select class="form-select selectKategori" id="selectKategori"
                                    name="selectKategori " aria-label="Default select example">
                                    <option>Pilih Kategori</option>
                                    <option value="Normatif">Normatif</option>
                                    <option value="Produktif">Produktif</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.21.2/dist/sweetalert2.all.min.js"></script>

    <script src="https://cdn.datatables.net/2.3.1/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.3.1/js/dataTables.bootstrap5.js"></script>

    <script>
        const exampleModal = document.getElementById('edit_mapel')
        if (exampleModal) {
            exampleModal.addEventListener('show.bs.modal', event => {
                // Button that triggered the modal
                const button = event.relatedTarget

                // Extract info from data-bs-* attributes
                const nama_Mapel = button.getAttribute('data-bs-mapel')
                const kategori = button.getAttribute('data-bs-kategori')

                const modalTitle = exampleModal.querySelector('.modal-title')
                const input_nama = exampleModal.querySelector('.modal-body input#mapel')
                const input_kategori = exampleModal.querySelector(
                    '.modal-body select.selectKategori')

                modalTitle.textContent = `Data ${nama_Mapel}`

                input_nama.value = nama_Mapel
                input_kategori.value = kategori
            })
        }

        function tambahSiswa() {
            //js dengan menggunakan dom
            const nama = document.getElementById('nama-tambah').value;
            console.log(nama);
        }

        function tambah_mapel() {
            nama = $('#nama-tambah').val();
            console.log(nama);
        }

        function btnTambah() {
            Swal.fire({
                title: "Gagal!",
                text: "Data Anda Gagal di Simpan!",
                icon: "error"
            });
        }

        function btnHapus(nama, kelas) {
            Swal.fire({
                title: "Apakah Kamu Yakin?",
                text: `Ingin mengahapus data  ${nama} ${kelas}`,
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Berhasil!",
                        text: "Data kamu berhasil di hapus.",
                        icon: "success"
                    });
                }
            });
        }

        new DataTable('#data-mapel');
    </script>
</body>

</html>
