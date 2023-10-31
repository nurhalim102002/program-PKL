<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\User;
use App\Models\pegawai;
use App\Models\jenispelanggaran;

class AdminController extends Controller
{
    public function HomeAdmin(){
        $jumlahUser=User::count();
        $jumlahLaporan=Laporan::count();
        return view('halaman.admin.homeadmin', compact('jumlahUser', 'jumlahLaporan'));
    }

    public function DataLaporan(){

        $lpr = Laporan::with('jenispelanggaran')->where('delstatus','=',true)->latest()->get();
        $jns = jenispelanggaran::all();
        return view('halaman.admin.datalaporan', compact('lpr', 'jns'));
    }

    public function DataPelapor(){
        return view('halaman.admin.datapelapor');
    }

// DATA ADMIN =====================================================================
    public function DataAdmin(){

        $adm = User::with('pegawai')->latest()->get();
        $pgw = pegawai::all();
        return view('halaman.admin.dataadmin', compact('adm', 'pgw'));
    }

    public function tambahDataadmin(){
        $adm = User::with('pegawai')->latest()->get();
        $pgw = pegawai::all();
        return view('halaman.admin.tambah-dataadmin', compact('adm', 'pgw'));
    }

    public function simpanDataadmin(Request $request){

        User::create([
            'id_pegawai'=>$request->id_pegawai,
            'level'=>$request->level,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        return redirect('dataadmin');

    }

    public function EditDataAdmin($id)
    {
        $adm = User::with('pegawai')->findOrFail($id);
        $pgw = Pegawai::all();
        return view('halaman.admin.edit-dataadmin', compact('adm', 'pgw'));
    }


    
    public function simpanPerubahan(Request $request, $id)
    {
        if ($request->id) {
            $adm = User::findOrFail($id);

            $data = [
                'id_pegawai'=>$request->id_pegawai,
                'email'=>$request->email,
                'password'=>$request->password,
            ];
            $adm->update($data);
            return redirect('dataadmin');
        }else{
            return back();
        }
            
            
    }

    //public function HapusDataadmin($id){
    //    $adm = User::findOrFail($id);
    //    $data=['delstatus' => false,];
    //   $adm->update($data);
    //    return redirect('dataadmin');
    //}

    public function hapusDataadmin($id){
        $adm = User::findOrFail($id);
        $adm->delete($adm);
        return redirect('dataadmin');
    }


}


