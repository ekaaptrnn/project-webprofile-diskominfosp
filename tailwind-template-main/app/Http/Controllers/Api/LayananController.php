<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        return response()->json(Layanan::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_layanan' => 'required|string',
            'icon_path' => 'nullable|string',
            'url_eksternal' => 'required|string',
        ]);

        return response()->json(Layanan::create($validated), 201);
    }

    public function update(Request $request, $id)
    {
        $layanan = Layanan::findOrFail($id);
        $layanan->update($request->all());
        return response()->json($layanan);
    }

    public function destroy($id)
    {
        Layanan::findOrFail($id)->delete();
        return response()->json(['message' => 'Layanan berhasil dihapus']);
    }
}
