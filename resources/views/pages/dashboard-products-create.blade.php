@extends('layouts.dashboard')

@section('title')
    Store Dashboard Products Create
@endsection

@section('content')
        <!-- start section content -->
        <div class="section-content section-dashboard-home" data-aos="fade-up">
            <div class="container-fluid">
                <div class="dashboard-heading">
                    <h2 class="dashboard-title">
                        Produk Baru
                    </h2>
                    <p class="dashboard-subtitle">
                        Buat produk kamu disini
                    </p>
                </div>
                <!-- start section setting account -->
                <div class="dashboard-content">
                    <div class="row">
                        <div class="col-12">
                            <form action="">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama Produk</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Harga</label>
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Kategori Produk</label>
                                                    <select name="category" class="form-control">
                                                        <option value="" disabled>Kategori Produk</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Deskripsi Produk</label>
                                                    <textarea name="description"
                                                        class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Thumbnail Produk</label>
                                                    <input type="file" class="form-control">
                                                    <p class="text-muted">
                                                        Kamu dapat memilih lebih dari satu file
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col text-right">
                                                <button type="submit" class="btn btn-success px-5">
                                                    Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end section setting account -->
            </div>
        </div>
        <!-- end section content -->
@endsection
@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
@endpush