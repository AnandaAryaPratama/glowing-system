<?php
    session_start();
    include_once "../koneksi.php";
    if (isset($_SESSION['id_biodata'])) {
        $id = $_SESSION['id_biodata'];
    
    $sqlKerja = "SELECT * FROM pengalaman WHERE id_biodata='".$id."'";

    $runSQLKerja = mysqli_query($conn, $sqlKerja);
    }
    else {
        header("location: dashboard.php");
    }

    if (isset($_POST["id_pengalaman"])) {
        $id_pengalaman = $_POST["id_pengalaman"];
        $id_biodata = $_POST["id_biodata"];
        $foto_kerja = $_POST["foto_kerja"];
        $nama_kerja = $_POST["nama_kerja"];
        $tahun_kerja = $_POST["tahun_kerja"];
        $deskripsi_kerja = $_POST["deskripsi_kerja"];
        $foto_panitia = $_POST["foto_panitia"];
        $nama_acara = $_POST["nama_acara"];
        $deskripsi_panitia = $_POST["deskripsi_panitia"];

        $sqlUPDATE = "UPDATE pengalaman SET foto_kerja='$foto_kerja', nama_kerja='$nama_kerja', tahun_kerja='$tahun_kerja', 
        deskripsi_kerja='$deskripsi_kerja', foto_panitia='$foto_panitia', nama_acara='$nama_acara', deskripsi_panitia='$deskripsi_panitia'
        WHERE id_pengalaman='$id_pengalaman' AND id_biodata='$id_biodata'";

        $runSQLUPDATE = mysqli_query($conn, $sqlUPDATE);
        if ($runSQLUPDATE) {
            header ("location: pengalaman.php");
        }
    }

    if (isset($_GET["foto_kerja"])) {
        $id = $_SESSION['id_biodata'];
        $foto_kerja = $_GET["foto_kerja"];
        $nama_kerja = $_GET["nama_kerja"];
        $tahun_kerja = $_GET["tahun_kerja"];
        $deskripsi_kerja = $_GET["deskripsi_kerja"];
        $foto_panitia = $_GET["foto_panitia"];
        $nama_acara = $_GET["nama_acara"];
        $deskripsi_panitia = $_GET["deskripsi_panitia"];

        $sqltambahKerja = "INSERT INTO pengalaman (id_biodata, foto_kerja, nama_kerja, tahun_kerja, deskripsi_kerja, 
        foto_panitia, nama_acara, deskripsi_panitia) VALUES ('$id','$foto_kerja','$nama_kerja','$tahun_kerja','$deskripsi_kerja','$foto_panitia','$nama_acara','$deskripsi_panitia')";

        $runSQLtambahkerja = mysqli_query($conn, $sqltambahKerja);
        if ($runSQLtambahkerja) {
            header ("location: pengalaman.php");
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
                <h4 class="modal-title">Tambah Pekerjaan</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                    <form action="pengalaman.php" method="GET">
                        <div class="form-group">
                            <label for="foto">Foto Kerja:</label>
                            <input type="text" class="form-control" placeholder="Enter foto" name="foto_kerja">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Kerja:</label>
                            <input type="text" class="form-control" placeholder="Enter Nama" name="nama_kerja">
                        </div>
                        <div class="form-group">
                            <label for="nama">Tahun Kerja:</label>
                            <input type="text" class="form-control" placeholder="Enter Tanggal" name="tahun_kerja">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Kerja:</label>
                            <input type="text" class="form-control" placeholder="Enter Deskripsi" name="deskripsi_kerja">
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto Panitia:</label>
                            <input type="text" class="form-control" placeholder="Enter foto" name="foto_panitia">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Acara:</label>
                            <input type="text" class="form-control" placeholder="Enter Nama" name="nama_acara">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Panitia:</label>
                            <input type="text" class="form-control" placeholder="Enter Deskripsi" name="deskripsi_panitia">
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
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah Pengalaman Kerja dan Kepanitiaan</button>
                <?php
                if ($runSQLKerja) {
                    $jmlRowDataKerja = mysqli_num_rows($runSQLKerja);
                    if ($jmlRowDataKerja < 0) {
                        echo "Data Tidak Terdapat Dalam Database";
                        }
                    else {
                    while($rowKerja = mysqli_fetch_assoc($runSQLKerja)) {
                ?> 
        <form method="POST" action="pengalaman.php">
            <div class="form-group">
                <h4>Pengalaman Bekerja</h4><br>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Foto Kerja</span>
                    </div>
                    <input id="foto_kerja" class="form-control" type="hidden" name="id_pengalaman" value="<?php echo $rowKerja['id_pengalaman'] ?>" required><br>
                    <input id="foto_kerja" class="form-control" type="hidden" name="id_biodata" value="<?php echo $id ?>" required><br>
                    <input id="foto_kerja" class="form-control" type="text" name="foto_kerja" value="<?php echo $rowKerja['foto_kerja'] ?>" required><br>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Nama Kerja</span>
                    </div>
                    <input id="nama_kerja" class="form-control" type="text" name="nama_kerja" value="<?php echo $rowKerja['nama_kerja'] ?>" required><br>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Tahun Kerja</span>
                    </div>
                    <input id="tahun_kerja" class="form-control" type="text" name="tahun_kerja" value="<?php echo $rowKerja['tahun_kerja'] ?>" required><br>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Deskripsi Kerja</span>
                    </div>
                    <input id="deskripsi_kerja" class="form-control" type="text" name="deskripsi_kerja" value="<?php echo $rowKerja['deskripsi_kerja'] ?>" required><br>
                </div>
                <hr style="size: 50px">
            </div>

            <!-- Kepanitiaan -->
            <div class="form-group">
                <h4>Kepanitiaan</h4><br>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Foto Panitia</span>
                    </div>
                    <input id="foto_panitia" class="form-control" type="text" name="foto_panitia" value="<?php echo $rowKerja['foto_panitia'] ?>" required><br>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Nama Acara</span>
                    </div>
                    <input id="nama_acara" class="form-control" type="text" name="nama_acara" value="<?php echo $rowKerja['nama_acara'] ?>" required><br>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Deskripsi Panitia</span>
                    </div>
                    <input id="deskripsi_panitia" class="form-control" type="text" name="deskripsi_panitia" value="<?php echo $rowKerja['deskripsi_panitia'] ?>" required><br>
                </div>
                <hr size="50pt">
            </div>
            <input class="btn btn-primary" type="submit" value="Simpan" id="tombol">
            <a href="hapus_pengalaman.php?id_pengalaman=<?php echo $rowKerja["id_pengalaman"] ?>" class="btn btn-danger">Hapus Pengalaman Kerja dan Panitia</a>
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