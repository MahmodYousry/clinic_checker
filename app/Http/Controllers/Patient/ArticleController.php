<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        $posts = Article::where('approve', 1)->get();
        return view('dashboard.patient.articles.index', compact('posts'));
    }


    public function show(string $id)
    {
        $post = Article::findOrFail($id);
        return view('dashboard.patient.articles.show', compact('post'));
    }

}
