<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KonsultasiController extends Controller
{
    public function index()
    {
        return view('konsultasi.index');
    }

    public function sesi_konsultasi()
    {
        $itemDiagnosa = DB::table('item_diagnosa')
            ->join('item_nilai', 'item_diagnosa.id_item_diagnosa', '=', 'item_nilai.id_diagnosa')
            ->get();

        $data = [
            'title' => 'Diagnosa',
            'itemDiagnosa' => $itemDiagnosa,
        ];

        return view('konsultasi.konsultasi', $data);
    }

    public function result(Request $request)
    {
        $hasilKonsultasi = $request->input('item-1') + $request->input('item-2') +
            $request->input('item-3') + $request->input('item-4') +
            $request->input('item-5') + $request->input('item-6') +
            $request->input('item-7') + $request->input('item-8') +
            $request->input('item-9') + $request->input('item-10') +
            $request->input('item-11') + $request->input('item-12') +
            $request->input('item-13') + $request->input('item-14') +
            $request->input('item-15') + $request->input('item-16') +
            $request->input('item-17') + $request->input('item-18') +
            $request->input('item-19') + $request->input('item-20');

        $hasilAkhir = DB::table('hasil_konsultasi')
            ->where('hasil_konsultasi.nilai_rentan_awal', '<=', $hasilKonsultasi)
            ->where('hasil_konsultasi.nilai_rentan_akhir', '>=', $hasilKonsultasi)
            ->first();

        $idHasil = $hasilAkhir->id_hasil;

        $rekomendasi = DB::table('rekomendasi')
            ->where('rekomendasi.id_hasil', '=', $idHasil)
            ->first();
        $data = [
            'title' => 'Hasil Diagnosa',
            'hasilAkhir' => $hasilAkhir,
            'rekomendasi' => $rekomendasi,
            'totalNilai' => $hasilKonsultasi,
        ];

        return view('konsultasi.hasil', $data);
    }
}
