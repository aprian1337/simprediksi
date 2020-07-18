<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KebencanaanController extends Controller
{
    public function index()
    {
        if(Auth()->user()->name=='TRC' || Auth()->user()->name=='Petugas Seksi Pemulihan'){
            return view('kebencanaan.search');
        }else{
            return redirect()->back()->with('failed', 'Anda tidak memiliki izin untuk masuk ke fitur tersebut');
        }
    }

    public function search(Request $request)
    {
        $search = \App\Kebencanaan::where('id_kebencanaan', $request->id_kebencanaan)
            ->first();
        if ($search == null) {
            return \redirect()->back()->with('failed', 'Data dengan ID yang anda masukkan tidak dapat ditemukan.');
        } else {
            return view('kebencanaan.result', compact('search'));
        }
    }

    public function delete($id)
    {
        \App\Kebencanaan::where('id_kebencanaan', $id)
            ->delete();
        return redirect()->intended('kebencanaan')->with('success', 'Berhasil menghapus data');
    }

    public function edit($id)
    {
        $edit = \App\Kebencanaan::where('id_kebencanaan', $id)
        ->first();
        $kokab = \App\Kokab::all();
        $kecamatan = \App\Kecamatan::all();
        return view('kebencanaan.edit', compact('edit', 'kokab', 'kecamatan'));
    }

    public function update(Request $request, $id)
    {
        \App\Kebencanaan::where('id_kebencanaan', $id)
        ->update([
            'id_kokab' => $request->id_kokab,
            'id_kecamatan' => $request->id_kecamatan,
            'tanggal_kejadian' => $request->tanggal_kejadian,
            'kekuatan_gempa' => $request->kekuatan_gempa,
            'jenis_kerusakan' => $request->jenis_kerusakan,
            'jumlah_kerusakan' => $request->jumlah_kerusakan,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->intended('kebencanaan')->with('success', 'Berhasil mengubah data');
    }

    public function create(){
        $kokab = \App\Kokab::all();
        $kecamatan = \App\Kecamatan::all();
        return view('kebencanaan.create', compact('kokab', 'kecamatan'));
    }

    public function store(Request $request){
        \App\Kebencanaan::create($request->all());
        return redirect()->intended('kebencanaan')->with('success', 'Berhasil menambah data baru');
    }
}
