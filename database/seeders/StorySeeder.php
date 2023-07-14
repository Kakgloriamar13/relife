<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Story::insert([
            [
                'name' => 'Pengalaman'
                'name' => ''
                'name' => 'Pengalaman'
                'name' => 'Pengalaman'

            ],

        ]);
    }
}
