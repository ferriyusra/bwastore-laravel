@extends('layouts.admin')

@section('title')
    Pengguna Dashboard
@endsection

@section('content')
    <!-- start section content -->
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">
                    Pengguna Dashboard
                </h2>
                <p class="dashboard-subtitle">
                   Halaman Data Pengguna
                </p>
            </div>
            <div class="dashboard-content">
             <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('user.create')}}" class="btn btn-primary mb-3">
                                + Tambah Pengguna Baru
                            </a>
                            <div class="table-responsive">
                                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Pengguna</th>
                                            <th>Email Pengguna</th>
                                            <th>Tingkatan Pengguna</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
            </div>
        </div>
    </div>
    <!-- end section content -->
@endsection
@push('addon-script')
    <script>
        let dataTable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                {
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'roles',
                    name: 'roles'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '15%'
                },
            ]
        })
    </script>
@endpush