<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Role::create([
            'name' => 'user',
        ]);

        Role::create([
            'name' => 'contributor',
        ]);

        Role::create([
            'name' => 'author',
        ]);

        Role::create([
            'name' => 'editor',
        ]);

        Role::create([
            'name' => 'manager',
        ]);

        Role::create([
            'name' => 'admin',
        ]);
    }
}
