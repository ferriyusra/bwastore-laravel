@extends('layouts.dashboard')

@section('title')
    Store Dashboard Transactions Details
@endsection

@section('content')
         <!-- start section content -->
         <div class="section-content section-dashboard-home" data-aos="fade-up">
            <div class="container-fluid">
                <div class="dashboard-heading">
                    <h2 class="dashboard-title">#STORE0839</h2>
                    <p class="dashboard-subtitle">
                        Transaksi Detail
                    </p>
                </div>
                <div class="dashboard-content" id="transactionDetails">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <img src="/images/product-details-dashboard.png" alt=""
                                                class="w-100 mb-3" />
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Nama Pelanggan</div>
                                                    <div class="product-subtitle">Ferri Yusra</div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Nama Produk</div>
                                                    <div class="product-subtitle">
                                                        Shirup Marzzan
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">
                                                        Tanggal Transaksi
                                                    </div>
                                                    <div class="product-subtitle">
                                                        12 Oktober, 2021
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Status</div>
                                                    <div class="product-subtitle text-danger">
                                                        status
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Total</div>
                                                    <div class="product-subtitle">Rp 10.000.000</div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">No Handphone</div>
                                                    <div class="product-subtitle">
                                                        +628 2020 11111
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-4">
                                            <h5>
                                                Shipping Informations
                                            </h5>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Alamat 1</div>
                                                    <div class="product-subtitle">
                                                        Setra Duta Cemara
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Alamat 2</div>
                                                    <div class="product-subtitle">
                                                        Blok B2 No. 34
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">
                                                        Provinsi
                                                    </div>
                                                    <div class="product-subtitle">
                                                        West Java
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Kota</div>
                                                    <div class="product-subtitle">
                                                        Bandung
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Kode Pos</div>
                                                    <div class="product-subtitle">123999</div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="product-title">Negara</div>
                                                    <div class="product-subtitle">
                                                        Indonesia
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="product-title">Status</div>
                                                            <select name="status" id="status"
                                                                class="form-control" v-model="status">
                                                                <option value="UNPAID">Unpaid</option>
                                                                <option value="PENDING">Pending</option>
                                                                <option value="SHIPPING">Shipping</option>
                                                                <option value="SUCCESS">Success</option>
                                                            </select>
                                                        </div>
                                                        <template v-if="status == 'SHIPPING'">
                                                            <div class="col-md-3">
                                                                <div class="product-title">
                                                                    Masukkan Resi
                                                                </div>
                                                                <input class="form-control" type="text"
                                                                    name="resi" id="openStoreTrue"
                                                                    v-model="resi" />
                                                            </div>
                                                            <div class="col-md-2">
                                                                <button type="submit"
                                                                    class="btn btn-success btn-block mt-4">
                                                                    Ubah Resi
                                                                </button>
                                                            </div>
                                                        </template>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
<script src="{{ url('/vendor/vue/vue.js')}}"></script>
<script>
    let transactionDetails = new Vue({
        el: '#transactionDetails',
        data: {
            status: "SHIPPING",
            resi: "RESI12345678",
        }
    });
</script>
@endpush