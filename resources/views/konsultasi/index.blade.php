@extends('layouts.main')
@section('content')

<section id="home" class="hero-area style1">
    <div class="container" style="margin-bottom: -100px">
        <div class="text-center mx-auto"
            style="display: flex; justify-content: center; align-items: center; margin-top: -60px;">
            <dotlottie-player src="https://lottie.host/f1cfc3fb-9872-4ff0-a22c-edc8bce3ce8c/4c1v7HR6tb.json"
                background="transparent" speed="1" style="width: 600px; height: 300px;" loop autoplay>
            </dotlottie-player>
        </div>
        <div class="card border-0 rounded-4 shadow-sm my-5">
            <div class="card-body p-4">
                <h5 class="mb-3 fw-bold highlight-yellow">Tes Tingkat Rasa Kesepian: Loneliness Scale</h5>
                <p>
                    Rasa kesepian yang tinggi dikhawatirkan dapat memicu masalah terhadap kesehatan mental kamu. Cek
                    tingkat kesepianmu sebagai langkah awal dalam mengurangi risiko.
                </p>

                <div class="panduan mt-4">
                    <h5 class="mb-3 fw-bold highlight-yellow">Panduan Menjawab pada sesi konsultasi</h5>
                    <ul>
                        <li class="list-item mb-2">
                            <div class="circle">1</div> Tidak ada jawaban yang benar atau salah. Isilah dengan jujur
                            sesuai kepribadianmu.
                        </li>
                        <li class="list-item mb-2">
                            <div class="circle">2</div> Cari Tempat yang kondusif dan membuatmu nyaman dalam sesi
                            konsultasi.
                        </li>
                        <li class="list-item">
                            <div class="circle">3</div> Hasil akan kamu dapatkan setelah test berakhir dan jawaban kamu
                            terjamin kerahasiaannya, karena kami tidak akan menyimpan jawaban kamu.
                        </li>
                    </ul>

                </div>

                <a href="{{ route('konsultasi.sesi') }}" class="btn btn-primary mt-4">Mulai Konsultasi</a>
            </div>
        </div>
    </div>
</section>

@push('js')
<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module">
</script>
@endpush

@endsection