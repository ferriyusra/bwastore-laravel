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
                        @php
                            $totalPrice = 0;
                        @endphp
                        @forelse ($carts as $cart)
                         <tr>
                            <td style="width: 25%;">
                            @if ($cart->product->galleries)
                                <img src="{{ Storage::url($cart->product->galleries->first()->photos) }}" alt="" class="cart-image" />
                            @endif
                            </td>
                            <td style="width: 35%;">
                                <div class="product-title text-capitalize">{{ $cart->product->name }}</div>
                                <div class="product-subtitle">Penjual {{ $cart->product->user->store_name }}</div>
                            </td>
                            <td style="width: 35%;">
                                <div class="product-title">Rp {{number_format($cart->product->price, 0, '.', '.')}}</div>
                                <div class="product-subtitle">IDR</div>
                            </td>
                            <td style="width: 20%;">
                                <form action="{{ route('cart-delete', $cart->id )}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-remove-cart">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @php
                            $totalPrice += $cart->product->price + 45000;
                        @endphp
                        @empty
                        <tr>
                          <td colspan=7 class="text-center">
                            Tidak ada produk di keranjang | <a href="{{ route('home')}}" class="btn btn-success">Lanjutkan belanja</a>
                          </td>
                        </tr>
                        @endforelse
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

            <form action="" method="post" id="locations">
                <!-- start section shiping information -->
                <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address_one">Alamat 1</label>
                            <input 
                            type="text"
                            class="form-control"
                            id="address_one" aria-describedby="emailHelp"
                            name="address_one" value="Setra Duta Cemara" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address_two">Alamat 2</label>
                            <input 
                            type="text"
                            class="form-control"
                            id="address_two" 
                            aria-describedby="emailHelp"
                            name="address_two" value="Blok B2 No. 34" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="provinces_id">Provinsi</label>
                            <select name="provinces_id" id="provinces_id" class="form-control" v-if="provinces" v-model="provinces_id">
                                <option
                                v-for="province in provinces" 
                                :value="province.id">@{{ province.name }}
                                </option>
                            </select>
                            <select v-else class="form-control">
                                <option value="Pilih Provinsi" selected>Pilih Provinsi</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="regencies_id">Kota</label>
                            <select name="regencies_id" id="regencies_id" class="form-control" v-if="regencies" v-model="regencies_id">
                                <option
                                v-for="regency in regencies" 
                                :value="regency.id">@{{ regency.name }}
                                </option>
                            </select>
                            <select v-else class="form-control">
                                <option value="Pilih Provinsi" selected>Pilih Kota</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="zip_code">Kode Pos</label>
                            <input type="text" class="form-control" id="zip_code" name="zip_code" value="40512" />
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
                            <label for="phone_number">No Handphone</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" value="+628 2020 11111" />
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
                        <div class="product-title text-success">
                            Rp {{number_format($totalPrice ?? 0)}}
                        </div>
                        <div class="product-subtitle">Total</div>
                    </div>
                    <div class="col-8 col-md-3">
                        <a href="/uccess.html" class="btn btn-success mt-4 px-4 btn-block">
                            Bayar Sekarang
                        </a>
                    </div>
                </div>
                <!-- end section payment information -->
            </form>

        </div>
    </section>
    <!-- end section cart -->

</div>
<!-- end page content -->
@endsection

@push('addon-script')
<script src="{{ url('/vendor/vue/vue.js')}}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    let locations = new Vue({
        el: "#locations",
        mounted() {
            AOS.init();
            this.getProvincesData();
        },
        data: {
            provinces: null,
            regencies: null,
            provinces_id: null,
            regencies_id: null,
        },
        methods: {
            getProvincesData(){
                let self = this;
                axios.get('{{ route('api-provinces') }}')
                    .then(function (response) {
                        self.provinces = response.data;
                    })
            },
            getRegenciesData(){
                let self = this;
                axios.get('{{ url('api/regencies') }}/' + self.provinces_id)
                    .then(function (response) {
                        self.regencies = response.data;
                    })
            },
        },
        watch: {
            provinces_id: function (val, oldVal) {
                this.regencies_id = null;
                this.getRegenciesData();
            }
        }
    });
</script>
@endpush