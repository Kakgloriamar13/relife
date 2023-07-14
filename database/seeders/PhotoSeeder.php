<?php

namespace Database\Seeders;

use App\Models\Photo;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Photo::insert([
            [
                'story_id' => 1,
                'title' => 'Sesuatu yang romantis',
                'file_name' => 'romantis.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'story_id' => 2,
                'title' => 'Tragedi yang memalukan',
                'file_name' => 'tragedi.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'story_id' => 3,
                'title' => 'Sesuatu yang membagongkan',
                'file_name' => 'pengorbanan.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
