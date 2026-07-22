<div class="p-[25px]">
    <!-- Notifikasi Sukses -->
    @if (session()->has('message'))
        <div class="mb-4 p-4 bg-green-100 text-green-700 dark:bg-green-900/40 dark:text-green-400 rounded-lg text-sm">
            {{ session('message') }}
        </div>
    @endif

    <!-- Header Halaman -->
    <div class="flex items-center justify-between mb-[25px]">
        <div>
            <h1 class="text-2xl font-bold text-black dark:text-white">Kelola Penghargaan</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Manajemen data dan galeri penghargaan di sistem.</p>
        </div>

        <button wire:click="openModal" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg flex items-center gap-2 shadow-sm transition">
            + Tambah Penghargaan
        </button>
    </div>

    <!-- Tabel Data Penghargaan -->
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 dark:bg-gray-700/50 border-b border-gray-100 dark:border-gray-700 text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                        <th class="px-6 py-4">Gambar</th>
                        <th class="px-6 py-4">Nama Penghargaan</th>
                        <th class="px-6 py-4">Tahun</th>
                        <th class="px-6 py-4">Deskripsi</th>
                        <th class="px-6 py-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 dark:divide-gray-700 text-sm text-gray-700 dark:text-gray-200">
                    @forelse ($awards as $item)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/30 transition">
                            <td class="px-6 py-4">
                                @if($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" class="w-16 h-12 object-cover rounded-lg border border-gray-200 dark:border-gray-600">
                                @else
                                    <div class="w-16 h-12 rounded-lg bg-gray-100 dark:bg-gray-700 flex items-center justify-center border border-gray-200">
                                        <span class="text-xs text-gray-400">No Image</span>
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                {{ $item->title }}
                            </td>
                            <td class="px-6 py-4 text-gray-500 dark:text-gray-400">
                                {{ $item->year }}
                            </td>
                            <td class="px-6 py-4 text-gray-500 dark:text-gray-400 max-w-xs truncate">
                                {{ $item->description }}
                            </td>
                            <td class="px-6 py-4 text-center space-x-2">
                                <button wire:click="openEdit({{ $item->id }})" class="text-blue-600 dark:text-blue-400 hover:underline">Edit</button>
                                <button wire:click="delete({{ $item->id }})" wire:confirm="Yakin ingin menghapus penghargaan ini?" class="text-red-600 dark:text-red-400 hover:underline">Hapus</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-8 text-center text-gray-400">
                                Belum ada data penghargaan. Klik tombol <b>+ Tambah Penghargaan</b> untuk menambahkan.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- MODAL FORM TAMBAH / EDIT PENGHARGAAN -->
    @if($isModalOpen)
        <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm p-4">
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg w-full max-w-lg p-6 relative max-h-[90vh] overflow-y-auto">
                <h2 class="text-xl font-bold text-gray-800 dark:text-white mb-4">
                    {{ $editingId ? 'Edit Penghargaan' : 'Tambah Penghargaan Baru' }}
                </h2>

                <form wire:submit.prevent="save">
                    <!-- Nama Penghargaan -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Nama Penghargaan</label>
                        <input type="text" wire:model="title" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan nama penghargaan...">
                        @error('title') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                    </div>

                    <!-- Tahun Penghargaan -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Tahun</label>
                        <input type="number" wire:model="year" min="2000" max="{{ date('Y') + 1 }}" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Contoh: 2026">
                        @error('year') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                    </div>

                    <!-- Gambar Penghargaan -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Gambar/Foto Penghargaan</label>

                        @if ($existingImage && ! $image)
                            <div class="mb-2">
                                <p class="text-xs text-gray-500 mb-1">Gambar saat ini:</p>
                                <img src="{{ asset('storage/' . $existingImage) }}" class="w-full h-32 object-cover rounded-lg border border-gray-200">
                            </div>
                        @endif

                        <input type="file" wire:model="image" accept="image/*" class="w-full text-sm text-gray-500 dark:text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        <div wire:loading wire:target="image" class="mt-1 text-xs text-gray-500">Mengunggah...</div>
                        @error('image') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror

                        @if ($image)
                            <div class="mt-3">
                                <p class="text-xs text-gray-500 mb-1">Preview Gambar Baru:</p>
                                <img src="{{ $image->temporaryUrl() }}" class="w-full h-32 object-cover rounded-lg border border-gray-200">
                            </div>
                        @endif
                    </div>

                    <!-- Deskripsi Penghargaan -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Deskripsi Penghargaan</label>
                        <textarea wire:model="description" rows="4" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-700 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Jelaskan detail penghargaan..."></textarea>
                        @error('description') <span class="text-red-500 text-xs mt-1 block">{{ $message }}</span> @enderror
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="flex justify-end gap-3 pt-3 border-t border-gray-100 dark:border-gray-700">
                        <button type="button" wire:click="closeModal" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 rounded-lg hover:bg-gray-300 transition">
                            Batal
                        </button>
                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                            {{ $editingId ? 'Simpan Perubahan' : 'Simpan Penghargaan' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endif
</div>