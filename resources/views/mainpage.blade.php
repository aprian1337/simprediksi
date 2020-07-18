@extends('layout.layouts')
@section('title')
Halaman Utama
@endsection

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="text-center">SELAMAT DATANG DI SISTEM INFORMASI PREDIKSI LAMA RECOVERY KEBENCANAAN!</h4>
            <h5 class="text-center">Anda login sebagai, {{auth()->user()->name}}</h5>
        </div>
    </div>
</div>


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
