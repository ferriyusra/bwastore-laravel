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
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                Product Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- end breadcrumb -->
    <!-- start gallery -->
    <section class="store-gallery" id="gallery">
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
                        <h1>Sofa Ikea</h1>
                        <div class="owner">Penjual Ferri</div>
                        <div class="price">Rp 10.000.000</div>
                    </div>
                    <div class="col-lg-2 mr-0" data-aos="zoom-in">
                        <a href="cart.html" class="btn btn-success px-4 text-white btn-block mb-3">
                            Keranjang
                        </a>
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
                            The Nike Air Max 720 SE goes bigger than ever before with Nike's tallest Air unit yet
                            for
                            unimaginable, all-day comfort. There's super breathable fabrics on the upper, while
                            colours
                            add a modern edge.
                        </p>
                        <p>
                            Bring the past into the future with the Nike's Air Max 2090, a bold look inspired by the
                            DNA of the iconic Air Max 90. Brand-new Nike Air cushioning underfoot adds unparalleled
                            comfort while transparent mesh and vibrantly coloured details on the upper are blended
                            with timeless OG features for an edgy modernised look.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section description -->
        <!-- start section customer review -->
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
        <!-- end section customer review -->
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
                {
                    id: 1,
                    url: "/images/product-details-1.jpg"
                },
                {
                    id: 2,
                    url: "/images/product-details-2.jpg"
                },
                {
                    id: 3,
                    url: "/images/product-details-3.jpg"
                },
                {
                    id: 4,
                    url: "/images/product-details-4.jpg"
                },
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