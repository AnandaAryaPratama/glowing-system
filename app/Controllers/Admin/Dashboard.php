<?php
    namespace App\Controllers\Admin;
    use App\Controllers\BaseController;

    class Dashboard extends BaseController {
        public function index() {
            $session = session();
            $namasession = $session->get('user_name');
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Admin</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('css/style5.css'); ?>">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Selamat Datang</h3>
            </div>
            <ul class="list-unstyled components">
                <p><?php 
                        $session = session();
                        $namasession = $session->get('user_name');
                        echo $namasession;
                    ?>
                </p>
                <li>
                    <a href="http://belajar-ci.test/admin/dashboard">Home</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Master Data</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="http://belajar-ci.test/admin/users">Users</a>
                        </li>
                        <li>
                            <a href="http://belajar-ci.test/admin/berita">Berita</a>
                        </li>
                        <li>
                            <a href="http://belajar-ci.test/admin/halaman">Halaman</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- Page Content Holder -->
        <div id="content">
            <div class="topbar"></div>
            
            <h2>Selamat Datang Admin</h2>
            <p>Halaman ini digunakan oleh Admin untuk mengatur data - data yang ada.</p>

            <div class="line"></div>

            <h3>Informasi</h3>
            <p>Untuk memilih menu apa yang aka digunakan bisa dilihat pada sidebar menu disamping</p>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="<?= base_url('js/main.js'); ?>"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            sessionStorage.setItem("nama", "<?php echo $namasession; ?>");
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>