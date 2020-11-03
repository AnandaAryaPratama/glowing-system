<?php
    session_start();
    include_once "../koneksi.php";
    if (isset($_SESSION['id_biodata'])) {
        $id = $_SESSION['id_biodata'];
    
    $sql = "SELECT * FROM pendidikan WHERE id_biodata='".$id."'";

    $runSQL = mysqli_query($conn, $sql);
    }
    else {
        header("location: dashboard.php");
    }

    if (isset($_POST["id_pendidikan"])) {
        $id_pendidikan = $_POST["id_pendidikan"];
        $id_biodata = $_POST["id_biodata"];
        $tahun_sd = $_POST["tahun_sd"];
        $nama_sd = $_POST["nama_sd"];
        $tahun_smp = $_POST["tahun_smp"];
        $nama_smp = $_POST["nama_smp"];
        $tahun_sma = $_POST["tahun_sma"];
        $nama_sma = $_POST["nama_sma"];
        $jurusan_sma = $_POST["jurusan_sma"];
        $tahun_kuliah = $_POST["tahun_kuliah"];
        $nama_kuliah = $_POST["nama_kuliah"];
        $jurusan_kuliah = $_POST["jurusan_kuliah"];

        $sqlUPDATE = "UPDATE pendidikan SET tahun_sd='$tahun_sd', nama_sd='$nama_sd', tahun_smp='$tahun_smp', 
        nama_smp='$nama_smp', tahun_sma='$tahun_sma', nama_sma='$nama_sma', jurusan_sma='$jurusan_sma', 
        tahun_kuliah='$tahun_kuliah', nama_kuliah='$nama_kuliah', jurusan_kuliah='$jurusan_kuliah' WHERE 
        id_pendidikan='$id_pendidikan' AND id_biodata='$id_biodata'";

        $runSQLUPDATE = mysqli_query($conn, $sqlUPDATE);
        if ($runSQLUPDATE) {
            header ("location: pendidikan.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <title>Pendidikan</title>
</head>
<body>
    <?php include_once "navbar.php"; ?>
    <div class="row container-fluid mt-4">
        <div class="col">
        <?php
        if ($runSQL) {
            $jmlRowData = mysqli_num_rows($runSQL);
            if ($jmlRowData < 0) {
                echo "<tr><td colspan='5'>Data Tidak Terdapat Dalam Database</td></tr>";
                }
              else {
            while($row = mysqli_fetch_assoc($runSQL)) {
     ?>       
        <form method="POST" action="pendidikan.php">
            <div class="form-group">
                <h4>Sekolah Dasar</h4><br>
                <input id="id_biodata" class="form-control" type="hidden" name="id_biodata" value="<?php echo $row['id_biodata'] ?>">
                <input id="id_pendidikan" class="form-control" type="hidden" name="id_pendidikan" value="<?php echo $row['id_pendidikan'] ?>">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Tahun SD</span>
                    </div>
                    <input id="tahun_sd" class="form-control" type="text" name="tahun_sd" value="<?php echo $row['tahun_sd'] ?>" required><br>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Nama SD</span>
                    </div>
                    <input id="nama_sd" class="form-control" type="text" name="nama_sd" value="<?php echo $row['nama_sd'] ?>" required><br>
                </div>
            </div>
            <div class="form-group">
                <h4>Sekolah Menengah Pertama</h4><br>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Tahun SMP</span>
                    </div>
                    <input id="tahun_smp" class="form-control" type="text" name="tahun_smp" value="<?php echo $row['tahun_smp'] ?>" required><br>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Nama SMP</span>
                    </div>
                    <input id="nama_smp" class="form-control" type="text" name="nama_smp" value="<?php echo $row['nama_smp'] ?>" required><br>
                </div>
            </div>
            <div class="form-group">
                <h4>Sekolah Menengah Atas</h4><br>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Tahun SMA</span>
                    </div>
                    <input id="tahun_sma" class="form-control" type="text" name="tahun_sma" value="<?php echo $row['tahun_sma'] ?>" required><br>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Nama SMA</span>
                    </div>
                    <input id="nama_sma" class="form-control" type="text" name="nama_sma" value="<?php echo $row['nama_sma'] ?>" required><br>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Jurusan SMA</span>
                    </div>
                    <input id="jurusan_sma" class="form-control" type="text" name="jurusan_sma" value="<?php echo $row['jurusan_sma'] ?>" required><br>
                </div>
            </div>
            <div class="form-group">
                <h4>Perguruan Tinggi</h4><br>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Tahun Kuliah</span>
                    </div>
                    <input id="tahun_kuliah" class="form-control" type="text" name="tahun_kuliah" value="<?php echo $row['tahun_kuliah'] ?>" required><br>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Nama Kuliah</span>
                    </div>
                    <input id="nama_kuliah" class="form-control" type="text" name="nama_kuliah" value="<?php echo $row['nama_kuliah'] ?>" required><br>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Jurusan Kuliah</span>
                    </div>
                    <input id="jurusan_kuliah" class="form-control" type="text" name="jurusan_kuliah" value="<?php echo $row['jurusan_kuliah'] ?>" required><br>
                </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Simpan" id="tombol">
        </form>
        <?php
                }
            }
        }
        ?>
        </div>
    </div>
</body>
</html>