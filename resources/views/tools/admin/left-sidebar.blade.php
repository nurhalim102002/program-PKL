<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('laporikan2/admin/dist/img/LogoPemko.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Bidang Perikanan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('homeadmin') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                @if(auth()->user()->level=="kabid")
                <li class="nav-item">
                    <a href="{{ url('validasilaporan') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Validasi Laporan
                        </p>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a href="{{ url('datalaporan') }}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Data Laporan
                        </p>
                    </a>
                </li>
                @if(auth()->user()->level=="admin")
                <li class="nav-item">
                    <a href="{{ url('pelapor') }}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Data Pelapor
                        </p>
                    </a>
                </li>
                @endif
                @if(auth()->user()->level=="admin")
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Master Data
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        
                        <li class="nav-item">
                            <a href="{{ url('jenispelanggaran') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jenis Pelanggaran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('datapegawai') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pegawai</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('jabatan') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jabatan</p>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                @endif
                @if(auth()->user()->level=="admin")
                <li class="nav-header">ADMIN</li>
                <li class="nav-item">
                    <a href="{{ url('dataadmin') }}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Data Admin
                        </p>
                    </a>
                </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
