<?php
    include '../koneksi.php';
    if (isset($_GET["id_kemampuan"])) {
    $id_kemampuan   = $_GET['id_kemampuan'];
    // query SQL untuk insert data
    $sql="DELETE from kemampuan where id_kemampuan='".$id_kemampuan."'";

        if (mysqli_query($conn, $sql)) {
            header("location: kemampuan.php?sukseshapus");
        }
        else {
            header("location: kemampuan.php?gagalhapus");
        }
    }
    else {
        echo "Gagal";
    }
?>