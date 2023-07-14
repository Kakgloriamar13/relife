<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            ['name' => 'Drama'],
            ['name' => 'Tragedi'],
            ['name' => 'Pengalaman'],
            ['name' => 'Romantis'],
            ['name' => 'Edukasi'],
            ['name' => 'Dedikasi'],
            ['name' => 'Pengorbanan'],
            ['name' => 'Keluarga'],
            ['name' => 'Persahabatan'],
            ['name' => 'Komedi']
        ]);
    }
}
