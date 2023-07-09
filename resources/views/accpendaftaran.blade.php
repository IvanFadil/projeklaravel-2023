@include('layouts.app')

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

    <div class="container-fluid">



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
        Copyright &copy; <?php echo date("Y"); ?> Powered By Ivan. Program Studi Teknik Informatika - PNL
    </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <main>

</body>

</html>
