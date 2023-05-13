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
    $query = "INSERT INTO login VALUES('','$nama','$username','$email','$password','','','')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
