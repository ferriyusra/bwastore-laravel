@extends('layouts.dashboard')

@section('title')
  Store Dashboard Account Settings
@endsection

@section('content')
       <!-- start section content -->
       <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">
                    Pengaturan Akun
                </h2>
                <p class="dashboard-subtitle">
                    Update informasi akun
                </p>
            </div>
            <!-- start section setting account -->
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12">
                        <form action="">
                            <div class="card">
                                <div class="card-body">
                                    <!-- start section shiping information -->
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="addressOne"> Nama Akun</label>
                                                <input type="text" class="form-control" name="addressOne"
                                                    value="Ferri" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="addressTwo">Email Akun</label>
                                                <input type="email" class="form-control" name="addressTwo"
                                                    value="feri@gmail.com" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="addressOne">Alamat 1</label>
                                                <input type="text" class="form-control" id="addressOne"
                                                    aria-describedby="emailHelp" name="addressOne"
                                                    value="Setra Duta Cemara" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="addressTwo">Alamat 2</label>
                                                <input type="text" class="form-control" id="addressTwo"
                                                    aria-describedby="emailHelp" name="addressTwo"
                                                    value="Blok B2 No. 34" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="province">Provinsi</label>
                                                <select name="province" id="province" class="form-control">
                                                    <option value="West Java">Jawa Barat</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="city">Kota</label>
                                                <select name="city" id="city" class="form-control">
                                                    <option value="Bandung">Bandung</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="postalCode">Kode Pos</label>
                                                <input type="text" class="form-control" id="postalCode"
                                                    name="postalCode" value="40512" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="country">Negara</label>
                                                <input type="text" class="form-control" id="country"
                                                    name="country" value="Indonesia" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mobile">No Handphone</label>
                                                <input type="text" class="form-control" id="mobile"
                                                    name="mobile" value="+628 2020 11111" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end section shiping information -->
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