<?php
    $conn = mysqli_connect("Localhost", "root", "","digiskill");

    

function registrasi($data){
    global $conn;

    $nama = $data["nama"];
    $username = $data["username"];
    $email =$data["email"];
    $password = $data["password"];

    mysqli_query($conn, "INSERT  INTO login VALUES ('','','$nama','$username','$email','$password')");
}
?>