<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\pelapor;

class LaporanController extends Controller
{
    



    public function SimpanLaporan(Request $request) {
    $request->validate([
        'lampiran_bukti' => 'required|file|mimes:pdf,doc,jpg,png,jpeg,docx|max:2048',
    ]);

    // Mulai transaksi
    DB::beginTransaction();

    try {
        $buk = $request->file('lampiran_bukti');
        $nmbuk = time().rand(100,999).'.'.$buk->getClientOriginalName();
        $buk->move(public_path().'/img', $nmbuk);

        // Simpan data ke tabel 'laporan'
        Laporan::create([
            'nama_pelapor' => $request->nama_pelapor,
            'no_telpon' => $request->no_telpon,
            'jenis_pelanggaran' => $request->jenis_pelanggaran,
            'isi_laporan' => $request->isi_laporan,
            'lampiran_bukti' => $nmbuk,
            'status' => 'pending',
            'lokasi' => $request->lokasi,
        ]);

        // Simpan data ke tabel 'laporan_pelapor'
        pelapor::create([
            'nama_pelapor' => $request->nama_pelapor,
            'no_telpon' => $request->no_telpon,
        ]);

        // Commit transaksi jika berhasil
        DB::commit();
        
        return redirect('lapor');
    } catch (\Exception $e) {
        // Rollback transaksi jika ada kesalahan
        DB::rollBack();

        // Handle kesalahan atau tampilkan pesan kesalahan
        return back()->with('error', 'Terjadi kesalahan saat menyimpan data.');
    }
}



    public function editdataLaporan(){
        
        return view('halaman.admin.edit-datalaporan');
    }

    public function perubahandataLaporan(Request $request, $id)
    {
        if ($request->id) {
            $lpr = Laporan::findOrFail($id);

            $dt = [
                'nama_pelapor' => $request->nama_pelapo,
                'no_telpon' => $request->no_telpon,
                'jenis_pelanggaran' => $request->jenis_pelanggara,
                'isi_laporan' => $request->isi_lapora,
                'lampiran_bukti' => $request->lampiran_bukt,
                'lokasi' => $request->lokas,

            ];
            $lpr->update($dt);
            return redirect('datalaporan');
        }else{
            return back();
        }
               
    }

    public function hapusLaporan($id){
        //$lpr = Laporan::findOrFail($id);
        //$data=['delstatus' => false,];
        //$lpr->update($data);
        //return redirect('datalaporan');

        $lpr = Laporan::findOrFail($id);
        $lpr->delete($lpr);
        return redirect('datalaporan');
    }

    public function cetakLaporanmasuk(){
        $cetak = Laporan::where('delstatus','=',true)->latest()->get();
        return view('halaman.admin.cetaklaporanmasuk', compact('cetak'));
    }

    public function singgleLaporan($id){
        $single = Laporan::with('jenispelanggaran')->where([
            ['id', '=', $id]
        ])->first();
        return view('halaman.admin.singgle-laporan', compact('single'));
    }
}
