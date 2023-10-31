<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table = "pegawai";
    protected $primarykey = "id";
    protected $fillable = [
        'id',
        'nama_pegawai',
        'alamat',
        'id_jabatan',
    ];

    public function jabatan()
    {
        return $this->belongsTo(jabatan::class,"id_jabatan");
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
