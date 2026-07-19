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
        <h3 class="font-semibold text-black dark:text-white">Daftar Akun Admin</h3>
        <button wire:click="openCreate" class="px-4 py-2 rounded-md bg-blue-600 text-white text-sm font-medium hover:bg-blue-700">
            + Tambah Akun
        </button>
    </div>

    @if (session('users-saved'))
        <div class="mx-[25px] mt-[20px] rounded-md bg-green-100 px-4 py-3 text-sm text-green-700">
            {{ session('users-saved') }}
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
                <tr class="border-b border-gray-100 dark:border-[#172036] text-gray-500 dark:text-gray-400">
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
                        <td class="p-[15px]">{{ $user->name }}</td>
                        <td class="p-[15px]">{{ $user->email }}</td>
                        <td class="p-[15px]">{{ $user->role->name ?? '-' }}</td>
                        <td class="p-[15px]">
                            <button wire:click="toggleStatus({{ $user->id }})" class="px-3 py-1 rounded-full text-xs font-medium {{ $user->status === 'active' ? 'bg-green-100 text-green-700' : 'bg-gray-200 text-gray-600' }}">
                                {{ $user->status === 'active' ? 'Aktif' : 'Nonaktif' }}
                            </button>
                        </td>
                        <td class="p-[15px] space-x-2">
                            <button wire:click="openEdit({{ $user->id }})" class="text-blue-600 hover:underline">Edit</button>
                            <button wire:click="delete({{ $user->id }})" wire:confirm="Yakin hapus akun ini?" class="text-red-600 hover:underline">Hapus</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="p-[25px]">{{ $users->links() }}</div>

    @if ($showModal)
        <div class="fixed inset-0 bg-black/50 flex items-center justify-center z-50" wire:click.self="$set('showModal', false)">
            <div class="bg-white dark:bg-[#0c1427] rounded-md p-[25px] w-full max-w-md">
                <h3 class="font-semibold text-black dark:text-white mb-[20px]">
                    {{ $editingId ? 'Edit Akun' : 'Tambah Akun Baru' }}
                </h3>

                <div class="space-y-4">
                    <div>
                        <label class="block mb-1 text-sm text-black dark:text-white">Nama</label>
                        <input type="text" wire:model="name" class="w-full rounded-md border border-gray-200 dark:border-[#172036] bg-transparent px-3 py-2 text-sm text-black dark:text-white">
                        @error('name') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block mb-1 text-sm text-black dark:text-white">Email</label>
                        <input type="email" wire:model="email" class="w-full rounded-md border border-gray-200 dark:border-[#172036] bg-transparent px-3 py-2 text-sm text-black dark:text-white">
                        @error('email') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block mb-1 text-sm text-black dark:text-white">Password {{ $editingId ? '(kosongkan jika tidak diubah)' : '' }}</label>
                        <input type="password" wire:model="password" class="w-full rounded-md border border-gray-200 dark:border-[#172036] bg-transparent px-3 py-2 text-sm text-black dark:text-white">
                        @error('password') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block mb-1 text-sm text-black dark:text-white">Role</label>
                        <select wire:model="role_id" class="w-full rounded-md border border-gray-200 dark:border-[#172036] bg-transparent px-3 py-2 text-sm text-black dark:text-white">
                            <option value="">-- Pilih Role --</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                        @error('role_id') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="mt-[25px] flex justify-end gap-3">
                    <button wire:click="$set('showModal', false)" class="px-4 py-2 rounded-md border border-gray-200 dark:border-[#172036] text-sm text-black dark:text-white">Batal</button>
                    <button wire:click="save" class="px-4 py-2 rounded-md bg-blue-600 text-white text-sm font-medium hover:bg-blue-700">Simpan</button>
                </div>
            </div>
        </div>
    @endif
</div>