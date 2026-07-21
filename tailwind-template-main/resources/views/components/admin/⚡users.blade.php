<?php

use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component
{
    use WithPagination;

    public bool $showModal = false;
    public ?int $editingId = null;

    public string $name = '';
    public string $email = '';
    public string $password = '';
    public $role_id = '';

    public function openCreate(): void
    {
        $this->reset(['editingId', 'name', 'email', 'password', 'role_id']);
        $this->showModal = true;
    }

    public function openEdit(int $id): void
    {
        $user = User::findOrFail($id);
        $this->editingId = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role_id = $user->role_id;
        $this->password = '';
        $this->showModal = true;
    }

    public function save(): void
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $this->editingId,
            'role_id' => 'required|exists:roles,id',
        ];
        $rules['password'] = $this->editingId ? 'nullable|min:8' : 'required|min:8';

        $this->validate($rules);

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'role_id' => $this->role_id,
        ];
        if ($this->password) {
            $data['password'] = bcrypt($this->password);
        }

        if ($this->editingId) {
            User::findOrFail($this->editingId)->update($data);
        } else {
            User::create($data + ['status' => 'active']);
        }

        $this->showModal = false;
        session()->flash('users-saved', 'Akun berhasil disimpan!');
    }

    public function toggleStatus(int $id): void
    {
        $user = User::findOrFail($id);

        if ($user->id === auth()->id()) {
            session()->flash('users-error', 'Tidak bisa menonaktifkan akun sendiri.');
            return;
        }

        $user->status = $user->status === 'active' ? 'inactive' : 'active';
        $user->save();
    }

    public function delete(int $id): void
    {
        if ($id === auth()->id()) {
            session()->flash('users-error', 'Tidak bisa menghapus akun sendiri.');
            return;
        }

        User::findOrFail($id)->delete();
        session()->flash('users-saved', 'Akun berhasil dihapus.');
    }

    public function with(): array
    {
        return [
            'users' => User::with('role')->latest()->paginate(10),
            'roles' => Role::all(),
        ];
    }
}; ?>

<div class="trezo-card bg-white dark:bg-[#0c1427] rounded-md">
    <div class="p-[25px] flex items-center justify-between border-b border-gray-100 dark:border-[#172036]">
        <h3 class="font-serif text-xl text-black dark:text-white">Daftar Akun Admin</h3>
        <button wire:click="openCreate" class="flex items-center gap-2 px-4 py-2 rounded-md bg-blue-600 text-white text-sm font-medium hover:bg-blue-700">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
            + Tambah Akun
        </button>
    </div>

    @if (session('users-saved'))
        <div class="mx-[25px] mt-[20px] flex items-center justify-between rounded-md bg-green-50 border border-green-200 px-4 py-3 text-sm text-green-700">
            <span class="flex items-center gap-2">
                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                {{ session('users-saved') }}
            </span>
            <button class="text-green-600 hover:text-green-800">&times;</button>
        </div>
    @endif
    @if (session('users-error'))
        <div class="mx-[25px] mt-[20px] rounded-md bg-red-100 px-4 py-3 text-sm text-red-700">
            {{ session('users-error') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm">
            <thead>
                <tr class="border-b border-gray-100 dark:border-[#172036] text-gray-500 dark:text-gray-400 uppercase text-xs tracking-wider font-serif">
                    <th class="p-[15px]">Nama</th>
                    <th class="p-[15px]">Email</th>
                    <th class="p-[15px]">Role</th>
                    <th class="p-[15px]">Status</th>
                    <th class="p-[15px]">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="border-b border-gray-100 dark:border-[#172036] text-black dark:text-white">
                        <td class="p-[15px]">
                            <div class="flex items-center gap-3">
                                <span class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 text-blue-700 text-xs font-semibold">
                                    {{ strtoupper(substr($user->name, 0, 1)) }}
                                </span>
                                {{ $user->name }}
                            </div>
                        </td>
                        <td class="p-[15px] text-gray-600 dark:text-gray-300">{{ $user->email }}</td>
                        <td class="p-[15px]">
                            <span class="px-3 py-1 rounded-full text-xs font-medium border border-gray-200 dark:border-[#172036] text-gray-700 dark:text-gray-300">
                                {{ $user->role->name ?? '-' }}
                            </span>
                        </td>
                        <td class="p-[15px]">
                            <button wire:click="toggleStatus({{ $user->id }})" class="px-3 py-1 rounded-full text-xs font-medium {{ $user->status === 'active' ? 'bg-green-100 text-green-700' : 'bg-gray-200 text-gray-600' }}">
                                {{ $user->status === 'active' ? 'Aktif' : 'Nonaktif' }}
                            </button>
                        </td>
                        <td class="p-[15px] space-x-2">
                            <button wire:click="openEdit({{ $user->id }})" class="text-blue-600 hover:underline font-medium">Edit</button>
                            <button wire:click="delete({{ $user->id }})" wire:confirm="Yakin hapus akun ini?" class="text-red-600 hover:underline font-medium">Hapus</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="px-[25px] py-[20px] flex items-center justify-between text-sm text-gray-500 dark:text-gray-400">
        <span>Showing {{ $users->firstItem() ?? 0 }} to {{ $users->lastItem() ?? 0 }} of {{ $users->total() }} entries</span>
        {{ $users->links() }}
    </div>

