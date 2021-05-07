<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Http\Requests\ArticlePostRequest;

class ArticlesController extends Controller
{
    public function index() {
        $articles = Article::all();
        
        return view('articles.index', compact('articles'));
    }

    public function create() {
        $categories = Category::all();

        return view('articles.create', compact('categories'));
    }

    public function store(ArticlePostRequest $request){
    
        $validated = $request->validated();

        if (!$validated)
            return redirect()->back()->withErrors($validator)->withInput();

        // dd($request);
        Article::create([
            'title' => $request->title,
            'body' => $request->body,
            'category_id' => $request->category_id,
            'author_id' => auth()->user()->id
        ]);

        return redirect()->route('articles.index');
    }

    public function show($id){
        $article = Article::find($id);
        // dd($article);
        return view('articles.show', compact('article'));
    }
}
