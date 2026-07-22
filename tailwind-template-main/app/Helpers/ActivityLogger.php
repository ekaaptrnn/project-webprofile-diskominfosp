<?php

namespace App\Helpers;

use App\Models\LogActivity;
use Illuminate\Support\Facades\Request;

class ActivityLogger
{
    public static function log($subject, $method, $status = 'success', $userId = null, $description = null)
    {
        return LogActivity::create([
            'user_id'     => $userId,
            'subject'     => $subject,
            'method'      => $method,
            'description' => $description,
            'ip_address'  => Request::ip(),
            'status'      => $status,
            'created_at'  => now(),
        ]);

        Log::channel('audit')->info(sprintf(
            '[%s] user_id=%s subject=%s method=%s ip=%s status=%s description=%s',
            now()->toDateTimeString(),
            $userId ?? 'guest',
            $subject,
            $method,
            $ip,
            $status,
            $description
        ));
    }
}