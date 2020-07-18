@extends('layout.layouts')
@section('title')
Bantuan
@endsection
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h4>Tambah Data Pendistribusian</h4>
            <hr>
            <form action="{{route('pendistribusian-store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">ID Pendistribusian</label>
                    <input type="text" name="id_distribusi" class="form-control" id="" placeholder="Masukkan ID Pendistribusian (Kosongkan untuk menyesuaikan dengan ID terakhir yang sudah dibuat)">
                </div>
                <div class="form-group">
                    <label for="id_bantuan">ID Bantuan</label>
                    <select name="id_bantuan" class="form-control" id="">
                        <option value="">Pilih</option>
                        @foreach($bantuan as $data)
                        <option value="{{$data->id_bantuan}}">ID : {{$data->id_bantuan}} - {{$data->jenis_bantuan}} ({{$data->jumlah_bantuan}} {{$data->satuan}})</option>
                        @endforeach
                    </select>
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
                    <label for="">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" required id="" placeholder="Tanggal Distrubusi">
                </div>
                <div class="form-group">
                    <label for="">Nama Distributor</label>
                    <input type="text" name="nama_distributor" required class="form-control" id="" placeholder="Masukkan Nama Distributor">
                </div>
                <div class="form-group">
                    <label for="jumlah_bantuan">Tujuan Lokasi</label>
                    <textarea name="tujuan_lokasi" required id="" cols="30" rows="4" class="form-control"></textarea>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <a href="{{route('pendistribusian')}}" class="btn btn-outline-dark btn-block">Back</a>
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
