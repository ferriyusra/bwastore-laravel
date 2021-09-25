@extends('layouts.auth')

@section('content')
<!-- start section login -->
<div class="page-content page-auth" id="register">
    <div class="section-store-auth" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center row-login justify-content-center">
                <div class="col-lg-4">
                    <h2>
                        Memulai untuk jual beli
                        <br>
                        dengan cara terbaru
                    </h2>
                    <form method="POST" action="{{ route('register') }}" class="mt-3">
                        @csrf
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input id="name" 
                            type="text" 
                            class="form-control
                            @error('name') is-invalid @enderror" 
                            name="name"
                            value="{{ old('name') }}" 
                            v-model="name"
                            autocomplete="name"
                            autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Alamat Email</label>
                            <input
                            v-model="email"
                            id="email"
                            type="email"
                            class="form-control
                            @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}"
                            autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Kata Sandi</label>
                            <input
                            id="password" 
                            type="password"
                            class="form-control @error('password') is-invalid @enderror"
                            name="password"
                            autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        <div class="form-group">
                            <label>Konfirmasi Kata Sandi</label>
                            <input
                            id="password-confirm" 
                            type="password"
                            class="form-control @error('password_confirm') is-invalid @enderror"
                            name="password_confirm"
                            autocomplete="new-password">

                            @error('password_confirm')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Toko</label>
                            <p class="text-muted">
                                Apakah anda ingin membuka toko ?
                            </p>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="is_store_open"
                                    id="openStoreTrue" v-model="is_store_open" :value="true">
                                <label for="openStoreTrue" class="custom-control-label">
                                    Iya, Boleh
                                </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="is_store_open"
                                    id="openStoreFalse" v-model="is_store_open" :value="false">
                                <label for="openStoreFalse" class="custom-control-label">
                                    Enggak dulu
                                </label>
                            </div>
                        </div>
                        <div class="form-group" v-if="is_store_open">
                            <label>Nama Toko</label>
                            <input
                            id="store_name" 
                            type="text"
                            v-model="store_name"
                            class="form-control 
                            @error('password') is-invalid @enderror"
                            name="store_name"
                            autocomplete
                            autofocus>

                            @error('store_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group" v-if="is_store_open">
                            <label>Kategori</label>
                            <select name="category" class="form-control">
                                <option value="" disabled>Kategori Toko</option>
                                {{-- @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach --}}
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success btn-block mt-4">
                            Registrasi Sekarang
                        </button>
                        <a href="{{ route('login')}}" class="btn btn-signup btn-block mt-4">
                            Masuk Akun
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end section login -->
@endsection

@push('addon-script')
<script src="vendor/vue/vue.js"></script>
<script src="https:unpkg.com/vue-toasted"></script>
<script>
    Vue.use(Toasted);
    let register = new Vue({
        el: "#register",
        mounted() {
            AOS.init();
            // this.$toasted.error(
            //     "Maaf, email yang dimasukkan sudah terdaftar didalam sistem kami.", {
            //     position: "top-center",
            //     className: "rounded",
            //     duration: "1000"
            // }
            // );
        },
        data: {
            name: "ferri yusra aa",
            email: "feri@gmail.com",
            password: "",
            is_store_open: true,
            store_name: ""
        }
    });
</script>
@endpush