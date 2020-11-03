<?php
    include '../koneksi.php';
    if (isset($_GET["id_pengalaman"])) {
    $id_pengalaman   = $_GET['id_pengalaman'];
    // query SQL untuk insert data
    $sql="DELETE from pengalaman where id_pengalaman='".$id_pengalaman."'";

        if (mysqli_query($conn, $sql)) {
            header("location: pengalaman.php?sukseshapus");
        }
        else {
            header("location: pengalaman.php?gagalhapus");
        }
    }
    else {
        echo "Gagal";
    }
?>