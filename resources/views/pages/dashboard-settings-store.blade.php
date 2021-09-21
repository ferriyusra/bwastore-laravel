@extends('layouts.dashboard')

@section('title')
  Store Dashboard Store Settings
@endsection

@section('content')
<!-- start section content -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
      <div class="dashboard-heading">
          <h2 class="dashboard-title">
              Pengaturan Toko
          </h2>
          <p class="dashboard-subtitle">
              Lihat apa yang kamu miliki hari ini!
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
                                          <label>Nama Toko</label>
                                          <input type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Kategori</label>
                                          <select name="category" class="form-control">
                                              <option value="" disabled>Kategori Toko</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Toko</label>
                                          <p class="text-muted">
                                              Apakah anda ingin membuka toko ?
                                          </p>
                                          <div
                                              class="custom-control custom-radio custom-control-inline">
                                              <input type="radio" class="custom-control-input"
                                                  name="is_store_open" id="openStoreTrue"
                                                  value="true">
                                              <label for="openStoreTrue" class="custom-control-label">
                                                  Buka
                                              </label>
                                          </div>
                                          <div
                                              class="custom-control custom-radio custom-control-inline">
                                              <input type="radio" class="custom-control-input"
                                                  name="is_store_open" id="openStoreFalse"
                                                  value="false">
                                              <label for="openStoreFalse"
                                                  class="custom-control-label">
                                                  Sementara Tutup
                                              </label>
                                          </div>
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