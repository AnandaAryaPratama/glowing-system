<?php
    $url = $_SERVER["REQUEST_URI"];
    //echo $url;

    if ($url == "/demoport/admin/kemampuan.php?sukseshapus" OR $url == "/demoport/admin/kemampuan.php?gagal"
        OR $url == "/demoport/admin/kemampuan.php") {
        $kemampuan = "active";
    }
    elseif ($url == "/demoport/admin/biodata.php") {
        $biodata = "active";
    }
    elseif ($url == "/demoport/admin/pendidikan.php") {
        $pendidikan = "active";
    }
    elseif ($url == "/demoport/admin/pengalaman.php?sukseshapus" OR $url == "/demoport/admin/pengalaman.php?gagal"
        OR $url == "/demoport/admin/pengalaman.php") {
        $pengalaman = "active";
    }
    elseif ($url == "/demoport/admin/penelitian.php?sukseshapus" OR $url == "/demoport/admin/penelitian.php?gagal"
        OR $url == "/demoport/admin/penelitian.php") {
        $penelitian = "active";
    }
    else {
        
    }
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
        <a class="nav-link <?php echo $biodata ?>" href="biodata.php">Biodata</a>
        </li>
        <li class="nav-item">
        <a class="nav-link <?php echo $kemampuan ?>" href="kemampuan.php">Kemampuan</a>
        </li>
        <li class="nav-item">
        <a class="nav-link <?php echo $pendidikan ?>" href="pendidikan.php">Pendidikan</a>
        </li>
        <li class="nav-item">
        <a class="nav-link <?php echo $pengalaman ?>" href="pengalaman.php">Pengalaman</a>
        </li>
        <li class="nav-item">
        <a class="nav-link <?php echo $penelitian ?>" href="penelitian.php">Penelitian</a>
        </li>
    </ul>
</nav>