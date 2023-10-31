<!DOCTYPE html>
<html lang="id">

<head>
<title>DKP3 | Bidang Perikanan</title>
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
                            <li class="active"><a href="\">HOME</a></li>
                            <li><a href="{{ url('lapor') }}">LAPOR</a></li>
                            <li><a href="{{ url('lihatpengaduan') }}">LIHAT PELAPORAN</a></li>
                            <li><a href="{{ url('profilbidang') }}">PROFIL BIDANG</a></li>
                            <li class="dropdown">
                                <a href="{{ url('homeadmin') }}" class="dropdown-toggle" data-toggle="dropdown">ADMIN<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('login') }}">Login</a></li>
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
            <div id="mainCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mainCarousel" data-slide-to="1"></li>

                </ol>

                <!-- Wrapper for slides -->

                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{ asset('laporikan2/images/dinas.jpeg') }}" alt="...">
                        <div class="carousel-caption welcome">
                            <h2 class="animated bounceInRight">Selamat Datang</h2>
                            <h3 class="animated bounceInLeft">Di Bidang Perikanan</h3>
                            <h3 class="animated bounceInRight">Dinas Ketahanan Pangan, Pertanian dan Perikanan</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('laporikan2/images/pejabat.jpeg') }}" alt="...">
                        <div class="carousel-caption">
                            <h2 class="animated bounceInDown">Pejabat</h2>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#mainCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#mainCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- end Slider -->

            <!-- content -->
            <div class="main-content">
                <!-- section -->
                <div class="section">
                    <div class="row">

                        <div class="col-md-1"></div>
                        <!-- laporan Terbaru -->
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
