<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $fillable = [
        'prodi_name'
    ];

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'prodi_id', 'id');
    }

    public function matkul()
    {
        return $this->hasMany(Matkul::class, 'prodi_id', 'id');
    }

    public function dosen()
    {
        return $this->hasMany(Dosen::class, 'prodi_id', 'id');
    }
}
