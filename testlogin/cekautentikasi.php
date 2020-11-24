<?php

session_start();

if (($_SESSION["session_email"]) && isset($_COOKIE["cookietoken"])) {
    if (($_SESSION['session_token'] == $_COOKIE["cookietoken"])) {
    }
    else {
        header('location:login.php');
    }
}

else {
    header('location:login.php');
}

// if (!(isset($_COOKIE["cookietoken"])) && (!($_SESSION['session_token'] == $_COOKIE["cookietoken"]))) {
//     header('location:login.php');
// }

?>