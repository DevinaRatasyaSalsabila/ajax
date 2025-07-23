<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Guru</title>
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
                Data Guru
                <button class="btn-outline-light btn-sm btn float-end" data-bs-toggle="modal"
                    data-bs-target="#tambah_guru">
                    Tambah
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="data-guru">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama Guru</th>
                                <th class="text-center">NIP</th>
                                <th class="text-center">JK</th>
                                <th class="text-center">Pendidikan Terakhir</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">Devina Ratasya Salsabila</td>
                                <td class="text-center">9458305409485</td>
                                <td class="text-center">P</td>
                                <td class="text-center">SI Informatika</td>
                                <td class="text-center">Blitar</td>
                                <td class="text-center">
                                    <button class="btn-warning btn-sm btn m-1" data-bs-toggle="modal"
                                        data-bs-target="#edit_Guru" data-bs-guru="Devina Ratasya Salsabila"
                                        data-bs-nip="9458305409485" data-bs-gender="Perempuan" data-bs-alamat="Blitar"
                                        data-bs-pendidikan="S1 Informatika">
                                        Edit
                                    </button>
                                    <button class="btn-danger btn-sm btn m-1"
                                        onclick="btnHapus('Devina Ratasya Salsabila', '9458305409485')">
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-center">Rizky Maulana</td>
                                <td class="text-center">1234567890123</td>
                                <td class="text-center">L</td>
                                <td class="text-center">S1 Pendidikan</td>
                                <td class="text-center">Malang</td>
                                <td class="text-center">
                                    <button class="btn-warning btn-sm btn m-1" data-bs-toggle="modal"
                                        data-bs-target="#edit_Guru" data-bs-guru="Rizky Maulana"
                                        data-bs-nip="1234567890123" data-bs-gender="Laki-Laki" data-bs-alamat="Malang"
                                        data-bs-pendidikan="S1 Pendidikan">
                                        Edit
                                    </button>
                                    <button class="btn-danger btn-sm btn m-1"
                                        onclick="btnHapus('Rizky Maulana', '1234567890123')">
                                        Hapus
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">3</td>
                                <td class="text-center">Salsabila Putri</td>
                                <td class="text-center">2345678901234</td>
                                <td class="text-center">P</td>
                                <td class="text-center">S1 Bahasa Inggris</td>
                                <td class="text-center">Tulungagung</td>
                                <td class="text-center">
                                    <button class="btn-warning btn-sm btn m-1" data-bs-toggle="modal"
                                        data-bs-target="#edit_Guru" data-bs-guru="Salsabila Putri"
                                        data-bs-nip="2345678901234" data-bs-gender="Perempuan"
                                        data-bs-alamat="Tulungagung" data-bs-pendidikan="S1 Bahasa Inggris">
                                        Edit
                                    </button>
                                    <button class="btn-danger btn-sm btn m-1"
                                        onclick="btnHapus('Salsabila Putri', '2345678901234')">
                                        Hapus
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">4</td>
                                <td class="text-center">Andi Saputra</td>
                                <td class="text-center">3456789012345</td>
                                <td class="text-center">L</td>
                                <td class="text-center">S1 Teknik Elektro</td>
                                <td class="text-center">Kediri</td>
                                <td class="text-center">
                                    <button class="btn-warning btn-sm btn m-1" data-bs-toggle="modal"
                                        data-bs-target="#edit_Guru" data-bs-guru="Andi Saputra"
                                        data-bs-nip="3456789012345" data-bs-gender="Laki-Laki" data-bs-alamat="Kediri"
                                        data-bs-pendidikan="S1 Teknik Elektro">
                                        Edit
                                    </button>
                                    <button class="btn-danger btn-sm btn m-1"
                                        onclick="btnHapus('Andi Saputra', '3456789012345')">
                                        Hapus
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td class="text-center">5</td>
                                <td class="text-center">Fitriani Kusuma</td>
                                <td class="text-center">4567890123456</td>
                                <td class="text-center">P</td>
                                <td class="text-center">S1 Akuntansi</td>
                                <td class="text-center">Surabaya</td>
                                <td class="text-center">
                                    <button class="btn-warning btn-sm btn m-1" data-bs-toggle="modal"
                                        data-bs-target="#edit_Guru" data-bs-guru="Fitriani Kusuma"
                                        data-bs-nip="4567890123456" data-bs-gender="Perempuan" data-bs-alamat="Surabaya"
                                        data-bs-pendidikan="S1 Akuntansi">
                                        Edit
                                    </button>
                                    <button class="btn-danger btn-sm btn m-1"
                                        onclick="btnHapus('Fitriani Kusuma', '4567890123456')">
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
    <div class="modal fade" id="tambah_guru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Guru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3 row">
                            <label for="data-guru" class="form-label col-sm-2">Nama Guru</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama-tambah" onkeyup="tambahGuruJq()"
                                    placeholder="Masukkan Nama Guru">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="NIP" class="form-label col-sm-2">Nama NIP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="NIP" placeholder="Masukkan NIP">
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
                            <label for="PendidikanTerakhir" class="form-label col-sm-2">Pendidikan Terakhir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="PendidikanTerakhir"
                                    placeholder="Masukkan Pendidikan Terakhir">
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

    <!-- Modal Edit Guru -->
    <div class="modal fade" id="edit_Guru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Guru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="mb-3 row">
                            <label for="data-guru" class="form-label col-sm-2">Nama Guru</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Guru">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="NIP" class="form-label col-sm-2">NIP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="NIP" placeholder="Masukkan NIP">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="" class="form-label col-sm-2">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <div class="d-flex">
                                    <div class="form-check m-2">
                                        <input class="form-check-input" type="radio" name="gender" value="Perempuan"
                                            id="radioDefault1">
                                        <label class="form-check-label" for="radioDefault1">
                                            Perempuan
                                        </label>
                                    </div>
                                    <div class="form-check m-2">
                                        <input class="form-check-input" type="radio" name="gender" value="Laki-Laki"
                                            id="radioDefault1">
                                        <label class="form-check-label" for="radioDefault1">
                                            Laki-Laki
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="PendidikanTerakhir" class="form-label col-sm-2">Nama Pendidikan Terakhir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="Pendidikan"
                                    placeholder="Masukkan Pendidikan Terakhir">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="exampleFormControlTextarea1" class="form-label col-sm-2">Alamat</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="alamat" rows="3">
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
        const exampleModal = document.getElementById('edit_Guru')
        if (exampleModal) {
            exampleModal.addEventListener('show.bs.modal', event => {
                const button = event.relatedTarget

                const nama_guru = button.getAttribute('data-bs-guru')
                const NIP = button.getAttribute('data-bs-nip')
                const gender = button.getAttribute('data-bs-gender')
                const alamat = button.getAttribute('data-bs-alamat')
                const PendidikanTerakhir = button.getAttribute('data-bs-pendidikan')

                const modalTitle = exampleModal.querySelector('.modal-title')
                const input_nama = exampleModal.querySelector('#nama')
                const input_nip = exampleModal.querySelector('#NIP')
                const input_pendidikan = exampleModal.querySelector('#Pendidikan')
                const input_alamat = exampleModal.querySelector('#alamat')

                const input_gender = exampleModal.querySelector(`[name="gender"][value="${gender}"]`).checked = true

                modalTitle.textContent = `Data ${nama_guru}`
                input_nama.value = nama_guru
                input_nip.value = NIP
                input_pendidikan.value = PendidikanTerakhir
                input_alamat.value = alamat
            })
        }


        function tambahSiswa() {
            //js dengan menggunakan dom
            const nama = document.getElementById('nama-tambah').value;
            console.log(nama);
        }

        function tambahGuruJq() {
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

        function btnHapus(nama, NIP) {
            Swal.fire({
                title: "Apakah Kamu Yakin?",
                text: `Ingin mengahapus data  ${nama} ${NIP}`,
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

        new DataTable('#data-guru');
    </script>
</body>

</html>