<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'qizil',
                'en' => 'red',
            ],
        ]);
        Value::create([
            'attribute_id' => 1,
            'name' => [
                'uz' => 'Ko\'k',
                'en' => 'Blue',
            ],
        ]);
        Value::create([
            'attribute_id' => 2,
            'name' => '12 sm',
        ]);
        Value::create([
            'attribute_id' => 3,
            'name' => [
                'uz' => 'yog\'och',
                'en'=> 'Wood',
            ],
        ]);
        Value::create([
            'attribute_id' => 3,
            'name' => [
                'uz' => 'Temir',
                'en' => 'Iron',
            ],
        ]);
    }
}
