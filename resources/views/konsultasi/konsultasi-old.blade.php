@extends('layouts.main')
@section('content')

<section id="home" class="hero-area style1">
    <div class="container">
        <div class="card bg-primary text-white mb-3">
            <div class="card-body"><span class="text-danger">*</span>
                Silahkan Isi Pertanyaan Berdasarkan Skala Yang Kamu
                Rasakan.
            </div>
        </div>
        <section id="home">
            <div class="container">
                <form action="{{ route('konsultasi.result') }}" method="POST">

                    @csrf
                    @php
                    $i = 1;
                    $id = 1;
                    @endphp
                    @foreach ($itemDiagnosa as $item)
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="div">
                                {{ $item->item_diagnosa }}
                            </div>
                            <div class="mt-2">

                                <div class="inputGroup">
                                    <input value="{{ $item->tidak }}" id="item-{{ $id }}" name="item-{{ $i }}"
                                        type="radio" />
                                    <label for="item-{{ $id }}">Tidak Pernah</label>
                                </div>
                                @php
                                $id++;
                                @endphp
                                <div class="inputGroup">
                                    <input value="{{ $item->jarang }}" id="item-{{ $id }}" name="item-{{ $i }}"
                                        type="radio" />
                                    <label for="item-{{ $id }}">Jarang</label>
                                </div>
                                @php
                                $id++;
                                @endphp
                                <div class="inputGroup">
                                    <input value="{{ $item->kadang }}" id="item-{{ $id }}" name="item-{{ $i }}"
                                        type="radio" />
                                    <label for="item-{{ $id }}">Kadang-Kadang</label>
                                </div>
                                @php
                                $id++;
                                @endphp
                                <div class="inputGroup">
                                    <input value="{{ $item->selalu }}" id="item-{{ $id }}" name="item-{{ $i }}"
                                        type="radio" />
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
                        <button type="submit" class="btn btn-secondary">Kirim Data Konsultasi</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</section>

@push('css')
<link rel="stylesheet" href="{{ asset('assets/css/selectbutton.css') }}">
@endpush

@endsection
