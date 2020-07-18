@extends('layout.layouts')
@section('title')
Kebencanaan
@endsection
@section('content')
<div class="container-fluid mt-5">
    <a href="{{route('kebencanaan')}}" class="btn btn-dark mt-4"><i class="fas fa-arrow-left"></i>&nbsp; Back</a>
    <h2 class="text-center mb-3">Hasil Pencarian Data</h2>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID Kokab</th>
                        <th>ID Kecamatan</th>
                        <th>Tanggal Kejadian</th>
                        <th>Kekuatan Gempa</th>
                        <th>Jenis Kerusakan</th>
                        <th>Jumlah Kerusakan</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$search->id_kebencanaan}}</td>
                        <td>{{$search->id_kokab}}</td>
                        <td>{{$search->id_kecamatan}}</td>
                        <td>{{$search->tanggal_kejadian}}</td>
                        <td>{{$search->kekuatan_gempa}}</td>
                        <td>{{$search->jenis_kerusakan}}</td>
                        <td>{{$search->jumlah_kerusakan}}</td>
                        <td>{{$search->keterangan}}</td>
                        <td>
                            <div>
                                <form action="edit/{{$search->id_kebencanaan}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-warning"><i
                                            class="far fa-edit"></i>&nbsp;Edit</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
