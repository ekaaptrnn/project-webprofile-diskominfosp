<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dokumen;

class DokumenController extends Controller
{
    // GET /api/dokumen — publik, dipakai halaman PPID
    public function index()
    {
        $dokumen = Dokumen::latest()->get();
        return response()->json($dokumen);
    }
}
