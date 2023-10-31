<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\jenispelanggaran;
use Illuminate\Http\Request;

class validasiController extends Controller
{
    // VALIDASI LAPORAN ================================================================
    public function ValidasiLaporan(){

        $val = Laporan::with('jenispelanggaran')->where('delstatus','=',true)->latest()->get();
        $jns = jenispelanggaran::all();
        return view('halaman.admin.validasilaporan', compact('val', 'jns'));
    }

    public function formValidasi($id){
        $lpr = Laporan::findOrFail($id);
        return view('halaman.admin.formvalidasi', compact('lpr'));
    }

    public function simpanValidasi(Request $request, $id){
        $lpr = Laporan::findOrFail($id);

            $dt = [
                'status' => $request->status,

            ];
            $lpr->update($dt);
            return redirect('validasilaporan');
    }
}
