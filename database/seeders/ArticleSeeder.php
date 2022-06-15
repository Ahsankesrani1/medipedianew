<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::insert(
            [
                [
                    'name' => 'News 1',
                    'image' => 'assets\img\t1.webp',
                    'description' => 'Article Text Here'
                ],
                [
                    'name' => 'News 2',
                    'image' => 'assets\img\t2.jpeg',
                    'description' => 'Article Text Here',
                ],
                [
                    'name' => 'News 3',
                    'image' => 'assets\img\t3.jpeg',
                    'description' => 'Article Text Here',
                ],
                [
                    'name' => 'News 4',
                    'image' => 'assets\img\t4.jpeg',
                    'description' => 'Article Text Here',
                ],
                [
                    'name' => 'News 5',
                    'image' => 'assets\img\t5.jpeg',
                    'description' => 'Article Text Here',
                ],
                [
                    'name' => 'News 6',
                    'image' => 'assets\img\t1.webp',
                    'description' => 'Article Text Here',
                ],
            ]);
    }
}
