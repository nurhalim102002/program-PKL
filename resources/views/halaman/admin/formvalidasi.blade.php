<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Validasi Laporan</title>
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
            <h1 class="m-0">Validasi Laporan</h1>
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
                <h3 class="card-title">Validasi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ url('simpan-validasi/'.$lpr->id) }}" method="post">
              {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status" id="status" style="width: 100%;" >
                        <option>Pending</option>
                        <option>Ditolak</option>
                        <option>Tervalidasi</option>
                    </select>
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
