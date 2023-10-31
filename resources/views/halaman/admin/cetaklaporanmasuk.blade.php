<html>

<head>

    <title>Sistem Pelaporan Illegal Fishing</title>
    <style type= "text/css">

    body {background-color : #ccc }

    .rangkasurat {width : 930px;margin:0 auto;background-color : #fff;padding: 20px;}

    table {border-bottom : 5px solid # 000; padding: 2px}

    .tengah {text-align : center;line-height: 5px;}

    .table1 {
    color: #232323;
    border-collapse: collapse;
    }
 
    .table1, td {
    border: 2px solid #050505;
    padding: 8px 14px;
    }

     </style >

</head>

<body>

<div class = "rangkasurat">

     <table  align="center">
                 <th> <img src="{{ asset('laporikan2/images/bjm2.jpg') }}" width="80px"> </th>
                 <th>  </th>
                 <th class = "tengah">
                       <h3>PEMERINTAH KOTA BANJARMASIN</h3>
                       <h2>DINAS KETAHANAN PANGAN, PERTANIAN DAN PERIKANAN</h2>
                       <p>Komplek Screen House</p>
                       <p>Jl. Pangeran Hidayatullah / Lingkar Dalam Utara Telp./Fax. 0511 – 3201327</p>
                       <p>Kel. Banua Anyar Kec. Banjarmasin Timur 70239 Email <font color='blue'>distankan_bjm@yahoo.co.id</font></p>
                 </th>
                 
     </table >
     <br><br><br><br>

     <table class="table1" align="center">
        <tr>
            <th>Id Laporan</th>
            <th>Nama Pelapor</th>
            <th>No Telpon</th>
            <th>Jenis Pelanggaran</th>
            <th>Isi Laporan</th>
            <th>Status</th>
            <th>Lokasi</th>
        </tr>
        @foreach ($cetak as $item)
        <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->nama_pelapor }}</td>
          <td>{{ $item->no_telpon }}</td>
          <td>{{ $item->jenispelanggaran->jenis_pelanggaran}}</td>
          <td>{{ $item->isi_laporan }}</td>
          <td>{{ $item->status }}</td>
          <td>{{ $item->lokasi }}</td>
        </tr>
        @endforeach
    </table>
    </div>

</div>

</body>

</html>