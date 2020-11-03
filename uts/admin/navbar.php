<?php
    $url = $_SERVER["REQUEST_URI"];
    //echo $url;

    if ($url == "/uts/admin/kemampuan.php?sukseshapus" OR $url == "/uts/admin/kemampuan.php?gagal"
        OR $url == "/uts/admin/kemampuan.php") {
        $kemampuan = "active";
    }
    elseif ($url == "/uts/admin/biodata.php") {
        $biodata = "active";
    }
    elseif ($url == "/uts/admin/pendidikan.php") {
        $pendidikan = "active";
    }
    elseif ($url == "/uts/admin/pengalaman.php?sukseshapus" OR $url == "/uts/admin/pengalaman.php?gagal"
        OR $url == "/uts/admin/pengalaman.php") {
        $pengalaman = "active";
    }
    elseif ($url == "/uts/admin/penelitian.php?sukseshapus" OR $url == "/uts/admin/penelitian.php?gagal"
        OR $url == "/uts/admin/penelitian.php") {
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