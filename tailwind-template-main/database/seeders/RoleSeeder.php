<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['name' => 'user', 'description' => 'Hanya bisa melihat tampilan tanpa login', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'admin', 'description' => 'Edit tampilan dan atur palet warna', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'super_admin', 'description' => 'Full akses termasuk kelola admin', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
