@extends('layouts.admin')

@section('title')
    Store Dashboard
@endsection

@section('content')
    <!-- start section content -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">
                    Admin Dashboard
                </h2>
                <p class="dashboard-subtitle">
                   Halaman Administrator Panel
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">Pelanggan</div>
                                <div class="dashboard-card-subtitle">15.000</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">Pendapatan</div>
                                <div class="dashboard-card-subtitle">Rp 15.000.000</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">Transaksi</div>
                                <div class="dashboard-card-subtitle"> 15.000.000</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 mt-2">
                        <h5 class="mb-3">
                            Transaksi Terakhir
                        </h5>
                        <a href="dashboard-transactions-details.html" class="card card-list d-block">
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
                        <a href="dashboard-transactions-details.html" class="card card-list d-block">
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
                        <a href="dashboard-transactions-details.html" class="card card-list d-block">
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
            </div>
        </div>
    </div>
    <!-- end section content -->
@endsection