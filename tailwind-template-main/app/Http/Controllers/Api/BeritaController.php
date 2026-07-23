<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    // GET /api/berita — publik
    public function index()
    {
        $berita = Berita::where('status_publish', true)->with('author')->latest()->get();
        return response()->json($berita);
    }

    // GET /api/berita/{id} — publik
    public function show($id)
    {
        $berita = Berita::where('status_publish', true)->with('author')->findOrFail($id);

        // Tambah jumlah dilihat setiap kali diakses publik
        $berita->increment('views');

        return response()->json($berita);
    }

    // POST /api/berita — butuh login
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'status_publish' => 'boolean',
            'thumbnail' => 'nullable|image|max:2048',
        ], [
            'judul.required' => 'Judul berita wajib diisi',
            'judul.max' => 'Judul berita maksimal 255 karakter',
            'konten.required' => 'Konten berita wajib diisi',
        ]);

        $validated['author_id'] = $request->user()->id;

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('berita', 'public');
        }

        $berita = Berita::create($validated);

        return response()->json([
            'message' => 'Berita berhasil dibuat',
            'data' => $berita,
        ], 201);
    }

    // PUT /api/berita/{id} — butuh login
    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $validated = $request->validate([
            'judul' => 'sometimes|required|string|max:255',
            'konten' => 'sometimes|required|string',
            'status_publish' => 'boolean',
            'thumbnail' => 'nullable|image|max:2048',
        ], [
            'judul.required' => 'Judul berita wajib diisi',
            'konten.required' => 'Konten berita wajib diisi',
        ]);

        if ($request->hasFile('thumbnail')) {
            if ($berita->thumbnail) {
                Storage::disk('public')->delete($berita->thumbnail);
            }
            $validated['thumbnail'] = $request->file('thumbnail')->store('berita', 'public');
        }

        $berita->update($validated);

        return response()->json([
            'message' => 'Berita berhasil diperbarui',
            'data' => $berita,
        ]);
    }

    // DELETE /api/berita/{id} — butuh login
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if ($berita->thumbnail) {
            Storage::disk('public')->delete($berita->thumbnail);
        }

        $berita->delete();
        return response()->json(['message' => 'Berita berhasil dihapus']);
    }
}
