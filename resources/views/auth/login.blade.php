<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Masuk | Sistem Informasi Prediksi Lama Recovery Kebencanaan</title>
    <link rel="stylesheet" href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <script src="{{URL::asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{URL::asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('vendor/popper/popper.min.js')}}"></script>
</head>

<body>
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-primary">
        <a class="navbar-brand" href="#">
            <img src="{{URL::asset('img/logo-bpbd.png')}}" width="140" height="100"
                class="d-inline-block align-top float-left" alt="" loading="lazy">
            <div class="ml-2 mt-3">
                <h5 class="text-white float-left">SISTEM INFORMASI PREDIKSI LAMA RECOVERY KEBENCANAAN</h5>
                <h3 class="float-left text-white">BADAN PENANGGULANGAN BENCANA DAERAH PROVINSI JAWA BARAT</h3>
            </div>
        </a>
    </nav>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h4>Halaman masuk sistem</h4>
                <p>Silakan untuk masukkan username, dan password yang sudah diberikan</p>
                <hr>
                <form action="{{route('login-process')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="Username">Username</label>
                        <input type="text" name="username" class="form-control" id="Username"
                            placeholder="Masukkan username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password" required>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>


        <footer>
            <p class="text-center mt-2">Copyright &copy; 2020 BPBD Provinsi Jawa Barat</p>
        </footer>
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
                    <button type="button" class="btn btn-light" data-dismiss="modal">Oke</button>
                </div>
            </div>
        </div>
    </div>
    @endif

    <script type="text/javascript">
        $(document).ready(function () {
            $('#myModal').modal('show');
        });
    </script>

</body>

</html>
