<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Gagyok</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Gagyok" />
        <meta name="keywords" content="korean, online shop, korea, k-pop" />

        <!-- favicon -->
        <link rel="shortcut icon" href="assets/image/favicon.png">

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
        <!-- END: Vendor CSS-->

        <!-- Main Css -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/slider.css" rel="stylesheet" type="text/css" />
        <link href="css/colors/default.css" rel="stylesheet">
        <link rel="stylesheet" href="profile.css">

    </head>

    <body>
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Loader -->
        
        <!-- Navbar STart -->
        <div class="nav-container">
            <nav class="navbar navbar-expand-lg fixed-top bg-white shadow">
                <img src="assets/image/logo.png" alt="Gagyok" id="navbar-logo">
                <div class="menu-toggler" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="nav-menu topnav">
                    <li><a href="/home" class="nav-links">BERANDA</a></li>
                    <li><a href="/category" class="nav-links">CATEGORY</a></li>
                    <li><a href="/entertainment" class="nav-links">HIBURAN</a></li>
                    <li class="dropdown">
							<a href="/profile" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/image/user.jpg" class="img-circle" alt="Avatar"  width="20px" height="20px"> <span>{{auth()->user()->name}}</span></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
                </ul>
                <div class="nav-btn">
                    <div class="search">
                        <form action="" method="get">
                            <input type="text" name="search_text" id="search_text" placeholder="Cari...."/>
                            <input type="button" name="search_button" id="search_button" class="search">
                        </form>
                    </div>
                    <div class="chart">
                        <a class="navbar-brand" href="{{ url('/home">
                            <img src="/assets/icons/keranjang.svg">
                        </a>
                    </div>
                    <div class="notif">
                        <a class="navbar-brand" href="{{ url('/home">
                            <img src="/assets/icons/notifikasi.svg">
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    
    <h4>akun > nama</h4>
    <h2>BIODATA</h2>
    <div class="isi">
        <div class="foto-bio">
            <div class="container-foto">
            <button class="photo-button">
                <a class="pilih-foto" href="#">PILIH FOTO</a> 
             </button>
             <br>
             <div class="taro-foto">
                 <p>taro foto</p>
             </div>
        </div>
        <table class="tabel-biodata">
        <tr class="nama">
            <td>NAMA</td>
            <td>tempat nama</td>
        </tr>
        <tr class="email">
            <td>EMAIL</td>
            <td>tempat email</td>
        </tr>
        <tr class="notel">
            <td>NOMOR TELEPON</td>
            <td>tempat notel</td>
        </tr>
        <tr>
            <td class="ubah-bio"><a href="#">Ubah Biodata</a></td>
        </tr>
    </table>
        </div>
    <br>
    <br>
    <h3>DAFTAR ALAMAT</h3>
    <div class="container-alamat">
       <div class="isi-alamat">
           <h6>Nama Tujuan</h6>
           <p class="alamat">Nama
               <br>
            notel
            <br>
            Alamat
            <br>
            kota
           </p>
       </div>
    </div>
    <br>
    <div class="buttons">
       <button class="address-button">
       <a class="add-address" href="#">Tambah Alamat</a> 
    </button>
    <button class="change-address">
        <a class="ubah-alamat" href="#">Ubah Alamat</a> 
     </button> 
    </div>
    </div>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <div class="end-gagyok">
        <div class="tentang">
            <p class="atas">GAGYOK</p> 
            <a href="#" class="bawah">tentang gagyok</a> 
        </div>
    </div>

</body>
</html>
