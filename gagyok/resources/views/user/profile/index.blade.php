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
                    <div>
                        <span> 
                            <img class="taro-foto" src="{{ url('assets/image/profile') }}/{{ $profile->user_picture }}" alt="FOTO">
                        </span>
                    </div>
                </div>
                <table class="tabel-biodata">
                    <tr class="nama">
                        <td>NAMA</td>
                        <td>{{Auth::user()->name}}</td>
                    </tr>
                    <tr class="email">
                        <td>EMAIL</td>
                        <td>{{Auth::user()->email}}</td>
                    </tr>
                    <tr class="notel">
                        <td>NOMOR TELEPON</td>
                        <td>{{$profile->phone_number}}</td>
                    </tr>
                    <tr>
                        <td><a class="ubah-bio" href="/profile/{profile}/edit">Ubah Biodata</a></td>
                    </tr>
                </table>
            </div>
            <br>
            <br>
            <h2>DAFTAR ALAMAT</h2>
            <div class="container-alamat">
                <div class="isi-alamat">
                    <h6>Alamat Tujuan</h6>
                    <p class="alamat">Nama : {{Auth::user()->name}}
                        <br>
                        Nomor Telepon  : {{$profile->phone_number}}
                        <br>
                        Alamat :{{$profile->user_address}}
                        <br>
                        Kota {{$profile->user_city}}, Kabupaten {{$profile->user_disctrict}},Provinsi {{$profile->user_province}}
                        <br>
                        Kode Pos : {{$profile->user_posCode}}
                    </p>
                </div>
            </div>
            <br>
            <div>
                <button class="address-button">
                    <a href="/address/create">Tambah Alamat</a> 
                </button>
                <button class="change-address">
                    <a href="/address/{address}/edit">Ubah Alamat</a> 
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