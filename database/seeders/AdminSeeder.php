<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleID = Role::where('name', 'admin')->first()->id;

        Admin::create([
            'name' => 'Amin Babu',
            'email' => 'amin.babu.bd@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            // password
            'phone' => fake()->phoneNumber,
            'country' => fake()->country,
            'city' => fake()->city,
            'postcode' => fake()->postcode,
            'status' => 'active',
            'role_id' => $roleID,
            'remember_token' => Str::random(10),
        ]);

        Admin::factory()->count(5)->create();
    }
}