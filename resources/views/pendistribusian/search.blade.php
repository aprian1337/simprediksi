@extends('layout.layouts')
@section('title')
Pendistribusian
@endsection
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h4>Search Data Pendistribusian</h4>
                </div>
                <div class="col-6">
                    <a href="{{route('pendistribusian-create')}}" class="btn btn-outline-success float-right"><i class="fas fa-plus"></i>&nbsp; Tambah data</a>
                </div>
            </div>
            <hr>
            <form action="{{route('pendistribusian-search')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="Username">ID PENDISTRIBUSIAN</label>
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

@if(session('success'))
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-white" id="exampleModalLabel">Berhasil!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{session('success')}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Oke</button>
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
