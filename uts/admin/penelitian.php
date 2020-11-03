<?php
    session_start();
    include_once "../koneksi.php";
    if (isset($_SESSION['id_biodata'])) {
        $id = $_SESSION['id_biodata'];
    
    $sql = "SELECT * FROM penelitian WHERE id_biodata='".$id."'";

    $runSQL = mysqli_query($conn, $sql);
    }
    else {
        header("location: dashboard.php");
    }

    if (isset($_POST["id_penelitian"])) {
        $id_penelitian = $_POST["id_penelitian"];
        $id_biodata = $_POST["id_biodata"];
        $keterangan = $_POST["keterangan"];
        $kode = $_POST["kode"];
        $tahun = $_POST["tahun"];

        $sqlUPDATE = "UPDATE penelitian SET keterangan='$keterangan', kode='$kode', tahun='$tahun'
        WHERE id_penelitian='$id_penelitian' AND id_biodata='$id_biodata'";

        $runSQLUPDATE = mysqli_query($conn, $sqlUPDATE);
        if ($runSQLUPDATE) {
            header ("location: penelitian.php");
        }
    }

    if (isset($_GET["keterangan"])) {
        $id = $_SESSION['id_biodata'];
        $keterangan = $_GET["keterangan"];
        $kode = $_GET["kode"];
        $tahun = $_GET["tahun"];

        $sqltambahpenelitian = "INSERT INTO penelitian (id_biodata, keterangan, kode, tahun)
        VALUES ('$id','$keterangan','$kode','$tahun')";

        $runSQLtambahpenelitian = mysqli_query($conn, $sqltambahpenelitian);
        if ($runSQLtambahpenelitian) {
            header ("location: penelitian.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Penelitian</title>
</head>
<body>
    <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Tambah Penelitian</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="penelitian.php" method="GET">
                        <div class="form-group">
                            <label for="keterangan">Keterangan:</label>
                            <input type="text" class="form-control" placeholder="Enter Keterangan" name="keterangan">
                        </div>
                        <div class="form-group">
                            <label for="kode">Kode:</label>
                            <input type="text" class="form-control" placeholder="Enter Kode" name="kode">
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun:</label>
                            <input type="text" class="form-control" placeholder="Enter Tanggal" name="tahun">
                        </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                
            </div>
            </div>
        </div>
    <?php include_once "navbar.php"; ?>
    <div class="row container-fluid mt-4">
        <div class="col">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah Penelitian</button>
        <?php
        if ($runSQL) {
            $jmlRowData = mysqli_num_rows($runSQL);
            if ($jmlRowData < 0) {
                echo "<tr><td colspan='5'>Data Tidak Terdapat Dalam Database</td></tr>";
                }
              else {
            while($row = mysqli_fetch_assoc($runSQL)) {
     ?>       
        <form method="POST" action="penelitian.php">
            <div class="form-group">
                <h4>Penelitian</h4><br>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Keterangan Penelitian</span>
                    </div>
                    <input id="keterangan" class="form-control" type="text" name="keterangan" value="<?php echo $row['keterangan'] ?>" required><br>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Kode Penelitian</span>
                    </div>
                    <input id="kode" class="form-control" type="text" name="kode" value="<?php echo $row['kode'] ?>" required><br>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Tahun Penelitian</span>
                    </div>
                    <input id="tahun" class="form-control" type="text" name="tahun" value="<?php echo $row['tahun'] ?>" required><br>
                </div>
            </div>
            <input class="btn btn-primary" type="submit" value="Simpan" id="tombol">
            <a href="hapus_penelitian.php?id_penelitian=<?php echo $row["id_penelitian"] ?>" class="btn btn-danger">Hapus Penelitian</a>
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