<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>@yield('title')</title>

    @stack('prepend-style')
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
        <link href="{{ url('/style/main.css')}}" rel="stylesheet" />
    @stack('addon-style')
</head>

<body>

    <div class="page-dashboard">
        <div class="d-flex" id="wrapper" data-aos="fade-right">
            <!-- start content sidebar -->
            <div class="border-right" id="sidebar-wrapper">
                <div class="sidebar-heading text-center">
                    <img src="{{ url('/images/dashboard-store-logo.svg')}}" class="my-4">
                </div>
                <!-- start item sidebar -->
                <div class="list-group list-group-flush">
                    <a 
                    href="{{ route('dashboard')}}"
                    class="list-group-item list-group-item-action {{ (request()->is('dashboard')) ? 'active' : ''}}">
                        Dashboard
                    </a>
                    <a href="{{ route('dashboard-product')}}"
                    class="list-group-item list-group-item-action {{ (request()->is('dashboard/products*')) ? 'active' : ''}}">
                        Produk Saya
                    </a>
                    <a href="{{ route('dashboard-transaction')}}"
                    class="list-group-item list-group-item-action {{ (request()->is('dashboard/transactions*')) ? 'active' : ''}}">
                        Transaksi
                    </a>
                    <a href="{{ route('dashboard-settings-store')}}" class="list-group-item list-group-item-action {{ (request()->is('dashboard/settings-store*')) ? 'active' : ''}}">
                        Pengaturan Toko
                    </a>
                    <a href="{{ route('dashboard-settings-account')}}" class="list-group-item list-group-item-action {{ (request()->is('dashboard/settings-account*')) ? 'active' : ''}}">
                        Akun Saya
                    </a>
                    <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();" class="list-group-item list-group-item-action">Keluar</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form> 
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
                                            Hi, {{Auth::user()->name}}
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="{{ route('dashboard')}}" class="dropdown-item">
                                            Dashboard
                                        </a>
                                        <a href="{{route('dashboard-settings-account')}}" class="dropdown-item">
                                            Pengaturan
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"
                                        class="dropdown-item">Keluar</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                        </form>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('cart')}}" class="nav-link d-inline-block mt-2">
                                      @php
                                          $carts = \App\Cart::where('users_id', Auth::user()->id)->count();
                                      @endphp
                                      @if ($carts > 0)
                                        <img src="/images/icon-cart-filled.svg" alt="cart">
                                        <div class="cart-badge">{{ $carts }}</div>
                                      @else
                                        <img src="/images/icon-cart-empty.svg" alt="cart">
                                      @endif
                                    </a>
                                </li>
                            </ul>
                            <!-- mobile menu -->
                            <ul class="navbar-nav d-block d-lg-none">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"> Hi, {{Auth::user()->name}}</a>
                                </li>
                                <li class="nav-item">
                                    {{-- <a href="#" class="nav-link d-inline-block">Cart</a> --}}
                                    <a href="{{ route('cart')}}" class="nav-link d-inline-block mt-2">
                                        @php
                                            $carts = \App\Cart::where('users_id', Auth::user()->id)->count();
                                        @endphp
                                        @if ($carts > 0)
                                          <img src="/images/icon-cart-filled.svg" alt="cart">
                                          <div class="cart-badge">{{ $carts }}</div>
                                        @else
                                          <img src="/images/icon-cart-empty.svg" alt="cart">
                                        @endif
                                      </a>
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