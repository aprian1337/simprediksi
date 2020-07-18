@extends('layout.layouts')
@section('title')
Korban
@endsection
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h4>Edit Data Korban</h4>
            <hr>
            <form action="{{route('korban-update', $edit->id_korban)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id_korban">ID Korban</label>
                    <input type="number" value="{{$edit->id_korban}}" disabled min="1" class="form-control"
                        placeholder="Masukkan ID Korban (Kosongkan Untuk Mengurutkan ID Terakhir)">
                    <input type="hidden" name="id_korban" value="{{$edit->id_korban}}">
                </div>
                <div class="form-group">
                    <label for="id_kebencanaan">ID Kebencanaan</label>
                    <select name="id_kebencanaan" class="form-control" required>
                        <option value="">Pilih</option>
                        @foreach($kebencanaan as $data)
                        <option value="{{$data->id_kebencanaan}}"
                            {{$data->id_kebencanaan == $edit->id_kebencanaan ? 'selected' : ''}}>
                            {{$data->id_kebencanaan}} - Kecamatan {{$data->nama_kecamatan}} ({{$data->kekuatan_gempa}}
                            SR) - {{\Carbon\Carbon::parse($data->tanggal_kejadian)->format('d F Y')}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Korban</label>
                    <input type="text" value="{{$edit->nama}}" name="nama" class="form-control"
                        placeholder="Masukkan nama korban" required>
                </div>
                <div class="form-group">
                    <label for="nama_kecamatan">Jenis Korban</label>
                    <input type="text" value="{{$edit->jenis_korban}}" name="jenis_korban" class="form-control"
                        placeholder="Masukkan jenis korban" required>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-warning btn-block">Save</button>
                    </div>
                </div>
            </form>

            <form action="{{route('korban-search')}}" method="POST">
                @csrf
                <input type="hidden" value="{{$edit->id_korban}}" name="id_korban" class="form-control">
                <button type="submit" class="btn btn-outline-dark btn-block mt-2">Back</button>
            </form>
        </div>
    </div>
</div>
@endsection
