<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>PET SHOP - Blog Pet Shop Website Template</title>
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

    <!-- Blog Start -->
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-8">
          <!-- Blog Detail Start -->
          <div class="mb-5">
            <img
              class="img-fluid w-100 rounded mb-5"
              src="img/blog-1.jpg"
              alt=""
            />
            <h1 class="text-uppercase mb-4">
              How much should we feed the pets?
            </h1>
            <p>
              Ini adalah panduan pemberian makan umum yang akan Anda lihat pada
              sebagian besar kantong makanan anjing. Panduan pemberian makanan
              ini seharusnya tidak menjadi satu-satunya hal yang menjadi dasar
              asupan makanan anjing Anda. Pemilik harus mempertimbangkan
              kebutuhan anjing mereka masing-masing. Tidak ada yang namanya
              panduan pemberian makan yang universal. Usia, berat badan, dan
              tingkat aktivitas anjing Anda juga memengaruhi seberapa banyak dan
              seberapa sering Anda harus memberi makan anjing Anda.
            </p>
            <p>
              Dengan asumsi anjing Anda memiliki tingkat aktivitas yang khas,
              ras mainan harus diberi makan sekitar ¼ cangkir hingga 1 cangkir,
              ras kecil harus diberi makan sekitar 1 cangkir hingga 1 2/5
              cangkir, ras sedang harus diberi makan sekitar 2 cangkir hingga 2
              2/3 cangkir, dan ras besar harus diberi makan sekitar 2 4/5
              cangkir hingga 3 cangkir. Anjing senior harus diberi makan lebih
              sedikit daripada anjing dewasa. Karena mereka memiliki tingkat
              energi yang lebih rendah, mengurangi jumlah makanan harus
              dipertimbangkan untuk menjaga berat badan anjing Anda tetap sehat.
              Anjing dewasa dan anjing senior harus diberi makan dua kali
              sehari.
            </p>
            <p>
              Untuk anjing yang sedang hamil, hal ini sedikit berbeda. Selama 6
              minggu pertama kehamilan, Anda harus meningkatkan asupan makanan
              anjing Anda secara minimal. Anda harus mulai meningkatkan makanan
              sebesar 20% selama minggu ke 7 hingga 9. Anjing yang sedang
              menyusui juga merupakan kasus khusus. Segera setelah melahirkan,
              Anda harus memberi makan anjing Anda hingga 50% lebih banyak
              makanan anjing daripada jumlah normalnya. Selama masa puncak
              laktasi, yaitu sekitar 4 hingga 5 minggu, Anda dapat memberi makan
              anjing Anda hingga 30% lebih banyak dari jumlah normalnya. Anjing
              yang sedang menyusui harus diberi makan tiga kali sehari dengan
              porsi yang sama.
            </p>
          </div>
          <!-- Blog Detail End -->

          <!-- Comment List Start -->
          <div class="mb-5">
            <h3
              class="text-uppercase border-start border-5 border-primary ps-3 mb-4"
            >
              3 Comments
            </h3>
            <div class="d-flex mb-4">
              <img
                src="img/testimonial-2.jpg"
                class="img-fluid"
                style="width: 45px; height: 45px"
              />
              <div class="ps-3">
                <h6>
                  <a href="">Iwan</a> <small><i>11 March 2023</i></small>
                </h6>
                <p>
                  Panduan ini sangat berguna dalam pemberian makan kepada hewan
                  peliharaan, khususnya anjing. Namun, perlu diingat bahwa
                  setiap hewan memiliki kebutuhan makanan yang berbeda, dan
                  pemilik harus memperhatikan faktor-faktor seperti usia, berat
                  badan, dan tingkat aktivitas individu.
                </p>
                <button class="btn btn-sm btn-light">Reply</button>
              </div>
            </div>
            <div class="d-flex mb-4">
              <img
                src="img/user.jpg"
                class="img-fluid"
                style="width: 45px; height: 45px"
              />
              <div class="ps-3">
                <h6>
                  <a href="">Yusuf</a> <small><i>11 March 2023</i></small>
                </h6>
                <p>
                  Saya sudah mencoba melakukannya selama 2 minggu, namun hewan
                  peliharaan saya selalu tidak habis ketika diberikan makanan
                  sesuai dengan takaran tersebut.
                </p>
                <button class="btn btn-sm btn-light">Reply</button>
              </div>
            </div>
            <div class="d-flex ms-5 mb-4">
              <img
                src="img/testimonial-1.jpg"
                class="img-fluid"
                style="width: 45px; height: 45px"
              />
              <div class="ps-3">
                <h6>
                  <a href="">Barka</a> <small><i>12 March 2023</i></small>
                </h6>
                <p>
                  Sebagai pemilik, penting untuk memantau berat badan, tingkat
                  energi, dan kondisi kesehatan umum hewan peliharaan Anda. Jika
                  ada kekhawatiran atau perubahan dalam perilaku makan,
                  berkonsultasilah dengan dokter hewan untuk saran yang lebih
                  spesifik dan tepat sesuai kebutuhan hewan peliharaan Anda.
                </p>
                <button class="btn btn-sm btn-light">Reply</button>
              </div>
            </div>
          </div>
          <!-- Comment List End -->

          <!-- Comment Form Start -->
          <div class="bg-light rounded p-5">
            <h3
              class="text-uppercase border-start border-5 border-primary ps-3 mb-4"
            >
              Leave a comment
            </h3>
            <form>
              <div class="row g-3">
                <div class="col-12 col-sm-6">
                  <input
                    type="text"
                    class="form-control bg-white border-0"
                    placeholder="Your Name"
                    style="height: 55px"
                  />
                </div>
                <div class="col-12 col-sm-6">
                  <input
                    type="email"
                    class="form-control bg-white border-0"
                    placeholder="Your Email"
                    style="height: 55px"
                  />
                </div>
                <div class="col-12">
                  <input
                    type="text"
                    class="form-control bg-white border-0"
                    placeholder="Website"
                    style="height: 55px"
                  />
                </div>
                <div class="col-12">
                  <textarea
                    class="form-control bg-white border-0"
                    rows="5"
                    placeholder="Comment"
                  ></textarea>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary w-100 py-3" type="submit">
                    Leave Your Comment
                  </button>
                </div>
              </div>
            </form>
          </div>
          <!-- Comment Form End -->
        </div>

        <!-- Sidebar Start -->
        <div class="col-lg-4">
          <!-- Search Form Start -->
          <div class="mb-5">
            <div class="input-group">
              <input
                type="text"
                class="form-control p-3"
                placeholder="Keyword"
              />
              <button class="btn btn-primary px-4">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </div>
          <!-- Search Form End -->

          <!-- Category Start -->
          <div class="mb-5">
            <h3
              class="text-uppercase border-start border-5 border-primary ps-3 mb-4"
            >
              Categories
            </h3>
            <div class="d-flex flex-column justify-content-start">
              <a class="h5 bg-light py-2 px-3 mb-2" href="blog.php"
                ><i class="bi bi-arrow-right me-2"></i>Feeding</a
              >
              <a class="h5 bg-light py-2 px-3 mb-2" href="blog.php"
                ><i class="bi bi-arrow-right me-2"></i>Wellness</a
              >
              <a class="h5 bg-light py-2 px-3 mb-2" href="blog.php"
                ><i class="bi bi-arrow-right me-2"></i>Health</a
              >
            </div>
          </div>
          <!-- Category End -->

          <!-- Recent Post Start -->
          <div class="mb-5">
            <h3
              class="text-uppercase border-start border-5 border-primary ps-3 mb-4"
            >
              Recent Post
            </h3>
            <div class="d-flex overflow-hidden mb-3">
              <img
                class="img-fluid"
                src="img/blog-1.jpg"
                style="width: 100px; height: 100px; object-fit: cover"
                alt=""
              />
              <a
                href="#"
                class="h5 d-flex align-items-center bg-light px-3 mb-0"
                >How much should we feed the pets?
              </a>
            </div>
            <div class="d-flex overflow-hidden mb-3">
              <img
                class="img-fluid"
                src="img/blog-2.jpg"
                style="width: 100px; height: 100px; object-fit: cover"
                alt=""
              />
              <a
                href="detail2.php"
                class="h5 d-flex align-items-center bg-light px-3 mb-0"
                >8 Ways to Make Your Pet Not Lonely
              </a>
            </div>
            <div class="d-flex overflow-hidden mb-3">
              <img
                class="img-fluid"
                src="img/blog-3.jpeg"
                style="width: 100px; height: 100px; object-fit: cover"
                alt=""
              />
              <a
                href="detail3.php"
                class="h5 d-flex align-items-center bg-light px-3 mb-0"
                >Be Alert and Pay Attention to Anabul
              </a>
            </div>
          </div>

          <!-- Recent Post End -->

          <!-- Image Start -->
          <div class="mb-5">
            <img src="img/blog-1.jpg" alt="" class="img-fluid rounded" />
          </div>
          <!-- Image End -->

          <!-- Plain Text Start -->
          <div>
            <h3
              class="text-uppercase border-start border-5 border-primary ps-3 mb-4"
            >
              Quotes
            </h3>
            <div class="bg-light text-center" style="padding: 30px">
              <p>
                When you feel sad, I will be your smile. If you cry, I will be
                your comfort. And if someone breaks your heart, you can live on
                mine. I'll always be your best friend.
              </p>
              <a href="" class="btn btn-primary py-2 px-4">For You</a>
            </div>
          </div>
          <!-- Plain Text End -->
        </div>
        <!-- Sidebar End -->
      </div>
    </div>
    <!-- Blog End -->

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
