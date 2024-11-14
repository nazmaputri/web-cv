<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use Hasfactory;

    protected $fillable = [
        'universitas',
        'tahun_mulai',
        'tahun_akhir',
        'deskripsi',
    ];
}
