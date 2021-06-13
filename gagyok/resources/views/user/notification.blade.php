@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container-notifikasi position-relative">
        <div class="home-kategori">
            <span class="status-pesanan">
                STATUS PESANAN
            </span>
            
                <div class="bg-notif">
                    @foreach ($orders as $order)

                    {{-- Kondisi pesanan -> $status --}}
                    {{-- 1 = paket menunggu pembayaran --}}
                    {{-- 2 = paket sedang dikemas --}}
                    {{-- 3 = paket sedang dalam perjalanan --}}
                    {{-- 4 = paket telah diterima --}}

                        @if ($order->status == 1)
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-notif">
                                        <img src="{{ asset('assets/image/Beranda/sliderkecil.png') }}" style="width:200px; height:200px" alt="...">
                                    </div>
                                </div>
                                <div class="col-sm-9" style="margin-top: 60px">
                                    <div class="status-paket">
                                        <span>PESANAN BELUM DIBAYAR</span>
                                        <div class="float-left">Tanggal Pesanan : {{$order->order_date}} </div>
                                    </div>
                                    
                                    <div class="ket-status">
                                        <span>Paket dengan ID {{$order->id}} Menunggu pembayaran!</span>
                                    </div>
                                    <a href="{{url('detailpesanan')}}/{{$order->id}}"><button class="btn-lihat-pesanan"> 
                                        Lihat Pesanan
                                    </button></a>
                                </div>
                            </div>
                        @elseif ($order->status == 2)
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-notif">
                                        <img src="{{ asset('assets/image/Beranda/sliderkecil.png') }}" style="width:200px; height:200px" alt="...">
                                    </div>
                                </div>
                                <div class="col-sm-9" style="margin-top: 60px">
                                    <div class="status-paket">
                                        <span>PAKET DIKEMAS</span> <div class="float-left">Tanggal Pesanan : {{$order->order_date}} </div>
                                    </div>
                                    
                                    <div class="ket-status">
                                        <span>Paket dengan ID {{$order->id}} sedang dikemas oleh penjual!</span>
                                    </div>
                                    <a href="{{url('detailpesanan')}}/{{$order->id}}"><button class="btn-lihat-pesanan">
                                        Lihat Pesanan
                                    </button></a>
                                </div>
                            </div>
                        @elseif ($order->status == 3)
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-notif">
                                        <img src="{{ asset('assets/image/Beranda/sliderkecil.png') }}" style="width:200px; height:200px" alt="...">
                                    </div>
                                </div>
                                <div class="col-sm-9" style="margin-top: 60px">
                                    <div class="status-paket">
                                        <span>PAKET SEDANG DIKIRIM</span>
                                        <div class="float-left">Tanggal Pesanan : {{$order->order_date}} </div>
                                    </div>
                                    <div class="ket-status">
                                        <span >Paket dengan ID {{$order->id}} sedang dikirim oleh kurir!</span>
                                    </div>
                                    <a href="{{url('detailpesanan')}}/{{$order->id}}"><button class="btn-lihat-pesanan">
                                        Lihat Pesanan
                                    </button></a>
                                </div>
                            </div>
                        @elseif ($order->status == 4)
                            <div class="row">
                                <div class="col-auto">
                                    <div class="box-notif">
                                        <img src="{{ asset('assets/image/Beranda/sliderkecil.png') }}" style="width:200px; height:200px" alt="...">
                                    </div>
                                </div>
                                <div class="col-sm-9" style="margin-top: 60px">
                                    
                                    <div class="status-paket">
                                        <span>PAKET BERHASIL DIKIRIMKAN</span>
                                        <div class="order-date">Tanggal Pesanan : {{$order->order_date}} </div>
                                    </div>
                                    <div class="ket-status">
                                        <span>Paket dengan ID {{$order->id}} telah diterima oleh pelanggan!</span>
                                    </div>
                                    
                                    <a href="{{url('detailpesanan')}}/{{$order->id}}"><button class="btn-lihat-pesanan">
                                        Lihat Pesanan
                                    </button></a>
                                    <form class="del-notif "action="{{ url('notification')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id"  value="{{$order->id}}">
                                        <button class="btn-lihat-pesanan" onclick="return confirm('Anda yakin akan menghapus Notifikasi ?')" style="background-color: #c35258;">Hapus Notifikasi</button>
                                    </form>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

        </div>
    </div>
</section>
@endsection
