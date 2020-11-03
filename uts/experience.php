<?php
    //buat SQL
    include_once "koneksi.php";
    $strSQLkerja = "SELECT * FROM pengalaman";
    $runstrSQLkerja = mysqli_query($conn, $strSQLkerja);
    $jmlRowDatakerja = mysqli_num_rows($runstrSQLkerja);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Portofolio | Pengalaman</title>
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

  <div class="">
    <section style="height: 90vh;">
      <div class="container-fluid px-3 pt-5">
        <div class="row text-dark">
          <div class="col-md-6"> <img class="img-fluid d-block  animate__animated animate__fadeInUp animate__delay-1s"
              src="./assets/images//experience-page/experience.svg" draggable="true"> </div>
          <div
            class="px-md-5 p-3 col-md-6 d-flex flex-column align-items-center justify-content-center animate__animated animate__fadeInUp animate__delay-1s">
            <h2 style="font-size: 3em;font-weight: bolder;" class="mb-0">Pengalaman</h2>
            <p class="font-weight-bolder text-muted text-center animate__animated animate__fadeInUp animate__delay-2s"
              style="font-size: 1.1em; letter-spacing: 2px; line-height: normal;">
              Informasi mengenai dimana saja saya telah bekerja. Dan ikut serta dalam mengikuti Kepanitiaan
              sebuah acara.
            </p>
          </div>
        </div>
      </div>
    </section>

    <h4 class="text-center heading1">Pengalaman Bekerja</h4>
    <h6 class="text-muted text-center py-2 heading2">Saya pernah bekerja pada:</h6>

    <!-- Card -->

    <ul class="mx-4">
      <?php 
        if ($jmlRowDatakerja < 0) {
          echo "<tr><td colspan='5'>Data Tidak Terdapat Dalam Database</td></tr>";
          }
          else {
                  while($row = mysqli_fetch_assoc($runstrSQLkerja)) {
               
      ?>
      <li class="card card1">
        <img src="assets\images\<?php echo $row["foto_kerja"]; ?>" class="featured-image" />
        <article class="card-body">
          <header>
            <div class="title">
              <h3><?php echo $row["nama_kerja"]; ?></h3>
            </div>
            <p class="meta" style="margin: 0;">
              <span class="author"><?php echo $row["tahun_kerja"]; ?></span>
            </p>
            <p class="meta">
              <?php echo $row["deskripsi_kerja"]; ?>
            </p>
          </header>
        </article>
      </li>
      <?php       
        }
      }
      ?>
    </ul>

    <h4 class="text-center heading1" style="margin-top:6rem">Kepanitiaan</h4>
    <h6 class="text-muted text-center py-2 heading2">Saya pernah menikuti kepanitiaan dalam acara:</h6>

    <!-- Volunteership Card -->

    <main class="page-content">
      <?php
        $strSQLpanitia = "SELECT * FROM pengalaman";
        $runstrSQLpanitia = mysqli_query($conn, $strSQLpanitia);
        $jmlRowDatapanitia = mysqli_num_rows($runstrSQLpanitia);
        if ($jmlRowDatapanitia < 0) {
          echo "<tr><td colspan='5'>Data Tidak Terdapat Dalam Database</td></tr>";
          }
          else {
                  while($row = mysqli_fetch_assoc($runstrSQLpanitia)) {
      ?>
      <div class="card" style="background-image: url('assets/images/<?php echo $row["foto_panitia"]; ?>'); background-repeat: no-repeat, repeat; background-size: cover; background-position: center;">
        <div class="content">
            <h2 class="title"><?php echo $row["nama_acara"] ?></h2>
            <p class="copy"><?php echo $row["deskripsi_panitia"] ?></p>
        </div>
      </div>
      <?php
                  }
                }
      ?>
    </main>

    <!--Footer-->
    <?php
        include_once "footer.php";
    ?>

    <link rel="stylesheet" href="assets\css\style.css" />
    <link rel="stylesheet" href="assets\css\experience.css" />
    <script src="assets/js/main.js"></script>
    <!-- script -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
</body>

</html>
