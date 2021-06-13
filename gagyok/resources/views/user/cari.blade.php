@extends('layouts.app')

@section('css')
    <link href="{{ asset('assets/css/detail-produk.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')  
<section class="section">  
    <div class="bagian-bawah">
        <h5 class="serupa">HASIL YANG SERUPA UNTUK {{$search}}</h5>
        <div class="pembatas">
        </div>

        <div class="kumpulan-serupa">
            @foreach ($results as $result)
                <button class="serupa4">
                    <div class="konten">
                        <a href="{{url('produk')}}/{{$result->product_id}}">
                            <img src="{{ url('assets/image/product') }}/{{$result->product_image }}" alt="foto" class="foto-produk-serupa">
                            <ul class="list-serupa">
                                <li class="serupa-nama-brand">{{$result->product_name }}</li>
                                <li class="serupa-nama-produk">{{$result->product_short_desc }}</li>
                                <li class="serupa-harga">IDR {{number_format($result->product_price)}}</li>
                            </ul>
                        </a>
                    </div>
                </button>
            @endforeach
            
        </div>
    </div>

</section> 
@endsection