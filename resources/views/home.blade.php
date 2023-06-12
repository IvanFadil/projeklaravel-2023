<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>Paud AL - FAZIR</title>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>



    <link href="css/carousel.css" rel="stylesheet">
</head>

<body>
    {{-- header --}}
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top" style="background-color: #0A1212;">
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
    <main>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>

                    <div class="container">
                        <div class="container">
                            <img src="/assets/img/img-header.jpeg" alt="" srcset="">
                            <div class="carousel-caption text-start">
                                <h1>Selamat Datang.</h1>
                                <p>Selamat datang di Official Website Sekolah PAUD AL - FAZIR, yang merupakan wujud dari
                                    kesungguhan
                                    kami untuk membangun komunikasi interaktif demi meningkatkan kualitas pendidikan di
                                    Sekolah ini. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>

                    <div class="container">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Berita lain.</h1>
                                <p>PENERIMAAN PESERTA DIDIK BARU (PPDB)
                                    PAUD AL - FAZIR TAHUN PELAJARAN 2022/2023</p>
                                <p><a class="btn btn-secondary" style="background-color: #0A1212;"
                                        href="#">Selengkapnya</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                    </svg>

                    <div class="container">
                        <div class="container">
                            <div class="carousel-caption text-end">
                                <h1>FAQ</h1>
                                <p>Frequently Asked Questions - Cari Pertanyaan disini atau hubungi kontak kami.</p>
                                <p><a class="btn btn-secondary" style="background-color: #0A1212;"
                                        href="#">Selengkapnya</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <div class="container marketing">
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">PERINGATAN HUT REPUBLIK INDONESIA DI PAUD AL-FAZIR
                    </h2>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim officiis quos,
                        optio, dolorum atque vitae ipsam iste hic eligendi officia suscipit sunt repellat facere error
                        sequi. Placeat quis ratione asperiores, aperiam veniam dolor quasi laboriosam.</p>

                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%"
                            y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                    </svg>
                </div>
                <button class="btn btn-secondary me-md-2 mt-3" type="button"
                    style="background-color: #0A1212;">Selengkapnya</button>
            </div>

            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">FASILITAS SEKOLAH </h2>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, consequatur
                        explicabo aperiam ea fugiat perspiciatis autem ullam enim repellat, ipsam praesentium tempora
                        esse inventore neque odit laboriosam nihil saepe odio. Dolores explicabo repudiandae alias
                        molestiae..</p>

                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%"
                            y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                    </svg>
                </div>
                <button class="btn btn-secondary me-md-2 mt-3" type="button"
                    style="background-color: #0A1212;">Selengkapnya</button>
            </div>

            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">PENGALAMAN MURID DAN ORANG TUA DI PAUD AL-FAZIR </h2>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores tempore non quod
                        fugiat atque blanditiis dolor facere, at labore vel nostrum amet accusantium quas ullam dolorem
                        nihil. Soluta rem minima reiciendis blanditiis ipsum earum sed esse, vel at, facere, pariatur
                        voluptatem non. Repellat tempore aspernatur commodi architecto repudiandae rerum id!</p>

                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-bg)" /><text x="50%"
                            y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text>
                    </svg>
                </div>
                <button class="btn btn-secondary me-md-2 mt-3" type="button"
                    style="background-color: #0A1212;">Selengkapnya</button>
            </div>
            <hr class="featurette-divider">

        </div>

        <div class="m-3  ">
            <p class="h2 text-center mb-5">Dokumentasi Kegiatan</p>
            <center>
                <img src="/assets/img/tes1.png" width="550" height="400" class="img-fluid " alt="...">
                <img src="/assets/img/tes1.png" width="550" height="400" class="img-fluid " alt="...">
            </center>
            <div class="d-grid gap-2 col-6 mx-auto mt-5">
                <button class="btn btn-dark" style="background-color: #0A1212;" type="button">Lihat Semua</button>

            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>

        <hr class="featurette-divider">

        <div class="fixed-bottom text-center bg-light py-2 ">
            Copyright 2023. Powered by PanpaN ~
        </div>


    </main>

</body>

</html>
