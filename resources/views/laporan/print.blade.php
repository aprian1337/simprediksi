<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak | Sistem Informasi Prediksi Lama Recovery Kebencanaan</title>
    <style>
        table thead {
            display: table-row-group;
        }

        table td,
        th {
            padding: 10px;
            border: 1px solid black;

        }

        tr {
            page-break-inside: avoid;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;">Laporan</h1>
    <p>Pemulihan</p>
    <table cellspacing="0" cellpading="0">
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
    <table cellspacing="0" cellpading="0">
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
    <table cellspacing="0" cellpading="0">
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
</body>
</html>
