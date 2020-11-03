<?php
  if (isset($_GET["id_biodata"])) {
      include_once "koneksi.php";
      $id_biodata = _GET["id_biodata"];
      mysqli_query($conn, "DELETE FROM biodata WHERE id_biodata='$id_biodata'");
      mysqli_query($conn, "DELETE FROM kemampuan WHERE id_biodata='$id_biodata'");
      mysqli_query($conn, "DELETE FROM pendidikan WHERE id_biodata='$id_biodata'");
      mysqli_query($conn, "DELETE FROM penelitian WHERE id_biodata='$id_biodata'");
      $pengalaman = mysqli_query($conn, "DELETE FROM pengalaman WHERE id_biodata='$id_biodata'");

      if ($pengalaman) {
          header("location: dashboard.php?suksesdelete")
      }
  }  
?>