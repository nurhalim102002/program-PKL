<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = "laporan";
    protected $primarykey = "id";
    protected $fillable = [
        'id',
        'nama_pelapor',
        'no_telpon',
        'jenis_pelanggaran',
        'isi_laporan',
        'lampiran_bukti',
        'status',
        'lokasi',
        'delstatus',
    ];

    public function jenispelanggaran()
    {
        return $this->belongsTo(jenispelanggaran::class,"jenis_pelanggaran");
    }
}
