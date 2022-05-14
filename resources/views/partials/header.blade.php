<nav class="navbar navbar-expand-md navbar-dark fixed-top ">
    <div class="container-fluid align-items-center d-flex">
        <div class="flex-shrink-1">
            <a href="#" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-dark text-decoration-none">
                <i class="bi bi-bootstrap fs-2 text-dark"></i>
            </a>
        </div>
        <div class="flex-grow-1 d-flex align-items-center">
            <div class="navbar-title"><img src={{ asset('img/logo.png') }} alt="logo" class="p-2" style="width: 150px;">
            </div>
            <form class="w-100 me-3">
                {{-- <input type="search" class="form-control" placeholder="Search..."> --}}
            </form>
            <div class="flex-shrink-0 dropdown">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Hi, {{ auth()->user()->nama }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="dropdownUser2" style="">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button class="dropdown-item">Sign out</button>
                        </form>
                        {{-- <a class="dropdown-item" href="#">Sign out</a> --}}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>