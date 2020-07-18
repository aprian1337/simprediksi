<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KokabController extends Controller
{
    public function index()
    {
        if(Auth()->user()->name=='admin'){
            return view('kokab.search');
        }else{
            return redirect()->back()->with('failed', 'Anda tidak memiliki izin untuk masuk ke fitur tersebut');
        }
    }

    public function search(Request $request)
    {
        $search = \App\Kokab::where('id_kokab', $request->id_kokab)
            ->first();
        if ($search == null) {
            return \redirect()->back()->with('failed', 'Data dengan ID yang anda masukkan tidak dapat ditemukan.');
        } else {
            return view('kokab.result', compact('search'));
        }
    }

    public function delete($id)
    {
        \App\Kokab::where('id_kokab', $id)
            ->delete();
        return redirect()->intended('kokab')->with('success', 'Berhasil menghapus data');
    }

    public function edit($id)
    {
        $data = \App\Kokab::where('id_kokab', $id)
        ->first();
        return view('kokab.edit', compact('data'));
    }

    public function update(Request $request)
    {
        \App\Kokab::where('id_kokab', $request->id_kokab)
        ->update([
            'nama_kokab' => $request->nama_kokab
        ]);
        return redirect()->intended('kokab')->with('success', 'Berhasil mengubah data');
    }

    public function create(){
        return view('kokab.create');
    }

    public function store(Request $request){
        \App\Kokab::create($request->all());
        return redirect()->intended('kokab')->with('success', 'Berhasil menambah data baru');
    }
}
