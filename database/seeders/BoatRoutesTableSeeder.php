<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BoatRoutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('boat_routes')->insert([
            [
                'name' => 'MYRA',
                'description' => 'MYRA description',
            ],
            [
                'name' => 'VRA',
                'description' => 'VRA description',
            ],
            [
                'name' => 'SENNA',
                'description' => 'SENNA description',
            ],
            [
                'name' => 'PEPPER',
                'description' => 'PEPPER description',
            ],
        ]);
    }
}
