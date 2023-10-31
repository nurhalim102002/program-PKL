<!DOCTYPE html>
<html lang="id">

<head>
    <title>Cara | Dispendukcapil Bangkalan</title>
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
                            <li><a href="{{ url('lihatpengaduan') }}">LIHAT PENGADUAN</a></li>
                            <li class="active"><a href="{{ url('carapengaduan') }}">CARA</a></li>
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

            <!-- content -->
            <div class="main-content">

                <h3>Cara Melapor</h3>
                <hr/>
                <img class="img-cara img-responsive shadow" src="{{ asset('laporikan2/images/') }}" alt="">
                <br>
        		<ol>
        			<!-- <li><p>Klik tombol &quot;Login&quot;, lalu isikan Username dan Password Anda.</p></li>
        			<li><p>Jika Anda belum terdaftar, maka klik tombol &quot;Register&quot; dan isikan data diri Anda lalu klik tombol &quot;Submit&quot;, maka Anda akan otomatis login ke Aplikasi</p></li>
        			<li><p>Buat Nama Samaran (Username) dan Kata Sandi (Password) yang Anda ketahui sendiri.</p></li>
        			<li><p>Gunakan nama yang unik dan tidak menggambarkan identitas Anda.</p></li>
        			<li><p>Klik menu &quot;Pengaduan&quot; untuk merekam pengaduan baru.</p></li>
        			<li><p>Klik tombol &quot;Tambah Pengaduan&quot; untuk menambahkan pengaduan baru.</p></li>
        			<li><p>Isi form Tambah Pengaduan sesuai informasi yang Anda ketahui, lalu klik tombol &quot;Lanjut&quot;.</p></li>
        			<li><p>Perhatikan beberapa hal di bawah ini:<br />Semua kotak yang diberi tanda (*) wajib diisi.<br />Pastikan informasi yang diberikan sedapat mungkin memenuhi unsur 4W 1H.</p></li>
        			<li><p>Jika Anda memiliki bukti dalam bentuk file seperti foto atau dokumen lain, silakan dilengkapi di halaman pengaduan, caranya:<br />Setelah membaca petunjuk untuk menyertakan lampiran, klik kotak kecil di bawah petunjuk tersebut, dan lanjutkan prosesnya.</p></li>
        			<li><p>Setelah selesai mengisi, silakan klik tombol &quot;Kirim&quot; untuk melanjutkan atau klik tombol &quot;Hapus&quot; untuk membatalkan proses pelaporan Anda.</p></li>
        			<li><p>Halaman berikutnya memberi kesempatan bagi Anda yang ingin mencetak nomor register pengaduan.</p></li>
        			<li><p>Catat dan simpan dengan baik Nama Samaran (Username) dan Kata Sandi (Password).</p></li>
        			<li><p>Simpan dengan baik nomor register yang Anda peroleh saat menunjukkan pengaduan untuk mengetahui status/tindak lanjut pengaduan yang Anda sampaikan.</p></li>
        			<li><p>Untuk Bantuan dan Saran mengenai cara melaporkan pengaduan, bisa ditanyakan melalui form Bantuan dan Saran yang telah tersedia di aplikasi.</p></li>
        			<li><p>Kementerian Komunikasi dan Informatika akan menghubungi Anda melalui saluran yang telah Anda cantumkan dalam form pengaduan apabila pengaduan yang Anda sampaikan belum memenuhi kriteria untuk ditindaklanjuti.</p></li> -->
        		</ol>

            <!-- end main-content -->
            </div>

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
