@extends('layouts.main')
@section('content')

<section id="home" class="hero-area style1">
    <div class="container">

        <div class="text-center mx-auto"
            style="display: flex; justify-content: center; align-items: center; margin-top: -60px;">
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module">
            </script>

            <dotlottie-player src="https://lottie.host/72e02c18-263d-472a-a646-e89097d61d75/Y7fLRfWUhM.json"
                background="transparent" speed="1" style="width: 600px; height: 400px;" loop autoplay>
            </dotlottie-player>
        </div>

        <div class="card p-sm-0 p-md-3 p-lg-3 shadow-lg border-0 mx-md-3 mx-lg-5">
            <div class="card-body">
                <h5 class="card-title highlight-yellow">Hai, Dari hasil analisa kamu saat ini mengalami <b>{{
                        $hasilAkhir->deskripsi_hasil
                        }}</b></h5>
                <h6 class="mb-3">Dengan nilai sebesar <span class="text-primary fw-bold fs-5">{{
                        $totalNilai }}</span>
                    dari hasil
                    perhitungan UCLA loneliness scale
                    version
                    3</h6>
                {!! $rekomendasi->deskripsi_rekomendasi !!}
            </div>
        </div>
    </div>
</section>

@push('css')
<link rel="stylesheet" href="{{ asset('assets/css/selectbutton.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endpush

@endsection