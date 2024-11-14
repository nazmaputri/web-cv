<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $table = 'experience';

    protected $fillable = [
        'pekerjaan',
        'tahun_mulai',
        'tahun_akhir',
        'tempat_kerja',
        'deskripsi',
    ];
}
