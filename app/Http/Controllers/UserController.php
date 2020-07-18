<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if(Auth()->user()->name=='admin'){
            return view('user.search');
        }else{
            return redirect()->back()->with('failed', 'Anda tidak memiliki izin untuk masuk ke fitur tersebut');
        }
    }

    public function search(Request $request)
    {
        $search = \App\User::where('id', $request->id)
            ->first();
        if ($search == null) {
            return \redirect()->back()->with('failed', 'Data dengan ID yang anda masukkan tidak dapat ditemukan.');
        } else {
            return view('user.result', compact('search'));
        }
    }

    public function delete($id)
    {
        \App\User::where('id', $id)
            ->delete();
        return redirect()->intended('user')->with('success', 'Berhasil menghapus data');
    }

    public function edit($id)
    {
        $edit = \App\User::where('id', $id)
        ->first();
        return view('user.edit', compact('edit'));
    }

    public function update(Request $request)
    {
        \App\User::where('id', $request->id)
        ->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return redirect()->intended('user')->with('success', 'Berhasil mengubah data');
    }

    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        \App\User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
        return redirect()->intended('user')->with('success', 'Berhasil menambah data baru');
    }
}
