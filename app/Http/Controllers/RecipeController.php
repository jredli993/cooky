<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function create() {

        $categories = Category::select('name')->get();

        return view('recipe.create_recipe', compact('categories'));
    }

    public function store() {
        ddd(request()->all());
    }


}
