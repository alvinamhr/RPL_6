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

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('category') }}/{{ $product->product_category}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('category') }}/{{ $product->product_category}}">{{ $product->product_category}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $product->product_name }}</li>
              </ol>
            </nav>
        </div>


        <div class="col-md-12 mt-1">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ url('assets/image/product') }}/{{ $product->product_image }}" class="rounded mx-auto d-block" width="100%" alt=""> 
                        </div>
                        <div class="col-md-6 mt-5">
                            <h2>{{ $product->product_name }}</h2>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp. {{ number_format($product->product_price) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Stok</td>
                                        <td>:</td>
                                        <td>{{ number_format($product->product_stock) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td>{{ $product->product_long_desc }}</td>
                                    </tr>
                                   
                                    <tr>
                                        <td>Jumlah Pesan</td>
                                        <td>:</td>
                                        <td>
                                             <form method="post" action="{{ url('InsertCart') }}/{{ $product->product_id }}" >
                                                @csrf
                                                <input type="text" name="order_qty" class="form-control" required="">
                                                <button type="submit" class="btn btn-primary mt-2"><i class="fa fa-shopping-cart"></i> Masukkan Keranjang</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection