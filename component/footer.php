<!-- footer -->
  <div class="container-fluid" id="footer">
    <div class="row">
      <div class="col-xs-3 text-white">
        <img src="asset/img/Brand1.png">
        <p style="padding-left: 1.3vw;margin-top: 8px; font-family: Eras Demi ITC; font-size: 17px">
        Toko Batik Online yang menawaran berbagai macam produk batik asli Nusantara dan juga memberikan informasi tentang produk batik yang ditawarkan agar pembeli tidak hanya senang menggunakan produk batik namun juga menetahui tentang asal-usul produk yang dinikmati.</p>
       
      </div>
      
      <div class="col-xs-3 col-xs-offset-1 text-white">
        <h3 style="font-family:Cooper Std Black">Hubungi Kami</h3>
        <hr>
        <a href="https://www.facebook.com/bugabagiblog" target="_blank"><img style="width: 40px; height: 40px; margin-right: 1vw;" src="asset/img/facebook.png"></a>
        <a href="https://www.youtube.com" target="_blank"><img style="width: 40px; height: 40px; margin-right: 1vw;" src="asset/img/youtube.png"></a>
        <a href="https://www.instagram.com/blogbugabagi" target="_blank"><img style="width: 40px; height: 40px; margin-right: 1vw;" src="asset/img/instagram.png"></a>

      </div>
      
      <div class="col-xs-3 col-xs-offset-1 text-white">
      <h3 style="font-family:Cooper Std Black">Komentar Pelanggan </h3>
      <hr>
      <br>
        <form action="./proses/komentar.php" method="post" role="form">
          <div class="form-group">
            <label for="nama">Nama : </label>
            <input type="text" class="form-control" name="nama" placeholder="Nama">
          </div>
          <div class="form-group">
            <label for="email">Email : </label>
            <input type="text" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="pesan">Pesan : </label>
            <textarea class="form-control" name="pesan" placeholder="Masukkan pesan "></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
      </div>

    </div>
    <div class="row" id="cpy">
      <div class="col-xs-12">
        <p style="color : white; text-align: center;">&copy; Batiku</p>
      </div>
    </div>
  </div>
<!-- end of footer -->