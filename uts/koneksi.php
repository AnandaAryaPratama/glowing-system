<?php
    $namaServer = "localhost";
    $username = "root";
    $password = "";
    $namaDB = "portofolio";

    //Membuat Koneksi
    $conn = mysqli_connect($namaServer, $username, $password, $namaDB);

    //Check Koneksi
    if (!$conn) {
        die("Koneksi Gagal");
    }
?>