<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    protected $fillable = [
        'judul', 'kategori', 'file_path', 'format', 'ukuran_kb'
    ];

    public function getUkuranFormattedAttribute(): string
    {
        $kb = $this->ukuran_kb;
        if ($kb >= 1024) {
            return round($kb / 1024, 1) . ' MB';
        }
        return $kb . ' KB';
    }

    protected $appends = ['ukuran_formatted'];
}