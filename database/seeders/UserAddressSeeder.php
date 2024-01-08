<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // UserAddress::factory()->count(2)->create();
        User::find(1)->addresses()->create([
            "latitude" => "41.311158",
            "longitude" => "69.279737",
            "region" => "Tashkent",
            "district" => "sarhisob",
            "street" => "42-ko'cha",
            "home" => "123"
        ]);
        User::find(1)->addresses()->create([
            "latitude" => "41.45333",
            "longitude" => "69.23442",
            "region" => "Jizzax",
            "district" => "lotin",
            "street" => "32-ko'cha",
            "home" => "322"
        ]);
        User::find(2)->addresses()->create([
            "latitude" => "41.434343",
            "longitude" => "69.43455",
            "region" => "Samarkand",
            "district" => "hisob",
            "street" => "22-ko'cha",
            "home" => "545"
        ]);
    }
}
