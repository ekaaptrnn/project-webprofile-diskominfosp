<?php

namespace App\Helpers;

use App\Models\LogActivity;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Log; // 1. Tambahkan facade Log

class ActivityLogger
{
    public static function log($subject, $method, $status = 'success')
    {
        // 2. Simpan ke Database untuk kebutuhan tampilan dasbor
        $log = LogActivity::create([
            'subject' => $subject,
            'method' => $method,
            'ip_address' => Request::ip(),
            'status' => $status,
        ]);

        // 3. Tulis ke File System untuk cadangan forensik siber (FR-03)
        Log::info("Audit Log | Subject: {$subject} | Method: {$method} | IP: " . Request::ip() . " | Status: {$status}");

        return $log;
    }
}