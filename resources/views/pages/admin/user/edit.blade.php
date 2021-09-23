@extends('layouts.admin')

@section('title')
    Ubah User Produk
@endsection

@section('content')
    <!-- start section content -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">
                    User Produk Dashboard
                </h2>
                <p class="dashboard-subtitle">
                    Ubah Pengguna : "{{ $item->name }}"
                </p>
            </div>
            <div class="dashboard-content">
             <div class="row">
                <div class="col-md-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card">
                       <div class="card-body">
                        <form action="{{ route('user.update', $item->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama Pengguna</label>
                                        <input type="text" name="name" class="form-control" value="{{$item->name}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email Pengguna</label>
                                        <input type="email" name="email" class="form-control" value="{{$item->email}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Kata sandi Pengguna</label>
                                        <input type="password" name="password" class="form-control">
                                        <div class="alert alert-primary" role="alert">
                                            Kosongkan jika tidak ingin mengganti password
                                          </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Tingkatan Pengguna</label>
                                        <select name="roles" class="form-control">
                                            <option value="{{ $item->roles }}">Tidak diubah : {{ $item->roles }}</option>
                                            <option value="ADMIN">Admin</option>
                                            <option value="USER">User</option>
                                        </select>
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
                        </form>
                       </div>
                    </div>
                </div>
             </div>
            </div>
        </div>
    </div>
    <!-- end section content -->
@endsection