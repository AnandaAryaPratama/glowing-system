//SideNavbar

var namasession = sessionStorage.getItem("nama");

let header = $(`
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Selamat Datang</h3>
        </div>
        <ul class="list-unstyled components">
            <p>`+ namasession +`</p>
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
    </nav>`);


let topbar = $(`
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="navbar-btn">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-justify"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="http://belajar-ci.test/admin/users">Master Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://belajar-ci.test/admin/berita">Master Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://belajar-ci.test/admin/halaman">Master Halaman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://belajar-ci.test/admin/login/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        </nav>`);
  
let bodyElement = $(`.sidebar`);
bodyElement.after(header);

let bodyElements = $(`.topbar`);
bodyElements.after(topbar);