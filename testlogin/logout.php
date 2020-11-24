<?php

session_start();

session_unset();
session_destroy();

//hancurkan cookie
setcookie("cookietoken","", time() - 3600, "/");
include 'cekautentikasi.php';

?>