<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        return response()->json(Kategori::where('is_publish', true)->get());
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required|string',
            'is_publish' => 'boolean',
        ]);

        return response()->json(Kategori::create($validated), 201);
    }

    public function update(Request $request, $id)
    {
    $kategori = Kategori::findOrFail($id);
    $kategori->update($request->all());
    return response()->json($kategori);
    }

    public function destroy($id)
    {
    Kategori::findOrFail($id)->delete();
    return response()->json(['message' => 'Kategori berhasil dihapus']);
}
}
