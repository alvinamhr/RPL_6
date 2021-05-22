@extends('layouts.auth')

@section('content')
    <section class="d-flex align-items-center justify-content-center mb-5">
        <div class="bg-pallette shadow rounded p-2 m-2 col-lg-10">
            <form action="{{ route('register') }}" method="post">
                @csrf

                <h4 class="txt-white mb-2 text-center body-font-bold">Daftar</h4>  
                <div class="form-group position-relative">
                    <input 
                        type="text" 
                        placeholder="Nama"
                        name="name" 
                        id="name" 
                        class="form-control shadow rounded" 
                    >
                    @error('name')
                        <div class="text-danger text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
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
                        placeholder="Password"
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
                <div class="form-group position-relative">
                    <input 
                        type="password" 
                        placeholder="Confirm Password"
                        name="password_confirmation"
                        id="password_confirmation"
                        class="form-control shadow rounded"
                    >
                </div>
                <button type="submit" class="mb-2 bg-white txt-red btn first w-100 body-font-bold">Daftar</button>
                <div>
                    <p class="txt-white text-right body-font-normal"> Sudah punya akun? <a href="{{ url('/login') }}" class="body-font-bold txt-white">Masuk</a></p>
                </div>
            </form>
        </div>
    </section>
@endsection
