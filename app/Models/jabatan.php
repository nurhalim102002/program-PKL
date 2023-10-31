<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    protected $table = "jabatan";
    protected $primarykey = "id";
    protected $fillable = [
        'id',
        'jabatan',
    ];

    public function jabatan()
    {
        return $this->hasMany(jenispelanggaran::class);
    }
}
