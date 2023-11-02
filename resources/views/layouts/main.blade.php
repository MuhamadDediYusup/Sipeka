<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>SiPeka - Sistem Pendeteksi Kesepian</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />
    <!-- Place favicon.ico in the root directory -->

    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/tiny-slider.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/glightbox.min.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @stack('css')
</head>

<body>

    <!-- Start Header Area -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand style3" href="{{ route('index') }}">
                                <img src="{{ asset('') }}/assets/images/logo/logo.svg" alt="Logo"
                                    style="width: 100px" />
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="{{ route('index') }}" class="active"
                                            aria-label="Toggle navigation">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ Request::is('index') ? route('index') : '' }}#tentang-kami" class=""
                                            aria-label="Toggle navigation">Tentang Kami</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ Request::is('index') ? route('index') : '' }}#petunjuk" class=""
                                            aria-label="Toggle navigation">Petunjuk
                                            Penggunaan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ Request::is('index') ? route('index') : '' }}#profile" class=""
                                            aria-label="Toggle navigation">Profile
                                            Pengembang</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- navbar collapse -->
                            @if (Auth::check())
                            <div class="dropdown">
                                <a class="btn btn-outline-primary dropdown-toggle" href="#" role="button"
                                    id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('assets/images/images.png') }}" width="24px"
                                        class="rounded-circle border border-1" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false" alt="">
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><button class="dropdown-item" href="{{ route('logout') }}" disabled>Hai, {{
                                            Auth::user()->name }}</button></li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <li><button type="submit" class="dropdown-item"
                                                href="{{ route('logout') }}">Logout</button>
                                        </li>
                                    </form>
                                </ul>
                            </div>
                            @endif
                            <div class="button add-list-button">
                                <a href="{{ route('konsultasi.index') }}" class="btn btn-primary py-2 px-3"><i
                                        style="font-size:24px" class="px-2 fa">&#xf0f0;</i>
                                    Diagnosa
                                    Kesepian</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </header>
    <!-- End Header Area -->

    <!-- Preloader-->
    <div id="preloader">
        <div class="appmeet-load"></div>
    </div>

    @yield('content')

    <section id="help" class=" py-lg-5 bg-danger">
        <div class="container p-5 p-lg-0 p-md-0">
            <h5 class="text-white">Disclaimer</h5>
            <hr class="text-white">
            <p class="text-white">Jika Anda sedang mengalami krisis psikologis yang mengancam hidup Anda, layanan ini
                tidak direkomendasikan.</p>
            <p class="text-white">Berkonsultasilah secara langsung pada pakar/psikolog</p>
        </div>
    </section>
    <!-- End Call Action Area -->

    <!-- Start Footer Area -->
    <footer class="footer">
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="copyright-text">
                            Sistem Pendeteksi Kesepian / Sistem Identifikasi Kesepian - Muhamad Dedi Yusup | 19330015
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ End Footer Area -->

    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/wow.min.js"></script>
    <script src="{{ asset('assets') }}/js/tiny-slider.js"></script>
    <script src="{{ asset('assets') }}/js/glightbox.min.js"></script>
    <script src="{{ asset('assets') }}/js/count-up.min.js"></script>
    <script src="{{ asset('assets') }}/js/imagesloaded.min.js"></script>
    <script src="{{ asset('assets') }}/js/isotope.min.js"></script>
    <script src="{{ asset('assets') }}/js/main.js"></script>
    @stack('js')
</body>

</html>