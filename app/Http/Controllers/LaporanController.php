<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class LaporanController extends Controller
{
    public function index()
    {
        if(Auth()->user()->name=='Kepala BPBD Provinsi'){
            return view('laporan.index');
        }else{
            return redirect()->back()->with('failed', 'Anda tidak memiliki izin untuk masuk ke fitur tersebut');
        }
    }

    public function search(Request $request)
    {
        $pemulihan = \App\Pemulihan::where('id_pemulihan', $request->id_pemulihan)->first();
        $kebencanaan = \App\Kebencanaan::where('id_kebencanaan', $request->id_kebencanaan)->first();
        $pendistribusian = \App\Pendistribusian::where('id_distribusi', $request->id_distribusi)->first();
        if ($pemulihan && $kebencanaan && $pendistribusian) {

            return view('laporan.show', compact('pemulihan', 'kebencanaan', 'pendistribusian'));
        } else {
            return redirect()->back()->with('failed', 'Data yang anda masukkan tidak ditemukan');
        }
    }

    function print(Request $request) {
        $pemulihan = \App\Pemulihan::where('id_pemulihan', $request->id_pemulihan)->first();
        $kebencanaan = \App\Kebencanaan::where('id_kebencanaan', $request->id_kebencanaan)->first();
        $pendistribusian = \App\Pendistribusian::where('id_distribusi', $request->id_distribusi)->first();
        $pdf = PDF::loadView('laporan.print', compact('pemulihan', 'kebencanaan', 'pendistribusian'));
        return $pdf->stream();
    }
}
