<?php

namespace App\Http\Controllers;

use App\Models\pelapor;
use Illuminate\Http\Request;

class pelaporController extends Controller
{
    public function DataPelapor(){

        $plp = pelapor::all();
        return view('halaman.admin.pelapor', compact('plp'));
    }
    public function hapusDatapelapor($id){
        $plp = pelapor::findOrFail($id);
        $plp->delete($plp);
        return redirect('pelapor');
    }
}
