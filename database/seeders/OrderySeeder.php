<?php

namespace Database\Seeders;

use App\Models\Ordery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ordery::create([
            'user_id' => 1,
            'comment' => 'Text Payment',
            'sum' => 120000,
            'delivery_method_id' => 3,
            'payment_type_id' => 4,
            'address' => 'Jizzax',
            'products' => 1,
        ]);
    }
}
