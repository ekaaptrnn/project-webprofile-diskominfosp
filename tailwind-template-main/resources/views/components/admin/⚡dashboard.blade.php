<?php

use App\Models\Berita;
use App\Models\Layanan;
use Livewire\Component;

new class extends Component
{
    public int $totalBerita = 0;
    public int $totalLayanan = 0;
    public int $totalDokumen = 0; // TODO: setelah modul Download dibuat
    public int $totalFaq = 0;     // TODO: setelah modul FAQ dibuat

    public function mount(): void
    {
        $this->totalBerita = Berita::count();
        $this->totalLayanan = Layanan::count();
    }
}; ?>

<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-[25px]">
    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[25px] rounded-md">
        <p class="text-gray-500 dark:text-gray-400">Total Berita</p>
        <h2 class="mt-2 text-2xl font-bold text-black dark:text-white">{{ $totalBerita }}</h2>
    </div>
    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[25px] rounded-md">
        <p class="text-gray-500 dark:text-gray-400">Total Layanan</p>
        <h2 class="mt-2 text-2xl font-bold text-black dark:text-white">{{ $totalLayanan }}</h2>
    </div>
    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[25px] rounded-md">
        <p class="text-gray-500 dark:text-gray-400">Total Dokumen</p>
        <h2 class="mt-2 text-2xl font-bold text-black dark:text-white">{{ $totalDokumen }}</h2>
    </div>
    <div class="trezo-card bg-white dark:bg-[#0c1427] p-[25px] rounded-md">
        <p class="text-gray-500 dark:text-gray-400">Total FAQ</p>
        <h2 class="mt-2 text-2xl font-bold text-black dark:text-white">{{ $totalFaq }}</h2>
    </div>
</div>