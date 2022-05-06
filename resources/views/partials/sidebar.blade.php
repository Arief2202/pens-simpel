<div class="container-fluid">
    <div id="mySidebar" class="sidebar">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
      <div id="sidebar-nav" class="list-group border-0 rounded-0 text-sm-start ">
        <a href="/" class="list-group-item border-end-0 d-inline-block text-truncate {{ ($title === "graphic") ? 'active' : '' }}" data-bs-parent="#sidebar"><i class="fa-solid fa-house me-2"></i><span class="ms-1 d-none d-sm-inline">Beranda</span></a>
        <a href="#submenu1" data-bs-toggle="collapse" class="list-group-item border-end-0 d-inline-block text-truncate">
            <i class="fa fa-th-list me-2"></i><span class="ms-1 d-none d-sm-inline">Data Penelitian</span> </a>
            <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu" style="background-color: #d8f0f7">
                <li class="w-100">
                    <a href="/data" class="nav-link" style="color: grey;"><i class="fa fa-caret-right me-3" ></i><span class="d-none d-sm-inline">Semua Data</span></a>
                </li>
                <!-- <li>
                    <a href="/datatahun" class="nav-link" style="color: grey"><i class="fa fa-caret-right me-3" ></i><span class="d-none d-sm-inline">Berdasar Tahun</span></a>
                </li> -->
                <li>
                    <a href="/dataprodi" class="nav-link" style="color: grey"><i class="fa fa-caret-right me-3" ></i><span class="d-none d-sm-inline">Berdasar Prodi</span></a>
                </li>
            </ul>
        <a href="/pengumuman" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="fa fa-bullhorn me-2"></i><span class="ms-1 d-none d-sm-inline">Pengumuman</span></a>
        <a href="#submenu2" data-bs-toggle="collapse" class="list-group-item border-end-0 d-inline-block text-truncate">
            <i class="fa fa-user me-2"></i><span class="ms-1 d-none d-sm-inline">Akun</span> </a>
            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu" style="background-color: #d8f0f7">
                <li class="w-100">
                    <a href="#" class="nav-link" style="color: grey"><i class="fa fa-caret-right me-3" ></i><span class="d-none d-sm-inline">Lihat Profile</span></a>
                </li>
                <li>
                    <a href="#" class="nav-link" style="color: grey"><i class="fa fa-caret-right me-3" ></i></i><span class="d-none d-sm-inline">Edit Profile</span></a>
                </li>
            </ul>
        <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="fa fa-sign-out me-2"></i><span class="ms-1 d-none d-sm-inline">Keluar</span></a>
       </div>
    </div>
    
    <div id="main">
      {{-- <button class="openbtn" onclick="openNav()">☰ Tampilkan Menu</button>  --}}
      @yield('content')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>