<!DOCTYPE html>
<html lang="id">

<head>
<title>DKP3 | Lapor</title>
@include('tools.head')
</head>

<body>
    <div id="fb-root"></div>
        <div class="shadow">
            <!-- navbar -->
            <nav class="navbar navbar-inverse navbar-fixed form-shadow">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="">
                            <img alt="Brand" src="{{ asset('laporikan2/images/banjarmasin.png') }}">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav nav-link">
                            <li><a href="\">HOME</a></li>
                            <li class="active"><a href="{{ url('lapor') }}">LAPOR</a></li>
                            <li><a href="{{ url('lihatpengaduan') }}">LIHAT PELAPORAN</a></li>
                            <li><a href="{{ url('profilbidang') }}">PROFIL BIDANG</a></li>
                            <li class="dropdown">
                                <a href="{{ url('homeadmin') }}" class="dropdown-toggle" data-toggle="dropdown">ADMIN<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('homeadmin') }}">Login</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- <ul class="nav navbar-nav navbar-right nav-link">
                            <li><a href="#">LOGIN</a></li>
                            <li><a href="#">REGISTER</a></li>
                        </ul> -->
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <!-- end navbar -->

            <!-- start slider -->

            <!-- end Slider -->

            <!-- content -->
            <div class="main-content">
                <!-- section -->
                <div class="section">
                    <div class="row">

                        <div class="col-md-1"></div>
                        <!-- laporan Terbaru -->
                        <div class="col-md-10">
                            <br>
                            <h3 class="text-center">Formulir Pelaporan</h3>
                            <hr class="custom-line"/>

                            <div class="panel-body card-shadow">
                                <div class="card card-primary">
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form action="{{ url('simpan-laporan') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama</label>
                                            <input type="text" class="form-control" name="nama_pelapor" id="nama_pelapor" placeholder="Masukkan Nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">No Telpon</label>
                                            <input type="text" class="form-control" name="no_telpon" id="no_telpon" placeholder="Nomor Telpon">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Pelanggaran</label>
                                            <select class="form-control" name="jenis_pelanggaran" id="jenis_pelanggaran" style="width: 100%;">
                                                @foreach ($jns as $item)
                                                <option value="{{$item->id}}">{{$item->jenis_pelanggaran}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Isi Laporan</label>
                                            <textarea class="form-control" name="isi_laporan" id="isi_laporan" placeholder="Tuliskan Isi Laporan"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Lampitan Bukti</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="lampiran_bukti" id="lampiran_bukti">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Lokasi</label>
                                            <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Lokasi">
                                        </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Kirim</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- media body -->
                            </div>
                            <!-- panel body -->
                            <!-- panel body -->
                        </div>
                        <!-- End Laporan Terbaru -->

                        <div class="col-md-1"></div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- /.section -->

                <hr>
                <!-- end social feed section -->

            </div>
            <!-- end main-content -->

            <!-- Footer -->
            @include('tools.footer')
                <!-- /footer -->
                <!-- shadow -->
        </div>

</body>
</html>
