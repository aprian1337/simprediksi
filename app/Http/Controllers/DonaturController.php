<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonaturController extends Controller
{
    public function index()
    {
        if(Auth()->user()->name=='Petugas Seksi Pemulihan'){
            return view('donatur.search');
        }else{
            return redirect()->back()->with('failed', 'Anda tidak memiliki izin untuk masuk ke fitur tersebut');
        }
    }

    public function search(Request $request)
    {
        $search = \App\Donatur::where('id_donatur', $request->id_donatur)
            ->first();
        if ($search == null) {
            return \redirect()->back()->with('failed', 'Data dengan ID yang anda masukkan tidak dapat ditemukan.');
        } else {
            return view('donatur.result', compact('search'));
        }
    }

    public function delete($id)
    {
        \App\Donatur::where('id_donatur', $id)
            ->delete();
        return redirect()->intended('donatur')->with('success', 'Berhasil menghapus data');
    }

    public function edit($id)
    {
        $edit = \App\Donatur::where('id_donatur', $id)
        ->first();
        return view('donatur.edit', compact('edit'));
    }

    public function update(Request $request)
    {
        \App\Donatur::where('id_donatur', $request->id_donatur)
        ->update([
            'nama_donatur' => $request->nama_donatur,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'notelpon' => $request->notelpon,
            'nama_kontak' => $request->nama_kontak
        ]);
        return redirect()->intended('donatur')->with('success', 'Berhasil mengubah data');
    }

    public function create(){
        return view('donatur.create');
    }

    public function store(Request $request){
        \App\Donatur::create($request->all());
        return redirect()->intended('donatur')->with('success', 'Berhasil menambah data baru');
    }
}
