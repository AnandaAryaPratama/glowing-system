<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style>
        .inputan {
            width: 300px;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        input[type=submit]  {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 16px 32px:
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <H1>Registrasi</H1>
    <form method="post" action="konfirmasi.php">
        <label>Username</label><br>
        <input class="inputan" type="text" name="username"><br>
        <label>Password</label><br>
        <input class="inputan" type="password" name="password"><br>
        <label>Nama Depan</label><br>
        <input class="inputan" type="text" name="namaDepan"><br>
        <label>Nama Belakang</label><br>
        <input class="inputan" type="text" name="namaBelakang"><br>
        <label>Email</label><br>
        <input class="inputan" type="email" name="email"><br>
        <input type="submit" name="tombolSubmit" value="Daftar"><br>
        </form>
</body>
</html>