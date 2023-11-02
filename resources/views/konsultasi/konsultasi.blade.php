@extends('layouts.main')
@section('content')

<section class="hero-area">
    <div class="container card p-5 border-0 shadow-lg" id="card-container">
        <div class="card bg-primary text-white mb-3">
            <div class="card-body"><span class="text-danger">*</span>
                Silahkan Jawab Pertanyaan Berdasarkan Skala Yang Kamu
                Rasakan.
            </div>
        </div>
        <form action="{{ route('konsultasi.result') }}" method="POST">
            @csrf
            @php
            $i = 1;
            $id = 1;
            @endphp
            @foreach ($itemDiagnosa as $item)
            <div class="card mb-2 card-item" id="card-{{ $i }}">
                <div class="card-body shadow-sm">
                    <div class="div fw-bold">
                        <label for="item-{{ $id }}" class="text-dark d-flex align-items-center">
                            <span class="circle mb-1">{{ $i }}</span>
                            <span class="highlight-yellow ms-2">{{ $item->item_diagnosa }}</span>
                        </label>
                    </div>
                    <div class="mt-2">
                        <div class="inputGroup">
                            <input value="{{ $item->tidak }}" id="item-{{ $id }}" name="item-{{ $i }}" type="radio" />
                            <label for="item-{{ $id }}">Tidak Pernah</label>
                        </div>
                        @php
                        $id++;
                        @endphp
                        <div class="inputGroup">
                            <input value="{{ $item->jarang }}" id="item-{{ $id }}" name="item-{{ $i }}" type="radio" />
                            <label for="item-{{ $id }}">Jarang</label>
                        </div>
                        @php
                        $id++;
                        @endphp
                        <div class="inputGroup">
                            <input value="{{ $item->kadang }}" id="item-{{ $id }}" name="item-{{ $i }}" type="radio" />
                            <label for="item-{{ $id }}">Kadang-Kadang</label>
                        </div>
                        @php
                        $id++;
                        @endphp
                        <div class="inputGroup">
                            <input value="{{ $item->selalu }}" id="item-{{ $id }}" name="item-{{ $i }}" type="radio" />
                            <label for="item-{{ $id }}">Selalu</label>
                        </div>
                        @php
                        $id++;
                        @endphp
                    </div>
                </div>
            </div>
            @php
            $i++;
            @endphp
            @endforeach
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary py-3 mt-3" id="submit-button">Kirim Data
                    Konsultasi</button>
            </div>
        </form>
    </div>
</section>

@push('css')
<link rel="stylesheet" href="{{ asset('assets/css/selectbutton.css') }}">
@endpush

@push('js')
<script>
    // Mendapatkan semua elemen card-item
    const cardItems = document.querySelectorAll('.card-item');

    // Menambahkan event listener untuk setiap radio button
    cardItems.forEach((card, index) => {
        const radioButtons = card.querySelectorAll('input[type="radio"]');
        radioButtons.forEach(radio => {
            radio.addEventListener('change', () => {
                // Menampilkan kartu yang dipilih
                card.style.display = 'block';
                // Animasi scroll ke kartu yang dipilih
                card.scrollIntoView({ behavior: 'smooth' });
            });
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        const submitButton = document.getElementById("submit-button");
        submitButton.style.display = "none";

        const cardItems = document.querySelectorAll(".card-item");

        cardItems.forEach(card => {
            const radioButtons = card.querySelectorAll("input[type=radio]");
            radioButtons.forEach(radio => {
                radio.addEventListener("change", checkAllRadiosSelected);
            });
        });

        function checkAllRadiosSelected() {
            let allRadiosSelected = true;

            cardItems.forEach(card => {
                const radioButtons = card.querySelectorAll("input[type=radio]");
                const anyRadioSelected = [...radioButtons].some(radio => radio.checked);
                if (!anyRadioSelected) {
                    allRadiosSelected = false;
                }
            });

            const submitButton = document.getElementById("submit-button");

            if (allRadiosSelected) {
                submitButton.style.display = "block";
            } else {
                submitButton.style.display = "none";
            }
        }
    });
</script>


@endpush

@endsection