<?php


require '../../db/function.php';

$id = $_GET["id"];

$detail = query("SELECT * FROM kelas WHERE id_kelas= '$id'")[0];
var_dump($detail);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- Modal -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icon Title -->
    <link rel="icon" href="../Assets/logo-icon.svg" type="image/x-icon" />
    <!-- icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../css/detail.css">
    <title>Detail <?= $detail["nama_kelas"] ?></title>

</head>

<body>

    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg bg-light shadow-sm bg-body rounded">
        <div class="container">
            <a class="navbar-brand" href="../../index.php">
                <img src="../../Assets/Logo-DigiSkill.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                DigiSkill
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
                            <li><a class="dropdown-item" href="#">UI/UX Design</a></li>
                            <li><a class="dropdown-item" href="detail-front-end.php">Front-End-Development</a></li>
                            <li><a class="dropdown-item" href="detail-back-end.php">Back-End-Development</a></li>
                        </ul>
                    </li>
                    <!-- <li class="nav-item me-4">
                    <a class="nav-link" href="#">Blog</a>
                </li> -->
                    <li class="nav-item me-4">
                        <a class="nav-link" href="../about-us.php">About Us</a>
                    </li>
                    <li class="nav-item dropdown me-4">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle" height="22" alt="Portrait of a Woman" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu me-4">
                            <li>
                                <a class="dropdown-item" href="../profile/profile.php">My profile</a>
                            </li>
                            <hr />
                            <li>
                                <a class="dropdown-item" href="../../index.php">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>


            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <div class="container">

        <!-- ------Start Row Main Detail Kelas------- -->
        <div class="my-5">
            <div class="row grid gap-3 ">

                <!-- Start Sidebar Detail Program UIUX -->
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
                <!-- End Sidebar Detail Program UIUX -->

                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <button type="button" class="btn-close right" data-bs-dismiss="modal"></button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="container">
                                    <div class="text-center">
                                        <h3>Memilih Kelas UI/UX Design</h3>
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
                        <!-- Start Main Contenct Tentang Program UIUX -->
                        <div class="tentang-program mb-5" id="tentang-program">
                            <h6> Tentang Program </h6>
                            <h4> Dapatkan Kelas Gratis <span> <?= $detail["nama_kelas"] ?></h4></span>
                            <p> Bersama DigiSkill anda bisa mendaftar kelas <?= $detail["nama_kelas"] ?> dengan gratis tanpa dipunggut biaya sedikitpun.</p>
                            <p> <?= $detail["detail_program"] ?> </p>
                            <p>Dengan arahan mentor, kali ini kita akan belajar bagaimana langkah awal dalam memulai sebagai <?= $detail["nama_kelas"] ?> yang baik dan benar, serta dengan cara yang mudah dipahami oleh pemula.</p>
                        </div>
                        <!-- End Main Contenct Tentang Program UIUX -->

                        <!-- Start Mentor Kelas UIUX -->
                        <div class="mentor-kelas my-5" id="mentor">
                            <h6> Mentor Kelas </h6>
                            <h4> Belajar Langsung Dari Ahlinya </h4>
                            <p> Anda akan belajar langsung dari mentor yang ahli dalam bidang UI/UX Design </p>
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="../../Assets/mentor-ui-ux.svg" alt="mentor-ui-ux" class="img img-fluid rounded">
                                </div>
                                <div class="col-lg-8">
                                    <div class="text-mentor">
                                        <h5 class="fw-bold"> Moh. Ginanjar </h5>
                                        <p class="fw-bold"> <span> UI/UX Designer di Rellive </span> </p>
                                        <p> Ginanjar bekerja sebagai seorang UI/UX Designer di Riliv, sebuah perusahaan teknologi kesehatan
                                            di Indonesia. Ginanjar memiliki pengalaman selama 3 tahun di bidang desain antarmuka pengguna dan
                                            pengalaman kerja di industri teknologi selama 5 tahun. </p>
                                    </div>
                                    <div class="d-flex">
                                        <img src="../../Assets/linkedin.svg" alt="linkedin" class="img">
                                        <img src="../../Assets/instagram.svg" alt="instagram" class="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Mentor Kelas UIUX -->

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
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Pengenalan UI/UX Design
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li> Apa itu UI/UX Design? </li>
                                                <li> Pengertian UI/UX Design </li>
                                                <li> Perbedaan UI/UX Design </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Tools UI/UX Design
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li> Basic Tools Figma </li>
                                                <li> Component Figma </li>
                                                <li> Layouting Figma </li>
                                                <li> Prototype </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Design Proses (Design Thinking)
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li> Problem </li>
                                                <li> Brainstorming </li>
                                                <li> Design </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Figma and Testing
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li> Implementasi </li>
                                                <li> Testing </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Accordion -->
                        </div>
                        <!-- End Kurikulum Program -->

                        <!-- Start Tools UIUX -->
                        <div class="tools-uiux mb-5" id="tools">
                            <h6> Tools </h6>
                            <h4> Belajar UI/UX Dengan Tools Gratis </h4>
                            <p> Pada sesi pembelajaran pelatihan menggunakan software yang gratis dan mudah digunakan secara
                                bersama-sama.
                            </p>
                            <div class="d-flex align-items-center align-self-center">
                                <div class="d-flex align-items-center me-5">
                                    <img src="../../Assets/figma.svg" alt="figma-pic" class="img h-100">
                                    <p class="ms-2"> Figma </p>
                                </div>

                                <div class="d-flex align-items-center me-5">
                                    <img class="img h-100" src="../../Assets/maze.svg" alt="maze-pic">
                                    <p class="ms-3"> Maze </p>
                                </div>

                                <div class="d-flex align-items-center me-5">
                                    <img class="img h-100" src="../../Assets/google-forms.svg" alt="gform-pic">
                                    <p class="ms-2"> Google Form </p>
                                </div>
                            </div>


                        </div>
                        <!-- End Tools UIUX -->

                        <!-- Start Testimoni -->
                        <div class="testimoni mb-5" id="testimoni">
                            <h6> Testimoni </h6>
                            <h4> Kata Mereka tentang Kelas UI/UX Design DigiSkill </h4>
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
                                                    Mengikuti kelas UI/UX ini saya sangat mudah memahami materi yang diberikan
                                                </p>
                                                <div class="detail d-flex justify-content-between align-items-end mt-4">
                                                    <div class="profile ms-0 ">
                                                        <div class="user  ">
                                                            <img src="../../Assets/avatar-pict/avatar-female-1.svg  " alt="avatar-review-1" class="rounded-circle img-fluid mb-1">

                                                            <p class="name m-0">Amalia Sonia</p>
                                                            <p class="status m-0 lh-sm">UI/UX Designer di Petrokimia</p>
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
                                                    Kelas UIUX gratis ini sangat membantu bagi pemula seperti saya yang tidak tahu.
                                                </p>
                                                <div class="detail d-flex justify-content-between align-items-end mt-4">
                                                    <div class="profile ms-0 ">
                                                        <div class="user  ">
                                                            <img src="../../Assets/avatar-pict/avatar-male-1.svg" alt="avatar-review-1" class="rounded-circle img-fluid mb-1">

                                                            <p class="name m-0">Febrian Putra</p>
                                                            <p class="status m-0 lh-sm">UI/UX Designer di PT.Alakabar</p>
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
                                                    Saya merasa sangat terbantu dengan materi yang disampaikan dalam kelas UIUX ini.
                                                </p>
                                                <div class="detail d-flex justify-content-between align-items-end mt-4">
                                                    <div class="profile ms-0 ">
                                                        <div class="user  ">
                                                            <img src="../../Assets/avatar-pict/avatar-female-2.svg" alt="avatar-review-1" class="rounded-circle img-fluid mb-1">

                                                            <p class="name m-0">Faradisa Saputri</p>
                                                            <p class="status m-0 lh-sm">UI/UX Designer di PT.SukaSuka</p>
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
                                                    Saya merasa lebih percaya diri untuk mengembangkan skill di
                                                    kelas UIUX ini.
                                                </p>
                                                <div class="detail d-flex justify-content-between align-items-end mt-4">
                                                    <div class="profile ms-0 ">
                                                        <div class="user  ">
                                                            <img src="../../Assets/avatar-pict/avatar-male-2.svg" alt="avatar-review-1" class="rounded-circle img-fluid mb-1">

                                                            <p class="name m-0">Adi Prabowo</p>
                                                            <p class="status m-0 lh-sm">UI/UX Designer di Kemenhan</p>
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
                                                    Kelas UIUX gratis ini membantu saya untuk memperbaiki portofolio desain saya
                                                </p>
                                                <div class="detail d-flex justify-content-between align-items-end mt-4">
                                                    <div class="profile ms-0 ">
                                                        <div class="user  ">
                                                            <img src="../../Assets/avatar-pict/avatar-female-3.svg" alt="avatar-review-1" class="rounded-circle img-fluid mb-1">

                                                            <p class="name m-0">Puan Saputri</p>
                                                            <p class="status m-0 lh-sm">UI/UX Designer di PT.Depe Ergo</p>
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
                                                    Saya sangat terkesan dengan kualitas video pembelajaran dalam kelas UIUX gratis ini.
                                                </p>
                                                <div class="detail d-flex justify-content-between align-items-end mt-4">
                                                    <div class="profile ms-0 ">
                                                        <div class="user  ">
                                                            <img src="../../Assets/avatar-review-1.svg" alt="avatar-review-1" class="rounded-circle img-fluid mb-1">

                                                            <p class="name m-0">Fardy Saputra</p>
                                                            <p class="status m-0 lh-sm">UI/UX Designer di PT.PKK</p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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