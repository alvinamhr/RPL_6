@extends('layouts.app')

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
                        <span>TIDAK ADA PRODUK DI KERANJANG ANDA</span>
                        <br>
                        <br>
                        <br>
                        <span>Lanjutkan Belanja?</span>
                        <br>
                        <br>
                        <br>
                        <a href="/home"> <button type="submit" class="btn btn-primary mt-2"><i class="fa fa-shopping-cart"></i> Kembali Ke Beranda</button></a>
                    </div>
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
