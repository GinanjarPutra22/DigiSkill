<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <!-- Icon Title -->
    <link rel="icon" href="../Assets/logo-icon.svg" type="image/x-icon" />

    <!-- icon -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="../../css/kelas-profil.css" />
    <!-- <link rel="stylesheet" href="../../css/main.css" /> -->
    <title>Profile Akun</title>
  </head>

  <body>
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg bg-light shadow-sm bg-body rounded">
      <div class="container">
        <a class="navbar-brand" href="../../index.php">
          <img
            src="../../Assets/Logo-DigiSkill.svg"
            alt="Logo"
            width="30"
            height="24"
            class="d-inline-block align-text-top"
          />
          DigiSkill
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNavDropdown"
        >
          <ul class="navbar-nav">
            <li class="nav-item me-4">
              <a
                class="nav-link active"
                aria-current="page"
                href="../../index.php"
                >Home</a
              >
            </li>
            <li class="nav-item dropdown me-4">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Course
              </a>
              <ul class="dropdown-menu me-4">
                <li>
                  <a class="dropdown-item" href="../detail/detail-ui-ux.php"
                    >UI/UX Design</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="../detail/detail-front-end.php"
                    >Front-End-Development</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="../detail/detail-back-end.php"
                    >Back-End-Development</a
                  >
                </li>
              </ul>
            </li>
            <!-- <li class="nav-item me-4">
                    <a class="nav-link" href="#">Blog</a>
                </li> -->
            <li class="nav-item me-4">
              <a class="nav-link" href="../about-us.php">About Us</a>
            </li>
            <li class="nav-item dropdown me-4">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <img
                  src="../../Assets/avatar-pict/avatar-male-6.svg"
                  class="rounded-circle"
                  height="28"
                  alt="Portrait of a Woman"
                  loading="lazy"
                />
              </a>
              <ul class="dropdown-menu me-4">
                <li>
                  <a class="dropdown-item" href="../detail/detail-ui-ux.php"
                    >My profile</a
                  >
                </li>
                <hr />
                <li>
                  <a
                    class="dropdown-item"
                    href="../detail/detail-front-end.php"
                    >Logout</a
                  >
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <div class="container mb-5">
      <!-- ------Start Row Main Detail Kelas------- -->
      <div class="container">
        <div class="row grid gap-3">
          <!-- Start Sidebar Detail Program BE -->
          <div class="col-lg-3">
            <div class="sticky-top mt-4">
              <br />
              <div class="p-4 shadow-4 rounded-3 sidebar">
                <div class="">
                  <h5 class="text-center">Ginanjar</h5>
                  <hr />
                  <div style="font-size: smaller" class="ms-3">
                    <a href="kelas-saya.php">
                      <p>Kelas Saya</p>
                    </a>
                    <a href="profile.php">
                      <p>Setting Akun</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Sidebar Detail Program BE -->

          <!-- Start Main Content -->
          <div class="col-lg-8 container-product">
            <div class="row mt-5">
              <div class="col-lg-5 col-md-6 mb-4">
                <div class="card">
                  <div class="img-box">
                    <img
                      src="../../Assets/product-1.svg"
                      alt=""
                      class="img-fluid"
                    />
                    <div class="bg-img px-4">
                      <div class="info">
                        <p class="member m-0">1.232 Siswa Terdaftar</p>
                        <div class="rate">
                          <i class="bx bxs-star"></i>
                          <i class="bx bxs-star"></i>
                          <i class="bx bxs-star"></i>
                          <i class="bx bxs-star"></i>
                          <i class="bx bxs-star"></i>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="product-caption mt-4">
                    <h3 class="product-name">
                      Belajar UI/UX Design dengan Figma untuk pengembangan
                      design website
                    </h3>
                    <div href="#" class="badge px-3 py-2">UI/UX Desin</div>
                    <div
                      class="product-btn mt-5 d-flex justify-content-between align-items-center"
                    >
                      <div class="info-video">6 Video</div>
                      <a href="../materi/ui-ux/materi-uiux-1.php"
                        ><button type="button" class="btn btn-primary btn-sm">
                          Lihat Kelas
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ------End Row Main Detail Kelas------- -->
        </div>
      </div>
    </div>

    <!-- Start Footer -->
    <footer class="footer bg-primary mt-5">
      <div class="container pt-5">
        <div class="row mb-3 d-flex align-items-center">
          <a
            class="navbar-brand fs-4 fw-semibold d-flex align-items-center me-3"
            href="/index.php"
          >
            <img
              src="../../Assets/logo-white.svg"
              class="d-inline-block align-text-top h-75"
            />
            DigiSkill
          </a>
        </div>
        <div
          class="row row-content justify-content-between justify-content-md-start"
        >
          <div class="col-lg-3 col-md-6 mb-sm-4">
            <h3>Hubungi Kami</h3>
            <div class="row d-flex mt-3">
              <a
                href=" 
                        https://goo.gl/maps/V9TZsWie5Ug1UdAR9"
                terget="_blank"
                class="d-flex align-items-start"
              >
                <i class="bx bx-map me-2"></i>
                <p>
                  Jl. Ketintang, Kel. Ketintang, Kec. Gayungsari, Kota Surabaya
                </p>
              </a>
              <a
                href=" 
                        #"
                class="d-flex align-items-start"
              >
                <i class="bx bx-envelope me-2"></i>

                <p>digiskill@gmail.com</p>
              </a>

              <a
                href=" 
                        #"
                class="d-flex align-items-start"
              >
                <i class="bx bx-phone me-2"></i>

                <p>+62 858 0489 8461</p>
              </a>
            </div>
          </div>
          <div class="col-lg-2 offset-lg-1 col-md-6 mt-4 mt-sm-0 mb-sm-4">
            <h3>Informasi</h3>
            <div class="row d-flex mt-3">
              <a href="#" class="mb-1">Home</a>
              <a href="#" class="mb-1">About Us</a>
            </div>
          </div>
          <div class="col-lg-2 offset-lg-1 col-md-6 mt-4 mt-sm-0 mb-sm-4">
            <h3>Course</h3>
            <div class="row d-flex mt-3">
              <a href="#" class="mb-1">UI/UX Design</a>
              <a href="#" class="mb-1">Front End Developer</a>
              <a href="#" class="mb-1">Back End Developer</a>
            </div>
          </div>
          <div class="col-lg-2 offset-lg-1 col-md-6 mt-4 mt-sm-0">
            <h3>Ikuti Kami</h3>
            <div class="sosmed mt-3 d-flex">
              <a href=" #" class="me-2">
                <i class="bx bxl-google"></i>
              </a>
              <a href="# " class="me-2">
                <i class="bx bxl-youtube"></i>
              </a>
              <a href="#" class="me-2">
                <i class="bx bxl-linkedin"></i>
              </a>
              <a href="#" class="me-2">
                <i class="bx bxl-facebook"></i>
              </a>
              <a href="#" class="me-2">
                <i class="bx bxl-instagram"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="row text-center mt-2">
          <div class="col-12">
            <p class="text-white">
              &copy;Copyright 2022 all right reserved | Kelompok 5 Pemerogaman
              Web - PTI-B 2021
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <script src="script/script.js"></script>

    <!-- Script JS -->
    <script
      src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
