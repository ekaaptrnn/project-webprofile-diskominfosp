<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogActivity extends Model
{
    protected $fillable = ['subject', 'method', 'ip_address', 'status'];
}
