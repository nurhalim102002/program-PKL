<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Validasi Laporan</title>
  @include('tools.admin.head')
  <style>
    /* CSS untuk tombol validasi */
    .btn-validasi {
      padding: 5px 10px;
      background-color: #28a745;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn-validasi:hover {
      background-color: #218838;
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
            <h1 class="m-0">Validasi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Validasi Laporan</li>
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
                <h3 class="card-title">Tabel Validasi Laporan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
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
                  @foreach ($val as $item)
                  <tr>
                    <td>{{ $item->nama_pelapor }}</td>
                    <td>{{ $item->no_telpon }}</th>
                    <td>{{ $item->jenispelanggaran->jenis_pelanggaran }}</td>
                    <td>{{ $item->isi_laporan }}</td>
                    <td><a href="{{asset('img/'.$item->lampiran_bukti)}}" target="_blank" rel="noopener noreferrer">Lihat</a></td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->lokasi }}</td>
                    <td>
                      <a href="{{ url('formvalidasi/'.$item->id) }}" type="button" class="btn btn-validasi"> Validasi</a>
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

<script>
  function validasiLaporan(url) {
    // Fungsi JavaScript untuk menangani validasi laporan
    // Di sini Anda dapat menambahkan logika validasi yang sesuai dengan kebutuhan Anda
    // Setelah validasi berhasil, Anda dapat melakukan perubahan status atau tindakan lainnya pada laporan.
    // Misalnya, dengan menggunakan AJAX untuk mengirim permintaan ke server.

    // Contoh menggunakan AJAX (asumsi Anda menggunakan jQuery):
    $.ajax({
      url: url,
      method: 'POST',
      dataType: 'json',
      success: function (response) {
        if (response.success) {
          // Laporan berhasil divalidasi, lakukan tindakan setelah validasi di sini
          alert('Laporan berhasil divalidasi.');
          // Di sini Anda dapat melakukan perubahan tampilan atau tindakan lainnya yang diperlukan.
        } else {
          alert('Gagal melakukan validasi laporan.');
        }
      },
      error: function () {
        alert('Terjadi kesalahan saat melakukan validasi laporan.');
      }
    });
  }
</script>
</body>
</html>
