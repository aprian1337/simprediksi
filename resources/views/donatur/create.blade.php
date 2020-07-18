@extends('layout.layouts')
@section('title')
Donatur
@endsection
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h4>Tambah Data Donatur</h4>
            <hr>
            <form action="{{route('donatur-store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id_donatur">ID Donatur</label>
                    <input type="number" min="1" name="id_donatur" class="form-control" placeholder="Masukkan ID Donatur (Kosongkan Untuk Mengurutkan ID Terakhir)">
                </div>
                <div class="form-group">
                    <label for="nama_donatur">Nama Donatur</label>
                    <input type="text" name="nama_donatur" class="form-control" placeholder="Masukkan Nama Donatur"
                        required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="" rows="4" class="form-control" placeholder="Masukkan Alamat Donatur"></textarea>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Masukkan Email Donatur"
                        required>
                </div>
                <div class="form-group">
                    <label for="notelpon">No Telepon</label>
                    <input type="text" name="notelpon" class="form-control" placeholder="Masukkan No. Telpon"
                        required>
                </div>
                <div class="form-group">
                    <label for="nama_kontak">Nama Kontak</label>
                    <input type="text" name="nama_kontak" class="form-control" placeholder="Masukkan Nama Kontak"
                        required>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <a href="{{route('donatur')}}" class="btn btn-outline-dark btn-block">Back</a>
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
