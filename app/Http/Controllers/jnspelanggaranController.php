<?php

namespace App\Http\Controllers;

use App\Models\jenispelanggaran;
use Illuminate\Http\Request;

class jnspelanggaranController extends Controller
{
    public function JenisPelanggaran(){

        $jns = jenispelanggaran::where('delstatus','=',true)->latest()->get();
        return view('halaman.admin.jenispelanggaran', compact('jns'));
    }

    public function tambahJenispelanggaran(){
        return view('halaman.admin.tambah-jenispelanggaran');
    }

    public function simpanJenispelanggaran(Request $request){

        jenispelanggaran::create([
            'jenis_pelanggaran'=>$request->jenis_pelanggaran,
        ]);
        return redirect('jenispelanggaran');

    }

    public function editJenispelanggaran($id){

        $jns = jenispelanggaran::findOrFail($id);
        return view('halaman.admin.edit-jenispelanggaran', compact('jns'));
    }

    public function perubahanJenispelanggaran(Request $request, $id)
    {
        if ($request->id) {
            $jns = jenispelanggaran::findOrFail($id);

            $dt = [
                'jenis_pelanggaran'=>$request->jenis_pelanggaran,
            ];
            $jns->update($dt);
            return redirect('jenispelanggaran');
        }else{
            return back();
        }
    }

    public function hapusJenispelanggaran($id){
        $jns = jenispelanggaran::findOrFail($id);
        $jns->delete($jns);
        return redirect('jenispelanggaran');
    }
}
