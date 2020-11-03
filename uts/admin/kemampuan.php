<?php
    session_start();
    include_once "../koneksi.php";
    if (isset($_SESSION['id_biodata'])) {
        $id = $_SESSION['id_biodata'];
    
    $sqlKemampuan = "SELECT * FROM kemampuan WHERE id_biodata='".$id."'";

    $runSQLKemampuan = mysqli_query($conn, $sqlKemampuan);
    }
    else {
        header("location: dashboard.php");
    }

    if (isset($_POST["id_kemampuan"])) {
        $id_kemampuan = $_POST["id_kemampuan"];
        $id_biodata = $_POST["id_biodata"];
        $nama_keahlianprof = $_POST["nama_keahlianprof"];
        $nilai_keahlianprof = $_POST["nilai_keahlianprof"];
        $nama_keahlianpribadi = $_POST["nama_keahlianpribadi"];
        $nilai_keahlianpribadi = $_POST["nilai_keahlianpribadi"];

        $sqlUPDATE = "UPDATE kemampuan SET nama_keahlianprof='$nama_keahlianprof', nilai_keahlianprof='$nilai_keahlianprof', nama_keahlianpribadi='$nama_keahlianpribadi', 
        nilai_keahlianpribadi='$nilai_keahlianpribadi' WHERE id_kemampuan='$id_kemampuan' AND id_biodata='$id_biodata'";

        $runSQLUPDATE = mysqli_query($conn, $sqlUPDATE);
        if ($runSQLUPDATE) {
            header ("location: kemampuan.php");
        }
    }

    if (isset($_GET["nama_keahlianprof"])) {
        $id = $_SESSION['id_biodata'];
        $nama_keahlianprof = $_GET["nama_keahlianprof"];
        $nilai_keahlianprof = $_GET["nilai_keahlianprof"];
        $nama_keahlianpribadi = $_GET["nama_keahlianpribadi"];
        $nilai_keahlianpribadi = $_GET["nilai_keahlianpribadi"];

        $sqltambahKemampuan = "INSERT INTO kemampuan (id_biodata, nama_keahlianprof, nilai_keahlianprof, nama_keahlianpribadi, nilai_keahlianpribadi) 
        VALUES ('$id','$nama_keahlianprof','$nilai_keahlianprof','$nama_keahlianpribadi','$nilai_keahlianpribadi')";

        $runSQLtambahKemampuan = mysqli_query($conn, $sqltambahKemampuan);
        if ($runSQLtambahKemampuan) {
            header ("location: kemampuan.php");
        }
        else {
            header ("location: kemampuan.php?gagal");
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
    <title>Pendidikan</title>
</head>
<body>
        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Tambah PeKemampuanan</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="kemampuan.php" method="GET">
                        <div class="form-group">
                            <label for="foto">Nama Keahlian Professional:</label>
                            <input type="text" class="form-control" placeholder="Enter foto" name="nama_keahlianprof">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nilai Keahlian Professional:</label>
                            <input type="text" class="form-control" placeholder="Enter Nama" name="nilai_keahlianprof">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Keahlian Professional:</label>
                            <input type="text" class="form-control" placeholder="Enter Tanggal" name="nama_keahlianpribadi">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Nilai Keahlian Professional:</label>
                            <input type="text" class="form-control" placeholder="Enter Deskripsi" name="nilai_keahlianpribadi">
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
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah Keahlian Professional & Pribadi</button>
                <?php
                if ($runSQLKemampuan) {
                    $jmlRowDataKemampuan = mysqli_num_rows($runSQLKemampuan);
                    if ($jmlRowDataKemampuan < 0) {
                        echo "Data Tidak Terdapat Dalam Database";
                        }
                    else {
                    while($rowKemampuan = mysqli_fetch_assoc($runSQLKemampuan)) {
                ?> 
        <form method="POST" action="pengalaman.php">
            <div class="form-group">
                <h4>Keahlian Professional</h4><br>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Nama Keahlian Professional</span>
                    </div>
                    <input class="form-control" type="text" name="nama_keahlianprof" value="<?php echo $rowKemampuan['nama_keahlianprof'] ?>" required><br>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Nilai Keahlian Professional</span>
                    </div>
                    <input class="form-control" type="text" name="nilai_keahlianprof" value="<?php echo $rowKemampuan['nilai_keahlianprof'] ?>" required><br>
                </div>
                <hr style="size: 50px">
            </div>

            <!-- Keahlian Pribadi -->
            <div class="form-group">
                <h4>Keahlian Pribadi</h4><br>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Nama Keahlian Pribadi</span>
                    </div>
                    <input class="form-control" type="text" name="nama_keahlianpribadi" value="<?php echo $rowKemampuan['nama_keahlianpribadi'] ?>" required><br>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Nilai Keahlian Pribadi</span>
                    </div>
                    <input class="form-control" type="text" name="nilai_keahlianpribadi" value="<?php echo $rowKemampuan['nilai_keahlianpribadi'] ?>" required><br>
                </div>
                <hr size="50pt">
            </div>
            <input class="btn btn-primary" type="submit" value="Simpan" id="tombol">
            <a href="hapus_kemampuan.php?id_kemampuan=<?php echo $rowKemampuan["id_kemampuan"] ?>" class="btn btn-danger">Hapus Keahlian Professional & Pribadi</a>
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