<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Adminovich',
            'email' => 'admin@ecom.uz',
            'phone' => '+998902299389',
            'password' => Hash::make('secret123'),
        ]);

        $admin->roles()->attach(1);

        $admin2 = User::create([
            'first_name' => 'Salom',
            'last_name' => 'salomovich',
            'email' => 'salom@ecom.uz',
            'phone' => '+998902299390',
            'password' => Hash::make('secret123'),
        ]);

        $admin2->roles()->attach(2);


        // User::factory()->count(10)->hasAttached(Role::find(2))->create();
    }
}
