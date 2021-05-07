<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\ArticlePostRequest;

class ArticlesController extends Controller
{
    public function index() {
        $articles = Article::all();
        
        return view('articles.index', compact('articles'));
    }

    public function create() {
        return view('articles.create');
    }

    public function store(ArticlePostRequest $request){
    
        $validated = $request->validated();

        if (!$validated)
            return redirect()->back()->withErrors($validator)->withInput();

        // dd($request);
        Article::create([
            'title' => $request->title,
            'body' => $request->body,
            'category_id' => $request->category_id
        ]);

        return redirect()->route('articles.index');
    }
}
