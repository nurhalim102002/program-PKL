<!DOCTYPE html>
<html lang="id">

<head>
    <title>Profil Dinas | Dispendukcapil Bangkalan</title>
    @include('tools.head')
</head>

<body>

        <div class="shadow">
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
                            <li><a href="{{ url('lapor') }}">LAPOR</a></li>
                            <li><a href="{{ url('lihatpengaduan') }}">LIHAT PELAPORAN</a></li>
                            <li class="active"><a href="{{ url('profilbidang') }}">PROFIL BIDANG</a></li>
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

            <!-- content -->
            <div class="main-content">

                <h3>Profil Dinas</h3>
                <hr/>
                <!-- Nav tabs, ini tombol tab di atas -->
                <ul class="nav nav-tabs">
                    <!-- Untuk Semua Tab.. pastikan a href=”#nama_id” sama dengan nama id di “Tap Pane” dibawah-->
                      <li class="active"><a href="#profil" data-toggle="tab">Profil Dinas</a></li> <!-- Untuk Tab pertama berikan li class=”active” agar pertama kali halaman di load tab langsung active-->
                      <li><a href="#visi" data-toggle="tab">Visi dan Misi</a></li>
                </ul>

                <!-- Tab panes, ini content dari tab di atas -->
                <div class="tab-content">
                      <!-- Profil Dinas -->
                      <div class="tab-pane active" id="profil">
                          <br>
                          <img src="{{ asset('laporikan2/images/kantor.jpg') }}" class="img-responsive shadow" alt="">

                          <hr>
                          <div>
                              <h4><strong>Tugas Pokok</strong></h4>
                          </div>
                          <div style="text-align: justify">
                                Melaksanakan sebagian tugas Dinas Ketahanan Pangan, Pertanian dan Perikanan dibidang Perikanan <br>
                          </div>
                          <hr>
                          <div>
                              <h4><strong>Fungsi</strong></h4>
                              <div style="text-align: start">
                                  <span style="text-align: justify">
                                    1. Perumusan kebijakan teknis dalam bidang pangan, pertanian dan perikanan sesuai dengan kebijakan umum yang ditetapkan oleh Walikota;<br />
                                  </span>
                                  <span style="text-align: justify">
                                    2. Penyelenggaraan urusan pemerintahan dan pelayanan umum di bidang pangan, pertanian dan perikanan;<br>
                                  </span>
                              </div>
                              <div style="text-align: start">
                                  <span style="text-align: justify">
                                    3. Perumusan dan penetapan kebijakan operasional, pembinaan, pengaturan, pengendalian dan evaluasi terhadap hal-hal yang berkaitan dengan perikanan;<br />
                                  </span>
                              </div>
                          </div>
                          <hr>
                          <div>
                              <h4><strong>Tujuan</strong></h4>
                          </div>
                          <div style="text-align: justify">
                              Tujuan yang hendak dicapai Dinas Kependudukan dan Pencatatan Sipil yang <br>
                              telah menyelaraskan apa yang harus dilaksanakan sesuai dengan sumber daya <br>
                              dan kemampuan yang dimiliki serta kebijakan yang diambil.
                          </div>
                          <hr>
                      </div>
                      <!-- End Profil Dinas -->


                      <!-- Visi Misi -->
                      <div class="tab-pane" id="visi">
                          <br>
                          <div>
                              <h4><strong>Visi</strong></h4>
                          </div>
                          <div style="text-align: justify">
                                TERWUJUDNYA SUMBERDAYA PERIKANAN DAN MASYARAKAT YANG MAMPU <br>
                                MENDUKUNG AKTIVITAS PEREKONOMIAN KOTA BANJARMASIN
                          </div>
                          <div>
                              <br />
                              <hr>
                          </div>
                          <div>
                              <h4><strong>Misi</strong></h4>
                          </div>
                          <div style="text-align: justify">
                              
                                  1.  Meningkatkan kesejahteraan nelayan<br>
                                  3.  Menciptakan keseimbangan ekosistem sumberdaya alam yang mendukung pembangunan perikanan secara keberlanjutan<br>
                                  4.  Meningkatkan pelayanan di bidang perikanan

                          </div>
                      </div>
                      <!-- End Visi Misi -->

                      <!-- Struktur -->
                      <div class="tab-pane" id="struktur">
                          <h4>Struktur Organisasi</h4>
                          <img src="{{ asset('laporikan2/images/struktur.jpg') }}" class="img-responsive shadow" alt="">
                      </div>
                      <!-- End Struktur -->

                      <!-- Motto -->
                      <!-- End Motto -->

                </div>
                <!-- End Tab content -->

            </div>
            <!-- end main-content -->

            <hr>

            <!-- Footer -->
            @include('tools.footer')
                <!-- /footer -->
                <!-- shadow -->
        </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.js"></script>

</body>
</html>
