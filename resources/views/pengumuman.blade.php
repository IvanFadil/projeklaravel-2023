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
            <a class="navbar-brand" href="#"><i class="bi bi-house-heart-fill"></i> Paud Al-Fazir</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">visi & misi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Tentang
                        </a>
                        <ul class="dropdown-menu nav-pills dropdown-menu-end mt-2">
                            <li><a class="dropdown-item active" style="background-color: #0A1212;"
                                    href="#">Pendaftaran</a></li>
                            <li><a class="dropdown-item" href="#">ACC Pendaftaran</a></li>
                            <li><a class="dropdown-item" href="#">Siswa/i</a></li>
                            <li><a class="dropdown-item" href="#">Pengajar</a></li>
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
                                        <li><a class="dropdown-item" href="#"><i
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
                                        <a class="nav-link ps-2"
                                            aria-current="page" href="beranda"><i class="bi bi-house"></i>
                                            Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 " href="informasi"><i
                                                class="bi bi-journal-bookmark-fill"></i> Informasi Pendaftaran</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 " href="formulir"><i class="bi bi-pen"></i> Isi
                                            Formulir Pendaftaran</a>
                                    </li>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 " href="cetakkartu"><i class="bi bi-printer"></i> Cetak
                                            Kartu Pendaftaran</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active link-light " style="background-color: #0A1212;" href="pengumuman"><i class="bi bi-megaphone"></i>
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
                        <h1 class="card-title mt-5 " >Pengumuman Penerimaan</h1>
                        <p class="card-text mt-4 mb-5">Saat ini Anda belum bisa melihat pengumuman hasil penerimaan. </p><br/><br/><br/>
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
