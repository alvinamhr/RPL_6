@extends('layouts.navver2')

@section('content')
<section class="section">
    <div class="container-cart">
        <div class="header-cart">
            <div class="row gx-3 gy-2 align-items-center">
                <div class="col-sm-4">
                    <div class="form-check header-text-cart" style="text-align:left">
                        <input class="form-check-input" type="checkbox" value="" id="select-all">
                        <label class="form-check-label" for="flexCheckDefault">
                            PRODUK
                        </label>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="header-text-cart">
                        <span>HARGA SATUAN</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="header-text-cart">
                        <span>KUANTITAS</span>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-text-cart">
                        <span>TOTAL HARGA</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-cart">
            <div class="row gx-3 gy-2 align-items-center">
                <div class="col-sm-4">
                    <div class="form-check header-text-cart" style="text-align:left">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label box-product-cart" for="flexCheckDefault">
                            <img src="{{ asset('assets/image/Beranda/Hiburan/1.k-pop.png') }}" width="210px" height="170px" alt="make up">
                            <span class="merk-kategori merk-cart">CLIO</span>
                            <span class="nama-produk produk-cart">Prism Air Shadow Sparkling</span>
                        </label>
                        <button type="button" class="btn-hapus-cart">HAPUS</button>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="text-harga-cart">
                        <span>IDR HARGA SATUAN</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="header-text-cart">
                        <div class="number-input">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
                            <input class="quantity" min="0" name="quantity" value="1" type="number">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="text-harga-cart">
                        <span>IDR TOTAL HARGA</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="ringkasan-belanja-cart">
            <div class="row">
                <div class="col">
                    <div class="ringkasan-text-cart">
                        <span>Ringkasan Belanja</span>
                    </div>
                    <div class="total-harga-cart">
                        <span>Total Harga (4 produk)</span>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="total-harga-cart" style="font-weight: bold; margin-top: 30%">
                        <span>IDR Harga</span>
                    </div>
                </div>
                <div class="col col-lg-2">
                    <button class="btn-checkout" href="#">Checkout</button>
                </div>
              </div>
        </div>
    </div>
</section>
@endsection

<script>
    $('#select-all').click(function(event) {   
    if(this.checked) {
        // Iterate each checkbox
        $(':checkbox').each(function() {
            this.checked = true;                        
        });
    } else {
        $(':checkbox').each(function() {
            this.checked = false;                       
        });
    }
});
</script>
