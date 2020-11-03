<?php
    //buat SQL
    include_once "koneksi.php";
    $strSQL = "SELECT * FROM biodata";
    $runstrSQL = mysqli_query($conn, $strSQL);
    $jmlRowData = mysqli_num_rows($runstrSQL);
    if ($jmlRowData < 0) {
        echo "<tr><td colspan='5'>Data Tidak Terdapat Dalam Database</td></tr>";
        }
        else {
                while($row = mysqli_fetch_assoc($runstrSQL)) {
                $nama = $row["nama"];
                $kegiatan = $row["kegiatan"];
            }
        }
        
    $SQLsosmed = "SELECT * FROM sosmed";
    $runSQLsosmed = mysqli_query($conn, $SQLsosmed);
    $jmlRowDatasosmed = mysqli_num_rows($runSQLsosmed);
    if ($jmlRowDatasosmed < 0) {
        echo "<tr><td colspan='5'>Data Tidak Terdapat Dalam Database</td></tr>";
        }
        else {
                while($rowsosmed = mysqli_fetch_assoc($runSQLsosmed)) {
                $instagram = $rowsosmed["instagram"];
                $facebook = $rowsosmed["facebook"];
                $github = $rowsosmed["github"];
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portofolio | Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/home.css">
</head>

<body>

    <!--NavBar-->
    <?php
        if (isset($_GET["pesanterkirim"])) {
            echo "<div id='sukses' class='alert alert-success alert-dismissible fade show'>";
            echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
            echo "Data berhasil diinput kedalam database.";
            echo "</div>";
        }
        include_once "navbar.html";
    ?>
    <!--Parallax effect-->
    <div>
        <div>
            <section class="center">
                <div id="particles-js"></div>
            </section>
        </div>
    </div>

    <div class="text center col-sm-6">Hai, Saya <span><?php echo $nama ?></span>
        <div class="center">
            <div>
                <img src="assets/images/dp.svg" alt="" class="rounded-circle" height="200" width="200">
            </div>
                <p>Saya seorang &nbsp;
                <span class="animated-text"
                    data-words="<?php echo $kegiatan ?>"></span>
                </p>
            <div>
                <div class="social-icons">
                    <a class="social-icon twitter" href="<?php echo $facebook; ?>" target="_blank" rel="author">
                        <i class="fab fa-facebook"></i>
                    </a>

                    <a class="social-icon linkedin" href="<?php echo $instagram; ?>" target="_blank" rel="author">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a class="social-icon github" href="<?php echo $github; ?>" target="_blank" rel="author">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <?php
        include_once "footer.php";
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!--JavaScript at end of body for optimized loading-->
    <script src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js'></script>
    <script src="assets/js/particle.js"></script>

</body>
</html>
