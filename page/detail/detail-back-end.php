<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  
  <!-- Modal -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Icon Title -->
  <link rel="icon" href="../Assets/logo-icon.svg" type="image/x-icon" />

  <!-- icon -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" href="../../css/detail.css">
  <title>Detail Back-End</title>

</head>

<body>
  <!-- Start Navbar -->
  <nav class="navbar navbar-expand-lg bg-light shadow-sm bg-body rounded">
    <div class="container">
      <a class="navbar-brand" href="../../index.php">
        <img src="../../Assets/Logo-DigiSkill.svg" alt="Logo" width="30" height="24"
          class="d-inline-block align-text-top">
        DigiSkill
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item me-4">
            <a class="nav-link active" aria-current="page" href="../../index.php">Home</a>
          </li>
          <li class="nav-item dropdown me-4">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Course
            </a>
            <ul class="dropdown-menu me-4">
              <li><a class="dropdown-item" href="detail-ui-ux.php">UI/UX Design</a></li>
              <li><a class="dropdown-item" href="detail-front-end.php">Front-End-Development</a></li>
              <li><a class="dropdown-item" href="#">Back-End-Development</a></li>
            </ul>
          </li>
          <!-- <li class="nav-item me-4">
                    <a class="nav-link" href="#">Blog</a>
                </li> -->
          <li class="nav-item me-4">
            <a class="nav-link" href="../about-us.php">About Us</a>
          </li>
          <button class="btn btn-sm btn-outline-primary px-4 mx-lg-2 mb-2 mb-md-0">Masuk</button>
          <button class="btn btn-sm btn-primary px-4 mx-lg-2">Daftar</button>
        </ul>


      </div>
    </div>
  </nav>
  <!-- End Navbar -->


  <div class="container mb-5">
    <!-- ------Start Hero BE------- -->
    <div class="row d-flex align-items-center py-4 hero " id="hero">
      <div class="col-lg-6">
        <h2 class="text "> Menjadi <span> Back-End Developer</span> dengan dengan mudah </h2>

        <p>
          Kembangkan bakatmu dalam backend development dengan kelas gratis dengan materi dan mentor yang berpengalaman.
        </p>

        </p>
        <button type="button" class="btn btn-primary" style="font-weight: bold;">
          Belajar Sekarang
        </button>
      </div>
      <div class="col-lg-6">
        <div class="img">
          <img src="../../Assets/hero-be.svg" alt="hero-ui-ux" class="img w-100">
        </div>
      </div>
    </div>
    <!-- ------End Hero BE------- -->


    <!-- ------Start Row Main Detail Kelas------- -->
    <div class="my-5">
      <div class="row grid gap-3 ">

        <!-- Start Sidebar Detail Program BE -->
        <div class="col-lg-3 ">
          <div class="sticky-top mt-5">
            <br>
            <div class="p-4 shadow-4 rounded-3 sidebar ">
              <div class="">
                <h5 class="text-center"> Detail Program </h5>
                <hr>
                <div style="font-size: smaller" class="ms-3">
                  <a href="#tentang-program">
                    <p> Tentang Program </p>
                  </a>
                  <a href="#mentor">
                    <p> Mentor Kelas</p>
                  </a>
                  <a href="#kurikulum">
                    <p> Kurikulum Program</p>
                  </a>
                  <a href="#tools">
                    <p> Tools </p>
                  </a>
                  <a href="#testimoni">
                    <p> Testimoni </p>
                  </a>

                </div>
              </div>
              <div class="sticky-top text-center mt-5">
                <button type="button" class="btn btn-primary px-4 px-3" style="font-size: smaller; font-weight: bold;" data-bs-toggle="modal" data-bs-target="#myModal">
                  Belajar Sekarang
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- End Sidebar Detail Program BE -->

        <!-- The Modal -->
          <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                  <div class="container">
                    <div class="text-center">
                      <h3>Memilih Kelas Back-End</h3>
                    <img src="../../Assets/done-logo.svg" alt="done-logo.svg" class="img img-fluid rounded p-5">
                    <a href="../profile/kelas-saya.php">
                      <button type="submit" class="btn btn-primary btn-lg col-10 mb-2">
                        Selanjutnya
                      </button>
                    </a>
                    </div>
                  </div>
                </div>
                <!-- Modal footer -->
                <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div> -->
              </div>
            </div>
          </div>
          <!-- End The Modal -->

        <!-- Start Main Content -->
        <div class="col-lg-8 ">
          <div class="mt-5">
            <br>
            <!-- Start Main Contenct Tentang Program BE -->
            <div class="tentang-program mb-5" id="tentang-program">
              <h6> Tentang Program </h6>
              <h4> Dapatkan Kelas Gratis <span> Back-End Development</span> </h4>

              <p> Bersama DigiSkill anda bisa mendaftar kelas Back-End Development dengan gratis tanpa dipunggut biaya
                sedikitpun.</p>

              <p> Back-End Developer pada tahun ini adalah salah satu pekerjaan yang paling dicari oleh banyak
                perusahaan.
                Bidang Back-End ini berkutat dengan pekerjaan dibalik layar. Artinya, Back-End Developer
                berurusan dengan data-data. Back-End developer akan berkutat dengan database system, scripting, dan
                arsitektur
                pada sebuah project. Selain itu,
                Back-End Developer juga bertugas untuk memastikan hal pada sisi client agar tidak ada masalah. </p>
              <p> Dengan arahan mentor, kali ini kita akan belajar bagaimana langkah awal dalam menjadi Back-End
                Developer
                dengan cara yang mudah dipahami oleh pemula. </p>
            </div>
            <!-- End Main Contenct Tentang Program BE -->

            <!-- Start Mentor Kelas BE -->
            <div class="mentor-kelas my-5" id="mentor">
              <h6> Mentor Kelas </h6>
              <h4> Belajar Langsung Dari Ahlinya </h4>
              <p class="fw-medium"> Anda akan belajar langsung dari mentor yang ahli dalam bidang Back-End Development
              </p>
              <div class="row">
                <div class="col-lg-4">
                  <img src="../../Assets/mentor-be.svg" alt="mentor-BE" class="img img-fluid rounded">
                </div>
                <div class="col-lg-8">
                  <div class="text-mentor">
                    <h5 class="fw-bold"> Ferdy Septiawan </h5>
                    <p class="fw-bold"> <span> Back-End Developer di Rellive </span> </p>
                    <p class="fw-medium"> LFerdy adalah seorang Back End Developer di PT PKK, yang berpengalaman dalam
                      membangun dan mengembangkan aplikasi berbasis web. engan kemampuan dan pengalaman yang
                      dimilikinya, Ferdy terampil dalam mengembangkan dan memelihara basis data serta mengelola server,
                      sehingga memastikan aplikasi yang dibuat berjalan dengan lancar dan aman.</p>
                  </div>
                  <div class="d-flex">
                    <img src="../../Assets/linkedin.svg" alt="linkedin" class="img">
                    <img src="../../Assets/instagram.svg" alt="instagram" class="img">
                  </div>
                </div>
              </div>
            </div>
            <!-- End Mentor Kelas BE -->

            <!-- Start Kurikulum Program -->
            <div class="kurikulum-program mb-5" id="kurikulum">
              <h6> Kurikulum Program </h6>
              <h4> Dapatkan Skill Baru Bersama <span> DigiSkill </h4></span>
              <p class="fw-medium"> Kurikulum yang tersedia telah disesuaikan dengan kebutuhan saat ini yang akan selalu
                update dengan
                perkembangan, anda akan mempelajari materi dibawah ini </p>
              <!-- Start Accordion -->
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      PHP
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul>
                        <li> Pengenalan PHP </li>
                        <li> Instalasi PHP </li>
                        <li> Programming </li>
                        <li> Detail Materi PHP </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Git dan GitHub
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul>
                        <li> Pengertian Git dan GitHub </li>
                        <li> Hubungan Git dengan GitHub </li>
                        <li> Version Control System </li>
                        <li> Istilah dalam Git dan GitHub </li>
                        <li> Tutorial penggunaan Git dan GitHub </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Laravel
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul>
                        <li> Mengenal Laravel </li>
                        <li> Penerapan Laravel </li>
                        <li> Controller </li>
                        <li> Fitur-fitur Laravel </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Rest Api
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul>
                        <li> Integrasi Aplikasi </li>
                        <li> Pengenalan API </li>
                        <li> Pengenalan RESTful API </li>
                        <li> Resource Naming </li>
                        <li> Versioning </li>
                        <li> API Documentation </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      NodeJS
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul>
                        <li> Pengenalan NodeJS </li>
                        <li> Pengenalan Concurrency </li>
                        <li> NodeJS Architecture </li>
                        <li> Instalasi </li>
                        <li> NodeJS REPL </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Accordion -->
            </div>
            <!-- End Kurikulum Program -->

            <!-- Start Tools BE -->
            <div class="tools-uiux mb-5" id="tools">
              <h6> Tools </h6>
              <h4> Belajar Back-End Dengan Tools Gratis </h4>
              <p class="text"> Pada sesi pembelajaran pelatihan menggunakan framework yang gratis dan mudah digunakan
                secara
                bersama-sama.
              </p>
              <div class="d-flex align-items-center align-self-center">
                <div class="d-flex align-items-center me-5">
                  <img src="../../Assets/vs-code.svg" alt="vscode-pic" class="img w-50">
                  <p class="ms-3"> Visual Studio <br> Code </p>
                </div>

                <div class="d-flex align-items-center ms-2 me-5">
                  <img class="img w-100" src="../../Assets/github.svg" alt="github-pic">
                  <p class="ms-3"> GitHub </p>
                </div>

                <div class="d-flex align-items-center ms-2 me-5">
                  <img class="img w-100" src="../../Assets/php.svg" alt="php-pic">
                  <p class="ms-3"> PHP </p>
                </div>
              </div>
              <!-- Start Tools FE 2 -->
              <div class="d-flex align-items-center align-self-center mt-4">
                <div class="d-flex align-items-center me-5">
                  <img src="../../Assets/laravel.svg" alt="laravel-pic" class="img w-100">
                  <p class="ms-3"> Laravel </p>
                </div>

                <div class="d-flex align-items-center ms-5 me-5">
                  <img class="img w-100" src="../../Assets/node-js.svg" alt="nodejs-pic">
                  <p class="ms-3"> NodeJS </p>
                </div>

                <div class="d-flex align-items-center ms-4 me-5">
                  <img class="img h-100" src="../../Assets/rest-api.webp" alt="rest-api-pic"
                    style="width: 50px; height: 50px;">
                  <p class="ms-3"> Rest API </p>
                </div>
              </div>
            </div>
            <!-- End Tools UIUX -->

            <!-- Start Testimoni -->
            <div class="testimoni-uiux mb-5" id="testimoni">
              <h6> Testimoni </h6>
              <h4> Kata Mereka tentang Kelas Back-End Development DigiSkill </h4>
            </div>
            <div class="row">
              <div class="col-12 testimoni">
                <!-- Swiper -->
                <div class="swiper mySwiperTesti pb-4 pb-sm-5">
                  <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                    <div class="swiper-slide card p-2">
                      <div class="card-body">
                        <div class="rate">
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                        </div>
                        <p class="body-testi mt-3">
                          Mengikuti kelas Back-End ini saya sangat mudah memahami materi yang diberikan
                        </p>
                        <div class="detail d-flex justify-content-between align-items-center mt-4">
                          <div class="user align-items-center">
                            <img src="../../Assets/avatar-pict/avatar-female-6.svg" alt="avatar-review-1"
                              class="rounded-circle img-fluid">
                            <div class="profile d-flex mt-2">
                              <div class="text">
                                <p class="name m-0">Amalia Utami</p>
                                <p class="status m-0"> Back-End Developer di Aleph Labs</p>
                              </div>
                              <div class="icon-quote">
                                <i class='bx bxs-quote-right'></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card p-2">
                      <div class="card-body">
                        <div class="rate">
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                        </div>
                        <p class="body-testi mt-3">
                          Ada banyak sekali manfaat yang bisa diambil dari mengikuti kelas ini
                        </p>
                        <div class="detail d-flex justify-content-between align-items-center mt-4">
                          <div class="user align-items-center">
                            <img src="../../Assets/avatar-pict/avatar-male-9.svg" alt="avatar-review-1"
                              class="rounded-circle img-fluid">
                            <div class="profile d-flex mt-2">
                              <div class="text">
                                <p class="name m-0">Vito Saputra</p>
                                <p class="status m-0">Back-End Developer di Kompas</p>
                              </div>
                              <div class="icon-quote">
                                <i class='bx bxs-quote-right'></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card p-2">
                      <div class="card-body">
                        <div class="rate">
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                        </div>
                        <p class="body-testi mt-3">
                          Saya sangat senang karena saya dapat ilmu, saya juga mendapatkan pengalaman.
                        </p>
                        <div class="detail d-flex justify-content-between align-items-center mt-4">
                          <div class="user align-items-center">
                            <img src="../../Assets/avatar-pict/avatar-female-12.svg" alt="avatar-review-1"
                              class="rounded-circle img-fluid">
                            <div class="profile d-flex mt-2">
                              <div class="text">
                                <p class="name m-0">Amanda Putri</p>
                                <p class="status m-0">Back-End Developer di Dealjava</p>
                              </div>
                              <div class="icon-quote">
                                <i class='bx bxs-quote-right'></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card p-2">
                      <div class="card-body">
                        <div class="rate">
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                        </div>
                        <p class="body-testi mt-3">
                          Sangat mudah untuk difahami, good job untuk DigiSkill dan para mentor yang kere banget
                        </p>
                        <div class="detail d-flex justify-content-between align-items-center mt-4">
                          <div class="user align-items-center">
                            <img src="../../Assets/avatar-pict/avatar-female-5.svg" alt="avatar-review-1"
                              class="rounded-circle img-fluid">
                            <div class="profile d-flex mt-2">
                              <div class="text">
                                <p class="name m-0">Tsabita Anandita</p>
                                <p class="status m-0">Back-End Developer di Jonajo Consulting</p>
                              </div>
                              <div class="icon-quote">
                                <i class='bx bxs-quote-right'></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card p-2">
                      <div class="card-body">
                        <div class="rate">
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                        </div>
                        <p class="body-testi mt-3">
                          Saya sangat senang, karena saya bisa mendapatkan materi Back-End dengan mudah.
                        </p>
                        <div class="detail d-flex justify-content-between align-items-center mt-4">
                          <div class="user align-items-center">
                            <img src="../../Assets/avatar-pict/avatar-male-8.svg" alt="avatar-review-1"
                              class="rounded-circle img-fluid">
                            <div class="profile d-flex mt-2">
                              <div class="text">
                                <p class="name m-0">Andy Wijaya</p>
                                <p class="status m-0">Back-End Developer di DoCheck</p>
                              </div>
                              <div class="icon-quote">
                                <i class='bx bxs-quote-right'></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide card p-2">
                      <div class="card-body">
                        <div class="rate">
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                        </div>
                        <p class="body-testi mt-3">
                          Kelas ini sangat bagus, saya tidak menyesal join karena daging semua materinya.
                        </p>
                        <div class="detail d-flex justify-content-between align-items-center mt-4">
                          <div class="user align-items-center">
                            <img src="../../Assets/avatar-pict/avatar-female-10.svg" alt="avatar-review-1"
                              class="rounded-circle img-fluid">
                            <div class="profile d-flex mt-2">
                              <div class="text">
                                <p class="name m-0">Hasna Syarifah</p>
                                <p class="status m-0">Back-End Developer di Flowmotion</p>
                              </div>
                              <div class="icon-quote">
                                <i class='bx bxs-quote-right'></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-pagination pt-5 myt-5"></div>
                </div>
              </div>
            </div>
            <!-- End Testimoni -->

            <!-- End Main Content -->
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
        <a class="navbar-brand fs-4 fw-semibold d-flex align-items-center me-3" href="/index.php">
          <img src="../../Assets/logo-white.svg" class="d-inline-block align-text-top  h-75 ">
          DigiSkill
        </a>
      </div>
      <div class="row row-content justify-content-between justify-content-md-start">
        <div class="col-lg-3 col-md-6 mb-sm-4">
          <h3>Hubungi Kami</h3>
          <div class="row d-flex mt-3">
            <a href=" 
                        https://goo.gl/maps/V9TZsWie5Ug1UdAR9" terget="_blank" class="d-flex align-items-start">
              <i class='bx bx-map me-2'></i>
              <p>
                Jl. Ketintang, Kel. Ketintang, Kec. Gayungsari, Kota Surabaya
              </p>
            </a>
            <a href=" 
                        #" class="d-flex align-items-start">
              <i class='bx bx-envelope me-2'></i>

              <p>
                digiskill@gmail.com
              </p>
            </a>

            <a href=" 
                        #" class="d-flex align-items-start">
              <i class='bx bx-phone me-2'></i>

              <p>
                +62 858 0489 8461
              </p>
            </a>
          </div>
        </div>
        <div class="col-lg-2 offset-lg-1  col-md-6 mt-4 mt-sm-0 mb-sm-4">
          <h3>Informasi</h3>
          <div class="row d-flex mt-3">
            <a href="#" class="mb-1">Home</a>
            <a href="#" class="mb-1">About Us</a>
          </div>

        </div>
        <div class="col-lg-2 offset-lg-1   col-md-6 mt-4 mt-sm-0 mb-sm-4">
          <h3>Course</h3>
          <div class="row d-flex mt-3">
            <a href="#" class="mb-1">UI/UX Design</a>
            <a href="#" class="mb-1">Front End Developer</a>
            <a href="#" class="mb-1">Back End Developer</a>
          </div>

        </div>
        <div class="col-lg-2 offset-lg-1   col-md-6 mt-4 mt-sm-0">
          <h3>Ikuti Kami</h3>
          <div class="sosmed mt-3 d-flex">
            <a href=" #" class="me-2">
              <i class='bx bxl-google'></i>
            </a>
            <a href="# " class="me-2">
              <i class='bx bxl-youtube'></i>
            </a>
            <a href="#" class="me-2">
              <i class='bx bxl-linkedin'></i>
            </a>
            <a href="#" class="me-2">
              <i class='bx bxl-facebook'></i>
            </a>
            <a href="#" class="me-2">
              <i class='bx bxl-instagram'></i>
            </a>

          </div>
        </div>

      </div>
      <div class="row text-center mt-2">
        <div class="col-12">
          <p class="text-white">
            &copy;Copyright 2022 all right reserved | Kelompok 5 Pemerogaman Web - PTI-B 2021
          </p>
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="../../script/script.js"></script>

  <!-- Modal -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>