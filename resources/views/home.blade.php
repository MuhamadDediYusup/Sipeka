@extends('layouts.main')

@section('content')
<!-- Start Hero Area -->
<section id="home" class="hero-area style1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="hero-content wow fadeInLeft" data-wow-delay=".3s">
                    <h1>
                        <b class="text-primary">Si</b>stem
                        <b class="text-primary">Pe</b>ndeteksi
                        <b class="text-primary">K</b>esepi<b class="text-primary">a</b>n
                    </h1>
                    <p>
                        Kesepian tidak ditentukan dari jumlah hubungan, namun seberapa
                        berkualitas hubungan kita dengan orang lain secara emosional.
                    </p>

                    <a href="http://pengenjadi.ninja/ftp/sipeka.apk" class="btn btn-dark rounded-3 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                            viewBox="0 0 48 48">
                            <path fill="#4db6ac"
                                d="M7.705,4.043C7.292,4.15,7,4.507,7,5.121c0,1.802,0,18.795,0,18.795S7,42.28,7,43.091c0,0.446,0.197,0.745,0.5,0.856l20.181-20.064L7.705,4.043z">
                            </path>
                            <path fill="#dce775"
                                d="M33.237,18.36l-8.307-4.796c0,0-15.245-8.803-16.141-9.32C8.401,4.02,8.019,3.961,7.705,4.043l19.977,19.84L33.237,18.36z">
                            </path>
                            <path fill="#d32f2f"
                                d="M8.417,43.802c0.532-0.308,15.284-8.825,24.865-14.357l-5.601-5.562L7.5,43.947C7.748,44.038,8.066,44.004,8.417,43.802z">
                            </path>
                            <path fill="#fbc02d"
                                d="M41.398,23.071c-0.796-0.429-8.1-4.676-8.1-4.676l-0.061-0.035l-5.556,5.523l5.601,5.562c4.432-2.559,7.761-4.48,8.059-4.653C42.285,24.248,42.194,23.5,41.398,23.071z">
                            </path>
                        </svg>
                        Dapatkan Versi Mobile

                    </a>
                    <a href="{{ route('konsultasi.index') }}"
                        class="btn btn-primary rounded-3 mt-2 px-md-3 px-lg-3 px-sm-0">
                        <i style="font-size:24px" class="px-2 fa">&#xf0f0;</i> Mulai
                        Diagnosa</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
                    <img src="{{ asset('') }}/assets/images/loneliness.webp" alt="#" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->

<!-- Start About Us Area -->
<section id="tentang-kami" class="about section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="image wow fadeInLeft" data-wow-delay=".3s">
                    <img class="rounded-3 h-25" src="{{ asset('') }}/assets/images/about.jpg" alt="#" />
                    <!-- <div class="img2"></div> -->
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="content wow fadeInRight" data-wow-delay=".5s">
                    <div class="heading">
                        <h2>Tentang Sistem Pendeteksi Kesepian</h2>
                        <h5 class="text-black-50">
                            Apakah kamu pernah merasakan kesepian?
                        </h5>
                        <br />
                        <p>
                            Kesepian adalah suatu permasalahan yang dialami oleh individu
                            diakibatkan oleh hubungan interpersonal yang dialaminya saat
                            ini tidak sesuai dengan harapan, tidak menyenangkan, dan
                            terasa menyedihkan. Permasalahan ini dapat berupa perasaan
                            sedih, tidak berdaya, putus asa, dan hampa. Kesepian merupakan
                            perasaan subjektif individu karena tidak adanya hubungan yang
                            erat dengan orang lain (Russel, Peplau, & Cutrona, 1980). <br> <br>
                            Kamu Penasaran dengan tingkat kesepianmu? Yuk cek sekarang juga!
                        </p>
                        <div class="button mt-4 text-sm-center text-lg-left text-md-left">
                            <a href="{{ route('konsultasi.index') }}" class="btn">Diagnosa Tingkat Kesepian</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- End About Area -->

<!-- Start Services Area -->
<section class="services style3 section" id="petunjuk">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Penggunaan</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Petunjuk Penggunaan Sistem</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">
                        Untuk mengidentifikasi ganguan mentalmu terkait kesepian kamu, kamu hanya perlu mengisi beberapa
                        pertanyaan yang ada pada sistem ini. <br>
                        Setelah itu, sistem akan memberikan hasil identifikasi tingkat kesepianmu.
                    </p>
                </div>
            </div>
        </div>
        <div class="single-head">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service wow fadeInUp" data-wow-delay=".2s">
                        <span class="serial">01</span>
                        <h3>
                            <a href="service-details.html">Mulai Diagnosa dan Konsultasi</a>
                        </h3>
                        <p>
                            Pada Menu Navbar di atas terdapat menu <a href="#">"Diagnosa Kesepian"</a>. Klik menu
                            tersebut untuk mengakses halaman diagnosa.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service wow fadeInUp" data-wow-delay=".4s">
                        <span class="serial">02</span>
                        <h3>
                            <a href="service-details.html">Konsultasikan Masalahmu</a>
                        </h3>
                        <p>
                            Setelah kamu mengakses halaman diagnosa, kamu akan diarahkan ke halaman konsultasi. Isi
                            konsultasi dengan sejujur-jujurnya.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-service wow fadeInUp" data-wow-delay=".6s">
                        <span class="serial">03</span>
                        <h3>
                            <a href="service-details.html">Dapatkan Hasil Konsultasi</a>
                        </h3>
                        <p>
                            Setelah kamu mengisi konsultasi, kamu diarahkan ke halaman hasil konsultasi. Hasil
                            konsultasi akan menampilkan tingkat kesepianmu.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Area -->

<!-- Start Pricing Table Area -->
<section id="profile" class="pricing-table section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Tim</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Profile Pengembang</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">
                        Sistem Pendeteksi Kesepian ini dibuat oleh tim pengembang yang terdiri dari 1 Mahasiswa dan 1
                        Dosen Universitas Janabadra Yogyakarta.
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 col-12">
                <div class="card mb-3 border-0 rounded-3 shadow-lg" style="max-width: 540px;">
                    <div class="row g-0 p-3">
                        <div class="col-md-4">
                            <img src="{{ asset('') }}/assets/images/muhamaddy.jpg" class="img-fluid rounded-3"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Muhamad Dedi Yusup</h5>
                                <p class="card-text">Mahasiswa Informatika</p>
                                <p class="card-text"><small class="text-muted">19330015</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-6 col-12">
                <div class="card mb-3 border-0 rounded-3 shadow-lg" style="max-width: 540px;">
                    <div class="row g-0 p-3">
                        <div class="col-md-4">
                            <img src="{{ asset('') }}/assets/images/bu_yumarlin.jpeg" class="img-fluid rounded-3 w-100"
                                alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Yumarlin MZ, S.Kom., M.Pd., M.Kom.</h5>
                                <p class="card-text">Dosen - Sistem Pakar</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('js')
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
@endpush