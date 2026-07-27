<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pejabat extends Model
{
    protected $fillable = [
        'nama', 'jabatan', 'foto', 'urutan', 'tampil_utama'
    ];

    protected $casts = [
        'tampil_utama' => 'boolean',
    ];
}
