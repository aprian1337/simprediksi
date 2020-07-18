@extends('layout.layouts')
@section('title')
Bantuan
@endsection
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h4>Edit Data Bantuan</h4>
            <hr>
            <form action="{{route('bantuan-update', $edit->id_bantuan)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="id_bantuan">ID Bantuan</label>
                    <input type="number" value="{{$edit->id_bantuan}}" min="1" disabled class="form-control"
                        placeholder="Masukkan ID Donatur (Kosongkan Untuk Mengurutkan ID Terakhir)">
                    <input type="hidden" name="id_bantuan" value="{{$edit->id_bantuan}}">
                </div>
                <div class="form-group">
                    <label for="id_donatur">ID Donatur</label>
                    <select class="form-control" name="id_donatur" required id="">
                        <option value="">Pilih</option>
                        @foreach($donatur as $data)
                        <option value="{{$data->id_donatur}}" {{$data->id_donatur == $edit->id_donatur ? 'selected' : ''}} >{{$data->id_donatur}} - {{$data->nama_donatur}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group options">
                    <label for="jenis_bantuan">Jenis Bantuan</label>
                    <div class="form-check">
                        <input class="form-check-input" name="jenis_bantuans[]" type="checkbox" value="Sandang"
                            id="defaultCheck1" required @foreach($checkbox as $check) {{$check == 'Sandang' ? 'checked' : ''}} @endforeach>
                        <label class="form-check-label" for="defaultCheck1">
                            Sandang
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="jenis_bantuans[]" type="checkbox" value="Pangan"
                            id="defaultCheck2" required @foreach($checkbox as $check) {{$check == 'Pangan' ? 'checked' : ''}} @endforeach>
                        <label class="form-check-label" for="defaultCheck2">
                            Pangan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="jenis_bantuans[]" type="checkbox" value="Papan"
                            id="defaultCheck3" required @foreach($checkbox as $check) {{$check == 'Papan' ? 'checked' : ''}} @endforeach>
                        <label class="form-check-label" for="defaultCheck3">
                            Papan
                        </label></div>
                    <div class="form-check">
                        <input class="form-check-input" name="jenis_bantuans[]" type="checkbox" value="Psikologis"
                            id="defaultCheck4" required @foreach($checkbox as $check) {{$check == 'Psikologis' ? 'checked' : ''}} @endforeach>
                        <label class="form-check-label" for="defaultCheck4">
                            Psikologis
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="jumlah_bantuan">Jumlah Bantuan</label>
                    <input type="number" value="{{$edit->jumlah_bantuan}}" name="jumlah_bantuan" class="form-control"
                        placeholder="Masukkan Jumlah Bantuan" required>
                </div>
                <div class="form-group">
                    <label for="satuan">Satuan</label>
                    <input type="text" name="satuan" class="form-control" value="{{$edit->satuan}}" placeholder="Masukkan Satuan" required>
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
