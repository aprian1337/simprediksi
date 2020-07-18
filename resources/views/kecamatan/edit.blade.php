@extends('layout.layouts')
@section('title')
Kota-Kabupaten
@endsection
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h4>Search Data Kota_Kabupaten</h4>
            <hr>
            <form action="{{route('kecamatan-update', $data->id_kecamatan)}}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="id_kecamatan">ID Kecamatan</label>
                    <input type="text" value="{{$data->id_kecamatan}}" class="form-control"
                        placeholder="Masukkan ID Kecamatan" disabled>
                    <input type="hidden" name="id_kecamatan" value="{{$data->id_kecamatan}}">
                </div>
                <div class="form-group">
                    <label for="id_kokab">ID Kokab</label>
                    <select name="id_kokab" class="form-control" required>
                        @foreach($kokab as $datas)
                        <option value="{{$datas->id_kokab}}" {{$datas->id_kokab == $data->id_kokab ? 'selected' : ''}}>{{$datas->id_kokab}} - {{$datas->nama_kokab}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama_kokab">Nama Kecamatan</label>
                    <input type="text" value="{{$data->nama_kecamatan}}" name="nama_kecamatan" class="form-control"
                        placeholder="Masukkan Nama Kecamatan">
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-warning btn-block">Save</button>
                    </div>
                </div>
            </form>

            <form action="{{route('kecamatan-search')}}" method="POST">
                @csrf
                <input type="hidden" value="{{$data->id_kecamatan}}" name="id_kecamatan" class="form-control">
                <button type="submit" class="btn btn-outline-dark btn-block mt-2">Back</button>
            </form>




        </div>
    </div>
</div>

@endsection
