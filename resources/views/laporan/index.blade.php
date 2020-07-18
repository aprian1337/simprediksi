@extends('layout.layouts')
@section('title')
Laporan
@endsection
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h4>Search Data</h4>
                </div>
            </div>
            <hr>
            <form action="{{route('laporan-search')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="Username">ID Pemulihan</label>
                    <input type="text" name="id_pemulihan" class="form-control" placeholder="Masukkan ID Pemulihan" required>
                </div>
                <div class="form-group">
                    <label for="Username">ID Kebencanaan</label>
                    <input type="text" name="id_kebencanaan" class="form-control" placeholder="Masukkan ID Kebencanaan" required>
                </div>
                <div class="form-group">
                    <label for="Username">ID Pendistribusian</label>
                    <input type="text" name="id_distribusi" class="form-control" placeholder="Masukkan ID Pendistribusian" required>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <a href="{{route('home')}}" class="btn btn-outline-dark btn-block">Back</a>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary btn-block">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@if(session('failed'))
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white" id="exampleModalLabel">Gagal :(</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{session('failed')}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Oke</button>
            </div>
        </div>
    </div>
</div>
@endif

@endsection
@push('script')
<script type="text/javascript">
    $(document).ready(function () {
        $('#myModal').modal('show');
    });
</script>
@endpush
