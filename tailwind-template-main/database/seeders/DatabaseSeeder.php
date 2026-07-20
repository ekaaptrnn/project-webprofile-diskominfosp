<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil UserSeeder kamu di sini 👈
        $this->call([
            UserSeeder::class,
            // Jika ada seeder lain nanti, tinggal tambahkan di bawahnya
        ]);
    }
}
