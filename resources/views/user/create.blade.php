@extends('layout.layouts')
@section('title')
User
@endsection
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h4>Tambah Data User</h4>
            <hr>
            <form action="{{route('user-store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Role</label>
                    <select class="form-control" name="name" id="">
                        <option value="">Pilih</option>
                        <option value="admin">Admin</option>
                        <option value="TRC">TRC</option>
                        <option value="Petugas Seksi Pemulihan">Petugas Seksi Pemulihan</option>
                        <option value="Kepala Seksi Pemulihan">Kepala Seksi Pemulihan</option>
                        <option value="Kepala BPBD Provinsi">Kepala BPBD Provinsi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" placeholder="Masukkan username" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="Masukkan email" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="Masukkan password" class="form-control" id="">
                </div>

                <hr>
                <div class="row">
                    <div class="col-6">
                        <a href="{{route('user')}}" class="btn btn-outline-dark btn-block">Back</a>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
