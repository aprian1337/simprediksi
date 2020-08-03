@extends('layout.layouts')
@section('title')
Pemulihan
@endsection
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h4>Edit Data Pemulihan</h4>
            <hr>
            <form action="{{route('pemulihan-update', $edit->id_pemulihan)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id_pemulihan">ID Pemulihan</label>
                    <input type="number" disabled min="1" class="form-control" value="{{$edit->id_pemulihan}}"
                        placeholder="Masukkan ID Pemulihan (Kosongkan Untuk Mengurutkan ID Terakhir)">
                    <input type="hidden" name="id_pemulihan" value="{{$edit->id_pemulihan}}">
                </div>
                <div class="form-group">
                    <label for="id_kebencanaan">ID Kebencanaan</label>
                    <select name="id_kebencanaan" class="form-control" required>
                        <option value="">Pilih</option>
                        @foreach($kebencanaan as $data)
                        <option value="{{$data->id_kebencanaan}}"
                            {{$edit->id_kebencanaan == $data->id_kebencanaan ? 'selected' : ''}}>
                            {{$data->id_kebencanaan}} - Kecamatan {{$data->nama_kecamatan}} ({{$data->kekuatan_gempa}}
                            SR) - {{\Carbon\Carbon::parse($data->tanggal_kejadian)->format('d F Y')}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggal_mulai">Tanggal Mulai</label>
                    <input type="date" value="{{$edit->tanggal_mulai}}"
                        name="tanggal_mulai" class="form-control" placeholder="Masukkan tanggal mulai" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_selesai">Tanggal Selesai</label>
                    <input type="date" value="{{$edit->tanggal_selesai}}"
                        class="form-control" placeholder="Masukkan tanggal selesai" disabled>
                </div>
                <div class="form-group">
                    <label for="">Tindak Lanjut</label>
                    <input type="text" value="{{$edit->tindak_lanjut}}" name="tindak_lanjut" class="form-control"
                        placeholder="Masukkan tindak lanjut" required>
                </div>
                <div class="form-group">
                    <label for="">Keterangan</label>
                    <textarea name="keterangan" id="" cols="30" rows="10"
                        class="form-control">{{$edit->keterangan}}</textarea>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-warning btn-block">Save</button>
                    </div>
                </div>
            </form>

            <form action="{{route('pemulihan-search')}}" method="POST">
                @csrf
                <input type="hidden" value="{{$edit->id_pemulihan}}" name="id_pemulihan" class="form-control">
                <button type="submit" class="btn btn-outline-dark btn-block mt-2">Back</button>
            </form>
        </div>
    </div>
</div>
@endsection
