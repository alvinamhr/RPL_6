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
            @foreach ($productByCategory as $product_category => $categories)

        {{-- breadcrumb --}}
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Category</li>
                </ol>
            </nav>
        </div>


        <div class="container">
            
            <h2>{{$product_category}}</h2>
            <img src="{{ url('assets/image/Kategori') }}/{{$product_category}}.png"width="300px" height="300px" alt="...">
            <ul>

                
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
            </ul>
        </div>
        @endforeach

@endsection