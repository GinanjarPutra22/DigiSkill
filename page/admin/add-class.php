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
        <div class="container  mt-5">
            <div class="col-12">
               
                

                <div class="row content d-flex justify-content-center">
                    <div class="col-lg-8">
                        <a href="kelas.php" class="d-flex justify-content-end">
                            <img src="../../Assets/x-circle.svg" alt="" class="h-50" />
                        </a>
                        <h3 class="text-center mt-3">Buat Kelas Baru</h3>
                    </div>

                    <!-- from -->
                    <div class="col-8 my-4">
                    <h4>Informasi Awal Kelas</h4>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Judul</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukan nama kelas">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Detail Awal</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukan sedikit detail awal kelas">
                        </div>
                        <div class="mb-3">
                              <h6>Thumbnail</h6>
                            <div class="input-group ">
                                <input type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="kode-kelas" class="form-label">Kode Kelas</label>
                            <input type="email" class="form-control" id="kode-kelas" placeholder="Masukan kode kelas">
                        </div>
                        <a href="#" class="mb-5">
                            <button type="button" class="btn btn-primary btn-lg">Buat Kelas</button>
                        </a>
                    </div>
                    
                    <!-- end form -->
                </div>
            </div>
           
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>