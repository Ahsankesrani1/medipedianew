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
                    'image' => 'assets\img\Medicines-img\aspirin\1.jpeg',
                    'description' => 'Article Text Here'
                ],
                [
                    'name' => 'News 2',
                    'image' => 'assets\img\Medicines-img\clarfin\download (1).jpeg',
                    'description' => 'Article Text Here',
                ],
                [
                    'name' => 'News 3',
                    'image' => 'assets\img\Medicines-img\dexamethasone\d41586-020-01824-5_18087906.jpeg',
                    'description' => 'Article Text Here',
                ],
                [
                    'name' => 'News 4',
                    'image' => 'assets\img\Medicines-img\paracetemol\istockphoto-1022216070-612x612.jpeg',
                    'description' => 'Article Text Here',
                ],
                [
                    'name' => 'News 5',
                    'image' => 'assets\img\Medicines-img\remdisiver\image.webp',
                    'description' => 'Article Text Here',
                ],
                [
                    'name' => 'News 6',
                    'image' => 'assets\img\Medicines-img\semathicone\download.jpeg',
                    'description' => 'Article Text Here',
                ],
            ]);
    }
}
