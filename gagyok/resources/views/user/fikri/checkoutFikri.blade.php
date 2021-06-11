@extends('layouts.navver2')

@section('content')

{{-- Nanti dihapus aja ini cuman buat konten yang dibawahnya ngak ketutupan sama navbar, gatau gimana supaya navbarnya ngak menutup konten--}}
<div class="container" style.margin-top ="200px">            
    <br>
    <br>
    <br>
    <br>
</div>
{{-- sampai disini dihapus saja --}}

        {{-- ini intinya --}}
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="col-md-12 mt-2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Check Out</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h3><i class="fa fa-shopping-cart"></i> Check Out</h3>
                            @if(!empty($orders))
                            <p align="right">Tanggal Pesan : {{ $orders->order_date }}</p>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Total Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach($order_details as $order_detail)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>
                                            <img src="{{ url('assets/image/product') }}/{{ $order_detail->product->product_image }}" width="100" alt="...">
                                        </td>
                                        <td>{{ $order_detail->product->product_name }}</td>
                                        <td>{{ $order_detail->qty }} buah</td>
                                        <td align="right">Rp. {{ number_format($order_detail->product->product_price) }}</td>
                                        <td align="right">Rp. {{ number_format($order_detail->price) }}</td>
                                        <td>
                                            <form action="{{ url('checkout')}}/{{$order_detail->id}}" method="post">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data ?');"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                        <td align="right"><strong>Rp. {{ number_format($orders->subtotal) }}</strong></td>
                                        <td>
                                            <a href="{{ url('konfirmasi-check-out') }}" class="btn btn-success" onclick="return confirm('Anda yakin akan Check Out ?');">
                                                <i class="fa fa-shopping-cart"></i> Check Out
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            @endif
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
@endsection