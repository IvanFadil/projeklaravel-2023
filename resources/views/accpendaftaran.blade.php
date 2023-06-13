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
                            <li><a class="dropdown-item " href="beranda">Pendaftaran</a></li>
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

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between">
        </div>
        <!-- End Page Heading -->

        <!-- begin content -->
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-bold mb-5">ACC PENDAFTARAN</h1>
                </div>

                <body>
                    <section class="container-fluid">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Action</th>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Alamat</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="btn-group " role="group" aria-label="Basic example">
                                                <form action="#" method="POST">
                                                    <input type="hidden" name="id" value="#">
                                                    <button type="submit" class="btn btn-dark mt-2">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                    <input type="hidden" name="id" value="#">
                                                    <button type="submit" class="btn btn-dark mt-2">

                                                        <i class="bi bi-clipboard-check"></i><br />

                                                    </button>
                                                    <input type="hidden" name="id" value="#">
                                                    <button type="submit" class="btn btn-dark mt-2">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>

                                                    <input type="hidden" name="id" value="#">
                                                    <button type="submit" class="btn btn-dark mt-2">
                                                        <i class="bi bi-trash"></i>


                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </section>

                </body>
            </div>
        </section>
        <!-- end content -->

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
