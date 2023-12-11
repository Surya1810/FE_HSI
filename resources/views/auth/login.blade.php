@extends('landing.layout')

@section('title')
    Login
@endsection

@push('css')
@endpush

@section('content')
    <!-- login -->
    <section>
        <div class="bg-main">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="d-none d-lg-block col-lg-7 text-center text-lg-start">
                        <p class="mb-4"><span class="badge badge-secondary">Login</span> Sekarang</p>
                        <h1 class="display-4 mb-4" style="font-weight: 900">Masuk Untuk<br>Berkembang<br>Bersama</h1>
                        <p>Jika kamu tidak memiliki akun cari PIN referal kamu kepada reseller HSI lainnya.</p>
                    </div>
                    <div class="col-md-8 mx-auto col-lg-5">
                        <form class="p-4 p-md-5 shadow border rounded-4 bg-white">
                            <div class="form-group mb-3">
                                <label for="username">ID Reseller</label>
                                <input type="text" class="form-control" id="username" aria-describedby="emailHelp"
                                    placeholder="Masukan OTP">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" aria-describedby="emailHelp"
                                    placeholder="Masukan Password">
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="remember-me"> Ingat Akun
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="float-end text-muted">Lupa Password</a>
                                </div>
                            </div>
                            {{-- <button class="w-100 btn btn-lg btn-hsi-secondary rounded-4" type="submit">Masuk</button> --}}
                            <a href="{{ route('user.dashboard') }}" class="w-100 btn btn-lg btn-hsi-secondary rounded-4"
                                type="submit">Masuk</a>
                            <hr class="my-4">
                            <small class="text-body-secondary">Masuk Menggunakan ID Lain</small>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
