@extends('layout.layouts')
@section('title')
Pendistribusian
@endsection
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h4>Edit Data Pendistribusian</h4>
            <hr>
            <form action="{{route('pendistribusian-update', $edit->id_distribusi)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">ID Pendistribusian</label>
                    <input type="text" value="{{$edit->id_distribusi}}" disabled class="form-control" id=""
                        placeholder="Masukkan ID Pendistribusian (Kosongkan untuk menyesuaikan dengan ID terakhir yang sudah dibuat)">
                    <input type="hidden" name="id_distribusi" value="{{$edit->id_distribusi}}">
                </div>
                <div class="form-group">
                    <label for="id_bantuan">ID Bantuan</label>
                    <select name="id_bantuan" class="form-control" id="">
                        <option value="">Pilih</option>
                        @foreach($bantuan as $data)
                        <option value="{{$data->id_bantuan}}"
                            {{$data->id_bantuan == $edit->id_bantuan ? 'selected' : ''}}>ID : {{$data->id_bantuan}} -
                            {{$data->jenis_bantuan}} ({{$data->jumlah_bantuan}} {{$data->satuan}})</option>
                        @endforeach
                    </select>
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
                    <label for="">Tanggal</label>
                    <input type="date" name="tanggal" value="{{$edit->tanggal}}" class="form-control" required id=""
                        placeholder="Tanggal Distrubusi">
                </div>
                <div class="form-group">
                    <label for="">Nama Distributor</label>
                    <input type="text" value="{{$edit->nama_distributor}}" name="nama_distributor" required
                        class="form-control" id="" placeholder="Masukkan Nama Distributor">
                </div>
                <div class="form-group">
                    <label for="jumlah_bantuan">Tujuan Lokasi</label>
                    <textarea name="tujuan_lokasi" required id="" cols="30" rows="4"
                        class="form-control">{{$edit->tujuan_lokasi}}</textarea>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-warning btn-block">Save</button>
                    </div>
                </div>
            </form>

            <form action="{{route('bantuan-search')}}" method="POST">
                @csrf
                <input type="hidden" value="{{$edit->id_bantuan}}" name="id_bantuan" class="form-control">
                <button type="submit" class="btn btn-outline-dark btn-block mt-2">Back</button>
            </form>




        </div>
    </div>
</div>

@endsection
