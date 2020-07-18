@extends('layout.layouts')
@section('title')
Kebencanaan
@endsection
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h4>Edit Data Kebencanaan</h4>
            <hr>
            <form action="{{route('kebencanaan-update', $edit->id_kebencanaan)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id_kokab">ID Kokab</label>
                    <select name="id_kokab" class="form-control" required>
                        <option value="">Pilih</option>
                        @foreach($kokab as $data)
                        <option value="{{$data->id_kokab}}" {{$data->id_kokab == $edit->id_kokab ? 'selected' : ''}}>
                            {{$data->id_kokab}} - {{$data->nama_kokab}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_kecamatan">ID Kecamatan</label>
                    <select name="id_kecamatan" class="form-control" required>
                        <option value="">Pilih</option>
                        @foreach($kecamatan as $data)
                        <option value="{{$data->id_kecamatan}}"
                            {{$data->id_kecamatan == $edit->id_kecamatan ? 'selected' : ''}}>{{$data->id_kecamatan}} -
                            {{$data->nama_kecamatan}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggal_kejadian">Tanggal Kejadian</label>
                    <input type="date" value="{{$edit->tanggal_kejadian}}" name="tanggal_kejadian" class="form-control">
                </div>
                <div class="form-group">
                    <label for="kekuatan_gempa">Kekuatan Gempa</label>
                    <div class="input-group">
                        <input type="number" name="kekuatan_gempa" value="{{$edit->kekuatan_gempa}}" step="0.01"
                            class="form-control" placeholder="Masukkan Kekuatan Gempa" aria-label="Recipient's username"
                            aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">SR</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Jenis Kerusakan</label>
                    <select name="jenis_kerusakan" class="form-control" required>
                        <option value="">Pilih</option>
                        <option value="Rusak Berat" {{$edit->jenis_kerusakan == 'Rusak Berat' ? 'selected' : ''}}>Rusak
                            Berat</option>
                        <option value="Rusak Sedang" {{$edit->jenis_kerusakan == 'Rusak Sedang' ? 'selected' : ''}}>
                            Rusak Sedang</option>
                        <option value="Rusak Ringan" {{$edit->jenis_kerusakan == 'Rusak Ringan' ? 'selected' : ''}}>
                            Rusak Ringan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Jumlah Kerusakan</label>
                    <input type="number" value="{{$edit->jumlah_kerusakan}}" name="jumlah_kerusakan"
                        class="form-control" placeholder="Masukkan Jumlah Kerusakan">
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

            <form action="{{route('kebencanaan-search')}}" method="POST">
                @csrf
                <input type="hidden" value="{{$edit->id_kebencanaan}}" name="id_kebencanaan" class="form-control">
                <button type="submit" class="btn btn-outline-dark btn-block mt-2">Back</button>
            </form>
        </div>
    </div>
</div>
@endsection
