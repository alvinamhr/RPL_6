@extends('layouts.app')

@section('content')
    <!-- Make up Section -->
    <section class="section">
        <br>
        <br>

        <h4><a style="color: #6670AD"; href="{{ url('category')}}">Kategori</a></li> > <a style="color: #6670AD" href="{{ url('category') }}/{{$namaCategory->category_name}}">{{$namaCategory->category_name}}</a></h4>
        <div class="container-kategori">
            
            <div class="row">
                <div class="col-md-3">
                    <div class="bg-kategori">
                        <img src="{{ asset('assets/image/Kategori')}}/{{$namaCategory->category_name}}.png" width="170px" height="170px" alt="...">
                        <span class="section-title-kategori">{{$namaCategory->category_name}}</span>
                    </div>
                </div>
                <div class="col-6 col-md-8">
                    <span class="best-seller">BEST SELLER</span>
                    <div class="container-best-seller">
                        <div class="row-cols-3">

                            @foreach ($products as $product)
                                    <div class="col-md-4" style="width: 25rem; height: 25rem;">
                                        <div class="best-seller-box">
                                            
                                            <span class="merk-kategori">{{$product->product_name}}</span>
                                            <a href="{{url('produk')}}/{{$product->product_id}}">
                                                <span class="nama-produk">{{$product->product_short_desc}}</span>
                                            </a>
                                            <span class="price">IDR {{number_format($product->product_price)}}</span>
                                            <a href="{{url('produk')}}/{{$product->product_id}}"><img class="pic-product" src="{{url('assets/image/product')}}/{{$product->product_image}}"></a>
                                            
                                        <div>
                                    </div>
                            @endforeach 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
