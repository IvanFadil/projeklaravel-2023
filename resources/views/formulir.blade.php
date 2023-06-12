<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paud Al-Fazir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


</head>

<body>
    {{-- header --}}
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top" style="background-color: #0A1212;">
        <div class="container-lg">
            <a class="navbar-brand" href="home"><i class="bi bi-house-heart-fill"></i> Paud Al-Fazir</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="visimisi">visi & misi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Tentang
                        </a>
                        <ul class="dropdown-menu nav-pills dropdown-menu-end mt-2">
                            <li><a class="dropdown-item "
                                    href="beranda">Pendaftaran</a></li>
                            <li><a class="dropdown-item" href="accpendaftaran">ACC Pendaftaran</a></li>
                            <li><a class="dropdown-item" href="siswai">Siswa/i</a></li>
                            <li><a class="dropdown-item" href="pengajar">Pengajar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">login
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-end mt-2">
                                        <li><a class="dropdown-item" href="login"><i
                                                    class="bi bi-person-bounding-box"></i> Profil</a></li>
                                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#ModalUbahPassword"><i class="bi bi-key"></i> Ubah
                                                Password</a>
                                        </li>
                                        <li><a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-left"></i>
                                                Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- end header --}}

    <div class="container-lg">
        <div class="row">
            {{-- sidebar --}}
            <div class="col-lg-3">
                <nav class="navbar navbar-expand-lg bg-light rounded border mt-2">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                            <i class="bi bi-view-list"></i>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                            aria-labelledby="offcanvasNavbarLabel" style="width: 250px;">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">PPDB Paud Al-Fazir</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1 ">
                                    <h5>Menu</h5>
                                    <li class="nav-item ">
                                        <a class="nav-link ps-2" aria-current="page" href="beranda"><i
                                                class="bi bi-house"></i>
                                            Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 " href="informasi"><i
                                                class="bi bi-journal-bookmark-fill"></i> Informasi Pendaftaran</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active link-light "
                                            style="background-color: #0A1212;"href="formulir"><i
                                                class="bi bi-pen"></i> Isi
                                            Formulir Pendaftaran</a>
                                    </li>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 " href="cetakkartu"><i class="bi bi-printer"></i> Cetak
                                            Kartu Pendaftaran</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 " href="pengumuman"><i class="bi bi-megaphone"></i>
                                            Pengumuman Penerimaan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 " href="kontak"><i
                                                class="bi bi-person-lines-fill"></i> Kontak Kami</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            {{-- end sidebar --}}

            {{-- content --}}
            <div class="col-lg-9 mt-2 ">
                <div class="card text-center">
                    <div class="card-body">
                        <h1 class="card-title mt-5 mb-5 ">Formulir Pendaftaran</h1>
                        <div class="alert alert-secondary" role="alert">
                            IDENTITAS PESERTA DIDIK
                        </div>

                        <form action="#" method="POST">
                            <div class="row mb-3">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="nama"
                                        id="nama">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="nik"
                                        id="nik">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="alamat"
                                        id="alamat">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tber" class="col-sm-2 col-form-label">Tinggal Bersama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="tinggal_bersama"
                                        id="tber">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="anak" class="col-sm-2 col-form-label">Anak ke-</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="anakke"
                                        id="anak">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="agama"
                                        id="agama">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="kewarganegaraan" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="kewarganegaraan"
                                        id="kewarganegaraan">
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <label for="ttl" class="col-sm-2 col-form-label">Tempat/Tgl lahir</label>
                                <input type="text" class="form-control" required name="tempat_lahir"
                                    placeholder="tempat" aria-label="tempat">
                                <span class="input-group-text">/</span>
                                <input type="date" class="form-control" required name="tanggal_lahir"
                                    placeholder="tanggallahir" aria-label="tanggallahir">
                            </div>

                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" required name="jenis_kelamin"
                                            id="gridRadios1" value="Laki-Laki" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Laki - laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" required name="jenis_kelamin"
                                            id="gridRadios2" value="Perempuan">
                                        <label class="form-check-label" for="gridRadios2">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <br>



                            <div class="alert alert-secondary" role="alert">
                                IDENTITAS ORANG TUA
                            </div>
                            <div class="row mb-3">
                                <label for="nama" class="col-sm-2 col-form-label">Nama Ayah</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="nama_ayah"
                                        id="nama">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="nik_ayah"
                                        id="nik">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tla" class="col-sm-2 col-form-label">Tahun Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" required name="tahun_lahir_ayah"
                                        id="tla">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="pendidikan_ayah"
                                        id="pendidikan">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="pekerjaan_ayah"
                                        id="pekerjaan">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nohp" class="col-sm-2 col-form-label">nohp</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="nohp_ayah"
                                        id="nohp">
                                </div>
                            </div>
                            <br>

                            <hr class="featurette-divider">

                            <div class="row mb-3">
                                <label for="nama" class="col-sm-2 col-form-label">Nama Ibu</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="nama_ibu"
                                        id="nama">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="nik_ibu"
                                        id="nik">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="tli" class="col-sm-2 col-form-label">Tahun Lahir</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" required name="tahun_lahir_ibu"
                                        id="tli">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="pendidikan_ibu"
                                        id="pendidikan">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="pekerjaan_ibu"
                                        id="pekerjaan">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nohp" class="col-sm-2 col-form-label">nohp</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="nohp_ibu"
                                        id="nohp">
                                </div>
                            </div>
                            <br>

                            <div class="alert alert-secondary" role="alert">
                                PERIODIK
                            </div>

                            <div class="row mb-3">
                                <label for="tb" class="col-sm-2 col-form-label">Tinggi badan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="tinggi_badan"
                                        id="tt">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="bb" class="col-sm-2 col-form-label">Berat Badan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="berat_badan"
                                        id="bb">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="jt" class="col-sm-2 col-form-label">Jarak Tempuh</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="jarak_tempuh"
                                        id="jt">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="js" class="col-sm-2 col-form-label">Jumlah Saudara</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="jumlah_saudara"
                                        id="js">
                                </div>
                            </div>

                            <br>

                            <div class="alert alert-secondary" role="alert">
                                REGISTER
                            </div>

                            <label>JENIS PENDAFTARAN : </label>
                            <select class="form-select" required name="jenis_pendaftaran" required>
                                <option disabled selected hidden>Pilih jenis pendaftaran</option>
                                <option value="Siswa Baru">Siswa Baru</option>
                                <option value="Pindahan">Pindahan</option>
                                <option value="Sekolah Lagi">Sekolah Lagi</option>
                            </select>
                            <br>
                            <hr class="featurette-divider">

                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck1" required
                                            name="required" required>
                                        <label class="form-check-label" for="gridCheck1">
                                            Data sudah terisi dengan benar.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid gap-2 mb-5 d-md-flex justify-content-md-end">
                                <button class="btn btn-secondary me-md-2" type="button"
                                    style="background-color: #0A1212;">Reset</button>
                                <button class="btn btn-secondary" type="submit"
                                    style="background-color: #0A1212;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- end content --}}
        </div>

        <div class="fixed-bottom text-center bg-light py-2 ">
            Copyright 2023. Powered by PanpaN ~
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <main>

</body>

</html>
