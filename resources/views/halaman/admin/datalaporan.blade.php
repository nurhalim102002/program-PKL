<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Data Laporan</title>
  @include('tools.admin.head')

  <!-- Tambahkan CSS berikut -->
  <style>
    th {
      text-align: center;
    }

    /* Gaya untuk paginasi */
    .pagination {
      display: inline-block;
    }

    .pagination a {
      color: #333;
      float: left;
      padding: 8px 16px;
      text-decoration: none;
      transition: background-color .3s;
    }

    .pagination a.active {
      background-color: #007bff;
      color: #fff;
    }

    .pagination a:hover:not(.active) {
      background-color: #ddd;
    }
  </style>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  @include('tools.admin.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('tools.admin.left-sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Laporan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Laporan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Data Laporan</h3>
                <div class="dropdown no-arrow text-right">
                    <a class="btn btn-primary" href="{{ url('cetaklaporanmasuk') }}">
                      Cetak
                    </a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <td>No</th>
                    <th>Nama Pelapor</th>
                    <th>No Telpon</th>
                    <th>Jenis Pelanggaran</th>
                    <th>Isi Laporan</th>
                    <th>Lampiran Bukti</th>
                    <th>Status</th>
                    <th>Lokasi</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @php $no = 1; @endphp
                  @foreach ($lpr as $item)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->nama_pelapor }}</td>
                    <td>{{ $item->no_telpon }}</th>
                    <td>{{ $item->jenispelanggaran->jenis_pelanggaran }}</td>
                    <td>{{ $item->isi_laporan }}</td>
                    <td><a href="{{asset('img/'.$item->lampiran_bukti)}}" target="_blank" rel="noopener noreferrer">Lihat</a></td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->lokasi }}</td>
                    <!-- ... Bagian sebelumnya ... -->
                    <td>
                      <a href="{{ url('singgle-laporan/'.$item->id) }}" type="button" class="btn btn-primary btn-sm fas fa-print"> Cetak</a>
                      @if(auth()->user()->level=="admin")
                      <a href="{{ url('hapus-datalaporan/'.$item->id) }}" type="button" class="btn btn-danger btn-sm fas fa-trash-alt"> Hapus</a>
                      @endif
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('tools.admin.footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('tools.admin.script')
</body>
</html>
