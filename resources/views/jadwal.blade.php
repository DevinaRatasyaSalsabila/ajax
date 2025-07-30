<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Jadwal Pelajaran</title>
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
                        <a class="nav-link active text-light" aria-current="page" href="index">
                            <i class="bi bi-house-fill"></i>
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-light" href="siswa">
                            <i class="bi bi-people"></i>
                            Siswa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-light" href="guru">
                            <i class="bi bi-file-person"></i>
                            Guru
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-light" href="mapel">
                            <i class="bi bi-journal-text"></i>
                            Mata Pelajaran
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-light" href="jadwal">
                            <i class="bi bi-calendar"></i>
                            Jadwal Pelajaran
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-light" href="kelas">
                            <i class="bi bi-calendar"></i>
                            Kelas
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-3 pt-5">
        <div class="card outline-success animate__animated animate__zoomInRight">
            <div class="card-header bg-success  text-light">
                Data Jadwal Pelajaran
                <button class="btn-outline-light btn-sm btn float-end" data-bs-toggle="modal"
                    data-bs-target="#tambah_jadwal">
                    Tambah
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="data-jadwal">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Hari</th>
                                <th class="text-center">Jam Ke</th>
                                <th class="text-center">Guru</th>
                                <th class="text-center">Kelas</th>
                                <th class="text-center">Mapel</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">Senin</td>
                                <td class="text-center">3</td>
                                <td class="text-center">Pak Dwi</td>
                                <td class="text-center">XI RPL 1</td>
                                <td class="text-center">Matematika</td>
                                <td class="text-center">
                                    <button class="btn-warning btn-sm btn m-1" data-bs-toggle="modal"
                                        data-bs-target="#edit_jadwal" data-bs-hari="Senin" data-bs-jam="3"
                                        data-bs-guru="Pak Dwi" data-bs-kelas="XI RPL 1" data-bs-mapel="Matematika">
                                        Edit
                                    </button>
                                    <button class="btn-danger btn-sm btn m-1"
                                        onclick="btnHapus('Senin', '3')">Hapus</button>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-center">Selasa</td>
                                <td class="text-center">7</td>
                                <td class="text-center">Bu Sinta</td>
                                <td class="text-center">XI RPL 2</td>
                                <td class="text-center">Bahasa Inggris</td>
                                <td class="text-center">
                                    <button class="btn-warning btn-sm btn m-1" data-bs-toggle="modal"
                                        data-bs-target="#edit_jadwal" data-bs-hari="Selasa" data-bs-jam="7"
                                        data-bs-guru="Bu Sinta" data-bs-kelas="XI RPL 2"
                                        data-bs-mapel="Bahasa Inggris">
                                        Edit
                                    </button>
                                    <button class="btn-danger btn-sm btn m-1"
                                        onclick="btnHapus('Selasa', '7')">Hapus</button>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">3</td>
                                <td class="text-center">Rabu</td>
                                <td class="text-center">8</td>
                                <td class="text-center">Pak Agus</td>
                                <td class="text-center">XII RPL 1</td>
                                <td class="text-center">PPL</td>
                                <td class="text-center">
                                    <button class="btn-warning btn-sm btn m-1" data-bs-toggle="modal"
                                        data-bs-target="#edit_jadwal" data-bs-hari="Rabu" data-bs-jam="8"
                                        data-bs-guru="Pak Agus" data-bs-kelas="XII RPL 1" data-bs-mapel="PPL">
                                        Edit
                                    </button>
                                    <button class="btn-danger btn-sm btn m-1"
                                        onclick="btnHapus('Rabu', '8')">Hapus</button>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">4</td>
                                <td class="text-center">Kamis</td>
                                <td class="text-center">2</td>
                                <td class="text-center">Bu Rina</td>
                                <td class="text-center">XII RPL 2</td>
                                <td class="text-center">Pemrograman Web</td>
                                <td class="text-center">
                                    <button class="btn-warning btn-sm btn m-1" data-bs-toggle="modal"
                                        data-bs-target="#edit_jadwal" data-bs-hari="Kamis" data-bs-jam="2"
                                        data-bs-guru="Bu Rina" data-bs-kelas="XII RPL 2"
                                        data-bs-mapel="Pemrograman Web">
                                        Edit
                                    </button>
                                    <button class="btn-danger btn-sm btn m-1"
                                        onclick="btnHapus('Kamis', '2')">Hapus</button>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">5</td>
                                <td class="text-center">Selasa</td>
                                <td class="text-center">1</td>
                                <td class="text-center">Budi</td>
                                <td class="text-center">XI RPL 1</td>
                                <td class="text-center">Bahasa Indonesia</td>
                                <td class="text-center">
                                    <button class="btn-warning btn-sm btn m-1" data-bs-toggle="modal"
                                        data-bs-target="#edit_jadwal" data-bs-hari="Selasa" data-bs-jam="1"
                                        data-bs-guru="Budi" data-bs-kelas="XI RPL 1"
                                        data-bs-mapel="Bahasa Indonesia">
                                        Edit
                                    </button>
                                    <button class="btn-danger btn-sm btn m-1" onclick="btnHapus('Selasa', '1')">
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
                        <img src="img/Task-bro.svg" alt="Ilustrasi Tugas" class="img-fluid"
                            style="max-height: 210px;">
                    </div>
                </div>
                <div class="text-center text-light my-3">2025 Devina Ratasya XI RPL 1</div>
            </div>
        </div>
    </footer>



    <!-- Modal Tambah Jadwal-->
    <div class="modal fade" id="tambah_jadwal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Jadwal Pelajaran</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3 row">
                            <label for="jadwalPelajaran" class="form-label col-sm-2">Hari</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="hari" name="hari"
                                    placeholder="Masukkan Hari">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jadwalPelajaran" class="form-label col-sm-2">Jam</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="Jam" name="Jam"
                                    placeholder="Masukkan Jam">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jadwalPelajaran" class="form-label col-sm-2">Nama Guru</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_guru" name="nama_guru"
                                    placeholder="Masukkan Nama Guru">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="form-label col-sm-2">Kelas</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Pilih Kelas</option>
                                    <option value="XI RPL 1">XI RPL 1</option>
                                    <option value="XI RPL 2">XI RPL 2</option>
                                    <option value="XII RPL 1">XII RPL 1</option>
                                    <option value="XII RPL">XII RPL 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jadwalPelajaran" class="form-label col-sm-2">Mapel</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="Mapel" name="Mapel"
                                    placeholder="Masukkan Mapel">
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

    <!-- Modal Edit Jadwal -->
    <div class="modal fade" id="edit_jadwal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Jadwal</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3 row">
                            <label for="jadwalPelajaran" class="form-label col-sm-2">Hari</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="hari" name="hari"
                                    placeholder="Masukkan Hari">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jadwalPelajaran" class="form-label col-sm-2">Jam</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="Jam" name="Jam"
                                    placeholder="Masukkan Jam">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jadwalPelajaran" class="form-label col-sm-2">Nama Guru</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_guru" name="nama_guru"
                                    placeholder="Masukkan Nama Guru">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="" class="form-label col-sm-2">Kelas</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Pilih Kelas</option>
                                    <option value="XI RPL 1">XI RPL 1</option>
                                    <option value="XI RPL 2">XI RPL 2</option>
                                    <option value="XII RPL 1">XII RPL 1</option>
                                    <option value="XII RPL">XII RPL 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jadwalPelajaran" class="form-label col-sm-2">Mapel</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="Mapel" name="Mapel"
                                    placeholder="Masukkan Mapel">
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

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.21.2/dist/sweetalert2.all.min.js"></script>

    <script src="https://cdn.datatables.net/2.3.1/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.3.1/js/dataTables.bootstrap5.js"></script>

    <script>
        const exampleModal = document.getElementById('edit_jadwal')
        if (exampleModal) {
            exampleModal.addEventListener('show.bs.modal', event => {
                const button = event.relatedTarget

                const hari = button.getAttribute('data-bs-hari')
                const jam = button.getAttribute('data-bs-jam')
                const guru = button.getAttribute('data-bs-guru')
                const kelas = button.getAttribute('data-bs-kelas')
                const mapel = button.getAttribute('data-bs-mapel')

                exampleModal.querySelector('.modal-body input#hari').value = hari
                exampleModal.querySelector('.modal-body input#Jam').value = jam
                exampleModal.querySelector('.modal-body input#nama_guru').value = guru
                exampleModal.querySelector('select').value = kelas
                exampleModal.querySelector('.modal-body input#Mapel').value = mapel

                exampleModal.querySelector('.modal-title').textContent = `Edit Jadwal ${mapel}`
            })
        }


        function tambahSiswa() {
            //js dengan menggunakan dom
            const nama = document.getElementById('nama-tambah').value;
            console.log(nama);
        }

        function tambah_guru() {
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

        new DataTable('#data-jadwal');
    </script>
</body>

</html>
