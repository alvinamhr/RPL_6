@extends('layouts.app')

@section('css')
    <link href="{{ asset('assets/css/profile.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
<section class="section">
    <div class="container-profile">
        <!-- breadcrumb -->
        <!-- content -->
        <div class="isi">
            <h1>BIODATA</h1>
            <div class="foto-bio">
                <div class="container-foto">
                    <button onclick="myFunction()" class="input-image">
                            PILIH FOTO
                            <input class="form-control d-none" type="file" name="file_gambar" accept="image/*" id="formFile" value="PILIH FOTO">
                    </button>
                    <div class="taro-foto">
                        <span>FOTO</span>
                    </div>
                </div>
                <table class="tabel-biodata">
                    <tr class="nama">
                        <td>NAMA</td>
                        <td>tempat nama</td>
                    </tr>
                    <tr class="email">
                        <td>EMAIL</td>
                        <td>tempat email</td>
                    </tr>
                    <tr class="notel">
                        <td>NOMOR TELEPON</td>
                        <td>tempat notel</td>
                    </tr>
                    <tr>
                        <td><a class="ubah-bio" href="#">Ubah Biodata</a></td>
                    </tr>
                </table>
            </div>
            <br>
            <br>
            <h2>DAFTAR ALAMAT</h2>
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
            <br>
            <div>
                <button class="address-button">
                    <a href="#">Tambah Alamat</a> 
                </button>
                <button class="change-address">
                    <a href="#">Ubah Alamat</a> 
                </button> 
            </div>
        </div>
    </div>
</section>
@endsection

<script>
    function myFunction() {
      document.getElementById("formFile").click();
    }
</script>