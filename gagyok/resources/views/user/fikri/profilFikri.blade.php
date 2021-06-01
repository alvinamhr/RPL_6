@extends('layouts.app')

@section('content')

       
    <h4>akun > nama</h4>
    <h2>BIODATA</h2>
    <div class="isi">
        <div class="foto-bio">
            <div class="container-foto">
            <button class="photo-button">
                <a class="pilih-foto" href="#">PILIH FOTO</a> 
             </button>
             <br>
             <div class="taro-foto">
                 <p>taro foto</p>
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
            <td class="ubah-bio"><a href="#">Ubah Biodata</a></td>
        </tr>
    </table>
        </div>
    <br>
    <br>
    <h3>DAFTAR ALAMAT</h3>
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
    <div class="buttons">
       <button class="address-button">
       <a class="add-address" href="#">Tambah Alamat</a> 
    </button>
    <button class="change-address">
        <a class="ubah-alamat" href="#">Ubah Alamat</a> 
     </button> 
    </div>
    </div>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <div class="end-gagyok">
        <div class="tentang">
            <p class="atas">GAGYOK</p> 
            <a href="#" class="bawah">tentang gagyok</a> 
        </div>
    </div>

@endsection