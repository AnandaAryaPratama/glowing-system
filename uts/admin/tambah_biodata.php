<?php
    session_start();
    //echo $_SESSION['id_biodata'];
    include_once "../koneksi.php";

    if (isset($_POST["nama"])) {
        $nama = $_POST["nama"];
        $tempat_lahir = $_POST["tempat_lahir"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $alamat = $_POST["alamat"];
        $agama = $_POST["agama"];
        $kewarganegaraan = $_POST["kewarganegaraan"];
        $kegiatan = $_POST["kegiatan"];

        $sqlINSERT = "INSERT INTO biodata (nama, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, agama, kewarganegaraan, kegiatan) 
        VALUES ('$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$agama', '$kewarganegaraan', '$kegiatan')";

        $runSQLINSERT = mysqli_query($conn, $sqlINSERT);
        if ($runSQLINSERT) {
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
    <title>Tambah Biodata</title>
</head>
<body>
    <?php include_once "navbar.php"; ?>
    <div class="row container-fluid mt-4">
        <div class="col">
        <form method="POST" action="tambah_biodata.php">
            <div class="form-group">
                <label>Nama</label><br>
                <input class="form-control" type="hidden" name="id_biodata" value="<?php echo $row['id_biodata'] ?>">
                <input class="form-control" type="text" name="nama" required><br>
            </div>

            <div class="form-group">
                <label>Tempat Lahir</label><br>
                <input class="form-control" type="text" name="tempat_lahir" required><br>
            </div>

            <div class="form-group">
                <label>Tanggal Lahir</label><br>
                <input class="form-control" type="text" name="tanggal_lahir"  required><br>
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
                <textarea class="form-control" type="text" name="alamat" required></textarea><br>
            </div>

            <div class="form-group">
                <label>Agama</label><br>
                <input class="form-control" type="text" name="agama" required><br>
            </div>

            <div class="form-group">
                <label>Kewarganegaraan</label><br>
                <input class="form-control" type="text" name="kewarganegaraan" required><br>
            </div>

            <div class="form-group">
                <label>Kegiatan</label><br>
                <input class="form-control" type="text" name="kegiatan" required><br>
            </div>
            <input class="btn btn-primary" type="submit" value="Simpan" id="tombol">
            <br>
        </form>
        </div>
    </div>
</body>
</html>