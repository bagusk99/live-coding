<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::create([
            'uuid' => Str::uuid(),
            'manufactured_date' => now(),
            'name' => 'test',
            'manufacture' => 'test',
            'price' => '123',
            'description' => 'test',
        ]);
    }
}
