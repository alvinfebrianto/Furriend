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
              src="img/blog-3.jpeg"
              alt=""
            />
            <h1 class="text-uppercase mb-4">
              Be Alert and Pay Attention to Anabul, Here are 10 Diseases in Dogs
            </h1>
            <p>
              Berdasarkan riset, anjing menduduki posisi pertama sebagai hewan
              paling populer dan banyak dipelihara di dunia. Di Amerika Serikat,
              sebanyak 69 juta anjing dipelihara setiap tahunnya dan terus
              bertambah. Sayangnya, anjing cukup sensitif terhadap perubahan
              cuaca dan rentan terkena penyakit. Beberapa faktor yang
              mempengaruhi itu, seperti lemahnya kekebalan tubuh, genetika yang
              buruk, dan penyakit turunan. Penyakit ini juga dapat menyebar
              lewat udara, kontak langsung, atau air liur. Melansir The American
              Veterinary Medical Foundation (AVMA), berikut adalah daftarnya.
            </p>
            <p>1. Canine Distemper</p>
            <p>
              Penyakit ini cukup fatal dan disebabkan oleh virus Canine
              morbillivirus. Virus ini menyebar lewat udara dan menyerang
              saluran pernafasan. Anjing yang terinfeksi akan mengalami mata
              berair, demam, hidung beringus, batuk, muntah, diare, kejang, dan
              kelumpuhan. Untuk pencegahannya, anjing perlu diberikan vaksin
              pertama E4 (Distemper, Hepatitis, Parvovirus, dan Parainfluenza)
              sedari dini atau pada umur 1,5 - 2 bulan.
            </p>
            <p>2. Influenza</p>
            <p>
              Sama seperti manusia, anjing juga rentan terjangkit virus
              influenza. Virus ini menyebar lewat udara dan mengkontaminasi
              benda-benda di sekitar, seperti mangkuk makanan, tempat minum,
              kalung, bahkan tempat tidur. Anjing yang terjangkit virus ini akan
              menunjukan gejala 24-48 jam setelahnya, seperti batuk, demam, dan
              hidung berlendir. Karena itu, sebaiknya kamu perlu konsultasi ke
              dokter untuk pemberian vaksin atau pun pemberian obat-obatan.
            </p>
            <p>3. Parvo</p>
            <p>
              Disebabkan oleh virus Canin parvovirus tipe 2, penyakit ini sangat
              menular dan dapat mengancam nyawa. Parvo dapat menyerang sistem
              pencernaan dengan gejala demam tinggi, muntaber yang parah dan
              tinja berdarah. Pemberian vaksin lengkap rutin setiap tahunnya
              dibarengi pola makan yang sehat dan tinggi serat dapat mencegah
              virus ini.
            </p>
            <p>4. Kutu kulit</p>
            <p>
              Kutu merupakan penyakit umum yang terjadi pada anjing.
              Penyebarannya dapat melalui lingkungan yang kotor dan kontak fisik
              dengan anjing yang terjangkit. Sering disepelekan, kutu
              menyebabkan kulit gatal dan mengelupas, menularkan cacing pita,
              bahkan anemia. Karena itu, sebaiknya anjing perlu grooming dan
              check up secara rutin disertai pemberian obat kutu 2-3 bulan
              sekali.
            </p>
            <p>5. Rabies</p>
            <p>
              Penyakit yang disebabkan oleh virus rabies ini dapat menyebar
              melalui gigitan atau air liur anjing yang terinfeksi. Penyakit ini
              ditandai dengan gejala demam, nyeri, kesemutan, dan kejang. Selain
              menyebabkan kematian, rabies juga dapat menular ke manusia.
              Satu-satunya untuk mencegah rabies adalah dengan suntik vaksin
              rabies secara rutin tiap tahunnya.
            </p>
            <p>6. Leptospirpsis</p>
            <p>
              Leptospirosis disebabkan oleh bakteri leptospira yang menyerang
              saluran kencing, ginjal, otot, dan hati. Penyakit ini biasanya
              menular lewat udara, urine, makanan yang terkontaminasi urine,
              gigitan anjing lain, air minum dan tanah. Gejala leptospirosis
              yang dapat dikenali antara lain demam tinggi, muntaber, pelemahan
              otot nafsu makan menurun, dan kesulitan kencing. Jika anjingmu
              muntah lebih dari 2 kali dalam sehari disertai penurunan nafsu
              makan dan demam, kamu perlu membawanya ke dokter hewan untuk
              mendapatkan pertolongan lebih lanjut.
            </p>
            <p>7. Heartworms (Cacing Jantung)</p>
            <p>
              Cacing jantung atau heartworm ditularkan lewat nyamuk. Parasit ini
              menetap di jantung dan menyebabkan batuk akibat jantung bocor,
              kesulitan napas, gagal jantung, bahkan kematian. Penyakit ini
              dapat disembuhkan dengan pemberian obat-obatan, perubahan pola
              makan yang sehat serta perawatan intensif oleh dokter hewan
            </p>
            <p>8. Kennel Cough</p>
            <p>
              Batuk kennel umum terjadi pada anjing. Penyebaran penyakit ini
              sangatlah cepat melalui kontak langsung dengan anjing yang
              terinfeksi. Penyakit ini menginfeksi saluran pernapasan dan
              menyebabkan peradangan serta iritasi pada tenggorokan. Anjing yang
              tertular kennel cough akan mengalami hidung mampet, mengeluarkan
              lendir, dan batuk terus menerus. Untuk pengobatannya bisa melalui
              terapi uap (nebulizer) dan pemberian obat-obatan seperti
              antibiotik, obat flu dan vitamin.
            </p>
            <p>9. Lyme</p>
            <p>
              Lyme biasanya menyerang persendian dan dapat menyebabkan nyeri
              pada tubuh, demam tinggi, kaki pincang, lemas dan memurunnya nafsu
              makan. Penyebarannya melalui bakteri yang berasal dari gigitan
              kutu yang nantinya masuk ke aliran darah. Penyakit ini dapat
              berakibat fatal dan menyebabkan kelumpuhan jika tidak segera
              ditangani. Untuk pengobatannya bisa diberikan dengan antibiotik,
              anti nyeri dan suplemen sendi.
            </p>
            <p>10. Ringworm</p>
            <p>
              Ringworm atau kurap merupakan infeksi jamur pada kulit hewan
              berbulu, seperti monyet, anjing, dan kucing. Penyakit ini dapat
              ditularkan melalui kontak langsung dengan anjing yang terinfeksi
              dan barang-barang yang terkontaminasi. Secara umum, ringworm
              berbentuk seperti lingkaran dan muncul di kepala, telinga, dan
              kaki. Ringworm ditandai dengan bulu rontok, rasa gatal hebat,
              bercak merah, dan iritasi kulit. Untuk pengobatannya, kamu bisa
              menggunakan salep jamur, resep obat minum dari dokter hewan, dan
              vitamin bulu. Untuk menghindari penyebaran infeksi, jauhkan anjing
              dari kontak langsung dengan hewan lain dan manusia.
            </p>
          </div>
          <!-- Blog Detail End -->

          <!-- Comment List Start -->
          <div class="mb-5">
            <h3
              class="text-uppercase border-start border-5 border-primary ps-3 mb-4"
            >
              1 Comments
            </h3>
            <div class="d-flex mb-4">
              <img
                src="img/testimonial-1.jpg"
                class="img-fluid"
                style="width: 45px; height: 45px"
              />
              <div class="ps-3">
                <h6>
                  <a href="">Barka</a> <small><i>2 May 2023</i></small>
                </h6>
                <p>
                  Penyakit-penyakit ini memang harus kita waspadai agar tidak
                  terjadi dan teralami oleh hewan peliharaan yang kita sayangi.
                  Apabila sudah terlanjur terjangkit penyakit tersebut segera
                  periksakan ke dokter hewan kepercayaanmu untuk mendapatkan
                  penanganan penyembuhan yang baik dan tepat.
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
                href="#"
                class="h5 d-flex align-items-center bg-light px-3 mb-0"
                >Be Alert and Pay Attention to Anabul
              </a>
            </div>
          </div>

          <!-- Recent Post End -->

          <!-- Image Start -->
          <div class="mb-5">
            <img src="img/blog-3.jpeg" alt="" class="img-fluid rounded" />
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
