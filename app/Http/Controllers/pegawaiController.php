<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;
use App\Models\jabatan;

class pegawaiController extends Controller
{
    public function DataPegawai(){

        $pgw = pegawai::with('jabatan')->latest()->get();
        $jbt = jabatan::all();
        return view('halaman.admin.datapegawai', compact('pgw', 'jbt'));
    }

    public function tambahPegawai(){

        $pgw = pegawai::with('jabatan')->latest()->get();
        $jbt = jabatan::all();
        return view('halaman.admin.tambah-pegawai', compact('pgw', 'jbt'));
    }

    public function simpanPegawai(Request $request){

        pegawai::create([
            'nama_pegawai'=>$request->nama_pegawai,
            'alamat'=>$request->alamat,
            'id_jabatan'=>$request->id_jabatan,
        ]);
        return redirect('datapegawai');

    }

    public function editPegawai($id){

        $pgw = pegawai::with('jabatan')->findOrFail($id);
        $jbt = jabatan::all();
        return view('halaman.admin.edit-pegawai', compact('pgw', 'jbt'));
    }

    public function perubahanPegawai(Request $request, $id)
    {
        if ($request->id) {
            $pgw = pegawai::findOrFail($id);

            $dt = [
                'nama_pegawai'=>$request->nama_pegawai,
                'alamat'=>$request->alamat,
                'id_jabatan'=>$request->id_jabatan,
            ];
            $pgw->update($dt);
            return redirect('datapegawai');
        }else{
            return back();
        }
    }

    public function hapusPegawai($id){
        $pgw = pegawai::findOrFail($id);
        $pgw->delete($pgw);
        return redirect('datapegawai');
    }
}
