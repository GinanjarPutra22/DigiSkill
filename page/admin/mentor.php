<?php
session_start();
require '../../db/function.php';

if (isset($_SESSION["login"])) {
  $id_user = $_SESSION['id_login'];
  $profile = query("SELECT * FROM login WHERE id_login = '$id_user'")[0];
}
$kelas = query("SELECT * FROM kelas");

$mentor = query("SELECT mentor.id_mentor,mentor.foto,mentor.nama_mentor,mentor.pekerjaan,mentor.pengalaman
                  FROM mentor");
// var_dump($mentor);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mentor</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <!-- Icon Title -->
  <link rel="icon" href="../Assets/logo-icon.svg" type="image/x-icon" />

  <!-- icon -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="../../css/kelas-profil.css" />
  <!-- <link rel="stylesheet" href="../../css/main.css" /> -->
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
              <?php
              foreach ($kelas as $row):
                ?>
                <li>
                  <a class="dropdown-item" href="../detail/detail.php?id=<?= $row['id_kelas'] ?>"><?= $row['nama_kelas'] ?></a>
                </li>
              <?php endforeach ?>
            </ul>
          </li>
          <!-- <li class="nav-item me-4">
                    <a class="nav-link" href="#">Blog</a>
                </li> -->
          <li class="nav-item me-4">
            <a class="nav-link" href="../about-us.php">About Us</a>
          </li>
          <?php
          if (isset($_SESSION["login"])) { ?>
            <li class="nav-item dropdown me-4">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../../Assets/profile/<?= $profile['foto'] ?>" class="rounded-circle" height="22" alt="Foto"
                  loading="lazy" />
              </a>

              <ul class="dropdown-menu me-4">
                <li>
                  <a class="dropdown-item" href="../profile/profile.php">My profile</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../profile/kelas-saya.php">Kelas Saya</a>
                </li>
                <hr />
                <li>
                  <a class="dropdown-item" href="../logout.php">Logout</a>
                </li>
              </ul>
            </li>
          <?php } else { ?>
            <a href="../login.php" class="btn btn-sm btn-outline-primary px-4 mx-lg-2 mb-2 mb-md-0">
              Masuk
            </a>
            <a href="../regist.php" class="btn btn-sm btn-primary px-4 mx-lg-2">Daftar</a>
          <?php } ?>
        </ul>


      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <div class="container">
    <div class="row grid gap-3">
      <!-- Start Sidebar fixx -->
      <div class="col-lg-3">
        <div class="sticky-top mt-4">
          <br />
          <div class="p-4 shadow-4 rounded-3 sidebar">
            <div class="">
              <h5 class="text-center">Mentor</h5>
              <hr />


              <div class="d-grid gap-2">
                <a href="users.php" class="d-grid gap-2">
                  <button class="btn btn-primary " type="button"> <span><i class='bx bx-user'></i></span> Users</button>
                </a>

                <a href="kelas.php" class="d-grid gap-2">
                  <button class="btn btn-primary " type="button"> <span><i class='bx bx-id-card'></i></span>
                    Class</button>
                </a>

                <a href="mentor.php" class="d-grid gap-2">
                  <button class="btn btn-primary disabled" type="button"> <span><i class='bx bx-user-voice'></i></span>
                    Mentor</button>
                </a>

                <a href="tools.php" class="d-grid gap-2">
                  <button class="btn btn-primary " type="button"> <span><i class='bx bx-terminal'></i></span>
                    Tools</button>
                </a>

                <a href="materi.php" class="d-grid gap-2">
                  <button class="btn btn-primary " type="button"> <span><i class='bx bx-book-bookmark'></i></span>
                    Materi</button>
                </a>
              </div>


            </div>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->


      <!-- Start Main Content -->

      <div class="col-lg-8 mt-5">
        <div class="row add-class    mb-lg-4 mb-sm-4">
          <div class="col-lg-12">


            <!-- Filter end Btn add -->
            <div class="row text-md-end mb-3 mb-sm-2">
              <a href="tambah/add-mentor.php ">
                <button class="btn btn-primary btn-md"><span><i class='bx bx-plus'></i></span> Tambah Mentor</button>
              </a>

            </div>
            <div class="row ">
              <div class="col-lg-6  pe-1">
                <div class="row d-flex justify-content-start">
                  <label for="inputState" class="form-label text-start">Filter Kelas</label>
                  <div class="col-lg-11 d-flex">
                    <select class="form-select 3 me-lg-2 me-2" aria-label="Default select example">
                      <option selected>Pilih Kelas</option>
                      <option value="1">UI/UX Design</option>
                      <option value="2">Front-End-Development</option>
                    </select>
                    <button class="btn btn-primary btn-md d-flex"> <span class="me-2"><i
                          class='bx bx-filter'></i></span>
                      Filter</button>
                  </div>
                </div>

              </div>

              <div class="col-lg-6  ps-1">
                <div class="row d-flex justify-content-start">
                  <label for="inputEmail4" class="form-label">Cari Mentor</label>
                  <div class="col-lg-11 d-flex justify-content-between">

                    <input type="email" class="form-control me-2" id="inputEmail4" placeholder="Masukan nama mentor">

                    <button class="btn btn-primary btn-md d-flex justify-content-between"> <span class="me-2"><i
                          class='bx bx-search'></i></span>
                      Cari</button>
                  </div>
                </div>
              </div>
            </div>




            <!-- Tabel -->
            <div class="row -table mt-4">

              <div class="table" style="overflow-x:auto;">
                <table class="table table-striped table-hover align-middle">
                  <tr>
                    <th width="50px">ID</th>
                    <th class="text-center" width="100px">Profil</th>
                    <th class="text-start" width="150px">Nama Mentor</th>
                    <th class="text-start" width="150px">Pekerjaan</th>
                    <th class="text-start" width="100px">Kelas</th>
                    <th class="text-center" width="50px">Tindakan</th>

                  </tr>
                  <?php foreach ($mentor as $row): ?>
                    <tr>
                      <td>
                        <?= $row["id_mentor"] ?>
                      </td>
                      <td class="text-center">
                        <img src="../../Assets/<?= $row["foto"] ?>" alt="avatar-review-1"
                          class="rounded img-fluid w-50" />
                      </td>
                      <td class="text-start">
                        <?= $row["nama_mentor"] ?>
                      </td>
                      <td class="text-start">
                        <?= $row["pekerjaan"] ?>
                      </td>
                      <td class="text-start">
                        <?= substr($row['pengalaman'], 0, 50) . '....' ?>
                      </td>
                      <td class="text-center">
                        <div class="d-flex">
                          <a href="edit/edit-mentor.php?id=<?= $row["id_mentor"] ?>" type="button"
                            class="btn btn-primary btn-sm mx-2">Edit</a>
                          <a href="hapus/hapus-mentor.php?id=<?= $row["id_mentor"] ?>" type="button"
                            class="btn btn-danger btn-sm mx-2"
                            onclick="return confirm('Apakah Anda Yakin Menghapus data ini?')">Hapus</a>

                        </div>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </table>
              </div>
            </div>

            <!-- End Tabel -->

          </div>
        </div>
      </div>


      <!-- End Main Content -->
    </div>
    <!-- ------End Row Main Detail Kelas------- -->
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>