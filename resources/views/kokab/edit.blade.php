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
            <form action="{{route('kokab-update', $data->id_kokab)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id_kokab">ID KOKAB</label>
                    <input type="text" value="{{$data->id_kokab}}" class="form-control"
                        placeholder="Masukkan ID Kokab">
                    <input type="hidden" name="id_kokab" value="{{$data->id_kokab}}">
                </div>
                <div class="form-group">
                    <label for="nama_kokab">Nama Kokab</label>
                    <input type="text" value="{{$data->nama_kokab}}" name="nama_kokab" class="form-control"
                        placeholder="Masukkan Nama Kokab">
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-warning btn-block">Save</button>
                    </div>
                </div>
            </form>

            <form action="{{route('kokab-search')}}" method="POST">
                @csrf
                <input type="hidden" value="{{$data->id_kokab}}" name="id_kokab" class="form-control">
                <button type="submit" class="btn btn-outline-dark btn-block mt-2">Back</button>
            </form>




        </div>
    </div>
</div>

@endsection
