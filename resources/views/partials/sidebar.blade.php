<div class="container-fluid">
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <div id="sidebar-nav" class="list-group border-0 rounded-0 text-sm-start ">
            <div class="nav-logo disabled" style="padding: 5%; color:grey; font-weight: bolder">UTAMA</div>
            <a href="/home" class="list-group-item border-end-0 d-inline-block text-truncate {{ ($title === " graphic")
                ? 'active' : '' }}" data-bs-parent="#sidebar"><i class="fa-solid fa-house me-2"></i><span
                    class="ms-1 d-none d-sm-inline">Beranda</span></a>
            <a href="#submenu1" data-bs-toggle="collapse"
                class="list-group-item border-end-0 d-inline-block text-truncate">
                <i class="fa fa-th-list me-2"></i><span class="ms-1 d-none d-sm-inline">Data Penelitian</span> </a>
            <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">

                <li class="w-100">
                    <a href="/data" class="nav-link"><i class="fa fa-caret-right me-3"></i><span
                            class="d-none d-sm-inline">Semua Data</span></a>
                </li>
                {{-- <li>
                    <form action="" method="post">

                    </form>
                    <a href="/dataprodi" class="nav-link"><i class="fa fa-caret-right me-3"></i><span
                            class="d-none d-sm-inline">Temukan Data</span></a>
                </li> --}}
                @if (auth()->user()->role === 'p3m')

                <li class="w-100">
                    <a href="/dataApprove" class="nav-link"><i class="fa fa-caret-right me-3"></i><span
                            class="d-none d-sm-inline">Approval Penelitian</span></a>
                </li>
                @endif

            </ul>

            @if (auth()->user()->role === 'dosen')
            <a href="/pengumuman" class="list-group-item border-end-0 d-inline-block text-truncate"
                data-bs-parent="#sidebar"><i class="fa-solid fa-bullhorn"></i><span
                    class="ms-1 d-none d-sm-inline">Lihat Pengumuman</span></a>
            @endif
            @if (auth()->user()->role === 'p3m')
            <a href="/kelolaUser" class="list-group-item border-end-0 d-inline-block text-truncate"
                data-bs-parent="#sidebar"><i class="fa-solid fa-database"></i><span class="ms-3 d-none d-sm-inline">Data
                    User</span></a>
            @endif
            @if (auth()->user()->role === 'p3m')
            <a href="/kelolaProdi" class="list-group-item border-end-0 d-inline-block text-truncate"
                data-bs-parent="#sidebar"><i class="fa-solid fa-server"></i><span class="ms-3 d-none d-sm-inline">Data
                    Prodi</span></a>
            @endif

            @if (auth()->user()->role === 'p3m')

            <a href="#submenu2" data-bs-toggle="collapse"
                class="list-group-item border-end-0 d-inline-block text-truncate">
                <i class="fa fa-bullhorn me-2"></i></i><span class="ms-1 d-none d-sm-inline">Pengumuman</span> </a>
            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                <li class="w-100">
                    <a href="/pengumuman" class="nav-link"><i class="fa fa-caret-right me-3"></i><span
                            class="d-none d-sm-inline">Lihat Pengumuman</span></a>
                </li>

                <li>
                    <a href="/semuapengumuman" class="nav-link"><i class="fa fa-caret-right me-3"></i><span
                            class="d-none d-sm-inline">Kelola Pengumuman</span></a>


                </li>
            </ul>
            @endif

            {{-- </ul> --}}
            <div class="nav-logo disabled" style="padding: 5%; color:grey; font-weight: bolder">AKUN</div>
            <a href="/profile" class="list-group-item border-end-0 d-inline-block text-truncate"
                data-bs-parent="#sidebar"><i class="fa fa-user"></i><span class="ms-3 d-none d-sm-inline"> Profile
                    Saya</span></a>
            <a href="/penelitianku/{{ auth()->user()->id }}"
                class="list-group-item border-end-0 d-inline-block text-truncate" data-bs-parent="#sidebar"><i
                    class="fa fa-folder-open"></i><span class="ms-3 d-none d-sm-inline">Penelitian Saya</span></a>
            <a href="/logout" class="list-group-item border-end-0 d-inline-block text-truncate"
                data-bs-parent="#sidebar"><i class="fa fa-sign-out me-2"></i><span
                    class="ms-1 d-none d-sm-inline">Keluar</span></a>
        </div>
    </div>

    <div id="main">
        <button class="openbtn rounded" onclick="openNav()">☰ Tampilkan Menu</button>
        @yield('content')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>