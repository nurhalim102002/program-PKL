<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>LAPORAN</title>
    <style type="text/css">
        body {
            background-color: #ccc;
        }

        .rangkasurat {
            width: 830px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
        }

        table {
            border-bottom: 0px solid #000;
            padding: 2px;
        }

        .tengah {
            text-align: center;
            line-height: 10px;
        }

        .kanan {
            text-align: right;
        }

        .table1 {
            border-collapse: collapse;
        }

        .table1,
        td {
            padding: 14px 28px;
        }
    </style>
</head>

<body>
    <div class="rangkasurat">
        <table align="center">
            <tr>
                <td>
                    <img src="{{ asset('laporikan2/images/bjm2.jpg') }}" width="80px">
                </td>
                <td class="tengah">
                    <h3>PEMERINTAH KOTA BANJARMASIN</h3>
                    <h2>DINAS KETAHANAN PANGAN, PERTANIAN DAN</h2>
                    <h2>PERIKANAN</h2>
                    <p>Komplek Screen House</p>
                    <p>Jl. Pangeran Hidayatullah / Lingkar Dalam Utara Telp./Fax. 0511 – 3201327</p>
                    <p>Kel. Banua Anyar Kec. Banjarmasin Timur 70239 Email <font color='blue'>distankan_bjm@yahoo.co.id</font></p>
                </td>
            </tr>
        </table>
        <hr> <!-- Tambahkan garis bawah di sini -->
        <table align="center">
            <tr>
                <td class="tengah">
                    <h3>LAPORAN</h3>
                    <h3>PELANGGARAN ILLEGAL FISHING</h3>
                </td>
            </tr>
        </table>
        <hr> <!-- Tambahkan garis bawah di sini -->
        <br>
        <table class="table1 no-border table-hover">
            <tr>
                <td></td>
                <td></td>
                <td width="10px"></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>

        <table id="example2" class="table1 no-border table-hover">
            <tr>
                <td width="100px"> Nama </td>
                <td width="1x">:</td>
                <td>{{ $single->nama_pelapor }}</td>
            </tr>
            <tr>
                <td width="100px"> Lokasi </td>
                <td width="1x">:</td>
                <td>{{ $single->lokasi }}</td>
            </tr>
            <tr>
                <td width="100px"> Isi Laporan </td>
                <td width="1x">:</td>
                <td>{{ $single->isi_laporan }}</td>
            </tr>
            <tr>
                <td width="100px"> Bukti Dukungan </td>
                <td width="1x">:</td>
                <td><img src="{{ asset('img/'. $single->lampiran_bukti) }}" height="50%" width="50%"></td>
            </tr>
        </table>

        <table id="example2" class="table1 no-border table-hover">
            <tr>
                <td>
                    <font size="4"></font><br>
                </td>
            </tr>
        </table>

        <table id="example2" class="table no-border table-hover">
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>

        <table id="example2" class="table no-border table-hover">
            <tr>
                <td>
                    <font size="4"></font><br>
                </td>
            </tr>
        </table>

        <table id="example2" class="table1 no-border table-hover">
            <tr>
                <td>
                    <font size="4"></font><br>
                </td>
            </tr>
        </table>
        <br><br><br><br>

        <body style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
        <div class="table-container" style="margin-left: 100px; margin-right: 120px;">
            <table class="table1" style="width: 100%; max-width: 785px; text-align: center;">
                <!-- konten tabel di sini -->
            </table>
        </div>
        <div style="display: flex; justify-content: space-between; width: 800px; max-width: 100%; margin-top: 20px;">
            <div style="width: 45%; text-align: left; margin-left: 115px;"></div>
            <div style="width: 50%; text-align: center;">Banjarmasin, ....................</div>
        </div>
        </body>

        <br><br><br><br><br><br>

        <body style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
        <div class="table-container" style="margin-left: 100px; margin-right: 120px;">
            <table class="table1" style="width: 100%; max-width: 785px; text-align: center;">
                <!-- konten tabel di sini -->
            </table>
        </div>
        <div style="display: flex; justify-content: space-between; width: 825px; max-width: 100%; margin-top: 20px;">
            <div style="width: 45%; text-align: left; margin-left: 100px;">
                <span style="border-bottom: 1px solid black; padding-bottom: 5px; font-weight: bold;"></span>
            </div>
        
            <div style="width: 50%; text-align: center;">
                <span style="border-bottom: 1px solid black; padding-bottom: 5px; font-weight: bold;">{{ $single->nama_pelapor }}</span>
            </div>
        
        </div>
        </body>


        <body style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
        <div class="table-container" style="margin-left: 100px; margin-right: 120px;">
            <table class="table1" style="width: 100%; max-width: 750px; text-align: center;">
                <!-- konten tabel di sini -->
            </table>
        </div>
        <div style="display: flex; justify-content: space-between; width: 825px; max-width: 100%; margin-top: 20px;">
            <div style="width: 45%; text-align: left; margin-left: 100px;"></div>
            
            <div style="width: 50%; text-align: center;"></div>
            
        </div>
        </body>
            <!-- Bagian selanjutnya dari kode Anda -->
        </div>
</body>

<script>
    window.print();
</script>

</html>
