<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Gagyok</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Gagyok" />
        <meta name="keywords" content="korean, online shop, korea, k-pop" />

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/image/favicon.png') }}"/>

        <!-- Bootstrap -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
        <!-- END: Vendor CSS-->

        <!-- Main Css -->
        <link href="{{ asset('assets/css/daftaralamat.css') }}" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="container-pilihan-pembayaran">
            <div class="overlay">
                <div class="container-isi-pilihan">
                    <h3 class="judul">Daftar Alamat</h3>
                    <div class="container">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                <div class="container-alamat">
                                    <div class="isi-alamat">
                                        <h6>Nama Tujuan</h6>
                                        <p class="alamat">Nama
                                            <br>
                                            notel
                                            <br>
                                            Alamat
                                            <br>
                                            kota
                                        </p>
                                    </div>
                                </div>
                            </label>
                            </div>
                            <br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    <div class="container-alamat">
                                        <div class="isi-alamat">
                                            <h6>Nama Tujuan</h6>
                                            <p class="alamat">Nama
                                                <br>
                                            notel
                                            <br>
                                            Alamat
                                            <br>
                                            kota
                                            </p>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button class="button"><a href="">Batal</a></button>
                                </div>
                                <div class="col">
                                    <button class="button" style="background-color: #6670AD; border-color: #6670AD;">
                                        <a href="">Simpan</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </body>
</html>