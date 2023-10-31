<?php

use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LaporController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\jnspelanggaranController;
use App\Http\Controllers\validasiController;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\jabatanController;
use App\Http\Controllers\pelaporController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/lapor',[ LaporController::class,'HalamanLapor' ]);
route::post('/simpan-laporan',[ LaporanController::class,'SimpanLaporan' ]);
route::get('/lihatpengaduan',[ LaporController::class,'LihatPengaduan' ]);
route::get('/carapengaduan',[ LaporController::class,'CaraPengaduan' ]);
route::get('/profilbidang',[ LaporController::class,'ProfilBidang' ]);

// LOGIN ===============================================================================
route::get('/login',[ LoginController::class,'tampilLogin' ])->name('login');
route::get('/register',[ LoginController::class,'tampilHalamanRegister' ]);

route::post('/post-login',[ LoginController::class,'postLogin' ])->name('post-login');
route::get('/logout',[ LoginController::class,'logout' ]);


route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    // ADMIN ========================================================================
    route::get('/datapelapor',[ AdminController::class,'DataPelapor' ]);
    route::get('/dataadmin',[ AdminController::class,'DataAdmin' ]);

    route::get('/tambah-dataadmin',[ AdminController::class,'tambahDataAdmin' ]);
    route::post('/simpan-admin',[ AdminController::class,'simpanDataadmin' ]);

    // LAPORAN ===========================================================================
    route::get('/edit-datalaporan',[ LaporanController::class,'editdataLaporan' ]);
    route::post('/perubahan-datalaporan/{id}',[ LaporanController::class,'perubahandataLaporan' ]);
    route::get('/hapus-datalaporan/{id}',[ LaporanController::class,'hapusLaporan' ]);
    

    // DATA ADMIN ==================================================================
    
    route::get('/edit-dataadmin/{id}',[ AdminController::class,'EditDataAdmin' ]);
    
    route::post('/simpan-perubahan/{id}',[ AdminController::class,'simpanPerubahan' ]);
    route::get('/hapus-dataadmin/{id}',[ AdminController::class,'HapusDataadmin' ]);

    // JENIS PELANGGARAN ===================================================================
    route::get('/jenispelanggaran',[ jnspelanggaranController::class,'JenisPelanggaran' ]);
    route::get('/tambah-jenispelanggaran',[ jnspelanggaranController::class,'tambahJenispelanggaran' ]);
    route::post('/simpan-jenispelanggaran',[ jnspelanggaranController::class,'simpanJenispelanggaran' ]);
    route::get('/edit-jenispelanggaran/{id}',[ jnspelanggaranController::class,'editJenispelanggaran' ]);
    route::post('/perubahan-jenispelanggaran/{id}',[ jnspelanggaranController::class,'perubahanJenispelanggaran' ]);
    route::get('/hapus-jenispelanggaran/{id}',[ jnspelanggaranController::class,'hapusJenispelanggaran' ]);

    // PEGAWAI===============================================================================
    route::get('/datapegawai',[ pegawaiController::class,'DataPegawai' ]);
    route::get('/tambah-pegawai',[ pegawaiController::class,'tambahPegawai' ]);
    route::post('/simpan-pegawai',[ pegawaiController::class,'simpanPegawai' ]);
    route::get('/edit-pegawai/{id}',[ pegawaiController::class,'editPegawai' ]);
    route::post('/perubahan-pegawai/{id}',[ pegawaiController::class,'perubahanPegawai' ]);
    route::get('/hapus-pegawai/{id}',[ pegawaiController::class,'hapusPegawai' ]);

    // JABATAN====================================================================================
    route::get('/jabatan',[ jabatanController::class,'Jabatan' ]);
    route::get('/tambah-jabatan',[ jabatanController::class,'tambahJabatan' ]);
    route::post('/simpan-jabatan',[ jabatanController::class,'simpanJabatan' ]);
    route::get('/hapus-jabatan/{id}',[ jabatanController::class,'hapusJabatan' ]);
    route::get('/edit-jabatan/{id}',[ jabatanController::class,'editJabatan' ]);
    route::post('/perubahan-jabatan/{id}',[ jabatanController::class,'perubahanJabatan' ]);

    // PELAPOR ====================================================================================
    route::get('/pelapor',[ pelaporController::class,'DataPelapor' ]);
    route::get('/hapus-pelapor/{id}',[ pelaporController::class,'hapusDatapelapor' ]);

});

route::group(['middleware' => ['auth', 'ceklevel:admin,kabid']], function () {
    route::get('/homeadmin',[ AdminController::class,'HomeAdmin' ]);
    route::get('/datalaporan',[ AdminController::class,'DataLaporan' ]);
    route::get('/validasilaporan',[ validasiController::class,'ValidasiLaporan' ]);
    route::get('/cetaklaporanmasuk',[ LaporanController::class,'cetakLaporanmasuk' ]);
    route::get('/singgle-laporan/{id}',[ LaporanController::class,'singgleLaporan' ]);
});



route::group(['middleware' => ['auth', 'ceklevel:kabid']], function () {
    route::get('/validasilaporan',[ validasiController::class,'ValidasiLaporan' ]);
    route::get('/formvalidasi/{id}',[ validasiController::class,'formValidasi' ]);
    route::post('/simpan-validasi/{id}',[ validasiController::class,'simpanValidasi' ]);
});
