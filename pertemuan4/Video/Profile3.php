<?php

  session_start();
  //setcookie('nama_user', $_GET['nama'], time()-120);
  //echo 'ini halaman profil ' .$_COOKIE['nama_user'];
  
  if (isset($_SESSION['nama_user'])) {
 	 echo 'ini halaman profil ' .$_SESSION['nama_user'];
  }
  else {
  	echo "Login dulu gan";
  }
?>
 <br>

 <a href="logout.php">Logout</a>