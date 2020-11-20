<!-- Sidebar Holder -->
<nav id="sidebar">
    <div class="sidebar-header">
        <h3>Halaman Admin</h3>
    </div>
    <ul class="list-unstyled components">
        <p>Dummy Heading</p>
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
        </li>
        <li>
            <a href="#">About</a>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Master Data</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="<?php echo base_url('admin/users'); ?>">Users</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Portfolio</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
    </ul>

    <ul class="list-unstyled CTAs">
        <li>
            <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
        </li>
        <li>
            <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
        </li>
    </ul>
</nav>