<?php

namespace App\Http\Middleware;

use App\Models\LogActivity as LogActivityModel;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class LogActivity
{
    // Route yang sudah punya logging spesifik sendiri di controller-nya
    protected array $excludedRoutes = ['login', 'logout'];

    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Skip kalau route ini sudah dicatat manual oleh controller-nya
        if (in_array($request->path(), $this->excludedRoutes)) {
            return $response;
        }

        $subject = $request->user()->name ?? 'Guest';
        $status = $response->getStatusCode() < 400 ? 'success' : 'failed';

        // Simpan ke database
        LogActivityModel::create([
            'subject' => $subject,
            'method' => $request->method(),
            'ip_address' => $request->ip(),
            'status' => $status,
        ]);

        // Simpan juga ke file (sesuai requirement dokumen — audit ganda)
        Log::channel('audit')->info(
            "{$subject} - {$request->method()} {$request->path()} - {$request->ip()} - {$status}"
        );

        return $response;
    }
}