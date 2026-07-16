<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // GET /api/users — lihat semua admin
    public function index()
    {
        return response()->json(User::with('role')->get());
    }

    // POST /api/users — bikin admin baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'role_id' => 'required|exists:roles,id',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        $user = User::create($validated);

        return response()->json($user, 201);
    }

    // PUT /api/users/{id} — ubah role/data admin
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->except('password'));
        return response()->json($user);
    }

    // DELETE /api/users/{id} — hapus akses admin
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return response()->json(['message' => 'User berhasil dihapus']);
    }
}
