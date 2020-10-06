
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pendaftaran</title>
</head>
<body>
    <?php
        if (isset($_POST["tombolSubmit"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $namaDepan = $_POST["namaDepan"];
            $namaBelakang = $_POST["namaBelakang"];
            $email = $_POST["email"];

            }
    ?>
    Nama Lengkap: <?php echo $namaDepan ." ". $namaBelakang ?>
    <br>
    Username: <?php echo $username ?>
    <br>
    Email: <?php echo $email ?>
</body>
</html>