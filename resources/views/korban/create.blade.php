@extends('layout.layouts')
@section('title')
Korban
@endsection
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h4>Tambah Data Korban</h4>
            <hr>
            <form action="{{route('korban-store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id_korban">ID Korban</label>
                    <input type="number" min="1" name="id_korban" class="form-control" placeholder="Masukkan ID Korban (Kosongkan Untuk Mengurutkan ID Terakhir)">
                </div>
                <div class="form-group">
                    <label for="id_kebencanaan">ID Kebencanaan</label>
                    <select name="id_kebencanaan" class="form-control" required>
                        <option value="">Pilih</option>
                        @foreach($kebencanaan as $data)
                        <option value="{{$data->id_kebencanaan}}">{{$data->id_kebencanaan}} - Kecamatan {{$data->nama_kecamatan}} ({{$data->kekuatan_gempa}} SR) - {{\Carbon\Carbon::parse($data->tanggal_kejadian)->format('d F Y')}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Korban</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama korban" required>
                </div>
                <div class="form-group">
                    <label for="nama_kecamatan">Jenis Korban</label>
                    <input type="text" name="jenis_korban" class="form-control" placeholder="Masukkan jenis korban"
                        required>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <a href="{{route('korban')}}" class="btn btn-outline-dark btn-block">Back</a>
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
