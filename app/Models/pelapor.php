<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelapor extends Model
{
    protected $table = "pelapor";
    protected $primarykey = "id";
    protected $fillable = [
        'id',
        'nama_pelapor',
        'no_telpon',
    ];
}
