<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
        <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
        <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="plugin/flexslider.css">
        <script type="text/javascript" src="Jquery/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="plugin/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="js/javascript.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="menu">
          <a href="#">Login</a>
          <a href="#">Daftar</a>
          <a href="#">Tentang Kami</a>
          <a href="#">Bantuan</a>
          <a href="#">Jadi Penyewa</a>
        </div>
      </div>
      <div class="row">
        <div class="menu-utama">
          <a href="#"></a>
          <div class="search-box">
            <form class="" action="index.html" method="post" style="margin:auto;max-width:500px">
              <input type="text" placeholder="Search.." >
              <input type="button" name="search" value="">
            </form>
          </div>
          <a href="#"><img src="<?=base_url()?>assets/img/icon-keranjang.png" alt=""></a>
          <a href="#"><img src="<?=base_url()?>assets/img/icon-toko.png" alt=""></a>

        </div>
      </div>
    </div>
    <div class="container content-sewa">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 kategori">
            <div class="row">
              <div class="judul-kecil">Kategori</div>
              <div class="list-kategori">
                <ul>
                  <li>Peralatan Hiking</li>
                  <li>Kendaraan</li>
                  <li>Jas dan Perlengkapan Resmi</li>
                  <li>Alat Bangunan</li>
                  <li>Barang Elektronik</li>
                  <li>Sepatu</li>
                  <li>Sepatu</li>
                  <li>Kategori lainnya</li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="judul-kecil">Filter</div>
            </div>
            <div class="row">
                  <div class="judul-kecil-filter">Daerah</div>
                  <div class="filter filter-daerah">
                    <input type="" name="" value="">
                  </div>
            </div>
            <div class="row">
                  <div class="judul-kecil-filter">Harga</div>
                  <div class="filter filter-harga">
                    <ul>
                      <li><input type="checkbox" name="" value=""> Harga < Rp.50.0000 </li>
                      <li><input type="checkbox" name="" value=""> Harga < Rp.100.0000 </li>
                      <li><input type="checkbox" name="" value=""> Harga < Rp.500.0000 </li>
                      <li><input type="checkbox" name="" value=""> Harga < Rp.1.000.0000 </li>
                    </ul>
                  </div>
            </div>
            <div class="row">
                    <div class="judul-kecil-filter">Stok</div>
                    <div class="filter filter-stok">
                      <ul>
                        <li><input type="checkbox" name="" value=""> Stok >= 2 </li>
                        <li><input type="checkbox" name="" value=""> Stok >= 5 </li>
                        <li><input type="checkbox" name="" value=""> Stok >= 10 </li>
                        <li><input type="checkbox" name="" value=""> Stok >= 20 </li>
                        <li><input type="checkbox" name="" value=""> Stok >= 50 </li>
                      </ul>
                    </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 list-item">
          <div class="judul-kecil">Peralatan Gunung</div>
          <div class="row">
            <a class="col-lg-4 col-md-4 col-sm-6 " href="#"><div class="list-item-grid">
                <img src="<?=base_url()?>assets/img/newproduct-1.jpg" alt="">
                <div class="Judul-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </div>
                <div class="harga-item">
                  Rp.15.000/bln
                </div>
            </div></a>
            <a class="col-lg-4 col-md-4 col-sm-6 " href="#"><div class="list-item-grid">
                <img src="<?=base_url()?>assets/img/newproduct-1.jpg" alt="">
                <div class="Judul-item">Sepatu Nike</div>
            </div></a>
            <a class="col-lg-4 col-md-4 col-sm-6 " href="#"><div class="list-item-grid">
                <img src="<?=base_url()?>assets/img/newproduct-1.jpg" alt="">
                <div class="Judul-item">Sepatu Nike</div>
            </div></a>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
        <div class="row">
          <div class="footer">
            <div class="container">


            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                  <h5>Information</h5>
                  <ul>
                    <li><a href="#">Tentang blabla</a></li>
                    <li><a href="#">Karir</a></li>
                    <li><a href="#">Hubungi Kami</a></li>
                    <li><a href="#">Alamat Kantor</a></li>
                    <li><a href="#">Karir di blabla</a></li>
                    <li><a href="#">Aturan Penyewa</a></li>
                    <li><a href="#">Karir di blabla</a></li>
                    <li><a href="#">Cara menggunakan sewaku</a></li>


                  </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                  <h5>Bantuan</h5>
                  <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Syarat & Ketentuan</a></li>
                    <li><a href="#">Kebijakan Privasi</a></li>
                    <li><a href="#">Cara Berbelanja</a> </li>
                    <li><a href="#">Tips Sewa yang aman</a></li>

                  </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                  <h5>Pembayaran</h5>
                  <ul>
                    <li><a href="#"><img src="<?=base_url()?>assets/img/icon-instagram.png" alt=""> Instagram </a> </li>
                    <li><a href="#"><img src="<?=base_url()?>assets/img/icon-facebook.png" alt=""> facebook </a> </li>
                    <li><a href="#"><img src="<?=base_url()?>assets/img/icon-twitter.png" alt=""> Twitter </a> </li>
                    <li><a href="#"><img src="<?=base_url()?>assets/img/icon-youtube.png" alt=""> Youtube </a> </li>
                    <li><a href="#"><img src="<?=base_url()?>assets/img/icon-email.png" alt=""> Email </a> </li>
                  </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                  <h5>Sewaku.com</h5>
                  <p>Sewaku adalah sebuah website di Indonesia yang menawarkan transaksi sewa menyewa yang mempermudah
                     masyarakat sekitar dalam mencari barang maupun penghasilan yang berupa uang. Kami membuat
                     masyarakat mudah dalam mencari barang ataupun menyewakan, selain itu, desain dari website ini dibuat
                     semenarik mungkin sehingga orang awam pun tidak kesusahan saat menggunakan website kami. <br><br>

                     Buka toko sewamu di sewaku.com untuk mendapatkan penghasilan tambahan atau cari barang yang dibutuhkan di Sewaku
                     yang didalamnya terdapat fitur yang menarik. <br><br>

                     &copy; 2018 Sewaku.com, PT
                   </p>
                </div>
              </div>
              </div>
            </div>
        </div>
      </div>
  </body>
</html>
