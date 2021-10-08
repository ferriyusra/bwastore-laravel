@extends('layouts.dashboard')

@section('title')
    Store Dashboard
@endsection

@section('content')
    <!-- start section content -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">
                    Dashboard
                </h2>
                <p class="dashboard-subtitle">
                    Lihat apa yang kamu miliki hari ini!
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">Pelanggan</div>
                                <div class="dashboard-card-subtitle">{{ number_format($customer) }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">Pendapatan</div>
                                <div class="dashboard-card-subtitle">Rp {{ number_format($revenue) }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <div class="card-body">
                                <div class="dashboard-card-title">Transaksi</div>
                                <div class="dashboard-card-subtitle"> {{ number_format($transaction_count) }}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 mt-2">
                        <h5 class="mb-3">
                            Transaksi Terakhir
                        </h5>
                       @forelse ($transaction_data as $transaction)
                       <a href={{ route('dashboard-transaction-details', $transaction->id) }} class="card card-list d-block">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-1">
                                    <img src="{{ Storage::url($transaction->product->galleries->first()->photos ?? '') }}" class="w-75">
                                </div>
                                <div class="col-md-4">
                                    {{$transaction->product->name ?? ''}}
                                </div>
                                <div class="col-md-3">
                                    {{$transaction->transaction->user->name ?? ''}}
                                </div>
                                <div class="col-md-3">
                                    {{$transaction->created_at  ?? ''}}
                                </div>
                                <div class="col-md-1 d-none d-md-block">
                                    <img src="{{ url('/images/dashboard-arrow-right.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        </a>
                       @empty
                           <div class="row">
                               <div class="col-12">
                                   <p>tidak ada data</p>
                               </div>
                           </div>
                       @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section content -->
@endsection