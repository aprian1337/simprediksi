@extends('layout.layouts')
@section('title')
Kebencanaan
@endsection
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h4>Tambah Data Kebencanaan</h4>
            <hr>
            <form action="{{route('kebencanaan-store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id_kebencanaan">ID Kebencanaan</label>
                    <input type="number" min="1" name="id_kebencanaan" class="form-control" placeholder="Masukkan ID Kebencanaan (Kosongkan Untuk Mengurutkan ID Terakhir)">
                </div>
                <div class="form-group">
                    <label for="id_kokab">ID Kokab</label>
                    <select name="id_kokab" class="form-control" required>
                        <option value="">Pilih</option>
                        @foreach($kokab as $data)
                        <option value="{{$data->id_kokab}}">{{$data->id_kokab}} - {{$data->nama_kokab}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_kecamatan">ID Kecamatan</label>
                    <select name="id_kecamatan" class="form-control" required>
                        <option value="">Pilih</option>
                        @foreach($kecamatan as $data)
                        <option value="{{$data->id_kecamatan}}">{{$data->id_kecamatan}} - {{$data->nama_kecamatan}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggal_kejadian">Tanggal Kejadian</label>
                    <input type="date" name="tanggal_kejadian" class="form-control">
                </div>
                <div class="form-group">
                    <label for="kekuatan_gempa">Kekuatan Gempa</label>
                    <div class="input-group">
                        <input type="number" name="kekuatan_gempa" step="0.01" class="form-control" placeholder="Masukkan Kekuatan Gempa"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">SR</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Jenis Kerusakan</label>
                    <select name="jenis_kerusakan" class="form-control" required>
                        <option value="">Pilih</option>
                        <option value="Rusak Berat">Rusak Berat</option>
                        <option value="Rusak Sedang">Rusak Sedang</option>
                        <option value="Rusak Ringan">Rusak Ringan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Jumlah Kerusakan</label>
                    <input type="number" name="jumlah_kerusakan" class="form-control" placeholder="Masukkan Jumlah Kerusakan">
                </div>
                <div class="form-group">
                    <label for="">Keterangan</label>
                    <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <a href="{{route('kebencanaan')}}" class="btn btn-outline-dark btn-block">Back</a>
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
