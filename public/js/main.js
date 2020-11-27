//SideNavbar

var namasession = sessionStorage.getItem("nama");

  let header = $(`
  <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Selamat Datang</h3>
            </div>
            <ul class="list-unstyled components">
                <p>`+ namasession +`</p>
                <li class="active">
                    <a href="http://belajar-ci.test/admin/dashboard">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
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
  
  let bodyElement = $(`.sidebar`);
  bodyElement.after(header);