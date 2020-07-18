<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Sistem Informasi Prediksi Lama Recovery Kebencanaan</title>
    <link rel="stylesheet" href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <img src="{{URL::asset('img/logo-bpbd.png')}}" width="75" height="60"
            class="d-inline-block align-top float-left" alt="" loading="lazy">
        <a class="navbar-brand" href="{{route('home')}}">Sistem Informasi Prediksi Lama Recovery Kebencanaan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
            </ul>
            <div>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{route('user')}}">User</a>
                            <a class="dropdown-item" href="{{route('kokab')}}">Kota_Kabupaten</a>
                            <a class="dropdown-item" href="{{route('kecamatan')}}">Kecamatan</a>
                            <a class="dropdown-item" href="{{route('jenis-korban')}}">Jenis_Korban</a>
                            <a class="dropdown-item" href="{{route('korban')}}">Korban</a>
                            <a class="dropdown-item" href="{{route('kebencanaan')}}">Kebencanaan</a>
                            <a class="dropdown-item" href="{{route('pemulihan')}}">Pemulihan</a>
                            <a class="dropdown-item" href="{{route('bantuan')}}">Bantuan</a>
                            <a class="dropdown-item" href="{{route('donatur')}}">Donatur</a>
                            <a class="dropdown-item" href="{{route('pendistribusian')}}">Pendistribusian</a>
                            <a class="dropdown-item" href="{{route('laporan')}}">Laporan</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="modal" href="#" class="nav-link" data-target="#LogoutModal">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content');

    <!-- Modal -->
    <div class="modal fade" id="LogoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Konfirmasi logout</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ingin keluar dari program?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Tidak</button>
                    <a href="{{route('logout')}}" class="btn btn-danger">Saya yakin</a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p class="text-center mt-2">Copyright &copy; 2020 BPBD Provinsi Jawa Barat</p>
    </footer>
    <script src="{{URL::asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::asset('vendor/fontawesome/js/all.js')}}"></script>
    @stack('script')
</body>

</html>
