@extends('layout.layouts')
@section('title')
Kota-Kabupaten
@endsection
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h4>Tambah Data Kota_Kabupaten</h4>
            <hr>
            <form action="{{route('kokab-store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id_kokab">ID Kokab</label>
                    <input type="number" min="1" name="id_kokab" class="form-control" placeholder="Masukkan ID Kokab (Kosongkan Untuk Mengurutkan ID Terakhir)">
                </div>
                <div class="form-group">
                    <label for="nama_kokab">Nama Kota_Kabupaten</label>
                    <input type="text" name="nama_kokab" class="form-control" placeholder="Masukkan Nama Kokab"
                        required>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <a href="{{route('kokab')}}" class="btn btn-outline-dark btn-block">Back</a>
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
