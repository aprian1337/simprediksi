@extends('layout.layouts')
@section('title')
Donatur
@endsection
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h4>Search Data Donatur</h4>
            <hr>
            <form action="{{route('donatur-update', $edit->id_donatur)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id_donatur">ID Donatur</label>
                    <input type="number" value="{{$edit->id_donatur}}" disabled min="1" class="form-control"
                        placeholder="Masukkan ID Donatur (Kosongkan Untuk Mengurutkan ID Terakhir)">
                    <input type="hidden" name="id_donatur" value="{{$edit->id_donatur}}">
                </div>
                <div class="form-group">
                    <label for="nama_donatur">Nama Donatur</label>
                    <input type="text" name="nama_donatur" value="{{$edit->nama_donatur}}" class="form-control" placeholder="Masukkan Nama Donatur"
                        required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="" rows="4" class="form-control"
                        placeholder="Masukkan Alamat Donatur">{{$edit->alamat}}</textarea>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="{{$edit->email}}" class="form-control" placeholder="Masukkan Email Donatur" required>
                </div>
                <div class="form-group">
                    <label for="notelpon">No Telepon</label>
                    <input type="text" name="notelpon" value="{{$edit->notelpon}}" class="form-control" placeholder="Masukkan No. Telpon" required>
                </div>
                <div class="form-group">
                    <label for="nama_kontak">Nama Kontak</label>
                    <input type="text" name="nama_kontak" value="{{$edit->nama_kontak}}" class="form-control" placeholder="Masukkan Nama Kontak"
                        required>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-warning btn-block">Save</button>
                    </div>
                </div>
            </form>

            <form action="{{route('donatur-search')}}" method="POST">
                @csrf
                <input type="hidden" value="{{$edit->id_donatur}}" name="id_donatur" class="form-control">
                <button type="submit" class="btn btn-outline-dark btn-block mt-2">Back</button>
            </form>




        </div>
    </div>
</div>

@endsection
