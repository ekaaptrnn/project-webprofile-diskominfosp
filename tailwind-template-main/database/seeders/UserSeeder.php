<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat Role 'Super Admin' dulu jika belum ada di database
        $superAdminRole = Role::firstOrCreate(
            ['name' => 'Super Admin'],
            ['description' => 'Akses penuh ke seluruh sistem'] // sesuaikan jika ada field lain
        );

        // 2. Buat User Admin Test
        User::firstOrCreate(
            ['email' => 'admin@test.com'],
            [
                'name' => 'Admin Test',
                'password' => Hash::make('password123'),
                'role_id' => $superAdminRole->id,
            ]
        );

        // 3. Buat User Yardan
        User::firstOrCreate(
            ['email' => 'y@test.com'],
            [
                'name' => 'yardan',
                'password' => Hash::make('12345678'),
                'role_id' => $superAdminRole->id,
            ]
        );
    }
}
