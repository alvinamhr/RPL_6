<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah alamat</title>
    <link href="{{ asset('assets/css/tambah-alamat.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
</head>
<body>
    <div class="container-form-alamat">
        <div class="overlay">
            <div class="container-isi-form">
                <h3 class="judul">Tambah Alamat</h3>
                <form class="form-tambah-alamat">
                    <label for="fname">Nama Alamat</label><br>
                    <input type="text" id="fname" name="nama-alamat" placeholder="masukkan nama alamat" class="input-nama-alamat"><br>
                        <div class="nama-nomor">
                            <div class="bagian-nama">
                                <label for="fname">Nama Penerima</label><br>
                                <input type="text" id="fname" name="nama-penerima" placeholder="masukkan nama" class="input-nama">
                            </div>
                            <div class="bagian-nomor">
                                <label for="no-telepon">Nomor Telepon</label><br>
                                <input type="tel" id="notelp" name="notelp" placeholder="masukkan notelp" class="input-nomor">
                            </div>
                        </div>
                        <div class="kota-pos">
                            <div class="bagian-kota">
                                <label for="kota-kec">Kota/Kecamatan</label> <br>
                                <input type="text" id="kota-kecamatan" name="kota-kecamatan" placeholder="masukkan kota/kec" class="input-kota-kec">
                            </div>
                            <div class="bagian-kodepos">
                                <label for="postal">Kode Pos</label><br>
                                <input type="text" id="postal-code" name="kode-pos" placeholder="masukin kode pos" class="input-kodepos">
                            </div>
                        </div>
                    <label for="fname">Alamat</label><br>
                    <input type="text" id="alamat" name="fname" placeholder="masukkan alamat" class="input-alamat"><br><br>
                        <div class="submits">
                            <a href="/profile"> <input type="button" value="Batal" class="submit-batal"></a>
                            <input type="submit" value="Tambah" class="submit-tambah"> 
                        </div>
                </form>
            </div> 
        </div>
    </div>
</body>
</html>