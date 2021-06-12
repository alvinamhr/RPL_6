<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Gagyok</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Gagyok" />
        <meta name="keywords" content="korean, online shop, korea, k-pop" />

        <!-- favicon -->
        <link rel="shortcut icon" href="assets/image/favicon.png">

        <!-- Bootstrap -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
        <!-- END: Vendor CSS-->

        <!-- Main Css -->
        <link href="{{ asset('assets/css/popup-pembayaran.css') }}" rel="stylesheet" type="text/css" />

    </head>

<body>
    <div class="container-pilihan-pembayaran">
        <div class="overlay">
            <div class="container-isi-pilihan">
                <h3 class="judul">Pembayaran</h3>
                <h4 class="metode">Metode Pembayaran</h4>
                <div class="pilihan">
                    <button class="pilihan1">Virtual Account BCA: Nomor VAxxxxx</button>
                    <button class="pilihan1">Virtual Account BNI: Nomor VAxxxxx</button>
                    <button class="pilihan1">Virtual Account Mandiri: Nomor VAxxxxx</button>
                </div>
                <div class="total">
                    <table>
                        <tr>
                            <td class="harga">Total Harga</td>
                            <td class="idr">IDR xxxxx</td>
                        </tr>
                    </table>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="button"><a href="">Batal</a></button>
                    </div>
                    <div class="col">
                        <button class="button" style="background-color: #6670AD; border-color: #6670AD;">
                            <a href="">Bayar</a>
                        </button>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</body>
</html>
