@extends('layout.master')
@section('title', 'Cetak Kartu')
@section('menuPendaftaran','active')
@section('menuCetak','active link-light')


{{-- content --}}
@section('contents')

    <div class="col-lg-9 mt-2 ">
        <div class="card text-center">
            <div class="card-body">
                <h1 class="card-title mt-5 ">Cetak Kartu Pendaftaran</h1>
                <form class="row  mt-5">
                    <div class="col-auto">
                        <label for="staticKartu2" class="visually-hidden">kartu</label>
                        <input type="text" readonly class="form-control-plaintext" id="staticKartu2"
                            value="Nomor Formulir">
                    </div>
                    <div class="col-auto">
                        <label for="inputNomor2" class="visually-hidden">Nomor</label>
                        <input type="text" class="form-control" id="inputNomor2" placeholder="isi disini">
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4 mb-5">
                        <button class="btn link-light me-md-2" style="background-color: #0A1212;" type="button"> Cetak
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
{{-- end content --}}
