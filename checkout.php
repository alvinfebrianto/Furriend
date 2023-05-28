<?php
session_start();
//koneksi ke database
include 'koneksi.php';

// jika tidak tidak ada session pelanggan pindahkan ke login
if (!isset($_SESSION["pelanggan"]))
{
  echo "<script>alert('Silahkan Login terlebih dahulu');</script>";
  echo "<script>location='login.php';</script>";
}
elseif (empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"]))
{
  echo "<script>alert('Keranjang masih kosong, silahkan belanja terlebih dahulu');</script>";
  echo "<script>location='product.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Furriend - Check Out Pet Shop and Care</title>
    <link rel="icon" type="image/png" href="img/logo-furriend.png.png" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Topbar Start -->
    <div class="container-fluid border-bottom d-none d-lg-block">
      <div class="row gx-0">
        <div class="col-lg-4 text-center py-2">
          <div class="d-inline-flex align-items-center">
            <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
            <div class="text-start">
              <h6 class="text-uppercase mb-1">Our Office</h6>
              <span>Asembagus, Surabaya City, Indonesia</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 text-center border-start border-end py-2">
          <div class="d-inline-flex align-items-center">
            <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
            <div class="text-start">
              <h6 class="text-uppercase mb-1">Email Us</h6>
              <span>furriend@furriend.io</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 text-center py-2">
          <div class="d-inline-flex align-items-center">
            <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
            <div class="text-start">
              <h6 class="text-uppercase mb-1">Call Us</h6>
              <span>+62 838 5722 4226</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0 mb-5"
    >
      <a href="index.php" class="navbar-brand ms-lg-5">
        <h2 class="m-0 text-uppercase text-dark">
          <i class="bi bi-shop fs-1 text-primary me-3"></i>Pet Shop and Care
        </h2>
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
          <a href="index.php" class="nav-item nav-link">Home</a>
          <a href="about.php" class="nav-item nav-link">About</a>
          <a href="service.php" class="nav-item nav-link">Service</a>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Product</a
            >
            <div class="dropdown-menu m-0">
              <a href="product.php" class="dropdown-item">Shop Product</a>
              <a href="keranjang.php" class="dropdown-item">Keranjang</a>
              <!-- jika sudah login -->
              <?php if(isset($_SESSION["pelanggan"])): ?>
              <a href="riwayat.php" class="dropdown-item">Riwayat Belanja</a>
              <?php endif ?>
              <a href="checkout.php" class="dropdown-item">Check Out</a>
            </div>
          </div>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Pages</a
            >
            <div class="dropdown-menu m-0">
              <a href="price.php" class="dropdown-item">Pricing Plan</a>
              <a href="team.php" class="dropdown-item">Veterinarians</a>
              <a href="testimonial.php" class="dropdown-item">Testimonial</a>
              <a href="blog.php" class="dropdown-item">Blog</a>
              <!-- jika sudah login -->
              <?php if(isset($_SESSION["pelanggan"])): ?>
              <a href="logout.php" class="dropdown-item">Logout</a>
              <?php else: ?>
              <a href="login.php" class="dropdown-item">Login</a>
              <a href="daftar.php" class="dropdown-item">Registrasi</a>
              <?php endif ?>
            </div>
          </div>
          <a
            href="contact.php"
            class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5"
            >Contact <i class="bi bi-arrow-right"></i
          ></a>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Content Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div
          class="border-start border-5 border-primary ps-5 mb-5"
          style="max-width: 600px"
        >
          <h6 class="text-primary text-uppercase">Check Out</h6>
          <h1 class="display-5 text-uppercase mb-0">
            Keranjang Belanja
          </h1>
        </div>
        <div class="container">
          <hr>
          <table class="table table-bordered">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Produk</th>
                      <th>Harga</th>
                      <th>Jumlah</th>
                      <th>SubHarga</th>
                  </tr>
              </thead>
              <tbody>

                  <?php $nomor = 1; ?>
                  <?php $totalbelanja = 0; ?>
                  <?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah): ?>
                  <!-- Menampilkan produk yang diperulangkan berdasarkan id_produk -->
                  <?php
                  $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
                  $pecah = $ambil->fetch_assoc();
                  $subharga = $pecah["harga_produk"]*$jumlah;
                  ?>

                  <tr>
                      <td><?php echo $nomor;?></td>
                      <td><?php echo $pecah['nama_produk']; ?></td>
                      <td>Rp <?php echo number_format($pecah['harga_produk']); ?></td>
                      <td><?php echo $jumlah; ?></td>
                      <td>Rp <?php echo number_format($subharga); ?></td>
                  </tr>
                  <?php $nomor++; ?>
                  <?php $totalbelanja += $subharga; ?>
                  <?php endforeach ?>
              </tbody>
              <tfoot>
                  <tr>
                      <th colspan="4">Total Belanja</th>
                      <th>Rp <?php echo number_format($totalbelanja)?></th>
                  </tr>
              </tfoot>
          </table>
          
          <form method="post">
              <div class="row">
                  <div class="col-md-4">
                      <div class="form-group">
                          <input type="text" class="form-control" readonly value="<?php echo $_SESSION["pelanggan"]['nama_pelanggan']?>" >    
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="form-group">
                          <input type="text" class="form-control" readonly value="<?php echo $_SESSION["pelanggan"]['telepon_pelanggan']?>" >    
                      </div>
                  </div>
                  <div class="col-md-4">
                      <select class="form-control" name="id_ongkir">
                          <option value="">Pilih Ongkos Kirim</option>
                          <?php 
                          $ambil = $koneksi->query("SELECT * FROM ongkir");
                          while ($perongkir = $ambil->fetch_assoc()) {
                          ?>
                          <option value="<?php echo $perongkir["id_ongkir"] ?>">
                              <?php echo $perongkir['nama_kota']?> -
                              Rp <?php echo number_format($perongkir['tarif']) ?>
                          </option>
                          
                          <?php } ?>
                      </select>
                  </div> 
              </div>
              <div class="from-group">
                <br>
                <label>Alamat Lengkap Pengiriman</label>
                <textarea class="form-control" name="alamat_pengiriman" placeholder="Masukkan alamat lengkap pengiriman (kodepos)"></textarea>
              </div>
              <br>
              <button class="btn btn-primary" name="checkout">Check Out</button>
          </form>
          <?php
          if (isset($_POST["checkout"]))
          {
              $id_pelanggan = $_SESSION["pelanggan"]['id_pelanggan'];
              $id_ongkir = $_POST["id_ongkir"];
              $tanggal_pembelian = date("Y-m-d");
              $alamat_pengiriman = $_POST["alamat_pengiriman"];
              
              $ambil = $koneksi->query("SELECT * FROM ongkir WHERE id_ongkir='$id_ongkir'");
              $arrayongkir = $ambil->fetch_assoc();
              $nama_kota = $arrayongkir['nama_kota'];
              $tarif = $arrayongkir['tarif'];
              $total_pembelian = $totalbelanja + $tarif;

              //Menyimpan data ke tabel pembelian
              $koneksi->query("INSERT INTO pembelian (id_pelanggan, id_ongkir, tanggal_pembelian, total_pembelian, nama_kota, tarif, alamat_pengiriman)
              VALUES ('$id_pelanggan', '$id_ongkir', '$tanggal_pembelian', '$total_pembelian', '$nama_kota', '$tarif', '$alamat_pengiriman')");

              //Mendapatkan id_pembelian barusan
              $id_pembelian_barusan = $koneksi->insert_id;

              foreach ($_SESSION["keranjang"] as $id_produk => $jumlah)
              {
                  //mendapatkan data produk berdasarkan id_produk
                  $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
                  $perproduk = $ambil->fetch_assoc();

                  $nama = $perproduk['nama_produk'];
                  $harga = $perproduk['harga_produk'];
                  $berat = $perproduk['berat_produk'];
                  $subberat = $perproduk['berat_produk']*$jumlah;
                  $subharga = $perproduk['harga_produk']*$jumlah;

                  $koneksi->query("INSERT INTO pembelian_produk
                  (id_pembelian, id_produk, nama, harga, berat, subberat, subharga, jumlah) VALUES
                  ('$id_pembelian_barusan', '$id_produk', '$nama', '$harga', '$berat', '$subberat', '$subharga', '$jumlah')");

                  //update stok_produk
                  $koneksi->query("UPDATE produk SET stok_produk=stok_produk - $jumlah WHERE id_produk='$id_produk'");
              }

              //Mengosongkan keranjang
              unset($_SESSION["keranjang"]);


              //Tampilan dialihkan ke halaman nota
              echo "<script>alert('Pembelian sukses');</script>";
              echo "<script>location='nota.php?id=$id_pembelian_barusan';</script>";

          }
          ?>
        </div>
      </div>
    </div>
    <!-- Content End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-light mt-5 py-5">
      <div class="container pt-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <h5
              class="text-uppercase border-start border-5 border-primary ps-3 mb-4"
            >
              Get In Touch
            </h5>
            <p class="mb-4">Kunjugi tempat kami atau hubungi melalui:</p>
            <p class="mb-2">
              <i class="bi bi-geo-alt text-primary me-2"></i>Asembagus, Surabaya
              City, Indonesia
            </p>
            <p class="mb-2">
              <i class="bi bi-envelope-open text-primary me-2"></i
              >furriend@furriend.io
            </p>
            <p class="mb-0">
              <i class="bi bi-telephone text-primary me-2"></i>+62 838 5722 4226
            </p>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5
              class="text-uppercase border-start border-5 border-primary ps-3 mb-4"
            >
              Quick Links
            </h5>
            <div class="d-flex flex-column justify-content-start">
              <a class="text-body mb-2" href="index.php"
                ><i class="bi bi-arrow-right text-primary me-2"></i>Home</a
              >
              <a class="text-body mb-2" href="about.php"
                ><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a
              >
              <a class="text-body mb-2" href="service.php"
                ><i class="bi bi-arrow-right text-primary me-2"></i>Our
                Services</a
              >
              <a class="text-body mb-2" href="#"
                ><i class="bi bi-arrow-right text-primary me-2"></i>Our
                Products</a
              >
              <a class="text-body" href="contact.php"
                ><i class="bi bi-arrow-right text-primary me-2"></i>Contact
                Us</a
              >
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5
              class="text-uppercase border-start border-5 border-primary ps-3 mb-4"
            >
              Popular Links
            </h5>
            <div class="d-flex flex-column justify-content-start">
              <a class="text-body mb-2" href="price.php"
                ><i class="bi bi-arrow-right text-primary me-2"></i>Pricing
                Plan</a
              >
              <a class="text-body mb-2" href="team.php"
                ><i class="bi bi-arrow-right text-primary me-2"></i
                >Veterinarians</a
              >
              <a class="text-body mb-2" href="testimonial.php"
                ><i class="bi bi-arrow-right text-primary me-2"></i
                >Testimonial</a
              >
              <a class="text-body mb-2" href="blog.php"
                ><i class="bi bi-arrow-right text-primary me-2"></i>Latest
                Blog</a
              >
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h5
              class="text-uppercase border-start border-5 border-primary ps-3 mb-4"
            >
              Newsletter
            </h5>
            <form action="daftar.php">
              <div class="input-group">
                <input
                  type="text"
                  class="form-control p-3"
                  placeholder="Your Email"
                />
                <button class="btn btn-primary">Sign Up</button>
              </div>
            </form>
            <h6 class="text-uppercase mt-4 mb-3">Follow Us</h6>
            <div class="d-flex">
              <a class="btn btn-outline-primary btn-square me-2" href=""
                ><i class="bi bi-twitter"></i
              ></a>
              <a class="btn btn-outline-primary btn-square me-2" href=""
                ><i class="bi bi-facebook"></i
              ></a>
              <a class="btn btn-outline-primary btn-square me-2" href=""
                ><i class="bi bi-linkedin"></i
              ></a>
              <a class="btn btn-outline-primary btn-square" href=""
                ><i class="bi bi-youtube"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 py-4">
      <div class="container">
        <div class="row g-5">
          <div class="col-md-6 text-center text-md-start">
            <p class="mb-md-0">
              &copy;
              <a class="text-white" href="">Furriend</a>. All Rights Reserved.
            </p>
          </div>
          <div class="col-md-6 text-center text-md-end">
            <p class="mb-0">
              Designed by
              <a class="text-white" href="">Kelompok 4 - Kewirausahaan</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary py-3 fs-4 back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>
</html>
