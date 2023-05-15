<?php
$conn = mysqli_connect("Localhost", "root", "", "digiskill");


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    // var_dump($rows);
    return $rows;
    if (!$result) {
        echo mysqli_error($conn);
    }
}

function registrasi($data)
{
    global $conn;

    // strtolower() berfungsi untuk membuat huruf menjadi kecil
    // stripslashes() untuk menghapus karakter backslas
    $nama = $data["nama"];
    $username = strtolower(stripslashes($data["username"]));
    $email = mysqli_real_escape_string($conn, $data["email"]);
    // mysqli_real_escape_string() memasukkan simbol" dengan aman
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM login WHERE username = '$username'");


    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert ('Username Sudah Terdaftar');
        </script>";
        return false;
    }

    // cek apakah password 1 dan 2 sama?
    if ($password !== $password2) {
        echo "<script>
        alert ('Konfirmasi Password tidak sesuai');
        </script>";
        return false;
    }
    // encrypsi password mengacak string menjadi hash atau acak
    $password = password_hash($password, PASSWORD_DEFAULT);

    // menambahkan user baru kedalam database
    $query = "INSERT INTO login VALUES('','$nama','$username','$email','$password','','','','','')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function editprofile($data)
{
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $username = htmlspecialchars($data["username"]);
    $email = htmlspecialchars($data["email"]);
    $no_telp = htmlspecialchars($data["no_telp"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $provinsi = htmlspecialchars($data["provinsi"]);
    $kota = htmlspecialchars($data["kota"]);
    $password = htmlspecialchars($data["password"]);
    $fotolama = htmlspecialchars($data["foto_lama"]);

    //cek apakah user pilih gambar baru atau tidak
    if ($_FILES['foto']['error'] === 4) {
        $foto = $fotolama;
    } else {
        $foto = upload();
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "UPDATE login SET
            nama = '$nama',
            username = '$username',
            email = '$email',
            password = '$password',
            nomor_hp = '$no_telp',
            foto = '$foto',
            alamat = '$alamat',
            provinsi = '$provinsi',
            kota = '$kota'
            WHERE id_login = $id
        ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namafile = $_FILES['foto']['name'];
    $ukuranfile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpname = $_FILES['foto']['tmp_name'];

    // cek apakah ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
        alert ('Pilih Gambar terlebih dahulu');
        </script>";
        return false;
    }

    // cek yang diupload ekstensinya apkah gambar atau bukan
    $ekstensigambarValid = ['jpg', 'png', 'jpeg'];
    $ekstensigambar = explode('.', $namafile); // sebagai pemisah antara nama file dengan ekstensi
    //  contohnya ferdy.png maka menjadi ['ferdy','png']
    $ekstensigambar = strtolower(end($ekstensigambar)); // strtolower merubah nama file menjadi lowercase/ huruf kecil
    // end mengambil explode yang paling akhir

    if (!in_array($ekstensigambar, $ekstensigambarValid)) { // melakukan pengecekan string didalam array
        // fungsi ini menghasilkan true jika ada false jika tidak
        echo "<script>
        alert ('Yang anda upload bukan gambar');
        </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranfile > 5000000000) { //dalam bentuk byte
        echo "<script>
        alert ('file yang anda upload terlalu besar');
        </script>";
        return false;
    }

    //lolos pengecekan gambar siap diupload

    // generate nama gambar random baruu
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensigambar;

    // mengirim kedalam directory 
    move_uploaded_file($tmpname, 'D:/Aplikasi/xampp/htdocs/DigiSkill/Assets/profile/' . $namafilebaru);

    return $namafilebaru; // untuk diproses dalam function tambah sebagai nama file yang disimpan

}
