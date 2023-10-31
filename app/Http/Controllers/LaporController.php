<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\jenispelanggaran;


class LaporController extends Controller
{
    public function HalamanLapor(){
        $lpr = Laporan::with('jenispelanggaran')->where('delstatus','=',true)->latest()->get();
        $jns = jenispelanggaran::all();
        return view('halaman.lapor', compact('lpr', 'jns'));
    }

    public function LihatPengaduan(){
        $lpr = Laporan::with('jenispelanggaran')->where('delstatus','=',true)->latest()->get();
        $jns = jenispelanggaran::all();
        return view('halaman.lihatpengaduan', compact('lpr', 'jns'));
    }

    public function CaraPengaduan(){
        return view('halaman.carapengaduan');
    }

    public function ProfilBidang(){
        return view('halaman.profilbidang');
    }
}
