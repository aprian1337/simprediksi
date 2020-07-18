<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class KorbanController extends Controller
{
    public function index()
    {
        if(Auth()->user()->name=='TRC' || Auth()->user()->name=='Petugas Seksi Pemulihan'){
            return view('korban.search');
        }else{
            return redirect()->back()->with('failed', 'Anda tidak memiliki izin untuk masuk ke fitur tersebut');
        }
    }

    public function search(Request $request)
    {
        $search = \App\Korban::where('id_korban', $request->id_korban)
            ->first();
        if ($search == null) {
            return \redirect()->back()->with('failed', 'Data dengan ID yang anda masukkan tidak dapat ditemukan.');
        } else {
            return view('korban.result', compact('search'));
        }
    }

    public function delete($id)
    {
        \App\Korban::where('id_korban', $id)
            ->delete();
        return redirect()->intended('korban')->with('success', 'Berhasil menghapus data');
    }

    public function edit($id)
    {
        $edit = \App\Korban::where('id_korban', $id)
        ->first();
        $kebencanaan = \App\Kebencanaan::all();
        return view('korban.edit', compact('edit', 'kebencanaan'));
    }

    public function update(Request $request)
    {
        \App\Korban::where('id_korban', $request->id_korban)
        ->update([
            'id_kebencanaan' => $request->id_kebencanaan,
            'nama' => $request->nama,
            'jenis_korban' => $request->jenis_korban
        ]);
        return redirect()->intended('korban')->with('success', 'Berhasil mengubah data');
    }

    public function create(){
        $kebencanaan = DB::table('kebencanaan')
        ->join('kecamatan', 'kebencanaan.id_kecamatan', '=', 'kecamatan.id_kecamatan')
        ->get();
        return view('korban.create', compact('kebencanaan'));
    }

    public function store(Request $request){
        \App\Korban::create($request->all());
        return redirect()->intended('korban')->with('success', 'Berhasil menambah data baru');
    }
}
