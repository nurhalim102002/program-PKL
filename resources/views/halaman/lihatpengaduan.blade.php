<!DOCTYPE html>
<html lang="id">

<head>
    <title>Lihat Laporan | DKP3</title>
    @include('tools.head')
</head>

<body>
    <div class="shadow">
        <nav class="navbar navbar-inverse navbar-fixed form-shadow">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">
                        <img alt="Brand" src="{{ asset('laporikan2/images/banjarmasin.png') }}">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav nav-link">
                        <li><a href="/">HOME</a></li>
                        <li><a href="{{ url('lapor') }}">LAPOR</a></li>
                        <li class="active"><a href="{{ url('lihatpengaduan') }}">LIHAT PELAPORAN</a></li>
                        <li><a href="{{ url('profilbidang') }}">PROFIL BIDANG</a></li>
                        <li class="dropdown">
                            <a href="{{ url('homeadmin') }}" class="dropdown-toggle" data-toggle="dropdown">ADMIN<span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('homeadmin') }}">Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="main-content">
            <h3>Lihat Laporan</h3>
            <hr />
            <div class="row">
                <div class="col-md-6 card-shadow form-custom mx-auto"> <!-- Tambahkan class mx-auto di sini -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Data Laporan</h3>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover mx-auto">
                            <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pelapor</th>
                                        <th>Jenis Pelanggaran</th>
                                        <th>Status</th>
                                        <th>Lokasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($lpr as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->nama_pelapor }}</td>
                                        <td>{{ $item->jenispelanggaran->jenis_pelanggaran}}</td>
                                        <td>{{ $item->status }}</td>
                                        <td>{{ $item->lokasi }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <hr>

        @include('tools.footer')

    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
