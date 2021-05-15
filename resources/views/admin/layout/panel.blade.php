<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link rel="stylesheet" href="{{ url('/assets/app/css/app.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/icons/all.css') }}">
    <link rel="stylesheet" href="{{ url('/dist/css/admin/panel.css') }}">
</head>

<body>

    <div class="wrapper">

        <nav class="navbar navbar-expand-sm navbar-light bg-light py-1 shadow">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler btn btn-light py-1 px-3 border-0 text-danger" id="btnmenus">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-4">
                        <li class="nav-item px-1">
                            <a class="nav-link" href="#">
                                <div class="nav-icon d-block rounded-circle overflow-hidden">
                                    <i class="fas fa-bell fa-lg fa-fw"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link" href="#">
                                <div class="nav-icon d-block rounded-circle overflow-hidden">
                                    <i class="fas fa-envelope fa-lg fa-fw"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-1 dropstart">
                            <a class="nav-link" href="#" id="dropuser" role="button" data-bs-toggle="dropdown">
                                <div class="nav-icon-user d-block rounded-circle overflow-hidden">
                                    <img src="https://i.pinimg.com/736x/33/ab/7e/33ab7eb219156df4ace81603f225bc31.jpg"
                                        alt="user" class="img-fluid">
                                </div>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropuser">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">LogOut</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="menu" id="menus">
            <div class="menu-head py-4 px-3 border-bottom">
                <div class="row">
                    <div class="col-12 mb-2">
                        <div class="menu-images">
                            <img src="https://i.pinimg.com/736x/33/ab/7e/33ab7eb219156df4ace81603f225bc31.jpg"
                                alt="user" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-block">
                            <p class="menu-title-name text-white fw-bold text-capitalize mb-0">Tzuyu Fansclube</p>
                            <small class="text-light">tzuyu8@gmail.com</small>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="nav flex-column">
                <a class="nav-link links active" href="#">
                    <i class="fa fa-home box-icon" aria-hidden="true"></i> Home
                </a>
                <a class="nav-link links" href="#">
                    <i class="fa fa-users box-icon" aria-hidden="true"></i> Pengelolah
                </a>
                <a class="nav-link links" href="#">
                    <i class="fa fa-book box-icon" aria-hidden="true"></i>Data Induk
                </a>
                <hr class="dropdown-divider text-white">
                <a class="nav-link links" href="#">
                    <i class="fa fa-bell box-icon" aria-hidden="true"></i> Notifikasi
                </a>
                <a class="nav-link links d-flex" href="#">
                    <i class="fa fa-envelope box-icon" aria-hidden="true"></i> Messeger
                    <small class="menu-badge text-muted">10</small>
                </a>
                <hr class="dropdown-divider text-white">
                <a class="nav-link links" href="#">
                    <i class="fa fa-cog box-icon" aria-hidden="true"></i> Setting
                </a>
                <a class="nav-link links" href="#">
                    <i class="fa fa-id-card box-icon" aria-hidden="true"></i> About Me
                </a>
                <hr class="dropdown-divider text-white">
                <a class="nav-link links" href="#">
                    <i class="fa fa-sign-out box-icon" aria-hidden="true"></i> LogOut
                </a>
            </nav>
        </div>



        <div class="main">
           @yield('mainpages')
        </div>


    </div>

    <div class="menu-background collapse" id="menubackground"></div>
    <script src="{{ url('/assets/app/js/jquery.js') }}"></script>
    <script src="{{ url('/assets/app/js/popper.js') }}"></script>
    <script src="{{ url('/assets/app/js/app.js') }}"></script>
    <script src="{{ url('/assets/icons/all.js') }}"></script>
</body>

</html>