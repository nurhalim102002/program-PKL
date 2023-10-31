<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenispelanggaran extends Model
{
    protected $table = "jenispelanggaran";
    protected $primarykey = "id";
    protected $fillable = [
        'id',
        'jenis_pelanggaran',
        'delstatus',
    ];

    public function jenispelanggaran()
    {
        return $this->hasMany(jenispelanggaran::class);
    }
}
