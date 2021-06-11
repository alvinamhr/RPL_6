<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah-bio</title>
    <link href="{{ asset('assets/css/ubahbio.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
</head>
<body>
    <div class="container-form">
        <div class="overlay">
            <div class="container-isi-form" >
                
                <h3 class="judul">Ubah Biodata</h3>
                <form class="form-ubah-bio" method="POST" action="{{url('profile/edit')}}">
                    @csrf
                    <label for="fname">Nama</label><br>
                        <input type="text" id="fname" name="fname" class="input-nama @error('fname') is-invalid @enderror" value="{{ $user->name }}" required autocomplete="fname" autofocus><br>
                        @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    <label for="email">Email</label><br>
                        <input type="text" id="email" name="email" class="input-email @error('email') is-invalid @enderror" value="{{ $user->email }}" required autocomplete="email" autofocus><br>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    <label for="notelp">Nomor Telepon</label><br>
                        <input type="tel" id="notelp" name="notelp" class="input-notelp @error('notelp') is-invalid @enderror" value="{{ $profile->phone_number }}" required autocomplete="notelp" autofocus><br>
                        @error('notelp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    {{-- <label for="password">Password</label> <br>
                        <input type="password" id="password" name="password" class="input-notelp @error('password') is-invalid @enderror"><br>
                        @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    <label for="password-confirm">Konfirmasi Password</label><br>
                        <input type="password" id="password-confirm" name="password_confirmation" class="input-notelp @error('password') is-invalid @enderror"><br> --}}

                    <div class="submits">
                        <a href="/profile"><input type= "button" value="Batal" class="submit-batal"></a>
                        <input type="submit" value="Ubah" class="submit-ubah">
                    </div>
                </form>   
            </div>
        </div> 
    </div>
</body>
</html>