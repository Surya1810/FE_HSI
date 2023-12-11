@extends('landing.layout')

@section('title')
    Home
@endsection

@push('css')
@endpush

@section('content')
    <section>
        <!-- heroes -->
        <div class="bg-main">
            <div class="container h-100">
                <div class="row align-items-center h-75">
                    <div class="col-12 col-md-8">
                        <p class="mb-4"><span class="badge badge-secondary">Baru</span> Promo bergabung HSI</p>
                        <h1 class="d-none d-md-block display-3 mb-4" style="font-weight: 900">Ciptakan <span
                                style="color: #0195a5">10
                                Juta</span> <br> Agen
                            Pemasar</h1>

                        <h1 class="d-md-none display-1 mb-4" style="font-weight: 700">Ciptakan<br><span
                                style="color: #0195a5">10
                                Juta</span><br>Agen <br>
                            Pemasar</h1>
                        <p>Menciptakan 10 Juta Agen pemasar dibidang Ekonomi Kreatif (EKRAF) sebagai masa depan
                            bangsa.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pelajari HSI -->
        <div style="width: 100swh;height: 100svh">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="row d-flex justify-content-center gy-3">
                        <div class="col-lg-12 text-center px-5 mb-3">
                            <h1 class="display-3" style="font-weight: 700">Pelajari HSI</h1>
                            <p style="color: #0195a5">Anda dapat mempelajari apa itu HSI dimulai dari mengetahui VIsi
                                dan
                                Misi Perusahaan</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 text-center">
                            <p><b>Visi</b></p>
                            <div class="card border-0 shadow-lg bg-hsi-secondary h-100">
                                <div class="card-body">
                                    <ul class="text-start fw-bold text-white">
                                        <li>Menghidupkan Kembali Ekonomi Kreatif.</li>
                                        <li>Ketahanan Pangan.</li>
                                        <li>Pemerataan ekonomi bagi seluruh mitra HSI.</li>
                                        <li>Proteksi GRATIS diata 20 s/d 400 juta dengan produk Syariah</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 text-center">
                            <p><b>Misi</b></p>
                            <div class="card border-0 shadow-lg h-100">
                                <div class="card-body fw-bold">
                                    <p class="text-start">Menciptakan 10 Juta Agen pemasar dibidang Ekonomi Kreatif
                                        (EKRAF)
                                        sebagai masa depan
                                        bangsa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pelajari HSI -->
        <div style="width: 100swh;height: 100svh;background-color: #DCDFFF">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <h1>Frequently asked questions</h1>
                    {{-- <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne">
                                    01. Bagaimana Cara Bergabung?
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <p>Anda dapat bergabung menjadi reseller kami, dengan cara membeli PAKET RESELLER
                                        senilai: <b>Rp550.000,-</b></p><br>
                                    <p>Anda akan mendapatkan:</p><br>
                                    <ul>
                                        <li>Satu paket produk parfum ekslusif (5 pcs)</li>
                                        <li>Satu paket skincare</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    02. Apa Yang Anda Dapatkan?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Setelah Anda melakukan pembelian Paket Reseller maka anda berhak mendapatkan komisi
                                        dari setiap penjualan yang anda lakukan.</p><br>
                                    <p>Dengan Komisi Paket Reseller Rp50.000-</p><br>
                                    <p>Semakin banyak Anda menjual Paket Reseller maka peluang penghasilan Anda akan
                                        semakin besar, dan Anda akan mendapatkan jenjang karier beserta keuntung</p><br>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    03. Keuntungan Menjadi Agen?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Semakin banyak Anda menjual paket reseller maka semakin banyak Anda mendapatkan
                                        sharing profit harian</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    04. Keuntungan Menjadi Distributor?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>Jika Anda telah memiliki Agen di grup Anda maka Anda bisa melakukan pengembangan
                                        untuk lanjut ke jenjang DISTRIBUTOR dengan tambahan penghasilan setiap bulannya
                                        sesuai akumulasi penjualan poin Anda</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>

    </section>
@endsection

@push('scripts')
@endpush
