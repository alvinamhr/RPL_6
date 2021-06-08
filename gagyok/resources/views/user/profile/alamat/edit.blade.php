<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ganti alamat</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <link href="{{ asset('assets/css/ganti-alamat.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
</head>
<body>
    <div class="container-form-alamat">
        <div class="overlay">
            <div class="container-isi-form">
                <h3 class="judul">Ubah Alamat</h3>
                <form class="form-tambah-alamat" method="POST" action="{{url('address/edit')}}">
                    @csrf
                   
                    <label for="fname" >Alamat Detail</label><br>
                        <input type="text" id="alamat" name="alamat"class="input-nama-alamat @error('alamat') is-invalid @enderror" value="{{$profile->user_address}}" required autocomplete="alamat" autofocus><br>
                        @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror

                        <div class="nama-nomor">
                            <div class="bagian-nama">
                                <label for="fname">Nama Penerima</label><br>
                                <input type="text" id="fname" name="nama_penerima" class="input-nama @error('fname') is-invalid @enderror" required autocomplete="fname" value="{{ $user->name }}" readonly>
                                @error('fname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                            <div class="bagian-nomor">
                                <label for="no-telepon">Nomor Telepon</label><br>
                                <input type="tel" id="notelp" name="notelp"class="input-nomor @error('notelp') is-invalid @enderror" required autocomplete="notelp" value="{{ $profile->phone_number }}" autofocus>
                                @error('notelp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        <div class="kota-pos">
                            <div class="bagian-provinsi">
                                <label for="provinsi">Provinsi</label> <br>
                                <select id="province" name="province" class="input-provinsi">
                                    <option value="" selected disabled>Pilih Provinsi</option>
                                     @foreach($provinces as $key => $province)
                                     <option value="{{$key}}"> {{$province}}</option>
                                     @endforeach
                                </select>
                            </div>
                            <div class="bagian-kabupaten">
                                <label for="city">Kabupaten</label><br>
                                <select id="city" name="city" class="input-kabupaten">
                                </select>
                            </div>
                        </div>
                        <div class="kota-pos">
                            <div class="bagian-kota">
                                <label for="district">Kota/Kec</label><br>
                                <select id="district" name="district" class="input-kota-kec">
                                </select>
                            </div>
                            {{-- <div class="bagian-kodepos">
                                <label for="city">Kode Pos</label><br>
                                <select id="postal_code" name="city" class="input-kodepos">
                                </select>
                            </div> --}}
                        </div>
                    
                        <div class="submits">
                            <a href="/profile"> <input type="button" value="Batal" class="submit-batal"></a>
                            <input type="submit" value="Ubah" class="submit-ubah"> 
                        </div>
                </form>
            </div> 
        </div>
    </div>
    
    {{-- //Sctipt untuk mendapatkan data lokasi --}}
    <script type=text/javascript>
        $('#province').change(function(){
        var provinceID = $(this).val();  
        if(provinceID){
          $.ajax({
            type:"GET",
            url:"{{url('getCity')}}?province_id="+provinceID,
            success:function(res){        
            if(res){
              $("#city").empty();
              $("#city").append('<option>Select</option>');
              $.each(res,function(key,value){
                $("#city").append('<option value="'+key+'">'+value+'</option>');
              });
            
            }else{
              $("#city").empty();
            }
            }
          });
        }else{
          $("#city").empty();
          $("#district").empty();
        }   
        });
        $('#city').on('change',function(){
        var cityID = $(this).val();  
        if(cityID){
          $.ajax({
            type:"GET",
            url:"{{url('getDistrict')}}?city_id="+cityID,
            success:function(res){        
            if(res){
              $("#district").empty();
              $.each(res,function(key,value){
                $("#district").append('<option value="'+key+'">'+value+'</option>');
              });
            
            }else{
              $("#district").empty();
            }
            }
          });
        }else{
          $("#district").empty();
        }
          
        });
      </script>
</body>
</html>

<script>
function foo() {
    alert("Pastikan data anda sudah benar :D");
    return true;
 }</script>