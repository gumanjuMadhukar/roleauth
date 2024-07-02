<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Role::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [['name' => 'Admin', 'auth_name' => 'admin', 'created_at' => now(), 'updated_at' => now()],
                 ['name' => 'User', 'auth_name' => 'user', 'created_at' => now(), 'updated_at' => now()],
                 ['name' => 'Supervisor', 'auth_name' => 'supervisor', 'created_at' => now(), 'updated_at' => now()],
                ];
        Role::insert($data);
    }
}
