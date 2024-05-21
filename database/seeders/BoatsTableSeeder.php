<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BoatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('boats')->insert([
            [
                'name' => 'Boat#1',
                'description' => 'Boat#1 description',
            ],
            [
                'name' => 'Boat#2',
                'description' => 'Boat#2 description',
            ],
            [
                'name' => 'Boat#3',
                'description' => 'Boat#3 description',
            ],
            [
                'name' => 'Boat#4',
                'description' => 'Boat#4 description',
            ],
        ]);
    }
}
