<!DOCTYPE html>
<html lang="en">

<head>
  <title>Portofolio | Education</title>
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
        include_once "koneksi.php";
        include_once "navbar.html";
    ?>

  <!--Header Section-->
  <section style="height: 90vh;">
    <div class="container-fluid px-3 pt-5">
      <div class="row text-dark mx-auto">
        <div class="col-md-6"> <img class="img-fluid d-block"
            src="./assets/images/education-page/header.svg" draggable="true"> </div>
        <div
          class="px-md-5 p-3 col-md-6 d-flex flex-column align-items-center justify-content-center">
          <h2 style="font-size: 3em;font-weight: bolder;" class="mb-0">Pendidikan</h2>
          <p class="font-weight-bolder text-muted text-center"
            style="font-size: 1.5em;">
            Informasi mengenai dimana saya mencari ilmu saat sekolah!
          </p>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container-fluid px-5">
      <!--Formal Education Timeline-->
      <?php
        //buat SQL
        $strSQL = "SELECT * FROM pendidikan";
        $runstrSQL = mysqli_query($conn, $strSQL);
        $jmlRowData = mysqli_num_rows($runstrSQL);
        if ($jmlRowData < 0) {
            echo "<tr><td colspan='5'>Data Tidak Terdapat Dalam Database</td></tr>";
            }
          else {
              while($row = mysqli_fetch_assoc($runstrSQL)) {
      ?>
      <h4 class="text-muted text-center py-4">Formal Education</h4>
      <div class="row">
        <div class="col-md-12">
          <div class="main-timeline" data-aos="zoom-in" data-aos-easing="linear" data-aos-delay="300">
            <div class="timeline" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="600">
              <div class="timeline-content">
                <h6 class="center-align font-weight-bolder pt-1">Sekolah Dasar</h6>
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <img src="./assets/images/education-page/timeline-1.svg" alt="" height="110"
                      class=" mt-2 w-100 mx-auto">
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-8 px-4">
                    <p style="opacity: 0.9; font-size: 15px;">
                      Tahun Masuk : <span><?php echo $row["tahun_sd"]; ?></span>
                    </p><br>
                    <p style="opacity: 0.9; font-size: 15px;">
                      Nama Sekolah : <span><?php echo $row["nama_sd"]; ?></span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="timeline">
              <div class="timeline-content">
                <h6 class="center-align font-weight-bolder pt-1">Sekolah Menengah Pertama</h6>
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <img src="./assets/images/education-page/timeline-2.svg" alt="" height="110"
                      class=" mt-2 w-100 mx-auto">
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-8 px-4">
                    <p style="opacity: 0.9; font-size: 15px;">
                      Tahun Masuk : <span><?php echo $row["tahun_smp"]; ?></span>
                    </p><br>
                    <p style="opacity: 0.9; font-size: 15px;">
                      Nama Sekolah : <span><?php echo $row["nama_smp"]; ?></span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="timeline">
              <div class="timeline-content">
                <h6 class="center-align font-weight-bolder pt-1">Sekolah Menengah Atas</h6>
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <img src="./assets/images/education-page/timeline-1.svg" alt="" height="110"
                      class=" mt-2 w-100 mx-auto">
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-8 px-4">
                    <p style="opacity: 0.9; font-size: 15px;">
                      Tahun Masuk : <span><?php echo $row["tahun_sma"]; ?></span>
                    </p><br>
                    <p style="opacity: 0.9; font-size: 15px;">
                      Nama Sekolah : <span><?php echo $row["nama_sma"]; ?></span>
                    </p><br>
                    <p style="opacity: 0.9; font-size: 15px;">
                      Jurusan Sekolah : <span><?php echo $row["jurusan_sma"]; ?></span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="timeline">
              <div class="timeline-content">
                <h6 class="center-align font-weight-bolder pt-1">Perguruan Tinggi</h6>
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <img src="./assets/images/education-page/timeline-2.svg" alt="" height="110"
                      class=" mt-2 w-100 mx-auto">
                  </div>
                  <div class="col-lg-8 col-md-8 col-sm-8 px-4">
                    <p style="opacity: 0.9; font-size: 15px;">
                      Tahun Masuk : <span><?php echo $row["tahun_kuliah"]; ?></span>
                    </p><br>
                    <p style="opacity: 0.9; font-size: 15px;">
                      Nama Perguruan Tinggi : <span><?php echo $row["nama_kuliah"]; ?></span>
                    </p><br>
                    <p style="opacity: 0.9; font-size: 15px;">
                      Jurusan Perguruan Tinggi : <span><?php echo $row["jurusan_kuliah"]; ?></span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
              }
            }
      ?>
    </div>
  </section>
  <!--Formal Education Timeline Ends-->

    <!--Footer-->
    <?php
        include_once "footer.php";
    ?>

  <!-- script -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script type="text/javascript" src="assets/js/materialize.min.js"></script>
  <script type="text/javascript" src="./assets/js/education.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>