
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pendaftaran</title>
</head>
<body>
    <?php
        include_once "koneksi.php";
        if (isset($_POST["tombolSubmit"])) {
            $kode = $_POST["kode"];
            $nama = $_POST["nama"];
            $kategori = $_POST["kategori"];
            $sks = $_POST["sks"];
        
        $sql = "INSERT INTO matakuliah (kode, nama, kategori, sks)
        VALUES ('$kode', '$nama', '$kategori', '$sks')";

        if (mysqli_query($conn, $sql)) {
            echo "Data  berhasil diinput";
        }

        else {
            echo "Data tidak berhasil diinput pada string sql: <br>
            $sql <br> dengan error".
            mysqli_error($conn);
        }
    ?>
    Kode: <?php echo $kode ?>
    <br>
    Nama: <?php echo $nama ?>
    <br>
    Kategori: <?php echo $kategori ?>
    <br>
    Sks: <?php echo $sks ?>

    <?php
        }

        else {
            echo "Mohon maaf cek login tidak bisa diakses langsung";
        }
    ?>

</body>
</html>