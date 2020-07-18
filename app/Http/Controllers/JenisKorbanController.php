<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JenisKorbanController extends Controller
{
    public function index()
    {
        if(Auth()->user()->name=='TRC' || Auth()->user()->name=='Petugas Seksi Pemulihan'){
            return view('jenis-korban.search');
        }else{
            return redirect()->back()->with('failed', 'Anda tidak memiliki izin untuk masuk ke fitur tersebut');
        }

    }

    public function search(Request $request)
    {
        $search = \App\Jenis_Korban::where('id_jenis_korban', $request->id_jenis_korban)
            ->first();
        if ($search == null) {
            return \redirect()->back()->with('failed', 'Data dengan ID yang anda masukkan tidak dapat ditemukan.');
        } else {
            return view('jenis-korban.result', compact('search'));
        }
    }

    public function delete($id)
    {
        \App\Jenis_Korban::where('id_jenis_korban', $id)
            ->delete();
        return redirect()->intended('jenis-korban')->with('success', 'Berhasil menghapus data');
    }

    public function edit($id)
    {
        $edit = \App\Jenis_Korban::where('id_jenis_korban', $id)
        ->first();
        $kebencanaan = \App\Kebencanaan::all();
        return view('jenis-korban.edit', compact('edit', 'kebencanaan'));
    }

    public function update(Request $request)
    {
        \App\Jenis_Korban::where('id_jenis_korban', $request->id_jenis_korban)
        ->update([
            'jenis_korban' => $request->jenis_korban,
            'keterangan' => $request->keterangan,
        ]);
        return redirect()->intended('jenis-korban')->with('success', 'Berhasil mengubah data');
    }

    public function create(){
        $kebencanaan = DB::table('kebencanaan')
        ->join('kecamatan', 'kebencanaan.id_kecamatan', '=', 'kecamatan.id_kecamatan')
        ->get();
        return view('jenis-korban.create', compact('kebencanaan'));
    }

    public function store(Request $request){
        \App\Jenis_Korban::create($request->all());
        return redirect()->intended('jenis-korban')->with('success', 'Berhasil menambah data baru');
    }
}
