<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class About extends Model
{
    use HasFactory;

    protected $table = 'about';

    protected $fillable = [
        'judul',
        'deskripsi',
        'tanggal_lahir',
        'alamat',
        'negara',
        'kota',
        'provinsi',
        'email',
        'no_telp',
    ];

    public function getUmurAttribute()
    {
        if ($this->tanggal_lahir) {
            return Carbon::parse($this->tanggal_lahir)->age;
        }

        return null; 
    }
}

