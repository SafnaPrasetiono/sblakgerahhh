<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link rel="stylesheet" href="{{ url('/assets/app/css/app.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/icon/all.css') }}">
    <link rel="stylesheet" href="{{ url('/dist/css/user/panel.css') }}">
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link t-link-white" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link t-link-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Makanan</a></li>
                            <li><a class="dropdown-item" href="#">Minuman</a></li>
                            <li><a class="dropdown-item" href="#">Cemilan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link t-link-white" aria-current="page" href="#">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link t-link-white" aria-current="page" href="#">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary px-3 ml-2" aria-current="page" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- main pages -->
    <div class="main-content">
        @yield('mainpages')
    </div>

    <!-- footers -->
    <footer class="py-5 bg-danger text-white">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <span class="d-block fw-bold">About Me</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque eum sit adipisci at quod eos et eaque iusto laborum, nemo maxime officia numquam beatae alias aliquam quis suscipit amet quo!.nemo maxime officia numquam beatae alias aliquam quis suscipit amet quo!</p>
                    <hr class="soft w-50">
                    <nav class="nav">
                        <a class="nav-link ps-0 pe-4">Active</a>
                        <a class="nav-link ps-0 pe-4">Link</a>
                        <a class="nav-link ps-0 pe-4">Link</a>
                    </nav>
                </div>
                <div class="col-6 col-sm-6 col-md-2 col-lg-2 col-xl-2">
                    <div class="nav flex-column">
                        <a class="nav-link t-footer py-1" aria-current="page" href="#">Active</a>
                        <a class="nav-link t-footer py-1" href="#">Link</a>
                        <a class="nav-link t-footer py-1" href="#">Link</a>
                        <a class="nav-link t-footer py-1 disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-2 col-lg-2 col-xl-2">
                    <div class="nav flex-column">
                        <a class="nav-link t-footer py-1" aria-current="page" href="#">Active</a>
                        <a class="nav-link t-footer py-1" href="#">Link</a>
                        <a class="nav-link t-footer py-1" href="#">Link</a>
                        <a class="nav-link t-footer py-1 disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ url('assets/app/js/jquery.js') }}"></script>
    <script src="{{ url('assets/app/js/popper.js') }}"></script>
    <script src="{{ url('assets/app/js/app.js') }}"></script>
    <script src="{{ url('assets/icons/all.js') }}"></script>
    <script src="{{ url('dist/js/user/panel.js') }}"></script>
    @yield('script')
</body>

</html>