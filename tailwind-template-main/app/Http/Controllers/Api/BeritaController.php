<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // GET /api/berita — publik
    public function index()
    {
        $berita = Berita::where('status_publish', true)->with('kategori', 'author')->latest()->get();
        return response()->json($berita);
    }

    // GET /api/berita/{id} — publik
    public function show($id)
    {
        $berita = Berita::where('status_publish', true)->with('kategori', 'author')->findOrFail($id);
        return response()->json($berita);
    }

    // POST /api/berita — butuh login
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'thumbnail' => 'nullable|string',
            'kategori_id' => 'nullable|exists:kategoris,id',
            'status_publish' => 'boolean',
        ]);

        $validated['author_id'] = auth()->id();

        $berita = Berita::create($validated);

        return response()->json([
            'message' => 'Berita berhasil dibuat',
            'data' => $berita,
        ],201);
    }

    // PUT /api/berita/{id} — butuh login
    public function update(Request $request, $id)
{
    $berita = Berita::findOrFail($id);

    $validated = $request->validate([
        'judul' => 'sometimes|required|string|max:255',
        'konten' => 'sometimes|required|string',
        'kategori_id' => 'nullable|exists:kategoris,id',
        'status_publish' => 'boolean',
    ], [
        'judul.required' => 'Judul berita wajib diisi',
        'konten.required' => 'Konten berita wajib diisi',
        'kategori_id.exists' => 'Kategori yang dipilih tidak ditemukan',
    ]);

    $berita->update($validated);

    return response()->json([
        'message' => 'Berita berhasil diperbarui',
        'data' => $berita,
    ]);
}

    // DELETE /api/berita/{id} — butuh login
    public function destroy($id)
    {
        Berita::findOrFail($id)->delete();
        return response()->json(['message' => 'Berita berhasil dihapus']);
    }
}
