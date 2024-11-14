<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

    class Profile extends Model
{
    protected $fillable = [ 
        'foto', 
        'nama', 
        'pekerjaan', 
        'whatsapp',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'linkedin',
        'cv_path'
    ];    

}