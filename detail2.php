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
          <i class="bi bi-shop fs-1 text-primary me-3"></i>Pet Shop an Care
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
              src="img/blog-2.jpg"
              alt=""
            />
            <h1 class="text-uppercase mb-4">
              8 Ways to Make Your Pet Not Lonely
            </h1>
            <p>
              Untungnya, ada beberapa cara yang dapat Anda lakukan untuk
              membantu anjing Anda merasa tidak terlalu kesepian dan mengatasi
              waktu sendirian. Berikut ini beberapa rekomendasinya:
            </p>
            <p>1. Berlatihlah dengan mereka</p>
            <p>
              Idealnya, anjing Anda seharusnya tidak bereaksi saat Anda berjalan
              keluar dari pintu. Melihat Anda pergi seharusnya terasa rutin
              seperti melihat Anda mengisi mangkuk air setiap pagi. Itulah
              mengapa Koczerzuk merekomendasikan latihan yang dimulai dengan
              absen yang sangat singkat dan semakin lama semakin panjang.
            </p>
            <p>2. Manfaatkan waktu Anda bersama</p>
            <p>
              Jika Anda akan pergi seharian, Mullins mengatakan bahwa sangat
              penting untuk memberikan anjing Anda beberapa jenis aktivitas atau
              pengayaan sebelum pergi, seperti berjalan-jalan mengendus atau
              permainan mencari benda. "Hal ini juga harus menjadi prioritas
              saat kita tiba di rumah," katanya. Menjalin hubungan kembali
              adalah kuncinya, entah itu dengan berjalan-jalan di sekitar
              halaman, permainan lempar tangkap, atau bermain tarik tambang.
            </p>
            <p>3. Menyewa seorang penuntun anjing</p>
            <p>
              Jika sesuai dengan anggaran Anda, seorang penuntun atau pelatih
              anjing dapat menemani dan melatih anjing yang ditinggal sendirian
              di siang hari. Namun Koczerzuk mencatat bahwa hal ini tidak harus
              dilakukan secara formal. Tetangga yang sudah pensiun atau anak
              kecil setempat juga bisa menjadi teman jalan-jalan bagi anjing
              yang kesepian.
            </p>
            <p>4. Mainkan musik-jika itu kebiasaan Anda</p>
            <p>
              Meskipun membiarkan TV menyala atau memutar musik dapat membantu
              mengisi keheningan saat Anda pergi, Koczerzuk mengatakan bahwa hal
              ini hanya boleh dilakukan jika hal tersebut "sesuai" dengan
              perilaku normal Anda di rumah. "Ketika pemilik mulai mencoba
              menggunakan benda-benda itu hanya untuk absen, Anda perlu khawatir
              tentang barang-barang itu yang melekat pada waktu sendirian,"
              tambahnya.
            </p>
            <p>
              5. Jangan gunakan halaman belakang rumah sebagai tempat penitipan
              anak
            </p>
            <p>
              "Terkadang pemilik akan menaruh anjing di halaman belakang saat
              mereka pergi, tapi menurut saya itu bukan rencana yang baik," kata
              Koczerzuk. Dari pencurian anjing hingga badai petir hingga
              kemungkinan anjing kabur, halaman yang tidak diawasi "bukan tempat
              yang aman" untuk anjing, tambahnya. "Ini tidak akan membantu
              mencegah kecemasan, dan pasti tidak akan menyembuhkannya."
            </p>
            <p>6. Pertimbangkan tempat penitipan anjing</p>
            <p>
              Tempat penitipan anjing memang tidak cocok untuk semua anjing,
              tetapi Mullins mengatakan bahwa beberapa anak anjing akan tumbuh
              dengan baik di tempat penitipan kelompok saat Anda pergi.
            </p>
            <p>7. Cobalah mengunyah atau mainan</p>
            <p>
              Untuk beberapa anjing, tongkat pengganggu dapat menjadi pengalih
              perhatian yang menyenangkan saat mereka sendirian di rumah-tetapi
              pertama-tama pastikan anjing Anda aman dengan ini. Dia mungkin
              juga akan senang menjilati selai kacang dari Kong, menemukan
              pengayaan dengan mainan puzzle, atau menikmati mencari mainan yang
              Anda sembunyikan untuknya. Namun sekali lagi, Koczerzuk
              memperingatkan, ini haruslah benda-benda yang juga disukai anjing
              Anda saat Anda berada di sana untuk menghindari asosiasi dengan
              ketidakhadiran Anda, dan juga untuk memastikan bahwa benda-benda
              tersebut aman.
            </p>
            <p>8. Carilah pengobatan</p>
            <p>
              Pada kasus kecemasan berpisah yang parah, Koczerzuk mengatakan
              bahwa beberapa anjing dapat meredakan gejalanya dengan pengobatan.
              Tentu saja, hal ini harus dibicarakan dengan dokter hewan Anda.
            </p>
          </div>
          <!-- Blog Detail End -->

          <!-- Comment List Start -->
          <div class="mb-5">
            <h3
              class="text-uppercase border-start border-5 border-primary ps-3 mb-4"
            >
              2 Comments
            </h3>
            <div class="d-flex mb-4">
              <img
                src="img/user.jpg"
                class="img-fluid"
                style="width: 45px; height: 45px"
              />
              <div class="ps-3">
                <h6>
                  <a href="">Yusuf</a> <small><i>21 April 2023</i></small>
                </h6>
                <p>
                  Saran-saran dari artikel ini sangat bermanfaat untuk membantu
                  mengurangi rasa kesepian pada hewan peliharaan. Ternyata
                  selama ini secara tidak langsung saya sudah melakukannya
                  dengan baik.
                </p>
                <button class="btn btn-sm btn-light">Reply</button>
              </div>
            </div>
            <div class="d-flex ms-5 mb-4">
              <img
                src="img/testimonial-2.jpg"
                class="img-fluid"
                style="width: 45px; height: 45px"
              />
              <div class="ps-3">
                <h6>
                  <a href="">Iwan</a> <small><i>22 April 2023</i></small>
                </h6>
                <p>
                  Saya sangat kagum dengan anda dalam memberikan perhatian pada
                  hewan peliharaaan anda yang menurut saya sudah sangat baik.
                  Tidak semua orang dapat memikirkan hal-hal sekecil itu.
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
                href="detail.php"
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
                href="#"
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
            <img src="img/blog-2.jpg" alt="" class="img-fluid rounded" />
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
