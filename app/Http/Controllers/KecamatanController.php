<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function index()
    {
        if(Auth()->user()->name=='admin'){
            return view('kecamatan.search');
        }else{
            return redirect()->back()->with('failed', 'Anda tidak memiliki izin untuk masuk ke fitur tersebut');
        }
    }

    public function search(Request $request)
    {
        $search = \App\Kecamatan::where('id_kecamatan', $request->id_kecamatan)
            ->first();
        if ($search == null) {
            return \redirect()->back()->with('failed', 'Data dengan ID yang anda masukkan tidak dapat ditemukan.');
        } else {
            return view('kecamatan.result', compact('search'));
        }
    }

    public function delete($id)
    {
        \App\Kecamatan::where('id_kecamatan', $id)
            ->delete();
        return redirect()->intended('kecamatan')->with('success', 'Berhasil menghapus data');
    }

    public function edit($id)
    {
        $data = \App\Kecamatan::where('id_kecamatan', $id)
        ->first();
        $kokab = \App\Kokab::all();
        return view('kecamatan.edit', compact('data', 'kokab'));
    }

    public function update(Request $request)
    {
        \App\Kecamatan::where('id_kecamatan', $request->id_kecamatan)
        ->update([
            'id_kokab' => $request->id_kokab,
            'nama_kecamatan' => $request->nama_kecamatan
        ]);
        return redirect()->intended('kecamatan')->with('success', 'Berhasil mengubah data');
    }

    public function create(){
        $kokab = \App\Kokab::all();
        return view('kecamatan.create', compact('kokab'));
    }

    public function store(Request $request){
        \App\Kecamatan::create($request->all());
        return redirect()->intended('kecamatan')->with('success', 'Berhasil menambah data baru');
    }
}
