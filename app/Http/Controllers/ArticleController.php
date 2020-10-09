<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $articles = Cache::rememberForever('article', function () {
        //     return DB::table('articles')->get();
        // });
        $articles = Article::paginate(6);
        return view('articles.article', ['articles' => $articles]);
    }


    public function show(Article $article)
    {
        return view('articles.detail', compact('article'));
    }
}
