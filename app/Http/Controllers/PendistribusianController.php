<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PendistribusianController extends Controller
{
    public function index()
    {
        if(Auth()->user()->name=='Petugas Seksi Pemulihan' || Auth()->user()->name=='Kepala Seksi Pemulihan'){
            return view('pendistribusian.search');
        }else{
            return redirect()->back()->with('failed', 'Anda tidak memiliki izin untuk masuk ke fitur tersebut');
        }
    }

    public function search(Request $request)
    {
        $search = \App\Pendistribusian::where('id_distribusi', $request->id_distribusi)
            ->first();
        if ($search == null) {
            return \redirect()->back()->with('failed', 'Data dengan ID yang anda masukkan tidak dapat ditemukan.');
        } else {
            return view('pendistribusian.result', compact('search'));
        }
    }

    public function delete($id)
    {
        \App\Pendistribusian::where('id_distribusi', $id)
            ->delete();
        return redirect()->intended('pendistribusian')->with('success', 'Berhasil menghapus data');
    }

    public function edit($id)
    {
        $edit = \App\Pendistribusian::where('id_distribusi', $id)
        ->first();
        $kebencanaan = DB::table('kebencanaan')
        ->join('kecamatan', 'kebencanaan.id_kecamatan', '=', 'kecamatan.id_kecamatan')
        ->get();
        $bantuan = \App\Bantuan::all();
        return view('pendistribusian.edit', compact('edit', 'kebencanaan', 'bantuan'));
    }

    public function update(Request $request)
    {
        \App\Pendistribusian::where('id_distribusi', $request->id_distribusi)
        ->update([
            'id_bantuan' => $request->id_bantuan,
            'id_kebencanaan' => $request->id_kebencanaan,
            'tanggal' => $request->tanggal,
            'nama_distributor' => $request->nama_distributor,
            'tujuan_lokasi' => $request->tujuan_lokasi
        ]);
        return redirect()->intended('pendistribusian')->with('success', 'Berhasil mengubah data');
    }

    public function create(){
        $kebencanaan = DB::table('kebencanaan')
        ->join('kecamatan', 'kebencanaan.id_kecamatan', '=', 'kecamatan.id_kecamatan')
        ->get();
        $bantuan = \App\Bantuan::all();
        return view('pendistribusian.create', compact('kebencanaan', 'bantuan'));
    }

    public function store(Request $request){
        \App\Pendistribusian::create($request->all());
        return redirect()->intended('pendistribusian')->with('success', 'Berhasil menambah data baru');
    }
}
