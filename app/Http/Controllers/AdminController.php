<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Article;
use Illuminate\Support\Facades\Artisan;

class AdminController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('pages.admin', compact('articles'));
    }

    public function messages()
    {
        $messages = About::all();
        return response()->json($messages, 200);
    }

    public function articleDetail()
    {
        $artilce = Article::find(request()->id)->description;
        return response()->json($artilce, 200);
    }

    public function updateArticle()
    {
        $artilce = Article::find(request()->id);
        $artilce->description = request()->description;
        if($artilce->update())
        {
            return response()->json('Article Updated',200);
        }
    }

    public function command()
    {
        $output = 'Migrate Or Seed What To Call?';
        if (array_key_exists('migrate', request()->all())) 
        {
            $migrate = Artisan::call('migrate:fresh');;
            $output = Artisan::output();
        }
        if (array_key_exists('seed', request()->all())) 
        {
            $seed = Artisan::call('db:seed');
            $output = Artisan::output();
        }
        return $output;
    }
}
