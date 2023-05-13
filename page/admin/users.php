<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>
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
          DigiSkill | Dashboard
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
                  <a class="dropdown-item" href="../profile/profile.php"
                    >My profile</a
                  >
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
        <div class="row grid gap-3">
       <!-- Start Sidebar Detail Program BE -->
       <div class="col-lg-3">
            <div class="sticky-top mt-4">
              <br />
              <div class="p-4 shadow-4 rounded-3 sidebar">
                <div class="">
                  <h5 class="text-center">ADMIN</h5>
                  <hr />
                  <div style="font-size: smaller" class="ms-3">
                    <a href="users.php">
                      <p style="color: white; font-weight: 600;">Users</p>
                    </a>
                    <a href="profile.php">
                            <p>Kelas</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Sidebar Detail Program BE -->

          <!-- Start Main Content -->

          <div class="col-lg-8 mt-5">
              <div class="row add-class">

              </div>

              <div class="row -table">

             <div class="table" style="overflow-x:auto;">

            
                <table class="table table-striped table-hover" >
                  <tr>
                      <th>ID</th>
                      <th>Profil</th>
                      <th>Kelas</th>
                      <th>Waktu Begabung</th>
                      <th>Tugas</th>
                  </tr>
                  <tr>
                      <td>1 </td>
                      <td>Charles III</td>
                      <td>UI/UX Design</td>
                      <td>13 Mei 2023</td>
                      <td>
                        
                        <button type="button" class="btn btn-primary btn-sm">Lihat</button>
                    
                      </td>
                  </tr>
                  <tr>
                      <td>2 </td>
                      <td>Ellisabth II</td>
                      <td>Front End Development</td>
                      <td>14 Mei 2023</td>
                      <td>
                        
                        <button type="button" class="btn btn-primary btn-sm">Lihat</button>
                    
                      </td>
                  </tr>
                
              </table>
            </div>
            </div>
            <!-- End Main Content -->
        </div>
        <!-- ------End Row Main Detail Kelas------- -->
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>