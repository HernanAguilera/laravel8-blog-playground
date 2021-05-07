<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoriesPostRequest;

class CategoriesController extends Controller
{
    public function store(CategoriesPostRequest $request) {

        if (!$request->validated())
            return response()->json([
                'message' => 'Invalid name'
            ], 400);

        Category::create([
            'name' => $request->name
        ]);

        $categories = Category::all();

        return response()->json([
            'message' => 'Saved',
            'categories' => $categories
        ]);
    }
}
