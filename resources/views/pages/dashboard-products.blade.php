@extends('layouts.dashboard')

@section('title')
    Store Dashboard Products
@endsection

@section('content')
   <!-- start section content -->
   <div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">
                Produk saya
            </h2>
            <p class="dashboard-subtitle">
                Atur produk dan dapatkan uang!
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('dashboard-product-create')}}" class="btn btn-success">
                        Tambah Produk
                    </a>
                </div>
            </div>
            <div class="row mt-4">
             @forelse ($products as $product)
             <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="{{route('dashboard-product-details', $product->id)}}"
                    class="card card-dashboard-product d-block">
                    <div class="card-body">
                        <img src="{{ Storage::url($product->galleries->first()->photos ?? '')}}" alt="" class="w-100 mb-2">
                        <div class="product-title">
                            {{$product->name}}
                        </div>
                        <div class="product-category">
                            {{$product->category->name}}
                        </div>
                    </div>
                </a>
            </div>
             @empty
                <div class="col-12">
                    <p>tidak ada data</p>
                </div>
             @endforelse
            </div>
        </div>
    </div>
</div>
<!-- end section content -->
@endsection