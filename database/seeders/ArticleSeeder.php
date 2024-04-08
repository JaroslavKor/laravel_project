<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use File;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = json_decode(File::get(public_path().'/articles.json'));
        foreach ($articles as $article){
            Article::create([
                "name" => $article->name,
                "shortDesc" => isset($article->shortDesc) ? $article->shortDesc : null,
                "desc" => $article->desc,
                'authorId' => '1'
            ]);
        }
    }
}
