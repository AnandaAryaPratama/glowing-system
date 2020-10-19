
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
            $username = $_POST["username"];
            $password = $_POST["password"];
            $namaDepan = $_POST["namaDepan"];
            $namaBelakang = $_POST["namaBelakang"];
            $email = $_POST["email"];
        
        $sql = "INSERT INTO registrasi (username, password, email, namaDepan, namaBelakang)
        VALUES ('$username', '$password', '$email', '$namaDepan', '$namaBelakang')";

        if (mysqli_query($conn, $sql)) {
            echo "Data  berhasil diinput";
        }

        else {
            echo "Data tidak berhasil diinput pada string sql: <br>
            $sql <br> dengan error".
            mysqli_error($conn);
        }
    ?>
    Nama Lengkap: <?php echo $namaDepan ." ". $namaBelakang ?>
    <br>
    Username: <?php echo $username ?>
    <br>
    Email: <?php echo $email ?>

    <?php
        }

        else {
            echo "Mohon maaf cek login tidak bisa diakses langsung";
        }
    ?>

</body>
</html>