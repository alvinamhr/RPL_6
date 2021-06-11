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
                    <form method="POST" enctype="multipart/form-data" id="upload-image" action="{{ url('address/edit') }}" >
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {{-- <button onclick="myFunction()" class="input-image"> --}}
                                        {{-- PILIH FOTO --}}
                                    {{-- <input class="form-control d-none" type="file" id="image" name="file_gambar" value="PILIH FOTO"> --}}
                                    <input class="input-image " type="file" name="image" placeholder="Choose image" id="image" accept="image/*" value="pilih foto">
                                    {{-- </button> --}}
                                      @error('image')
                                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                      @enderror
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <img id="preview-image-before-upload" src="{{url('storage/assets/image/profile')}}/{{$profile->user_picture}}" alt="preview image""
                                    alt="preview image" width="235px" height="240px">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="save-ava" id="submit">Save Avatar</button>
                            </div>
                        </div>     
                    </form>
                </div>
                <table class="tabel-biodata">
                    <tr class="nama">
                        <td width="600px">NAMA</td>
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
                        <td><a class="ubah-bio" href="/profile/edit">Ubah Biodata</a></td>
                    </tr>
                </table>
            </div>
            <br>
            <br>
            <h2>DAFTAR ALAMAT</h2>
            <div class="container-alamat">
                <div class="isi-alamat">
                    <h6>Nama Tujuan</h6>
                    <p class="alamat">Nama : {{Auth::user()->name}}
                        <br>
                        Nomor Telepon  : {{$profile->phone_number}}
                        <br>
                        Alamat :{{$profile->user_address}}
                        <br>
                        Kota {{$profile->user_disctrict}}, Kabupaten {{$profile->user_city}},Provinsi {{$profile->user_province}}
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
                    <a href="/address/edit">Ubah Alamat</a> 
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

    $(document).ready(function (e) {
   
 $('#image').change(function(){
          
  let reader = new FileReader();
  reader.onload = (e) => { 
    $('#preview-image-before-upload').attr('src', e.target.result); 
  }
  reader.readAsDataURL(this.files[0]); 
 
 });
 
});
</script>

@error('image')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror

<script type="text/javascript">
    $(document).ready(function (e) {
     
       
       $('#image').change(function(){
                
        let reader = new FileReader();
     
        reader.onload = (e) => { 
     
          $('#preview-image-before-upload').attr('src', e.target.result); 
        }
     
        reader.readAsDataURL(this.files[0]); 
       
       });
       
    });
</script>