<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Furriend - About Pet Shop And Care</title>
    <link rel="icon" type="image/png" href="img/logo-furriend.png.png" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

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
          <a href="about.php" class="nav-item nav-link active">About</a>
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

    <!-- About Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row gx-5">
          <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px">
            <div class="position-relative h-100">
              <img
                class="position-absolute w-100 h-100 rounded"
                src="img/about.jpg"
                style="object-fit: cover"
              />
            </div>
          </div>
          <div class="col-lg-7">
            <div class="border-start border-5 border-primary ps-5 mb-5">
              <h6 class="text-primary text-uppercase">About Us</h6>
              <h1 class="display-5 text-uppercase mb-0">
                We Keep Your Pets Happy All Time
              </h1>
            </div>
            <h4 class="text-body mb-4">
              Tingkatkan pengalaman Anda dalam merawat hewan peliharaan bersama
              Furriend
            </h4>
            <div class="bg-light p-4">
              <ul
                class="nav nav-pills justify-content-between mb-3"
                id="pills-tab"
                role="tablist"
              >
                <li class="nav-item w-50" role="presentation">
                  <button
                    class="nav-link text-uppercase w-100 active"
                    id="pills-1-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-1"
                    type="button"
                    role="tab"
                    aria-controls="pills-1"
                    aria-selected="true"
                  >
                    Our Mission
                  </button>
                </li>
                <li class="nav-item w-50" role="presentation">
                  <button
                    class="nav-link text-uppercase w-100"
                    id="pills-2-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-2"
                    type="button"
                    role="tab"
                    aria-controls="pills-2"
                    aria-selected="false"
                  >
                    Our Vision
                  </button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div
                  class="tab-pane fade show active"
                  id="pills-1"
                  role="tabpanel"
                  aria-labelledby="pills-1-tab"
                >
                  <p class="mb-0">
                    Furriend mengutamakan kualitas pemberian layanan kepada
                    pelanggannya agar mereka dapat merasakan kenyamanan.
                    Furriend menerapkan metode excellent service yaitu
                    memberikan pelayanan dengan maksimal secara konsisten
                    sehingga mampu melampaui ekspektasi pelanggan. Salah satu
                    bentuk pelayanan yang diberikan yaitu dengan melakukan
                    pelayanan berdasarkan keterangan jadwal serta tempat yang
                    dipesan oleh pelanggan.
                  </p>
                </div>
                <div
                  class="tab-pane fade"
                  id="pills-2"
                  role="tabpanel"
                  aria-labelledby="pills-2-tab"
                >
                  <p class="mb-0">
                    Furriend memberikan inovasi pengembangan usaha digital pada
                    usaha petshop lokal dalam melayani mekanisme pelayanan
                    secara konvensional sehingga dapat mempermudah proses
                    perawatan pada hewan peliharaan. Kerjasama dengan pihak vet
                    (dokter hewan) menjadi salah satu tujuan penting untuk
                    mendukung kualitas pelayanan perawatan di bidang kesehatan.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5">
      <div class="container py-5">
        <div class="row gx-5 justify-content-start">
          <div class="col-lg-7">
            <div class="border-start border-5 border-dark ps-5 mb-5">
              <h6 class="text-dark text-uppercase">Special Offer</h6>
              <h1 class="display-5 text-uppercase text-white mb-0">
                Save 50% on all items your first order
              </h1>
            </div>
            <p class="text-white mb-4">
              Sebagai bentuk pengenalan awal terhadap website Furriend, maka
              perlu dilakukan promosi dengan menawarkan sebuah layanan dari
              website Furriend kepada pemilik hewan peliharaan untuk melakukan
              uji coba gratis menggunakan akun premium dalam kurun waktu yang
              telah ditentukan serta penawaran diskon dalam pembelian dengan
              tujuan menarik minat dari para pelanggan.
            </p>
            <a href="product.php" class="btn btn-outline-light py-md-3 px-md-5 me-3">Shop Now</a>
            <!-- <a href="" class="btn btn-light py-md-3 px-md-5"
              >Read More</a
            > -->
          </div>
        </div>
      </div>
    </div>
    <!-- Offer End -->

    <!-- Team Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div
          class="border-start border-5 border-primary ps-5 mb-5"
          style="max-width: 600px"
        >
          <h6 class="text-primary text-uppercase">Veterinarians</h6>
          <h1 class="display-5 text-uppercase mb-0">
            Qualified Pets Care Professionals
          </h1>
        </div>
        <div
          class="owl-carousel team-carousel position-relative"
          style="padding-right: 25px"
        >
          <div class="team-item">
            <div class="position-relative overflow-hidden">
              <img class="img-fluid w-100" src="img/Dian.png" alt="" />
              <div class="team-overlay">
                <div class="d-flex align-items-center justify-content-start">
                  <a class="btn btn-light btn-square mx-1" href="#"
                    ><i class="bi bi-twitter"></i
                  ></a>
                  <a class="btn btn-light btn-square mx-1" href="#"
                    ><i class="bi bi-facebook"></i
                  ></a>
                  <a class="btn btn-light btn-square mx-1" href="#"
                    ><i class="bi bi-linkedin"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="bg-light text-center p-4">
              <h5 class="text-uppercase">Drh. Dian, M.Vet</h5>
              <p class="m-0">Dokter</p>
            </div>
          </div>
          <div class="team-item">
            <div class="position-relative overflow-hidden">
              <img class="img-fluid w-100" src="img/Abdi.png" alt="" />
              <div class="team-overlay">
                <div class="d-flex align-items-center justify-content-start">
                  <a class="btn btn-light btn-square mx-1" href="#"
                    ><i class="bi bi-twitter"></i
                  ></a>
                  <a class="btn btn-light btn-square mx-1" href="#"
                    ><i class="bi bi-facebook"></i
                  ></a>
                  <a class="btn btn-light btn-square mx-1" href="#"
                    ><i class="bi bi-linkedin"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="bg-light text-center p-4">
              <h5 class="text-uppercase">Drh. Abdi, S.K.Vet</h5>
              <p class="m-0">Dokter</p>
            </div>
          </div>
          <div class="team-item">
            <div class="position-relative overflow-hidden">
              <img class="img-fluid w-100" src="img/Iqbal.png" alt="" />
              <div class="team-overlay">
                <div class="d-flex align-items-center justify-content-start">
                  <a class="btn btn-light btn-square mx-1" href="#"
                    ><i class="bi bi-twitter"></i
                  ></a>
                  <a class="btn btn-light btn-square mx-1" href="#"
                    ><i class="bi bi-facebook"></i
                  ></a>
                  <a class="btn btn-light btn-square mx-1" href="#"
                    ><i class="bi bi-linkedin"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="bg-light text-center p-4">
              <h5 class="text-uppercase">Drh. Iqbal, S.K.Vet</h5>
              <p class="m-0">Dokter</p>
            </div>
          </div>
          <div class="team-item">
            <div class="position-relative overflow-hidden">
              <img class="img-fluid w-100" src="img/Maria.png" alt="" />
              <div class="team-overlay">
                <div class="d-flex align-items-center justify-content-start">
                  <a class="btn btn-light btn-square mx-1" href="#"
                    ><i class="bi bi-twitter"></i
                  ></a>
                  <a class="btn btn-light btn-square mx-1" href="#"
                    ><i class="bi bi-facebook"></i
                  ></a>
                  <a class="btn btn-light btn-square mx-1" href="#"
                    ><i class="bi bi-linkedin"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="bg-light text-center p-4">
              <h5 class="text-uppercase">Maria, A.Md.Vet</h5>
              <p class="m-0">Asisten</p>
            </div>
          </div>
          <div class="team-item">
            <div class="position-relative overflow-hidden">
              <img class="img-fluid w-100" src="img/Hanly.png" alt="" />
              <div class="team-overlay">
                <div class="d-flex align-items-center justify-content-start">
                  <a class="btn btn-light btn-square mx-1" href="#"
                    ><i class="bi bi-twitter"></i
                  ></a>
                  <a class="btn btn-light btn-square mx-1" href="#"
                    ><i class="bi bi-facebook"></i
                  ></a>
                  <a class="btn btn-light btn-square mx-1" href="#"
                    ><i class="bi bi-linkedin"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="bg-light text-center p-4">
              <h5 class="text-uppercase">Hanly, A.Md.Vet</h5>
              <p class="m-0">Asisten</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Team End -->

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
            <p class="mb-4">Kunjungi tempat kami atau hubungi melalui:</p>
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
              <a class="text-body mb-2" href="#"
                ><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a
              >
              <a class="text-body mb-2" href="service.php"
                ><i class="bi bi-arrow-right text-primary me-2"></i>Our
                Services</a
              >
              <a class="text-body mb-2" href="product.php"
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
