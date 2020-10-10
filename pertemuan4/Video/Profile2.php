<?php
  setcookie('nama_user', $_GET['nama'], time()-120);
  echo 'ini halaman profil ' .$_COOKIE['nama_user'];
?>
