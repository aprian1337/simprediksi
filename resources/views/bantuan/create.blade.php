@extends('layout.layouts')
@section('title')
Bantuan
@endsection
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h4>Tambah Data Bantuan</h4>
            <hr>
            <form action="{{route('bantuan-store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id_bantuan">ID Bantuan</label>
                    <input type="number"  min="1" name="id_bantuan" class="form-control"
                        placeholder="Masukkan ID Donatur (Kosongkan Untuk Mengurutkan ID Terakhir)">
                </div>
                <div class="form-group">
                    <label for="id_donatur">ID Donatur</label>
                    <select class="form-control" required name="id_donatur" id="">
                        <option value="">Pilih</option>
                        @foreach($donatur as $data)
                        <option value="{{$data->id_donatur}}">{{$data->id_donatur}} - {{$data->nama_donatur}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group options">
                    <label for="jenis_bantuan">Jenis Bantuan</label>
                    <div class="form-check">
                        <input class="form-check-input" name="jenis_bantuans[]" type="checkbox" value="Sandang"
                            id="defaultCheck1" required>
                        <label class="form-check-label" for="defaultCheck1">
                            Pandang
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="jenis_bantuans[]" type="checkbox" value="Pangan"
                            id="defaultCheck2" required>
                        <label class="form-check-label" for="defaultCheck2">
                            Pangan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="jenis_bantuans[]" type="checkbox" value="Papan"
                            id="defaultCheck3" required>
                        <label class="form-check-label" for="defaultCheck3">
                            Papan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="jenis_bantuans[]" type="checkbox" value="Psikologis"
                            id="defaultCheck4" required>
                        <label class="form-check-label" for="defaultCheck4">
                            Psikologis
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="jumlah_bantuan">Jumlah Bantuan</label>
                    <input type="number" name="jumlah_bantuan" class="form-control"
                        placeholder="Masukkan Jumlah Bantuan" required>
                </div>
                <div class="form-group">
                    <label for="satuan">Satuan</label>
                    <input type="text" name="satuan" class="form-control" placeholder="Masukkan Satuan" required>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <a href="{{route('bantuan')}}" class="btn btn-outline-dark btn-block">Back</a>
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
@push('script')
<script>$(function () {
        var requiredCheckboxes = $('.options :checkbox[required]');
        requiredCheckboxes.change(function () {
            if (requiredCheckboxes.is(':checked')) {
                requiredCheckboxes.removeAttr('required');
            } else {
                requiredCheckboxes.attr('required', 'required');
            }
        });
    });</script>
@endpush
