@extends('layout.layouts')
@section('title')
Kota-Kabupaten
@endsection
@section('content')
<div class="container-fluid mt-5">
    <a href="{{route('bantuan')}}" class="btn btn-dark mt-4"><i class="fas fa-arrow-left"></i>&nbsp; Back</a>
    <h2 class="text-center mb-3">Hasil Pencarian Data</h2>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID Donatur</th>
                        <th>Jenis Bantuan</th>
                        <th>Jumlah Bantuan</th>
                        <th>Satuan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$search->id_bantuan}}</td>
                        <td>{{$search->id_donatur}}</td>
                        <td>{{$search->jenis_bantuan}}</td>
                        <td>{{$search->jumlah_bantuan}}</td>
                        <td>{{$search->satuan}}</td>
                        <td>
                            <div>
                                <form action="{{route('bantuan-edit', $search->id_bantuan)}}" method="POST">
                                    @csrf
                                    <span href="" data-target="#DeleteModal" data-toggle="modal"
                                        class="btn btn-danger"><i class="fas fa-trash-alt"></i>&nbsp; Delete</span>
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

<!-- Modal -->
<div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white" id="exampleModalLabel">Konfirmasi hapus data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin menghapus data tersebut?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Tidak</button>
                <form action="{{route('bantuan-delete', $search->id_bantuan)}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Saya yakin</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
