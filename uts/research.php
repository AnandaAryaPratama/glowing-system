<!DOCTYPE html>
<html lang="en">
<head>
  <title>Portofolio | Penelitian</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css" media="screen,projection" />
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/home.css">
  <!--Fetch data from JSON-->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"> </script>
</head>

<body>
    <!--Nav Bar-->
    <?php
        include_once "navbar.html";
    ?>

  <div class="container research-upper" style="width: 100%; min-height: 80%;">
    <section class="txt-bottom">
      <div class="px-3 pt-5">
        <div class="row text-dark">
          <div
            class="col-md-6 d-flex mt-5 flex-column text-center justify-content-center animate__animated animate__zoomIn animate__delay-1s">
            <h2 style="font-size: 4em;font-weight: bolder;" class="mb-0 head-upper">Penelitian</h2>
            <p class="p-upper font-weight-bolder text-muted"
              class="mb-0 mt-3 text-center animate__animated animate__zoomIn animate__delay-2s"
              style="font-size: 1.1em; letter-spacing: 2px; line-height: normal;">
              Riset atau penelitian adalah suatu pencarian yang didasarkan dengan teliti untuk memperoleh 
              kenyataan-kenyataan atau fakta atau hukum-hukum baru. Didalamnya terdapat usaha dan perencanaan 
              yang sungguh-sungguh yang relatif memakan waktu yang cukup lama.
            </p>
          </div>

          <div class="col-md-6" style="margin-top: 10px;">
            <img class="img-fluid d-block img-fluid d-block animate__animated animate__zoomIn animate__delay-1s" src="
              ./assets/images/research-page/research1.png">
          </div>
        </div>
      </div>
    </section>
  </div>


  <div class="researchMainWrapper">
    <div class="container">
      <div class="researchDetails">
        <table id="researchDetailsTable">
          <thead>
            <tr id="rDetailsHead">
              <th class="researchTitle" scope="col">
                <span>
                  <div>
                    Title
                  </div>
                </span>
              </th>
              <th class="researchYear" scope="col">
                <span>
                  <div>
                    Year
                  </div>
                </span>
              </th>
            </tr>
          </thead>
          <tbody>
          <?php 
            include_once "koneksi.php";
            $strSQLpenelitian = "SELECT * FROM penelitian";
            $runstrSQLpenelitian = mysqli_query($conn, $strSQLpenelitian);
            $jmlRowDatapenelitian = mysqli_num_rows($runstrSQLpenelitian);
            
            if ($jmlRowDatapenelitian < 0) {
              echo "<tr><td colspan='5'>Data Tidak Terdapat Dalam Database</td></tr>";
              }
              else {
                      while($row = mysqli_fetch_assoc($runstrSQLpenelitian)) {
          ?>
          <tr>
            <td class="researchTitleName">
              <a href="#0" class="paperTitle"><?php echo $row["keterangan"] ?></a>
              <div><?php echo $row["kode"] ?>
                <span class="resYearDisplay"></span>
              </div>
              <div class="empty"></div>
            </td>
            <td class="researchY">
              <span><?php echo $row["tahun"] ?></span>
            </td>
          </tr>
          <?php
                      }
                    }
          ?>
          </tbody>
        </table>
      </div>
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

</body>
</html>
