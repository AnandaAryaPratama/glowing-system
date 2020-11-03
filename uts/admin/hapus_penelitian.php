<?php
    include '../koneksi.php';
    if (isset($_GET["id_penelitian"])) {
    $id_penelitian   = $_GET['id_penelitian'];
    // query SQL untuk insert data
    $sql="DELETE from penelitian where id_penelitian='".$id_penelitian."'";

        if (mysqli_query($conn, $sql)) {
            header("location: penelitian.php?sukseshapus");
        }
        else {
            header("location: penelitian.php?gagalhapus");
        }
    }
    else {
        echo "Gagal";
    }
?>