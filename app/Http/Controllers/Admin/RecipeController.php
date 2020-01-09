<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Recipe;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use function Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return |\Illuminate\View\View
     */
    public function index()
    {
        $recipes = Recipe::all();

        return view('admin.recipe.index', compact('recipes'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Recipe $recipe
     * @return JsonResponse
     * @throws \Exception
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        return response()->json(['success' => 'Recipe deleted successfully.']);
    }
}
