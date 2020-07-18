@extends('layout.layouts')
@section('title')
Kecamatan
@endsection
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h4>Tambah Data Kecamatan</h4>
            <hr>
            <form action="{{route('kecamatan-store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id_korban">ID Kecamatan</label>
                    <input type="number" min="1" name="id_kecamatan" class="form-control" placeholder="Masukkan ID Kecamatan (Kosongkan Untuk Mengurutkan ID Terakhir)">
                </div>
                <div class="form-group">
                    <label for="id_kokab">Nama Kecamatan</label>
                    <select name="id_kokab" class="form-control" required>
                        <option value="">Pilih</option>
                        @foreach($kokab as $data)
                        <option value="{{$data->id_kokab}}">{{$data->id_kokab}} - {{$data->nama_kokab}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama_kecamatan">Nama Kecamatan</label>
                    <input type="text" name="nama_kecamatan" class="form-control" placeholder="Masukkan Nama Kecamatan"
                        required>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <a href="{{route('kecamatan')}}" class="btn btn-outline-dark btn-block">Back</a>
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
