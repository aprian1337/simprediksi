@extends('layout.layouts')
@section('title')
Pemulihan
@endsection
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h4>Tambah Data Pemulihan</h4>
            <hr>
            <form action="{{route('pemulihan-store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id_pemulihan">ID Pemulihan</label>
                    <input type="number" min="1" name="id_pemulihan" class="form-control" placeholder="Masukkan ID Korban (Kosongkan Untuk Mengurutkan ID Terakhir)">
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
                    <label for="tanggal_mulai">Tanggal Mulai</label>
                    <input type="date" name="tanggal_mulai" class="form-control" placeholder="Masukkan tanggal mulai" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_selesai">Tanggal Selesai</label>
                    <input type="date" name="tanggal_selesai" class="form-control" placeholder="Masukkan tanggal selesai" required>
                </div>
                <div class="form-group">
                    <label for="">Tindak Lanjut</label>
                    <input type="text" name="tindak_lanjut" class="form-control" placeholder="Masukkan tindak lanjut" required>
                </div>
                <div class="form-group">
                    <label for="">Keterangan</label>
                    <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <a href="{{route('pemulihan')}}" class="btn btn-outline-dark btn-block">Back</a>
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
