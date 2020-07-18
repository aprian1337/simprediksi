<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BantuanController extends Controller
{
    public function index()
    {
        if(Auth()->user()->name=='Petugas Seksi Pemulihan'){
            return view('bantuan.search');
        }else{
            return redirect()->back()->with('failed', 'Anda tidak memiliki izin untuk masuk ke fitur tersebut');
        }
    }

    public function search(Request $request)
    {
        $search = \App\Bantuan::where('id_bantuan', $request->id_bantuan)
            ->first();
        if ($search == null) {
            return \redirect()->back()->with('failed', 'Data dengan ID yang anda masukkan tidak dapat ditemukan.');
        } else {
            return view('bantuan.result', compact('search'));
        }
    }

    public function delete($id)
    {
        \App\Bantuan::where('id_bantuan', $id)
            ->delete();
        return redirect()->intended('bantuan')->with('success', 'Berhasil menghapus data');
    }

    public function edit($id)
    {
        $edit = \App\Bantuan::where('id_bantuan', $id)
        ->first();
        $donatur = \App\Donatur::all();
        $checkbox = explode(",", $edit->jenis_bantuan);
        return view('bantuan.edit', compact('edit', 'donatur', 'checkbox'));
    }

    public function update(Request $request)
    {
        \App\Bantuan::where('id_bantuan', $request->id_bantuan)
        ->update([
            'id_donatur' => $request->id_donatur,
            'jenis_bantuan' => implode(",", $request->jenis_bantuans),
            'jumlah_bantuan' => $request->jumlah_bantuan,
            'satuan' => $request->satuan,
        ]);
        return redirect()->intended('bantuan')->with('success', 'Berhasil mengubah data');
    }

    public function create(){
        $donatur = \App\Donatur::all();
        return view('bantuan.create', compact('donatur'));
    }

    public function store(Request $request){

        \App\Bantuan::create($request->all()+[
            'jenis_bantuan' => implode(",",$request->jenis_bantuans)
        ]);
        return redirect()->intended('bantuan')->with('success', 'Berhasil menambah data baru');
    }
}
