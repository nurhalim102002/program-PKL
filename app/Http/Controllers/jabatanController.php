<?php

namespace App\Http\Controllers;

use App\Models\jabatan;
use Illuminate\Http\Request;

class jabatanController extends Controller
{
    public function Jabatan(){
        $jbt = Jabatan::orderBy('created_at', 'desc')->get();
        return view('halaman.admin.jabatan', compact('jbt'));
    }
    

    public function tambahJabatan(){
        return view('halaman.admin.tambah-jabatan');
    }

    public function simpanJabatan(Request $request){

        jabatan::create([
            'jabatan'=>$request->jabatan,
        ]);
        return redirect('jabatan');

    }

    public function editJabatan($id){

        $jbt = jabatan::findOrFail($id);
        return view('halaman.admin.edit-jabatan', compact('jbt'));
    }

    public function perubahanJabatan(Request $request, $id)
    {
        if ($request->id) {
            $jbt = jabatan::findOrFail($id);

            $dt = [
                'jabatan'=>$request->jabatan,
            ];
            $jbt->update($dt);
            return redirect('jabatan');
        }else{
            return back();
        }
    }

    public function hapusJabatan($id){
        $jbt = jabatan::findOrFail($id);
        $jbt->delete($jbt);
        return redirect('jabatan');
    }
}
