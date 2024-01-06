<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nim',
        'prodi_id'
    ];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class,'prodi_id','id');
    }
}
