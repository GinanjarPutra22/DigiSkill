<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <!-- Modal -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Icon Title -->
  <link rel="icon" href="../Assets/logo-icon.svg" type="image/x-icon" />

  <!-- icon -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" href="../../css/detail.css">
  <title>Detail Front-End</title>

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
              <li><a class="dropdown-item" href="#">Front-End-Development</a></li>
              <li><a class="dropdown-item" href="detail-back-end.php">Back-End-Development</a></li>
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
    <!-- ------Start Hero FE------- -->
    <div class="row d-flex align-items-center py-4 hero " id="hero">
      <div class="col-lg-6">
        <h2 class="text "> Menjadi <span> Front-End Developer</span> Dengan Mudah</h2>

        <p>
          Bangun Karir Anda dengan Kelas Front End Development Gratis, Dapatkan banyak keuntungan lainnya!.
        </p>

        </p>
        <button type="button" class="btn btn-primary" style="font-weight: bold;">
          Belajar Sekarang
        </button>
      </div>
      <div class="col-lg-6">
        <div class="img">
          <img src="../../Assets/hero-fe.svg" alt="hero-ui-ux" class="img w-100">
        </div>
      </div>
    </div>
    <!-- ------End Hero FE------- -->


    <!-- ------Start Row Main Detail Kelas------- -->
    <div class="my-5">
      <div class="row grid gap-3 ">

        <!-- Start Sidebar Detail Program FE -->
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
        <!-- End Sidebar Detail Program FE -->

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
                      <h3>Memilih Kelas Front-End</h3>
                    <img src="../../Assets/done-logo.svg" alt="done-logo" class="img img-fluid rounded p-5">
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
            <!-- Start Main Contenct Tentang Program FE -->
            <div class="tentang-program mb-5" id="tentang-program">
              <h6> Tentang Program </h6>
              <h4> Dapatkan Kelas Gratis <span> Front-End Development </h4></span>

              <p> Bersama DigiSkill anda bisa mendaftar kelas Front-End Development dengan gratis tanpa dipunggut biaya
                sedikitpun.</p>

              <p> Bidang Front-End tidak kalah sepi peminat oleh dunia industri belakangan ini. Front-End dapat membantu
                menciptakan
                tampilan
                untuk para pengguna dalam rangka memenuhi kebutuhan user. Front-End merupakan langkah kedua setelah
                UI/UX Design,
                sehingga antara UI/UX Designer dengan Front-End Developer sangat memiliki keterkaitan yang kuat. </p>
              <p> Dengan arahan mentor, kali ini kita akan belajar bagaimana langkah awal dalam memulai membuat
                Front-End yang
                baik dan benar, serta dengan cara yang mudah dipahami oleh pemula. </p>
            </div>
            <!-- End Main Contenct Tentang Program FE -->

            <!-- Start Mentor Kelas FE -->
            <div class="mentor-kelas my-5" id="mentor">
              <h6> Mentor Kelas </h6>
              <h4> Belajar Langsung Dari Ahlinya </h4>
              <p> Anda akan belajar langsung dari mentor yang ahli dalam bidang Front-End Development </p>
              <!-- Start Mentor 1 Kelas FE -->
              <div class="row">
                <div class="col-lg-4">
                  <img src="../../Assets/mentor-fe-1.svg" alt="mentor-fe" class="img img-fluid rounded">
                </div>
                <div class="col-lg-8">
                  <div class="text-mentor">
                    <h5 class="fw-bold"> Alvina F.</h5>
                    <p class="fw-bold"> <span> Front-End Developer di Sampoerna </span> </p>
                    <p class="desk"> Alvina adalah seorang Front End Developer di PT Sampoerna, sebuah perusahaan besar
                      di Indonesia.
                      Sebagai seorang Front End Developer, tugas utamanya adalah merancang dan mengembangkan tampilan
                      depan dari situs web perusahaan, sehingga dapat memberikan pengalaman pengguna yang optimal.</p>
                  </div>
                  <div class="d-flex">
                    <img src="../../Assets/linkedin.svg" alt="linkedin" class="img">
                    <img src="../../Assets/instagram.svg" alt="instagram" class="img">
                  </div>
                </div>
              </div>
              <!-- End Mentor 1 Kelas FE -->

              <!-- Start Mentor 2 Kelas FE -->
              <div class="row mt-4">
                <div class="col-lg-4">
                  <img src="../../Assets/mentor-fe-2.svg" alt="mentor-fe" class="img img-fluid rounded">
                </div>
                <div class="col-lg-8">
                  <div class="text-mentor">
                    <h5 class="fw-bold"> Farhanah S. </h5>
                    <p class="fw-bold"> <span> Front-End Developer di AbdiKarya </span> </p>
                    <p class="desk"> Farhanah telah bekerja sebagai Front End Developer di PT AbdiKarya selama 3 tahun.
                      Selama masa
                      kerjanya, ia telah merancang dan mengembangkan berbagai halaman web dan aplikasi web yang
                      interaktif dan responsif. Tanggung jawab pekerjaannya meliputi memprogram dengan bahasa
                      pemrograman seperti HTML, CSS, dan JavaScript.</p>
                  </div>
                  <div class="d-flex">
                    <img src="../../Assets/linkedin.svg" alt="linkedin" class="img">
                    <img src="../../Assets/instagram.svg" alt="instagram" class="img">
                  </div>
                </div>
              </div>
              <!-- End Mentor 2 Kelas FE -->
            </div>
            <!-- End Mentor Kelas FE -->

            <!-- Start Kurikulum Program -->
            <div class="kurikulum-program mb-5" id="kurikulum">
              <h6> Kurikulum Program </h6>
              <h4> Dapatkan Skill Baru Bersama <span> DigiSkill </h4></span>
              <p> Kurikulum yang tersedia telah disesuaikan dengan kebutuhan saat ini yang akan selalu update dengan
                perkembangan, anda akan mempelajari materi dibawah ini </p>
              <!-- Start Accordion -->
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      HTML
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul>
                        <li> Pengenalan Web </li>
                        <li> Pengenalan HTML </li>
                        <li> Web Hosting </li>
                        <li> Tutorial HTML </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      CSS
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul>
                        <li> Definisi CSS </li>
                        <li> Hubungan HTML dengan CSS </li>
                        <li> Tutorial Styling </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Bootstrap
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul>
                        <li> Mengenal Bootstrap </li>
                        <li> Jenis Bootstrap </li>
                        <li> Tutorial Bootstrap </li>
                        <li> Extension </li>
                        <li> Try On </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      JavaScript
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul>
                        <li> Pengenalan JavaScript dasar </li>
                        <li> Detail-detail JavaScript </li>
                        <li> Tutorial JavaScript </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Accordion -->
            </div>
            <!-- End Kurikulum Program -->

            <!-- Start Tools FE 1 -->
            <div class="tools-uiux mb-5" id="tools">
              <h6> Tools </h6>
              <h4> Belajar Front-End Dengan Tools Gratis </h4>
              <p> Pada sesi pembelajaran pelatihan menggunakan framework yang gratis dan mudah digunakan secara
                bersama-sama.
              </p>
              <div class="d-flex align-items-center align-self-center">
                <div class="d-flex align-items-center me-5">
                  <img src="../../Assets/vs-code.svg" alt="vscode-pic" class="img h-100"
                    style="width: 50px; height: 50px;">
                  <p class="ms-3"> Visual Studio <br> Code </p>
                </div>

                <div class="d-flex align-items-center me-5">
                  <img class="img h-100" src="../../Assets/github.svg" alt="github-pic"
                    style="width: 50px; height: 50px;">
                  <p class="ms-3"> GitHub </p>
                </div>

                <div class="d-flex align-items-center me-5">
                  <img class="img h-100" src="../../Assets/Bootstrap.png" alt="bootstrap-pic"
                    style="width: 50px; height: 50px;">
                  <p class="ms-3"> Bootstrap </p>
                </div>
              </div>
              <!-- Start Tools FE 2 -->
              <div class="d-flex align-items-center align-self-center mt-4">
                <div class="d-flex align-items-center me-5">
                  <img src="../../Assets/html5.svg" alt="html-pic" class="img h-100" style="width: 50px; height: 50px;">
                  <p class="ms-3"> HTML </p>
                </div>

                <div class="d-flex align-items-center ms-5 me-5">
                  <img class="img h-100" src="../../Assets/css-3.svg" alt="CSS-pic" style="width: 50px; height: 50px;">
                  <p class="ms-3"> CSS </p>
                </div>

                <div class="d-flex align-items-center ms-4 me-5">
                  <img class="img h-100" src="../../Assets/javascript.svg" alt="js-pic"
                    style="width: 50px; height: 50px;">
                  <p class="ms-3"> JavaScript </p>
                </div>
              </div>
            </div>
            <!-- End Tools UIUX -->

            <!-- Start Testimoni -->
            <div class="testimoni-uiux mb-5" id="testimoni">
              <h6> Testimoni </h6>
              <h4> Kata Mereka tentang Kelas Front-End Development DigiSkill </h4>
            </div>
            <div class="row">
              <div class="col-12 testimoni">
                <!-- Swiper -->

                <di class="swiper mySwiperTesti pb-4 pb-sm-5">
                  <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">

                    <!-- Card Start -->
                    <div class="swiper-slide card p-2">
                      <div class="card-body">
                        <div class="rate">
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                        </div>
                        <p class="body-testi ">
                          Kelas Front End gratis sangat membantu untuk mempelajari dasar-dasar pemrograman web.

                        </p>
                        <div class="detail d-flex justify-content-between align-items-end mt-4">
                          <div class="profile ms-0 ">
                            <div class="user  ">
                              <img src="../../Assets/avatar-pict/avatar-female-4.svg  " alt="avatar-review-1"
                                class="rounded-circle img-fluid mb-1">

                              <p class="name m-0">AmeenaRicis</p>
                              <p class="status m-0 lh-sm">Front-End-Developer di Petrokimia</p>
                            </div>
                          </div>
                          <div class="icon-quote">
                            <i class='bx bxs-quote-right'></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Card End -->

                    <!-- Card Start -->
                    <div class="swiper-slide card p-2">
                      <div class="card-body">
                        <div class="rate">
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                        </div>
                        <p class="body-testi ">
                          Saya senang bisa mengikuti kelas Front End gratis yang sangat interaktif.

                        </p>
                        <div class="detail d-flex justify-content-between align-items-end mt-4">
                          <div class="profile ms-0 ">
                            <div class="user  ">
                              <img src="../../Assets/avatar-pict/avatar-male-4.svg" alt="avatar-review-1"
                                class="rounded-circle img-fluid mb-1">

                              <p class="name m-0">Putra Abi</p>
                              <p class="status m-0 lh-sm">Front-End-Developer di PT.Albaik</p>
                            </div>
                          </div>
                          <div class="icon-quote">
                            <i class='bx bxs-quote-right'></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Card End -->

                    <!-- Card Start -->
                    <div class="swiper-slide card p-2">
                      <div class="card-body">
                        <div class="rate">
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                        </div>
                        <p class="body-testi ">
                          Materi yang diajarkan di kelas Front End gratis sangat jelas dan mudah dipahami.
                        </p>
                        <div class="detail d-flex justify-content-between align-items-end mt-4">
                          <div class="profile ms-0 ">
                            <div class="user  ">
                              <img src="../../Assets/avatar-pict/avatar-female-5.svg" alt="avatar-review-1"
                                class="rounded-circle img-fluid mb-1">

                              <p class="name m-0">Kekeyi Saputri</p>
                              <p class="status m-0 lh-sm">Front-End-Developer di PT.SukiKaya</p>
                            </div>
                          </div>
                          <div class="icon-quote">
                            <i class='bx bxs-quote-right'></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Card End -->

                    <!-- Card Start -->
                    <div class="swiper-slide card p-2">
                      <div class="card-body">
                        <div class="rate">
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                        </div>
                        <p class="body-testi ">
                          Instruktur di kelas Front End gratis sangat ahli dan responsif terhadap pertanyaan.

                        </p>
                        <div class="detail d-flex justify-content-between align-items-end mt-4">
                          <div class="profile ms-0 ">
                            <div class="user  ">
                              <img src="../../Assets/avatar-pict/avatar-male-5.svg" alt="avatar-review-1"
                                class="rounded-circle img-fluid mb-1">

                              <p class="name m-0">Adi Widodo</p>
                              <p class="status m-0 lh-sm">Front-End-Developer di PPATK</p>
                            </div>
                          </div>
                          <div class="icon-quote">
                            <i class='bx bxs-quote-right'></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Card End -->

                    <!-- Card Start -->
                    <div class="swiper-slide card p-2">
                      <div class="card-body">
                        <div class="rate">
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                        </div>
                        <p class="body-testi ">
                          Kelas Front End gratis membantu memahami HTML, CSS, dan JS dengan lebih baik.

                        </p>
                        <div class="detail d-flex justify-content-between align-items-end mt-4">
                          <div class="profile ms-0 ">
                            <div class="user  ">
                              <img src="../../Assets/avatar-pict/avatar-female-6.svg" alt="avatar-review-1"
                                class="rounded-circle img-fluid mb-1">

                              <p class="name m-0">Mega Saputri </p>
                              <p class="status m-0 lh-sm">Front-End-Developer di PT.Pede Id</p>
                            </div>
                          </div>
                          <div class="icon-quote">
                            <i class='bx bxs-quote-right'></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Card End -->


                    <!-- Card Start -->
                    <div class="swiper-slide card p-2">
                      <div class="card-body">
                        <div class="rate">
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                          <i class='bx bxs-star'></i>
                        </div>
                        <p class="body-testi ">
                          Saya merasa sangat beruntung bisa mengikuti kelas Front End gratis yang keren ini

                        </p>
                        <div class="detail d-flex justify-content-between align-items-end mt-4">
                          <div class="profile ms-0 ">
                            <div class="user  ">
                              <img src="../../Assets/avatar-pict/avatar-male-6.svg" alt="avatar-review-1"
                                class="rounded-circle img-fluid mb-1">

                              <p class="name m-0">Septiawan Saputra</p>
                              <p class="status m-0 lh-sm">Front-End-Developer di PT.Abiyasa</p>
                            </div>
                          </div>
                          <div class="icon-quote">
                            <i class='bx bxs-quote-right'></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Card End -->


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