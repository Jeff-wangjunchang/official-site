<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::with('articleType')->orderBy('created_at', 'desc')->paginate(10);
        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('articles.show');
    }
}
