@extends('layout.layouts')
@section('title')
User
@endsection
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h4>Edit Data User</h4>
            <hr>
            <form action="{{route('user-update', $edit->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Role</label>
                    <select class="form-control" name="name" id="">
                        <option value="">Pilih</option>
                        <option value="admin" {{$edit->name == 'admin' ? 'selected' : ''}}>Admin</option>
                        <option value="TRC" {{$edit->name == 'TRC' ? 'selected' : ''}}>TRC</option>
                        <option value="Petugas Seksi Pemulihan" {{$edit->name == 'Petugas Seksi Pemulihan' ? 'selected' : ''}}>Petugas Seksi Pemulihan</option>
                        <option value="Kepala Seksi Pemulihan" {{$edit->name == 'Kepala Seksi Pemulihan' ? 'selected' : ''}}>Kepala Seksi Pemulihan</option>
                        <option value="Kepala BPBD Provinsi" {{$edit->name == 'Kepala BPBD Provinsi' ? 'selected' : ''}}>Kepala BPBD Provinsi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" value="{{$edit->username}}" name="username" placeholder="Masukkan username" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" value="{{$edit->email}}" name="email" placeholder="Masukkan email" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" value="{{$edit->password}}" name="password" placeholder="Masukkan password" class="form-control" id="">
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-warning btn-block">Save</button>
                    </div>
                </div>
            </form>

            <form action="{{route('user-search')}}" method="POST">
                @csrf
                <input type="hidden" value="{{$edit->id}}" name="id" class="form-control">
                <button type="submit" class="btn btn-outline-dark btn-block mt-2">Back</button>
            </form>




        </div>
    </div>
</div>

@endsection
