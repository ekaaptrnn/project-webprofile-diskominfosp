<div class="p-[25px]">
    <!-- Header -->
    <div class="mb-[25px]">
        <h1 class="text-2xl font-bold text-black dark:text-white">Kelola Layanan</h1>
        <p class="mt-1 text-gray-500 dark:text-gray-400">Tambah, edit, dan kelola daftar layanan publik.</p>
    </div>

    <!-- CARD UTAMA -->
    <div class="w-full bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700 p-6">

        <!-- Flash Message -->
        @if (session()->has('message'))
            <div class="mb-4 p-4 bg-green-50 border border-green-200 text-green-700 rounded-lg text-sm flex items-center justify-between">
                <span>{{ session('message') }}</span>
                <button type="button" class="text-green-700 font-bold" onclick="this.parentElement.remove()">✕</button>
            </div>
        @endif

        <!-- Top Actions -->
        <div class="flex items-center justify-between mb-6">
            <div class="w-72">
                <input
                    type="text"
                    wire:model.live="search"
                    placeholder="Cari nama layanan..."
                    class="w-full px-4 py-2 text-sm bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-900 dark:text-white placeholder-gray-400"
                >
            </div>
            <button type="button" wire:click="openModal" class="bg-blue-600 hover:bg-blue-700 text-white font-medium text-sm px-5 py-2.5 rounded-lg shadow-sm transition">
                + Tambah Layanan
            </button>
        </div>

        <!-- Tabel Data Layanan -->
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse table-fixed">
                <thead>
                    <tr class="border-b border-gray-100 dark:border-gray-700 text-[13px] font-bold text-gray-700 dark:text-gray-300">
                        <th class="pb-4 px-4 w-[25%]">Nama Layanan</th>
                        <th class="pb-4 px-4 w-[18%]">Kategori</th>
                        <th class="pb-4 px-4 w-[32%]">Deskripsi Layanan</th>
                        <th class="pb-4 px-4 text-center w-[12%]">Status</th>
                        <th class="pb-4 px-4 text-center w-[13%]">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 dark:divide-gray-700 text-sm">
                    @forelse($services as $service)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-900/50">
                            <!-- Nama Layanan -->
                            <td class="py-4 px-4 font-semibold text-gray-900 dark:text-white align-top break-words">
                                {{ $service->nama_layanan }}
                            </td>

                            <!-- Kategori Layanan -->
                            <td class="py-4 px-4 text-gray-600 dark:text-gray-300 align-top break-words">
                                <span class="px-2.5 py-1 text-xs font-medium bg-gray-100 text-gray-700 rounded-md">
                                    {{ $service->kategori ?? 'Umum' }}
                                </span>
                            </td>

                            <!-- Deskripsi Layanan -->
                            <td class="py-4 px-4 text-gray-600 dark:text-gray-300 align-top break-words">
                                {{ $service->deskripsi ?: '-' }}
                            </td>

                            <!-- Status Layanan -->
                            <td class="py-4 px-4 text-center align-top">
                                <span class="px-2.5 py-1 text-xs font-semibold rounded-full {{ ($service->is_active ?? 1) ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                    {{ ($service->is_active ?? 1) ? 'Aktif' : 'Nonaktif' }}
                                </span>
                            </td>

                            <!-- Aksi -->
                            <td class="py-4 px-4 text-center align-top whitespace-nowrap space-x-2">
                                <button type="button" wire:click="edit({{ $service->id }})" class="text-blue-600 hover:text-blue-800 font-medium">Edit</button>
                                <button type="button" wire:click="delete({{ $service->id }})" onclick="confirm('Apakah Anda yakin ingin menghapus layanan ini?') || event.stopImmediatePropagation()" class="text-red-600 hover:text-red-800 font-medium">Hapus</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-12 text-center text-sm text-gray-400 dark:text-gray-500">
                                Belum ada data layanan. Klik <span class="font-semibold text-gray-600 dark:text-gray-300">+ Tambah Layanan</span> untuk menambahkan.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

    <!-- MODAL FORM TAMBAH / EDIT LAYANAN -->
    @if($isModalOpen)
        <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 p-4">
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-xl max-w-md w-full p-6 border border-gray-100 dark:border-gray-700">
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4">
                    {{ $service_id ? 'Edit Layanan' : 'Tambah Layanan Baru' }}
                </h3>

                <form wire:submit.prevent="save">
                    <!-- Input Nama Layanan -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Nama Layanan <span class="text-red-500">*</span></label>
                        <input type="text" wire:model="nama_layanan" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-900 dark:text-white text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Contoh: Layanan Permohonan Informasi Publik">
                        @error('nama_layanan') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span> @enderror
                    </div>

                    <!-- Input Kategori -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Kategori Layanan <span class="text-red-500">*</span></label>
                        <select wire:model="kategori" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-900 dark:text-white text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            <option value="Umum">Umum</option>
                            <option value="Informasi Publik">Informasi Publik</option>
                            <option value="Pengaduan">Pengaduan</option>
                            <option value="Infrastruktur & IT">Infrastruktur & IT</option>
                        </select>
                        @error('kategori') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span> @enderror
                    </div>

                    <!-- Input Deskripsi Layanan -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Deskripsi Layanan <span class="text-red-500">*</span></label>
                        <textarea wire:model="deskripsi" rows="3" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-900 dark:text-white text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Jelaskan secara singkat mengenai layanan ini..."></textarea>
                        @error('deskripsi') <span class="text-xs text-red-500 mt-1 block">{{ $message }}</span> @enderror
                    </div>

                    <!-- Input Status -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Status</label>
                        <select wire:model="is_active" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg dark:bg-gray-900 dark:text-white text-sm focus:ring-2 focus:ring-blue-500 focus:outline-none">
                            <option value="1">Aktif</option>
                            <option value="0">Nonaktif</option>
                        </select>
                    </div>

                    <!-- Tombol Aksi Modal -->
                    <div class="flex justify-end gap-2 mt-6">
                        <button type="button" wire:click="closeModal" class="px-4 py-2 text-sm text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg">Batal</button>
                        <button type="submit" class="px-4 py-2 text-sm bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow-sm">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    @endif
</div>
