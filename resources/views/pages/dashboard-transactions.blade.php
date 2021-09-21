@extends('layouts.dashboard')

@section('title')
    Store Dashboard Transactions
@endsection

@section('content')
     <!-- start section content -->
     <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">
                    Transaksi
                </h2>
                <p class="dashboard-subtitle">
                    Big result start from small one
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12 mt-2">
                        <!-- start section product transaction -->
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill"
                                    href="#pills-home" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Jual Produk</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill"
                                    href="#pills-profile" role="tab" aria-controls="pills-profile"
                                    aria-selected="false">Beli Produk</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <a href="dashboard-transactions-details.html"
                                    class="card card-list d-block">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="{{ url('/images/dashboard-icon-product-1.png')}}">
                                            </div>
                                            <div class="col-md-4">
                                                Sirup Marjan
                                            </div>
                                            <div class="col-md-3">
                                                Ferri Yusra
                                            </div>
                                            <div class="col-md-3">
                                                12 Oktober 2021
                                            </div>
                                            <div class="col-md-1 d-none d-md-block">
                                                <img src="{{ url('/images/dashboard-arrow-right.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-transactions-details.html"
                                    class="card card-list d-block">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="{{ url('/images/dashboard-icon-product-2.png')}}">
                                            </div>
                                            <div class="col-md-4">
                                                LeBrone X
                                            </div>
                                            <div class="col-md-3">
                                                Ferri Usro
                                            </div>
                                            <div class="col-md-3">
                                                12 Oktober 2021
                                            </div>
                                            <div class="col-md-1 d-none d-md-block">
                                                <img src="{{ url('/images/dashboard-arrow-right.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-transactions-details.html"
                                    class="card card-list d-block">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="{{ url('/images/dashboard-icon-product-3.png')}}">
                                            </div>
                                            <div class="col-md-4">
                                                Soffa Ikea
                                            </div>
                                            <div class="col-md-3">
                                                Usro Usri
                                            </div>
                                            <div class="col-md-3">
                                                12 Oktober 2021
                                            </div>
                                            <div class="col-md-1 d-none d-md-block">
                                                <img src="{{ url('/images/dashboard-arrow-right.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <a href="dashboard-transactions-details.html"
                                    class="card card-list d-block">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="{{ url('/images/dashboard-icon-product-2.png')}}">
                                            </div>
                                            <div class="col-md-4">
                                                LeBrone X
                                            </div>
                                            <div class="col-md-3">
                                                Ferri Usro
                                            </div>
                                            <div class="col-md-3">
                                                12 Oktober 2021
                                            </div>
                                            <div class="col-md-1 d-none d-md-block">
                                                <img src="{{ url('/images/dashboard-arrow-right.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="dashboard-transactions-details.html"
                                    class="card card-list d-block">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img src="{{ url('/images/dashboard-icon-product-3.png')}}">
                                            </div>
                                            <div class="col-md-4">
                                                Soffa Ikea
                                            </div>
                                            <div class="col-md-3">
                                                Usro Usri
                                            </div>
                                            <div class="col-md-3">
                                                12 Oktober 2021
                                            </div>
                                            <div class="col-md-1 d-none d-md-block">
                                                <img src="{{ url('/images/dashboard-arrow-right.svg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- end section product transaction -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section content -->
@endsection