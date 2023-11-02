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
        $itemInputs = $request->only([
            'item-1', 'item-2', 'item-3', 'item-4', 'item-5', 'item-6', 'item-7', 'item-8',
            'item-9', 'item-10', 'item-11', 'item-12', 'item-13', 'item-14', 'item-15', 'item-16',
            'item-17', 'item-18', 'item-19', 'item-20'
        ]);

        $hasilKonsultasi = array_sum($itemInputs);

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
