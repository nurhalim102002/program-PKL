<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Edit Data Laporan</title>
    @include('tools.admin.head')
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
            <h1 class="m-0">Edit Data Laporan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data Laporan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <!-- general form elements -->
        <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Data Laporan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ url('edit-datalaporan/'.$lpr->id) }}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pelapor</label>
                    <input type="text" class="form-control" id="nama_pelapor" placeholder="Enter email" value="{{$jns->nama_pelapor}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nomor Telepon</label>
                    <input type="text" class="form-control" id="no_telpon" placeholder="Password" value="{{$jns->no_telpon}}">
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
                    <label for="isi_laporan">Isi Laporan</label>
                    <input type="text" class="form-control" id="isi_laporan" placeholder="Password" value="{{$jns->isi_laporan}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Lampiran Bukti</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="lampiran_bukti"  value="{{$jns->lampiran_bukti}}">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="btn btn-primary">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="isi_laporan">Lokasi</label>
                    <input type="text" class="form-control" id="isi_laporan" placeholder="Password" value="{{$jns->lokasi}}">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ url('datalaporan') }}" type="button" class="btn btn-danger">Batal</a>
                </div>
              </form>
        </div>
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
