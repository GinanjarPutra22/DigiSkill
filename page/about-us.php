<?php
session_start();

require '../db/function.php';

$kelas = query("SELECT * FROM kelas");
if (isset($_SESSION["login"])) {
    $id_user = $_SESSION['id_login'];
    // var_dump($data_kelas);
    $profile = query("SELECT * FROM login WHERE id_login = '$id_user'")[0];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- Icon Title -->
    <link rel="icon" href="../Assets/logo-icon.svg" type="image/x-icon" />

    <!-- icon -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="../css/about-us.css" />
    <link rel="stylesheet" href="../css/main.css" />
    <title>About Us</title>
</head>

<body>
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg bg-light shadow-sm bg-body rounded">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../Assets/Logo-DigiSkill.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top" />
                DigiSkill
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item me-4">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown me-4">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Course
                        </a>
                        <ul class="dropdown-menu me-4">
                            <?php
                            foreach ($kelas as $row) :
                            ?>
                                <li>
                                    <a class="dropdown-item" href="detail/detail.php?id=<?= $row['id_kelas'] ?>"><?= $row['nama_kelas'] ?></a>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <?php
                    if (isset($_SESSION["login"])) { ?>
                        <li class="nav-item dropdown me-4">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../Assets/profile/<?= $profile['foto'] ?>" class="rounded-circle" height="22" alt="Foto" loading="lazy" />
                            </a>
                            <ul class="dropdown-menu me-4">

                                <li>
                                    <a class="dropdown-item" href="profile/profile.php">My profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="profile/kelas-saya.php">Kelas Saya</a>
                                </li>
                                <hr />
                                <li>
                                    <a class="dropdown-item" href="logout.php">Logout</a>
                                </li>
                            </ul>
                        </li>
                    <?php } else { ?>
                        <a href="login.php" class="btn btn-sm btn-outline-primary px-4 mx-lg-2 mb-2 mb-md-0">
                            Masuk
                        </a>
                        <a href="regist.php" class="btn btn-sm btn-primary px-4 mx-lg-2">Daftar</a>
                    <?php } ?>

                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Start Hero Section -->
    <div class="container container-hero my-5 hero-section">
        <div class="row mb-5">
            <!-- img -->
            <div class="col-md-6 d-flex justify-content-center order-sm-1 order-md-2">
                <img class="img w-100" src="../Assets/hero-about-1.svg" alt="" class="justify-content-center" />
            </div>
            <!-- ENd img -->
            <!-- text section -->
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <h1 class="mt-5">
                        <span>Bersama</span> Kembangkan Keahlian
                        <span>Digitall</span> Indonesia
                    </h1>
                    <p style="font-size: 20">
                        Bersama dengan DigiSkill akan membantu mengembangkan digital skill
                        untuk meningkatkan mutu pendidikan dan pekerjaan di Indonesia
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- start value 1 -->

    <div class="container-fluid container-section-2 py-md-5">
        <div class="container">
            <h2 class="text-center">
                Bersama <span>DigiSkill </span> Majukan <br />
                Pendidikan Indonesia
            </h2>
            <div class="row mt-lg-5">
                <!-- img -->
                <div class="col-md-6 d-flex justify-content-center order-sm-1 order-md-0">
                    <img class="img w-100" src="../Assets/hero-about-2.svg" alt="" class="justify-content-center" />
                </div>
                <!-- ENd img -->
                <!-- text section -->
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <h6 class="mt-5">Kurangnya Talenta Digital</h6>
                        <p style="font-size: 24">
                            Indonesia masih menghadapi kurangnya talenta digital yang
                            memadai untuk mendukung perkembangan teknologi dan inovasi di
                            era digital saat ini. Kebutuhan talenta digital di Indonesia
                            semakin meningkat seiring dengan perkembangan teknologi dan
                            transformasi digital pada berbagai sektor industri.
                        </p>
                    </div>
                </div>
                <!-- End Text -->
            </div>
        </div>
    </div>
    <!-- end value 1 -->
    <!-- Start Us -->
    <div class="container about my-5">
        <!-- text -->
        <div class="text text-center my-lg-5">
            <h2 class="text-center">
                Bersama Tim Pengembang <span> DigiSkill </span>
            </h2>
            <p>
                Tim Pengembang DigiSkill ini merupakan anggota kelompok 5 <br />
                pada mata kuliah pemerogaman web PTI UNESA
            </p>
        </div>

        <div class="about">
            <div class="row mx-auto text-center">
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-md-end">
                    <div class="card text-center py-5" style="width: 20rem">
                        <img src="../Assets/about-ginanjar.svg" class="card-img-top text-center mx-auto mt-0" alt="..." />
                        <div class="card-body">
                            <h5 class=""><span>Moh. Ginanjar Shomat I. S</span></h5>
                            <p class="">UI/UX Designer dan Front-End Developer</p>
                        </div>
                        <div class="sosmed mt-lg-0 d-flex mx-auto">
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
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-md-start">
                    <div class="card text-center py-5" style="width: 20rem">
                        <img src="../Assets/about-ferdy.svg" class="card-img-top text-center mx-auto mt-0" alt="..." />
                        <div class="card-body">
                            <h5 class=""><span>Ferdy Septiawan</span></h5>
                            <p class="">Front-End Developer dan Back-End Developer</p>
                        </div>
                        <div class="sosmed mt-lg-0 d-flex mx-auto">
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
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-md-end mt-lg-3">
                    <div class="card text-center py-5" style="width: 20rem">
                        <img src="../Assets/about-alvina.svg" class="card-img-top text-center mx-auto mt-0" alt="..." />
                        <div class="card-body">
                            <h5 class=""><span>Alvina Febrianti</span></h5>
                            <p class="">
                                Product Manager, System Analyst, dan Front-End Developer
                            </p>
                        </div>
                        <div class="sosmed mt-lg-0 d-flex mx-auto">
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
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-md-start mt-lg-3">
                    <div class="card text-center py-5" style="width: 20rem">
                        <img src="../Assets/about-farhan.svg" class="card-img-top text-center mx-auto mt-0" alt="..." />
                        <div class="card-body">
                            <h5 class=""><span>Farhanahh Sajidah</span></h5>
                            <p class="">System Analyst dan Front-End Developer</p>
                        </div>
                        <div class="sosmed mt-lg-0 d-flex mx-auto">
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
            </div>
        </div>
        <!-- End US -->
    </div>

    <!-- Start Footer -->
    <footer class="footer bg-primary mt-5">
        <div class="container pt-5">
            <div class="row mb-3 d-flex align-items-center">
                <a class="navbar-brand fs-4 fw-semibold d-flex align-items-center me-3" href="/index.php">
                    <img src="../../Assets/logo-white.svg" class="d-inline-block align-text-top h-75" />
                    DigiSkill
                </a>
            </div>
            <div class="row row-content justify-content-between justify-content-md-start">
                <div class="col-lg-3 col-md-6 mb-sm-4">
                    <h3>Hubungi Kami</h3>
                    <div class="row d-flex mt-3">
                        <a href=" 
                            https://goo.gl/maps/V9TZsWie5Ug1UdAR9" terget="_blank" class="d-flex align-items-start">
                            <i class="bx bx-map me-2"></i>
                            <p>
                                Jl. Ketintang, Kel. Ketintang, Kec. Gayungsari, Kota Surabaya
                            </p>
                        </a>
                        <a href=" 
                            #" class="d-flex align-items-start">
                            <i class="bx bx-envelope me-2"></i>

                            <p>digiskill@gmail.com</p>
                        </a>

                        <a href=" 
                            #" class="d-flex align-items-start">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="../../script/script.js"></script>
</body>

</html>