<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>@yield('title')</title>

    @stack('prepend-style')
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
        <link href="{{ url('/style/main.css')}}" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.2/datatables.min.css"/>
    @stack('addon-style')
</head>

<body>

    <div class="page-dashboard">
        <div class="d-flex" id="wrapper" data-aos="fade-right">
            <!-- start content sidebar -->
            <div class="border-right" id="sidebar-wrapper">
                <div class="sidebar-heading text-center">
                    <img src="{{ url('/images/admin-2.jpg')}}" class="my-4" style="max-width: 150px;">
                </div>
                <!-- start item sidebar -->
                <div class="list-group list-group-flush">
                    <a href="{{ route('admin-dashboard')}}" class="list-group-item list-group-item-action">
                        Dashboard
                    </a>
                    <a href="{{ route('product.index')}}" class="list-group-item list-group-item-action {{ (request()->is('admin/product')) ? 'active' : ''}}">
                        Data Produk
                    </a>
                    <a href="{{ route('product-gallery.index')}}" class="list-group-item list-group-item-action {{ (request()->is('admin/product-gallery*')) ? 'active' : ''}}">
                        Data Galleri Produk
                    </a>
                    <a href="{{ route('category.index')}}" class="list-group-item list-group-item-action {{ (request()->is('admin/category*')) ? 'active' : ''}}">
                        Data Kategori produk
                    </a>
                    <a href="" class="list-group-item list-group-item-action">
                        Data Transaksi
                    </a>
                    <a href="{{ route('user.index')}}"class="list-group-item list-group-item-action {{ (request()->is('admin/user*')) ? 'active' : ''}}">
                        Data Pengguna
                    </a>
                    <a href="" class="list-group-item list-group-item-action">
                        Keluar
                    </a>
                </div>
                <!-- end item sidebar -->
            </div>
            <!-- end content sidebar -->
            <!-- start page content -->
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top" data-aos="fade-down">
                    <div class="container-fluid">
                        <button id="menu-toggle" class="btn btn-secondary d-md-none mr-auto mr-2">
                            &laquo; Menu
                        </button>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- desktop menu -->
                            <ul class="navbar-nav d-none d-lg-flex ml-auto">
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link" id="navbarDropdown" role="button"
                                        data-toggle="dropdown">
                                        <img src="{{ url('/images/icon-user.png')}}" alt=""
                                            class="rounded-circle mr-2 profile-picture">
                                        Hi, Ferri
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="" class="dropdown-item">Keluar</a>
                                    </div>
                                </li>
                            </ul>
                            <!-- mobile menu -->
                            <ul class="navbar-nav d-block d-lg-none">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Hi, Ferri </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            <!-- end section content -->

            {{-- content --}}
            @yield('content')
            </div>
            <!-- end page content -->
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')
        <script src="{{ url('/libraries/bootstrap_v4/js/jquery-3.4.1.min.js')}}"></script>
        <script src="{{ url('/libraries/bootstrap_v4/js/bootstrap.bundle.min.js')}}"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.11.2/datatables.min.js"></script>
        <script src="{{ url('/libraries/bootstrap_v4/js/bootstrap.js')}}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <script>
            $('#menu-toggle').click(function (e) {
                e.preventDefault();
                $('#wrapper').toggleClass("toggled")
            })
        </script>
    @stack('addon-script')
</body>

</html>