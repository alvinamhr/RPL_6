@extends('layouts.app')

@section('content')

{{-- INDEX CATEGORY --}}
            @php
                $productByCategory = $categories;
                $count=0;
            @endphp
            @foreach ($productByCategory as $product_category => $categories)
    
    <section class="section">
        <div class="container-kategori">
            <div class="row">
                <div class="col-md-3">
                    <div class="bg-kategori">
                        <a href="/category/{{$product_category}}">
                            <img src="{{ url('assets/image/Kategori') }}/{{$product_category}}.png" width="170px" height="170px" alt="make up">
                        </a>
                        <a class="section-title-kategori" href="/category/{{$product_category}}">
                            {{$product_category}}
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-8">
                    <span class="best-seller">BEST SELLER</span>
                    <div class="container-best-seller">
                        <div class="row-cols-3">
                            @foreach ($categories ->take(4) as $category)  
                                    <div class="col-md-4" style="width: 25rem; height: 25rem;">
                                        <div class="best-seller-box">
                                            <span class="merk-kategori">{{$category->product_name}}</span>
                                            <a href="{{url('produk')}}/{{$category->product_id}}">
                                                <span class="nama-produk">{{$category->product_short_desc}}</span>
                                            </a>
                                            <span class="price">IDR {{number_format($category->product_price)}}</span>
                                            <a href="{{url('produk')}}/{{$category->product_id}}">
                                                <img class="pic-product" src="{{url('assets/image/product')}}/{{$category->product_image}}">
                                            </a>
                                        <div>
                                    </div>
                            @endforeach      
                        </div>
                    </div>
                </div>
            </div>
            <div class="line"></div>
        </div>
    </section>
    @endforeach
@endsection
