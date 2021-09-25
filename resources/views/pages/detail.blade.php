@extends('layouts.app')

@section('title')
    Store Detail Page
@endsection

@section('content')
   <!-- start page content -->
   <div class="page-content page-details">
    <!-- start breadcrumb -->
    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                Product Details {{ $product->name }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- end breadcrumb -->
    <!-- start gallery -->
    <section class="store-gallery mb-3" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-8" data-aos="zoom-in">
                    <transition name="slide-fade" mode="out-in">
                        <img :src="photos[activePhoto].url" :key="photos[activePhoto].id" class="w-100 main-image"
                            alt="" />
                    </transition>
                </div>
                <div class="col-lg-2">
                    <div class="row">
                        <div class="col-3 col-lg-12 mt-2 mt-lg-0" v-for="(photo, index) in photos" :key="photo.id"
                            data-aos="zoom-in" data-aos-delay="100">
                            <a href="#" @click="changeActive(index)">
                                <img :src="photo.url" class="w-100 thumbnail-image"
                                    :class="{ active: index == activePhoto }" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end gallery -->
    <div class="store-details-container" data-aos="fade-up">
        <!-- start section heading -->
        <section class="store-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="text-capitalize">{{ $product->name }}</h1>
                        <div class="owner text-capitalize">Penjual {{ $product->user->store_name }}</div>
                        <div class="price">Rp {{number_format($product->price, 0, '.', '.')}}</div>
                    </div>
                    <div class="col-lg-2 mr-0" data-aos="zoom-in">
                        @auth
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <button type="submit" class="btn btn-success px-4 text-white btn-block mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                                  </svg> Keranjang
                            </button>
                        </form>
                        @else
                        <a href="{{route('login')}}" class="btn btn-success px-4 text-white btn-block mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-lock" viewBox="0 0 16 16">
                                <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                                <path d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415z"/>
                              </svg> Masuk
                        </a>
                        @endauth
                    </div>
                </div>
            </div>
        </section>
        <!-- end section heading -->
        <!-- start section description -->
        <section class="store-description">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <p>
                         {!! $product->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section description -->
        {{-- <!-- start section customer review -->
        <section class="store-review">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 mt-3 mb-3">
                        <h5>Ulasan Pelanggan (1000)</h5>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <ul class="list-unstyled">
                                <li class="media">
                                    <img src="{{ url('/images/icons-testimonial-1.png')}}" alt="" class="mr-3 rounded-circle">
                                    <div class="media-body">
                                        <h5 class="mt-2 mb-1">Ferri Yusra</h5>
                                        Produk bagus harga murah berkualitas pengiriman cepat dan barang amana
                                        sampai rumah jangan lupa beli lagi disini. saya beli selanjutnya disini
                                    </div>
                                </li>
                                <li class="media">
                                    <img src="{{ url('/images/icons-testimonial-2.png')}}" alt="" class="mr-3 rounded-circle">
                                    <div class="media-body">
                                        <h5 class="mt-2 mb-1">Ferri Yusra</h5>
                                        Produk bagus harga murah berkualitas pengiriman cepat dan barang amana
                                        sampai rumah jangan lupa beli lagi disini. saya beli selanjutnya disini
                                    </div>
                                </li>
                                <li class="media">
                                    <img src="{{ url('/images/icons-testimonial-3.png')}}" alt="" class="mr-3 rounded-circle">
                                    <div class="media-body">
                                        <h5 class="mt-2 mb-1">Ferri Yusra</h5>
                                        Produk bagus harga murah berkualitas pengiriman cepat dan barang amana
                                        sampai rumah jangan lupa beli lagi disini. saya beli selanjutnya disini
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section customer review --> --}}
    </div>

</div>
<!-- end page content -->
@endsection

@push('addon-script')
<script src="{{ url('/vendor/vue/vue.js')}}"></script>
<script>
    let gallery = new Vue({
        el: "#gallery",
        mounted() {
            AOS.init();
        },
        data: {
            activePhoto: 0,
            photos: [
                @foreach($product->galleries as $gallery)
                {
                    id: {{ $gallery->id }},
                    url: "{{ Storage::url($gallery->photos) }}"
                },
                @endforeach
            ],
        },
        methods: {
            changeActive(id) {
                this.activePhoto = id;
            },
        }
    });
</script>
@endpush