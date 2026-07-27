<x-layouts.admin title="Kelola Layanan">
    <div class="p-[25px]">
        <!-- Title Header -->
        <div class="mb-[25px]">
            <h1 class="text-2xl font-bold text-black dark:text-white">Kelola Layanan</h1>
            <p class="mt-1 text-gray-500 dark:text-gray-400">Tambah, edit, dan kelola daftar layanan publik.</p>
        </div>

        <!-- Livewire Component -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700 p-6">

            <!-- Filter & Tombol Tambah -->
            <div class="flex items-center justify-between mb-6">
                <div class="w-72">
                    <input
                        type="text"
                        placeholder="Cari nama layanan..."
                        class="w-full px-4 py-2 text-sm bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-gray-900 dark:text-white placeholder-gray-400"
                    >
                </div>
                <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium text-sm px-5 py-2.5 rounded-lg shadow-sm transition">
                    + Tambah Layanan
                </button>
            </div>

            <!-- Tabel Data Layanan -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-gray-100 dark:border-gray-700 text-[13px] font-bold text-gray-700 dark:text-gray-300">
                            <th class="pb-4 px-4">Nama Layanan</th>
                            <th class="pb-4 px-4">Deskripsi</th>
                            <th class="pb-4 px-4">Status</th>
                            <th class="pb-4 px-4 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 dark:divide-gray-700 text-sm">
                        <tr>
                            <td colspan="4" class="py-12 text-center text-sm text-gray-400 dark:text-gray-500">
                                Belum ada data layanan. Klik tombol <span class="font-semibold text-gray-600 dark:text-gray-300">+ Tambah Layanan</span> untuk menambahkan.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-layouts.admin>
