@extends('layouts.app')

@section('content')
<!--content-->
<section class="content full-width">
    <div class="submit_recipe container">
        <form action="{{ route('recipe.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <section>
                <h2>Recipe</h2>
                <div class="f-row">
                    <div class="full"><input type="text" name="title" placeholder="Recipe title" /></div>
                </div>
                <div class="f-row">
                    <div class="third"><input type="text" name="prep_time" placeholder="Preparation time" /></div>
                    <div class="third">
                        <select name="difficulty">
                            @foreach(App\Recipe::getEnum('difficulty') as $difficulty)
                                <option value="{{ $difficulty }}">{{ $difficulty }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="third">
                        <select name="category">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </section>

            <section>
                <h2>Description</h2>
                <div class="f-row">
                    <div class="full"><textarea name="description" placeholder="Recipe description"></textarea></div>
                </div>
            </section>

            <section>
                <h2>Ingredients</h2>
                <div class="f-row ingredient">
                        <div class="large"><input type="text" name="ingredients[]" placeholder="Ingredient" /></div>
                        <div class="small"><input type="text" name="quantities[]" placeholder="Quantity" /></div>
                        <div class="third">
                            <select name="units[]">
                                <option value="handful">handful</option>
                                <option value="handful">g</option>
                                <option value="handful">ml</option>
                                <option value="handful">tbsp</option>
                            </select>
                        </div>
                        <button type="button" class="remove">-</button>
                </div>
                <div class="f-row full add-ingredients">
                    <button class="add add-ingredient">Add an ingredient</button>
                </div>
            </section>

            <section>
                <h2>Instructions <span>(enter instructions, each step at a time)</span></h2>
                <div class="f-row instruction">
                    <div class="full">
                        <input type="text" name="description[]" placeholder="Instructions" />
                    </div>
                    <button type="button" class="remove">-</button>
                </div>
                <div class="f-row full">
                    <button class="add add-step">Add a step</button>
                </div>
            </section>

            <section>
                <h2>Photo</h2>
                <div class="f-row full">
                    <input name="image" type="file" />
                </div>
            </section>

            <div class="f-row full">
                <input type="submit" class="button" id="submitRecipe" value="Publish this recipe" />
            </div>
        </form>
    </div>
</section>
@endsection
