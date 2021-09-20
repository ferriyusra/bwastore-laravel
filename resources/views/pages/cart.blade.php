@extends('layouts.app')

@section('title')
    Store Cart Page
@endsection

@section('content')
   <!-- start page content -->
   <div class="page-content page-cart">
    <!-- start breadcrumb -->
    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                Cart
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- end breadcrumb -->

    <!-- start section cart -->
    <section class="store-cart">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-12 table-responsive">
                    <table class="table table-borderless table-cart" aria-describedby="Cart">
                        <thead>
                            <tr>
                                <th scope="col">Gambar</th>
                                <th scope="col">Produk &amp; Penjual</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 25%;">
                                    <img src="/images/product-cart-1.jpg" alt="" class="cart-image" />
                                </td>
                                <td style="width: 35%;">
                                    <div class="product-title">Sofa Ikea</div>
                                    <div class="product-subtitle">Penjual Toko Ferri Yusra</div>
                                </td>
                                <td style="width: 35%;">
                                    <div class="product-title">Rp 10.000.000</div>
                                    <div class="product-subtitle">IDR</div>
                                </td>
                                <td style="width: 20%;">
                                    <a href="#" class="btn btn-remove-cart">
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 25%;">
                                    <img src="/images/product-cart-2.jpg" alt="" class="cart-image" />
                                </td>
                                <td style="width: 35%;">
                                    <div class="product-title">Sofa Ikea</div>
                                    <div class="product-subtitle">Penjual Toko Ferri Yusra</div>
                                </td>
                                <td style="width: 35%;">
                                    <div class="product-title">Rp 10.000.000</div>
                                    <div class="product-subtitle">IDR</div>
                                </td>
                                <td style="width: 20%;">
                                    <a href="#" class="btn btn-remove-cart">
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 25%;">
                                    <img src="/images/product-cart-3.jpg" alt="" class="cart-image" />
                                </td>
                                <td style="width: 35%;">
                                    <div class="product-title">Sofa Ikea</div>
                                    <div class="product-subtitle">Penjual Toko Ferri Yusra</div>
                                </td>
                                <td style="width: 35%;">
                                    <div class="product-title">Rp 10.000.000</div>
                                    <div class="product-subtitle">IDR</div>
                                </td>
                                <td style="width: 20%;">
                                    <a href="#" class="btn btn-remove-cart">
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="150">
                <div class="col-12">
                    <hr />
                </div>
                <div class="col-12">
                    <h2 class="mb-4">Alamat Detail</h2>
                </div>
            </div>
            <!-- start section shiping information -->
            <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="addressOne">Alamat 1</label>
                        <input type="text" class="form-control" id="addressOne" aria-describedby="emailHelp"
                            name="addressOne" value="Setra Duta Cemara" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="addressTwo">Alamat 2</label>
                        <input type="text" class="form-control" id="addressTwo" aria-describedby="emailHelp"
                            name="addressTwo" value="Blok B2 No. 34" />
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
                        <input type="text" class="form-control" id="postalCode" name="postalCode" value="40512" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="country">Negara</label>
                        <input type="text" class="form-control" id="country" name="country" value="Indonesia" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="mobile">No Handphone</label>
                        <input type="text" class="form-control" id="mobile" name="mobile" value="+628 2020 11111" />
                    </div>
                </div>
            </div>
            <!-- end section shiping information -->
            <!-- start section payment information -->
            <div class="row" data-aos="fade-up" data-aos-delay="150">
                <div class="col-12">
                    <hr />
                </div>
                <div class="col-12">
                    <h2>Detail Pembayaran</h2>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="200">
                <div class="col-4 col-md-2">
                    <div class="product-title">Rp 10.000</div>
                    <div class="product-subtitle">Pajak Negara</div>
                </div>
                <div class="col-4 col-md-3">
                    <div class="product-title">Rp 5.000</div>
                    <div class="product-subtitle">Asuransi Produk</div>
                </div>
                <div class="col-4 col-md-2">
                    <div class="product-title">Rp 30.000</div>
                    <div class="product-subtitle">Kirim ke Jakarta</div>
                </div>
                <div class="col-4 col-md-2">
                    <div class="product-title text-success">Rp 10.409.000</div>
                    <div class="product-subtitle">Total</div>
                </div>
                <div class="col-8 col-md-3">
                    <a href="/uccess.html" class="btn btn-success mt-4 px-4 btn-block">
                        Bayar Sekarang
                    </a>
                </div>
            </div>
            <!-- end section payment information -->

        </div>
    </section>
    <!-- end section cart -->

</div>
<!-- end page content -->
@endsection