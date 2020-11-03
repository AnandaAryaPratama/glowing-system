<!DOCTYPE html>
<html lang="en">

<head>
  <title>Portofolio | Kemampuan</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css" media="screen,projection" />
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/home.css">
</head>

<body>
    <!--Nav Bar-->
    <?php
        include_once "navbar.html";
    ?>

  <div class="container-fluid">
    <section style=" height: 70vh;">
      <div class="px-3 pt-5">
        <div class="row text-dark">
          <div
            class="col-md-6 d-flex mt-5 flex-column text-center justify-content-center animate__animated animate__zoomIn animate__delay-1s">
            <h2 style="font-size: 4em;font-weight: bolder;" class="mb-0">Kemampuan</h2>
            <p class="font-weight-bolder text-muted"
              class="mb-0 mt-3 text-center animate__animated animate__zoomIn animate__delay-2s"
              style="font-size: 1.1em; letter-spacing: 2px; line-height: normal;">
              Kemampuan merupakan hal telah ada dalam diri kita sejak lahir. Kemampuan yang ada pada diri
               manusia juga bisa disebut dengan potensi. Potensi yang ada pada manusia pada dasarnya bisa diasah.
            </p>
          </div>
          <div class="col-md-6" style="margin-top: 10px;">
            <img class="img-fluid d-block img-fluid d-block  animate__animated animate__zoomIn animate__delay-1s" src="
              ./assets/images/project-page/header.svg">
          </div>
        </div>
      </div>
    </section>

    <div class="form-group">
    <h4>Keahlian Professional</h4><br>
    <?php
    include_once "koneksi.php";
    //buat SQL
    $strSQLprof = "SELECT * FROM kemampuan";
    $runstrSQLprof = mysqli_query($conn, $strSQLprof);
    $jmlRowDataprof = mysqli_num_rows($runstrSQLprof);
    if ($jmlRowDataprof < 0) {
        echo "<tr><td colspan='5'>Data Tidak Terdapat Dalam Database</td></tr>";
        }
      else {
          while($rowprof = mysqli_fetch_assoc($runstrSQLprof)) {
    ?>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text"><?php echo $rowprof["nama_keahlianprof"] ?></span>
        </div>
        <div class="progress-bar" style="width:<?php echo $rowprof["nilai_keahlianprof"] ?>"><?php echo $rowprof["nilai_keahlianprof"] ?></div>
    </div>
    <?php
          }
        }
    ?>
  </div>

    <div class="form-group">
    <h4>Keahlian Pribadi</h4><br>
    <?php
    include_once "koneksi.php";
    //buat SQL
    $strSQLpribadi = "SELECT * FROM kemampuan";
    $runstrSQLpribadi = mysqli_query($conn, $strSQLpribadi);
    $jmlRowDatapribadi = mysqli_num_rows($runstrSQLpribadi);
    if ($jmlRowDatapribadi < 0) {
        echo "<tr><td colspan='5'>Data Tidak Terdapat Dalam Database</td></tr>";
        }
      else {
          while($rowpribadi = mysqli_fetch_assoc($runstrSQLpribadi)) {
    ?>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text"><?php echo $rowpribadi["nama_keahlianpribadi"] ?></span>
        </div>
        <div class="progress-bar" style="width:<?php echo $rowpribadi["nilai_keahlianpribadi"] ?>"><?php echo $rowpribadi["nilai_keahlianpribadi"] ?></div>
    </div>
    <?php
          }
        }
    ?>
    </div>

  </div>

    <!--Footer-->
    <?php
        include_once "footer.php";
    ?>

  <!-- script -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="assets/js/materialize.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/project.js"></script>

</body>

</html>
