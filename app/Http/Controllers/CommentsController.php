<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Requests\CommentsStoreRequest;

class CommentsController extends Controller
{
    public function store(CommentsStoreRequest $request) {
        
        if ($request->validated()){
            Comment::create([
                'body' => $request->body,
                'article_id' => $request->article_id,
                'author_id' => auth()->user()->id
            ]);
        }

        return redirect()->back();
    }
}
