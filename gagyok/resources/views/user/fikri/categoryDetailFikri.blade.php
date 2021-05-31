@extends('layouts.app')

@section('content')


{{-- Nanti dihapus aja ini cuman buat card yang dibawahnya ngak ketutupan sama navbar gatau navbarnyya gimana supaya ngak menutup konten--}}
<div class="container" style.margin-top ="200px">            
    <br>
    <br>
    <br>
    <br>
</div>
{{-- sampai disini dihapus saja --}}


        @php
        $productByCategory = $categories;
        @endphp

        {{-- breadcrumb --}}
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$namaCategory->category_name}}</li>
                </ol>
            </nav>
        </div>


        <h1 style="text-align: center;">{{$namaCategory->category_name}}</h1>
        <p class="aligncenter">
            <img src="{{ url('assets/image/Kategori') }}/{{$namaCategory->category_name}}.png" width="300px" height="300px" style="margin-left: 40%">
        </p>


        @foreach ($categories as $category)
        <div class="col-md-4" style="width: 25rem; height: 25rem;" >
            <div class="align-items-center bg-home" style="margin-left:5%">
                <img src="{{ url('assets/image/product') }}/{{$category->product_image}}"width="300px" height="300px" alt="...">
                <button href="{{url('produk')}}/{{$category->product_id}}" type="button" class="caption-home">{{$category->product_name}}</button>
                <p class="card-text">{{$category->product_short_desc}}</p>
                <a href="{{url('produk')}}/{{$category->product_id}}" class="btn-danger"> lihat detail</a>
            </div>
            
        </div>


        @endforeach

@endsection