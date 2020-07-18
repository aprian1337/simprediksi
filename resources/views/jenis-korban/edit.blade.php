@extends('layout.layouts')
@section('title')
Jenis Korban
@endsection
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h4>Edit Data Jenis Korban</h4>
            <hr>
            <form action="{{route('jenis-korban-update', $edit->id_jenis_korban)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id_jenis_korban">ID Jenis Korban</label>
                    <input disabled type="number" min="1" value="{{$edit->id_jenis_korban}}" class="form-control"
                        placeholder="Masukkan ID Jenis Korban (Kosongkan Untuk Mengurutkan ID Terakhir)">
                    <input type="hidden" name="id_jenis_korban" value="{{$edit->id_jenis_korban}}">
                </div>
                <div class="form-group">
                    <label for="">Jenis Korban</label>
                    <input type="text" value="{{$edit->jenis_korban}}" name="jenis_korban" id="" class="form-control"
                        placeholder="Masukkan Jenis Korban" required>
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

            <form action="{{route('jenis-korban-search')}}" method="POST">
                @csrf
                <input type="hidden" value="{{$edit->id_jenis_korban}}" name="id_jenis_korban" class="form-control">
                <button type="submit" class="btn btn-outline-dark btn-block mt-2">Back</button>
            </form>

        </div>
    </div>
</div>
@endsection
