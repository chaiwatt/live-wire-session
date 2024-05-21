<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AddOnsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('add_ons')->insert([
            [
                'name' => 'Add On#1',
                'description' => 'Add On#1 description',
            ],
            [
                'name' => 'Add On#2',
                'description' => 'Add On#2 description',
            ],
            [
                'name' => 'Add On#3',
                'description' => 'Add On#3 description',
            ],
            [
                'name' => 'Add On#4',
                'description' => 'Add On#4 description',
            ],
        ]);
    }
}
