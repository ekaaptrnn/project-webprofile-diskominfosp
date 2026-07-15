<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ThemeSetting;
use Illuminate\Http\Request;

class ThemeSettingController extends Controller
{
    // GET /api/theme — publik, dipakai React buat apply warna ke tampilan
    public function index()
    {
        $theme = ThemeSetting::latest()->first();

        // Kalau belum pernah diset, kasih default
        if (!$theme) {
            return response()->json([
                'primary_color_hex' => '#000000',
                'accent_color_hex' => '#ffffff',
            ]);
        }

        return response()->json($theme);
    }

    // PUT /api/theme — butuh login (Admin/Super Admin)
    public function update(Request $request)
    {
        $validated = $request->validate([
            'primary_color_hex' => 'required|string|max:7',
            'accent_color_hex' => 'required|string|max:7',
        ]);

        $validated['updated_by'] = $request->user()->id;

        // Selalu update baris yang sama (cuma ada 1 setting aktif)
        $theme = ThemeSetting::latest()->first();

        if ($theme) {
            $theme->update($validated);
        } else {
            $theme = ThemeSetting::create($validated);
        }

        return response()->json($theme);
    }
}
