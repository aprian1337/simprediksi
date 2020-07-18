@extends('layout.layouts')
@section('title')
Jenis Korban
@endsection
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h4>Tambah Data Jenis Korban</h4>
            <hr>
            <form action="{{route('jenis-korban-store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id_jenis_korban">ID Jenis Korban</label>
                    <input type="number" min="1" name="id_jenis_korban" class="form-control" placeholder="Masukkan ID Jenis Korban (Kosongkan Untuk Mengurutkan ID Terakhir)">
                </div>
                <div class="form-group">
                    <label for="">Jenis Korban</label>
                    <input type="text" name="jenis_korban" id="" class="form-control" placeholder="Masukkan Jenis Korban" required>
                </div>
                <div class="form-group">
                    <label for="">Keterangan</label>
                    <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <a href="{{route('jenis-korban')}}" class="btn btn-outline-dark btn-block">Back</a>
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
