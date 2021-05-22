@extends('layouts.auth')

@section('content')
    <!-- BEGIN: Content-->
    <section class="d-flex align-items-center justify-content-center mb-5 p-2">
        <div class="bg-pallette shadow rounded pt-2 m-2 col-lg-10" href="style.css">
            @if (session('status'))
                <div class="alert {{ session('status') == "Your password has been reset!" ? "alert-success": "alert-danger" }} text-center" role="alert"> 
                    {{ session('status') }} 
                </div>
            @endif
            
            <form action="{{ route('login') }}" method="post">
                @csrf

                <h4 class="txt-white mb-2 text-center body-font-bold">Masuk</h4>  
                <div class="form-group position-relative">
                    <input 
                        type="email" 
                        placeholder="Email"
                        name="email" 
                        id="email" 
                        class="form-control shadow rounded" 
                    >
                    @error('email')
                        <div class="text-danger text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group position-relative">
                    <input 
                        type="password" 
                        placeholder="Kata Sandi"
                        name="password"
                        id="password"
                        class="form-control shadow rounded"
                    >
                    @error('password')
                        <div class="text-danger text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember">
                        <label class="txt-white custom-control-label body-font-normal" for="customCheck1">Remember me</label>
                    </div>
                    <div class="mb-2 text-right">
                        <a href="{{ url('/forgot_password') }}" class="txt-white body-font-normal hover">Lupa kata sandi?</a>
                    </div>
                </div>
                <div>
                    <a>
                </div>
                <button type="submit" class="mb-2 bg-white txt-red btn first w-100 body-font-bold">Masuk</button>
                <div >
                        <p class="txt-white text-right body-font-normal"> Belum punya akun? <a href="{{ url('/register') }}" class="body-font-bold txt-white">Daftar</a></p>
                </div>
            </form>
        </div>
    </section>
@endsection