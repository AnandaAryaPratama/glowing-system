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
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

    <title>Dashboard</title>
</head>
<body>
    <div class="row">
        <div class="col-6">
            <div class="container">
                <h2>Portofolio</h2>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        include_once "../koneksi.php";
                        $strSQL = "SELECT * FROM biodata";
                        $runstrSQL = mysqli_query($conn, $strSQL);
                        $jmlRowData = mysqli_num_rows($runstrSQL);
                        if ($jmlRowData < 0) {
                            echo "<tr><td>Data Tidak Terdapat Dalam Database</td>
                            <td><a href='tambah_biodata.php' class='btn btn-success'>Tambah Data</a></td></tr>";
                            }
                        else {
                            while($row = mysqli_fetch_assoc($runstrSQL)) {
                            // start a session
                            session_start();
                            $_SESSION['id_biodata'] = $row["id_biodata"];
                    ?>
                    <tr>
                        <td><?php echo $row["id_biodata"]; ?></td>
                        <td><?php echo $row["nama"]; ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><a href="biodata.php" class="btn btn-info">Edit</a>
                        <a href="delete_biodata.php?id_biodata=<?php echo $row["id_biodata"]; ?>" class="btn btn-danger">Hapus</a></td>
                    </tr>
                    <?php
                            }
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-6">
            <div class="container">
                <h2>Pesan</h2>
                <table id="pesan" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Pesan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        include_once "../koneksi.php";
                        $strSQL = "SELECT * FROM getintouch";
                        $runstrSQL = mysqli_query($conn, $strSQL);
                        $jmlRowData = mysqli_num_rows($runstrSQL);
                        if ($jmlRowData < 0) {
                            echo "<tr><td colspan='3'>Data Tidak Terdapat Dalam Database</td></tr>";
                            }
                        else {
                            while($row = mysqli_fetch_assoc($runstrSQL)) {
                    ?>
                    <tr>
                        <td><?php echo $row["nama"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["pesan"]; ?></td>
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
</body>
</html>
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#pesan').DataTable();
    } );
</script>