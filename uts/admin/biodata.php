<?php
    session_start();
    //echo $_SESSION['id_biodata'];
    include_once "../koneksi.php";
    if (isset($_SESSION['id_biodata'])) {
        $id = $_SESSION['id_biodata'];
    
    $sql = "SELECT * FROM biodata WHERE id_biodata='".$id."'";

    $runSQL = mysqli_query($conn, $sql);
    }
    else {
        header("location: dashboard.php");
    }

    if (isset($_POST["id_biodata"])) {
        $id_biodata = $_POST["id_biodata"];
        $nama = $_POST["nama"];
        $tempat_lahir = $_POST["tempat_lahir"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $alamat = $_POST["alamat"];
        $agama = $_POST["agama"];
        $kewarganegaraan = $_POST["kewarganegaraan"];
        $kegiatan = $_POST["kegiatan"];

        $sqlUPDATE = "UPDATE biodata SET nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', 
        jenis_kelamin='$jenis_kelamin', alamat='$alamat', agama='$agama', kewarganegaraan='$kewarganegaraan', kegiatan='$kegiatan'
        WHERE id_biodata='$id_biodata'";

        $runSQLUPDATE = mysqli_query($conn, $sqlUPDATE);
        if ($runSQLUPDATE) {
            header ("location: biodata.php");
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
    <title>Biodata</title>
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
        <form method="POST" id="updatematkul" action="biodata.php">
            <div class="form-group">
                <label>Nama</label><br>
                <input class="form-control" type="hidden" name="id_biodata" value="<?php echo $row['id_biodata'] ?>">
                <input class="form-control" type="text" name="nama" value="<?php echo $row['nama'] ?>" required><br>
            </div>

            <div class="form-group">
                <label>Tempat Lahir</label><br>
                <input class="form-control" type="text" name="tempat_lahir" value="<?php echo $row['tempat_lahir'] ?>" required><br>
            </div>

            <div class="form-group">
                <label>Tanggal Lahir</label><br>
                <input class="form-control" type="text" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir'] ?>" required><br>
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label><br>
                <select class="form-control" name="jenis_kelamin" required>
                    <option value="default" disabled selected="selected">Pilih Jenis Kelamin</option>
                    <option value="Laki - Laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label>Alamat</label><br>
                <textarea class="form-control" type="text" name="alamat" value="" required><?php echo $row['alamat'] ?></textarea><br>
            </div>

            <div class="form-group">
                <label>Agama</label><br>
                <input class="form-control" type="text" name="agama" value="<?php echo $row['agama'] ?>" required><br>
            </div>

            <div class="form-group">
                <label>Kewarganegaraan</label><br>
                <input class="form-control" type="text" name="kewarganegaraan" value="<?php echo $row['kewarganegaraan'] ?>" required><br>
            </div>

            <div class="form-group">
                <label>Kegiatan</label><br>
                <input class="form-control" type="text" name="kegiatan" value="<?php echo $row['kegiatan'] ?>" required><br>
            </div>
            <input class="btn btn-primary" type="submit" value="Simpan" id="tombol">
            <br>
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