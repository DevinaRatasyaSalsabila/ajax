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
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-3 pt-5">
        <div class="card outline-success animate__animated animate__zoomInRight">
            <div class="card-header bg-success  text-light">
                Data Siswa
                <button class="btn-outline-light btn-sm btn float-end" data-bs-toggle="modal"
                    data-bs-target="#tambah_siswa">
                    Tambah
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="data-siswa">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama Siswa</th>
                                <th class="text-center">Kelas</th>
                                <th class="text-center">JK</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">Devina Ratasya Salsabila</td>
                                <td class="text-center">XI RPL 1</td>
                                <td class="text-center">P</td>
                                <td class="text-center">Blitar</td>
                                <td class="text-center">
                                    <button class="btn-warning btn-sm btn m-1" data-bs-toggle="modal"
                                        data-bs-target="#edit_siswa" data-bs-nama_siswa="Devina Ratasya Salsabila"
                                        data-bs-kelas="XI RPL 1" data-bs-gender="Perempuan" data-bs-alamat="Blitar">
                                        Edit
                                    </button>
                                    <button class="btn-danger btn-sm btn m-1"
                                        onclick="btnHapus('Devina Ratasya Salsabila', 'XI RPL 1')">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-center">Adisya Erma</td>
                                <td class="text-center">XI RPL 2</td>
                                <td class="text-center">P</td>
                                <td class="text-center">Wlingi</td>
                                <td class="text-center">
                                    <button class="btn-warning btn-sm btn m-1" data-bs-toggle="modal"
                                        data-bs-target="#edit_siswa" data-bs-nama_siswa="Adisya Erma"
                                        data-bs-kelas="XI RPL 2" data-bs-gender="Perempuan" data-bs-alamat="Wlingi">
                                        Edit
                                    </button>
                                    <button class="btn-danger btn-sm btn m-1"
                                        onclick="btnHapus('Adisya Erma', 'XI RPL 2')">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td class="text-center">Azzahra Nurayu Mutiara</td>
                                <td class="text-center">XI RPL 2</td>
                                <td class="text-center">P</td>
                                <td class="text-center">Wlingi</td>
                                <td class="text-center">
                                    <button class="btn-warning btn-sm btn m-1" data-bs-toggle="modal"
                                        data-bs-target="#edit_siswa" data-bs-nama_siswa="Azzahra Nurayu Mutiara"
                                        data-bs-kelas="XI RPL 2" data-bs-gender="Perempuan" data-bs-alamat="Wlingi">
                                        Edit
                                    </button>
                                    <button class="btn-danger btn-sm btn m-1"
                                        onclick="btnHapus('Azzahra Nurayu Mutiara', 'XI RPL 2')">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td class="text-center">Chesya Oktaviani</td>
                                <td class="text-center">XI RPL 2</td>
                                <td class="text-center">L</td>
                                <td class="text-center">Wlingi</td>
                                <td class="text-center">
                                    <button class="btn-warning btn-sm btn m-1" data-bs-toggle="modal"
                                        data-bs-target="#edit_siswa" data-bs-nama_siswa="Chesya Oktaviani"
                                        data-bs-kelas="XI RPL 2" data-bs-gender="Laki-Laki" data-bs-alamat="Wlingi">
                                        Edit
                                    </button>
                                    <button class="btn-danger btn-sm btn m-1"
                                        onclick="btnHapus('Chesya Oktaviani', 'XI RPL 2')">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">5</td>
                                <td class="text-center">Dinda Firmanda</td>
                                <td class="text-center">XII RPL 2</td>
                                <td class="text-center">P</td>
                                <td class="text-center">Wlingi</td>
                                <td class="text-center">
                                    <button class="btn-warning btn-sm btn m-1" data-bs-toggle="modal"
                                        data-bs-target="#edit_siswa" data-bs-nama_siswa="Dinda Firmanda"
                                        data-bs-kelas="XII RPL" data-bs-gender="Perempuan" data-bs-alamat="Wlingi">
                                        Edit
                                    </button>
                                    <button class="btn-danger btn-sm btn m-1"
                                        onclick="btnHapus('Dinda Firmanda', 'XII RPL 2')">
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



    <!-- Modal Tambah Siswa-->
    <div class="modal fade" id="tambah_siswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Siswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3 row">
                            <label for="nama_siswa" class="form-label col-sm-2">Nama Siswa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama-tambah" onkeyup="tambahSiswaJq()"
                                    placeholder="Masukkan Nama Siswa">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="form-label col-sm-2">Kelas</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Pilih Kelas</option>
                                    <option value="XI RPL 1">XI RPL 1</option>
                                    <option value="XI RPL 2">XI RPL 2</option>
                                    <option value="12 RPL 1">XII RPL 1</option>
                                    <option value="XII RPL">XII RPL 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="form-label col-sm-2">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <div class="d-flex">
                                    <div class="form-check m-2">
                                        <input class="form-check-input" type="radio" name="radioDefault"
                                            id="radioDefault1">
                                        <label class="form-check-label" for="radioDefault1">
                                            Perempuan
                                        </label>
                                    </div>
                                    <div class="form-check m-2">
                                        <input class="form-check-input" type="radio" name="radioDefault"
                                            id="radioDefault1">
                                        <label class="form-check-label" for="radioDefault1">
                                            Laki-Laki
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="exampleFormControlTextarea1" class="form-label col-sm-2">Alamat</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">
                                </textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" onclick="btnTambah()">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Siswa -->
    <div class="modal fade" id="edit_siswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Siswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3 row">
                            <label for="nama_siswa" class="form-label col-sm-2">Nama Siswa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control nama_siswa" id="nama" name="nama"
                                    placeholder="Masukkan Nama Siswa" value="Devina Ratasya Salsabila">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="form-label col-sm-2">Kelas</label>
                            <div class="col-sm-10">
                                <select class="form-select kelas_siswa" id="kelas" name="kelas"
                                    aria-label="Default select example">
                                    <option>Pilih Kelas</option>
                                    <option value="XI RPL 1">XI RPL 1</option>
                                    <option value="XI RPL 2">XI RPL 2</option>
                                    <option value="XII RPL 1">XII RPL 1</option>
                                    <option value="XII RPL">XII RPL 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="form-label col-sm-2">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <div class="d-flex">
                                    <div class="form-check m-2">
                                        <input class="form-check-input gender_siswa" type="radio" name="gender"
                                            id="gender" value="Perempuan">
                                        <label class="form-check-label" for="radioDefault1">
                                            Perempuan
                                        </label>
                                    </div>
                                    <div class="form-check m-2">
                                        <input class="form-check-input gender_siswa" type="radio" name="gender"
                                            id="gender" value="Laki-Laki">
                                        <label class="form-check-label" for="radioDefault1">
                                            Laki-Laki
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="exampleFormControlTextarea1" class="form-label col-sm-2">Alamat</label>
                            <div class="col-sm-10">
                                <textarea class="form-control alamat_siswa" name="alamat" id="alamat" rows="3">Blitar
                                </textarea>
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
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.21.2/dist/sweetalert2.all.min.js"></script>

    <script src="https://cdn.datatables.net/2.3.1/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.3.1/js/dataTables.bootstrap5.js"></script>

    <script>
        const exampleModal = document.getElementById('edit_siswa')
        if (exampleModal) {
            exampleModal.addEventListener('show.bs.modal', event => {
                // Button that triggered the modal
                const button = event.relatedTarget

                // Extract info from data-bs-* attributes
                const nama_siswa = button.getAttribute('data-bs-nama_siswa')
                const kelas = button.getAttribute('data-bs-kelas')
                const gender = button.getAttribute('data-bs-gender')
                const alamat = button.getAttribute('data-bs-alamat')

                const modalTitle = exampleModal.querySelector('.modal-title')
                const input_nama = exampleModal.querySelector('.modal-body input#nama')
                const input_kelas = exampleModal.querySelector('.modal-body select.kelas_siswa')
                const input_gender = exampleModal.querySelector(`[name="gender"][value="${gender}"]`).checked = true
                const input_alamat = exampleModal.querySelector('.modal-body textarea#alamat')

                modalTitle.textContent = `Data ${nama_siswa}`

                input_nama.value = nama_siswa
                input_kelas.value = kelas
                input_alamat.value = alamat
            })
        }

        function tambahSiswa() {
            //js dengan menggunakan dom
            const nama = document.getElementById('nama-tambah').value;
            console.log(nama);
        }

        function tambahSiswaJq() {
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

        new DataTable('#data-siswa');
    </script>
</body>

</html>