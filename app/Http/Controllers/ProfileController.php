<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function profile() {

        $user = auth()->user();

        $favouriteCategories = DB::table('users')
            ->join('recipes', 'users.id', '=', 'recipes.user_id')
            ->join('categories', 'recipes.category_id', '=', 'categories.id')
            ->selectRaw('categories.name, COUNT(recipes.category_id) as most_used')
            ->groupBy('categories.name')
            ->orderBy('most_used', 'DESC')
            ->limit(3)
            ->get();

        $recipes = Recipe::with(('category'))->where('user_id', $user->id)->paginate(6);

        return view('profile.profile', compact('user', 'favouriteCategories', 'recipes'));
    }
}
