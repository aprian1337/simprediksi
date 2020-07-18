<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PemulihanController extends Controller
{
    public function index()
    {
        if(Auth()->user()->name=='Kepala Seksi Pemulihan'){
            return view('pemulihan.search');
        }else{
            return redirect()->back()->with('failed', 'Anda tidak memiliki izin untuk masuk ke fitur tersebut');
        }
    }

    public function search(Request $request)
    {
        $search = \App\Pemulihan::where('id_pemulihan', $request->id_pemulihan)
            ->first();
        if ($search == null) {
            return \redirect()->back()->with('failed', 'Data dengan ID yang anda masukkan tidak dapat ditemukan.');
        } else {
            return view('pemulihan.result', compact('search'));
        }
    }

    public function delete($id)
    {
        \App\Pemulihan::where('id_pemulihan', $id)
            ->delete();
        return redirect()->intended('pemulihan')->with('success', 'Berhasil menghapus data');
    }

    public function edit($id)
    {
        $edit = \App\Pemulihan::where('id_pemulihan', $id)
        ->first();
        $kebencanaan = \App\Kebencanaan::all();
        return view('pemulihan.edit', compact('edit', 'kebencanaan'));
    }

    public function update(Request $request)
    {
        \App\Pemulihan::where('id_pemulihan', $request->id_pemulihan)
        ->update([
            'id_kebencanaan' => $request->id_kebencanaan,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'tindak_lanjut' => $request->tindak_lanjut,
            'keterangan' => $request->keterangan,
        ]);
        return redirect()->intended('pemulihan')->with('success', 'Berhasil mengubah data');
    }

    public function create(){
        $kebencanaan = DB::table('kebencanaan')
        ->join('kecamatan', 'kebencanaan.id_kecamatan', '=', 'kecamatan.id_kecamatan')
        ->get();
        return view('pemulihan.create', compact('kebencanaan'));
    }

    public function store(Request $request){
        \App\Pemulihan::create($request->all());
        return redirect()->intended('pemulihan')->with('success', 'Berhasil menambah data baru');
    }
}
