<?php

namespace Database\Seeders;

use App\Models\Story;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Story::insert([
            [
                'user_id' => 1,
                'title' => 'Kenangan Bersama Mantan Begitu Indahnya',
                'slug' => Str::slug('Kenangan Bersama Mantan Begitu Indahnya'),
                'category_id' => 4,
                'content' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).",
                'thumbnail' => 'romantis.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 3,
                'title' => 'Tragedi Buang Air Besar di Celana',
                'slug' => Str::slug('Tragedi Buang Air Besar di Celana'),
                'category_id' => 2,
                'content' => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.",
                'thumbnail' => 'tragedi.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'user_id' => 4,
                'title' => 'Pengabdian kepada Desaku',
                'slug' => Str::slug('Pengabdian kepada Desaku'),
                'category_id' => 6,
                'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
                'thumbnail' => 'pengorbanan.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
