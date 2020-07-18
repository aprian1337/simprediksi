@extends('layout.layouts')
@section('title')
Kecamatan
@endsection
@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-6">
            <a href="{{route('laporan')}}" class="btn btn-dark mt-4"><i class="fas fa-arrow-left"></i>&nbsp; Back</a>
        </div>
        <div class="col-6">
            <form action="{{route('laporan-print')}}" method="POST" target="_blank">
                @csrf
                <input type="hidden" name="id_pemulihan" value="{{$pemulihan->id_pemulihan}}">
                <input type="hidden" name="id_distribusi" value="{{$pendistribusian->id_distribusi}}">
                <input type="hidden" name="id_kebencanaan" value="{{$kebencanaan->id_kebencanaan}}">
                <button type="submit" class="btn btn-success mt-4 float-right"><i class="fas fa-print"></i>&nbsp; Cetak</button>
            </form>
        </div>
    </div>

    <h2 class="text-center mb-3">Hasil Pencarian Data Laporan</h2>
    <div class="card">
        <div class="card-body">
            <p class="badge badge-info">Pemulihan</p>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID Kebencanaan</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Tindak Lanjut</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$pemulihan->id_pemulihan}}</td>
                        <td>{{$pemulihan->id_kebencanaan}}</td>
                        <td>{{\Carbon\Carbon::parse($pemulihan->tanggal_mulai)->format('d F Y')}}</td>
                        <td>{{\Carbon\Carbon::parse($pemulihan->tanggal_selesai)->format('d F Y')}}</td>
                        <td>{{$pemulihan->tindak_lanjut}}</td>
                        <td>{{$pemulihan->keterangan}}</td>
                    </tr>
                </tbody>
            </table>

            <p class="badge badge-info">Kebencanaan</p>
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
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$kebencanaan->id_kebencanaan}}</td>
                        <td>{{$kebencanaan->id_kokab}}</td>
                        <td>{{$kebencanaan->id_kecamatan}}</td>
                        <td>{{\Carbon\Carbon::parse($kebencanaan->tanggal_kejadian)->format('d F Y')}}</td>
                        <td>{{$kebencanaan->kekuatan_gempa}}</td>
                        <td>{{$kebencanaan->jenis_kerusakan}}</td>
                        <td>{{$kebencanaan->jumlah_kerusakan}}</td>
                        <td>{{$kebencanaan->keterangan}}</td>
                    </tr>
                </tbody>
            </table>

            <p class="badge badge-info">Pendistribusian</p>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID Bantuan</th>
                        <th>ID Kebencanaan</th>
                        <th>Tanggal</th>
                        <th>Nama Distributor</th>
                        <th>Tujuan Lokasi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$pendistribusian->id_distribusi}}</td>
                        <td>{{$pendistribusian->id_bantuan}}</td>
                        <td>{{$pendistribusian->id_kebencanaan}}</td>
                        <td>{{\Carbon\Carbon::parse($pendistribusian->tanggal)->format('d F Y')}}</td>
                        <td>{{$pendistribusian->nama_distributor}}</td>
                        <td>{{$pendistribusian->tujuan_lokasi}}</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection
