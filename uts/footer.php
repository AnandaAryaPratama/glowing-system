<?php
    //buat SQL
    include_once "koneksi.php";        
    $SQLsosmed = "SELECT * FROM sosmed WHERE id_biodata = 1";
    $runSQLsosmed = mysqli_query($conn, $SQLsosmed);
    $jmlRowDatasosmed = mysqli_num_rows($runSQLsosmed);
    if ($jmlRowDatasosmed < 0) {
        echo "<tr><td colspan='5'>Data Tidak Terdapat Dalam Database</td></tr>";
        }
        else {
                while($rowsosmed = mysqli_fetch_assoc($runSQLsosmed)) {
                $instagram = $rowsosmed["instagram"];
                $facebook = $rowsosmed["facebook"];
                $github = $rowsosmed["github"];
            }
        }
    
        if (isset($_POST["email"])) {
          $email = $_POST["email"];
          $nama = $_POST["nama"];
          $pesan = $_POST["pesan"];
          
          $sql = "INSERT INTO getintouch (email, nama, pesan)
          VALUES ('$email', '$nama', '$pesan')";
  
          $runSQL = mysqli_query($conn, $sql);
          if ($runSQL) {
            header("location: index.php?pesanterkirim");
          }
      }
?>
<footer style="background-color: black;">
    <div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-7 col-md-10 pt-5" >
          <div class="col-sm-6 col-md-5"> 
            <a href="#">
                <i style="font-size: 62pt;" class="fas fa-user-friends"></i>
            </a>
            <div class="simple-text text-center dark padding-sm">
              <p>
                "Ananda Arya Pratama"
              </p>
            </div>
    
              <!-- Social media icons -->
              
              <div class="social-icons-footer">
                <a class="social-icon-footer twitter" href="<?php echo $facebook; ?>">
                  <i class="fab fa-facebook"></i>
                </a>
                <a class="social-icon-footer linkedin" href="<?php echo $instagram; ?>">
                  <i class="fab fa-instagram"></i>
                </a>
                <a class="social-icon-footer github" href="<?php echo $github; ?>">
                  <i class="fab fa-github"></i>
                </a>
              </div>
    
            <div class="empty-space xs-25 sm-25"></div>
          </div>
        </div>
    
          <div class="col-sm-6 col-md-5 pt-5 footer-2">
         
            <!-- footer_title -->
            <h4 class="webintern_footer_title h5">
              <small>Get In Touch</small>
            </h4>
            <!-- TT-SUBSCRIBE -->
          
            <div class="contact-form">
                <form method="POST" action="footer.php">
                    <div class="form-group">
                        <input type="text" class="form-control" id="input" name="nama" placeholder="Masukkan Nama Anda" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="input" name="email" placeholder="Masukkan Email Anda" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="pesan" name="pesan" placeholder="Isi Pesan Anda" required></textarea>
                    </div>
                    <div class="form-group text-xs-right">
                        <button type="submit" class="send-btn btn btn-lg">Send</button>
                    </div>
                </form>
            </div>
          </div>
    </div>
  </div>
</footer>