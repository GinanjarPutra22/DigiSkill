<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--end required-->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="../../../css/materi.css" />
    <!-- <link rel="stylesheet" href="../../css/main.css"> -->
    <title>DigiSkill-Materi-Frontend</title>
  </head>

  <body>
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg bg-light shadow-sm bg-body rounded">
      <div class="container">
        <a class="navbar-brand" href="../../index.php">
          <img
            src="/Assets/Logo-DigiSkill.svg"
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
                href="../../../index.php"
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
                  <a class="dropdown-item" href="/page/detail/detail-ui-ux.php"
                    >UI/UX Design</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="/page/detail/detail-front-end.php"
                    >Front-End-Development</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="/page/detail/detail-back-end.php"
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
                  src="/Assets/avatar-pict/avatar-male-6.svg"
                  class="rounded-circle"
                  height="28"
                  alt="Portrait of a Woman"
                  loading="lazy"
                />
              </a>
              <ul class="dropdown-menu me-4">
                <li>
                  <a
                    class="dropdown-item"
                    href="../../../page/profile/kelas-saya.php"
                    >My profile</a
                  >
                </li>
                <hr />
                <li>
                  <a class="dropdown-item" href="#">Logout</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!--accordion-->

    <div class="container">
      <br /><br />
      <div class="row">
        <div class="col-lg-3">
          <div class="accordion" id="accordionSection">
            <div class="accordion-item mb-3">
              <h1 class="accordion-header">
                <button
                  type="button"
                  class="accordion-button collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseOne"
                >
                  Materi Video Kelas Front-End Development
                </button>
              </h1>
              <div
                class="accordion-collapse collapse show"
                id="collapseOne"
                data-bs-tongle="#accordionSection"
              >
                <div class="accordion-body">
                  <div class="d-grid gap-3">
                    <a
                      href="materi-frontend-1.php"
                      class="btn btn-primary disabled mb-1"
                    >
                      1. HTML
                    </a>

                    <a
                      href="materi-frontend-2.php"
                      class="btn btn-primary mb-1"
                    >
                      2. CSS
                    </a>
                    <a
                      href="materi-frontend-3.php"
                      class="btn btn-primary mb-1"
                    >
                      3. Bootstrap
                    </a>
                    <a
                      href="materi-frontend-4.php"
                      class="btn btn-primary mb-1"
                    >
                      4. Java Script
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-9">
          <div class="collapse show" id="collapse1">
            <div class="card card-body">
              <div class="ratio ratio-16x9">
                <iframe
                  src="https://www.youtube.com/embed/hMDJyb7VkYw"
                  class=""
                  allowfullscreen
                >
                </iframe>
              </div>

              <div class="1. HTML py-3"></div>
              <div class="d-grid gap-5 d-md-flex justify-content-arround">
                <h2 class="fs-7">1. HTML</h2>
              </div>
              <div class="d-grid gap-2 d-md-flex justify-content-end">
                <a href="materi-frontend-2.php" class="btn btn-primary">Next</a>
              </div>

              <p>Apa itu HTML?</p>
              <p></p>
              <p>
                HTML adalah bahasa standar pemrograman yang digunakan untuk
                membuat halaman website, yang diakses melalui internet.
                Singkatan dari "Hypertext Markup Language" atau "bahasa markup".
              </p>
              <p></p>
              <p>
                Dengan arahan website, kali ini kita akan belajar mengenai HTML
                pada Front-End Development dengan melihat video yang sudah
                disiapkan.
              </p>
            </div>
          </div>

          <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"
          ></script>
        </div>
      </div>
    </div>

    <!-- Start Footer -->
    <footer class="footer bg-primary mt-5">
      <div class="container pt-5">
        <div class="row mb-3 d-flex align-items-center">
          <a
            class="navbar-brand fs-4 fw-semibold d-flex align-items-center me-3"
            href="#"
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
  </body>
</html>
<!--end accordion-->
