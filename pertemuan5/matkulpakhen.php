<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <?php
        $status = 2;
        include_once "koneksi.php";
        if (isset($_POST["tombolSubmit"])) {
            $kode = $_POST["kode"];
            $nama = $_POST["nama"];
            $kategori = $_POST["kategori"];
            $sks = $_POST["sks"];
        
        $sql = "INSERT INTO matakuliah (kode, nama, kategori, sks)
        VALUES ('$kode', '$nama', '$kategori', '$sks')";

        $runSQL = mysqli_query($conn, $sql);
        if ($runSQL) {
            $status = 1; //Sukses
        }
        else {
            $status = 0; //Tidak Suskes
        }
    }
    ?>
    <div class="container">
        <H1>Pendaftaran Mata Kuliah</H1>
    
    <?php
        if ($status == 1) {
    ?>
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        Data berhasil diinput kedalam database.
    </div> 
    <?php
        }
        else if ($status == 0) {

    ?>
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        Data gagal diinput kedalam database.
    </div> 
    <?php
        }
    
    ?>

        <form method="post" action="matkulpakhen.php">
            <div class="form-group">
                <label>Kode Mata Kuliah</label><br>
                <input class="form-control" type="text" name="kode"><br>
            </div>

            <div class="form-group">
                <label>Nama Mata Kuliah</label><br>
                <input class="form-control" type="text" name="nama"><br>
            </div>

            <div class="form-group">
                <label>Kategori</label><br>
                <select class="form-control" name="kategori">
                    <option value="MKMA">Mata Kuliah Major</option>
                    <option value="MKMI">Mata Kuliah Minor</option>
                    <option value="MKPIL">Mata Kuliah Pilihan</option>
                </select>
            </div>

            <div class="form-group">
                <label>SKS</label><br>
                <input class="form-control" type="text" name="sks"><br>
            </div>

            <input class="btn btn-primary" type="submit" name="tombolSubmit" value="Daftar"><br>
        </form>
    </div>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>