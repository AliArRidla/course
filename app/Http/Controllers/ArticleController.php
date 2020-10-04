<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(6);
        return view('articles.article', ['articles' => $articles]);
    }


    public function show(Article $article)
    {
        return view('articles.detail', compact('article'));
    }
}
