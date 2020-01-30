@extends('layouts.app')

@section('categories')
    <div class="my_account one-fourth">
        <figure>
            <img src="images/avatar4.jpg" alt="" />
        </figure>
        <div class="container">
            <h2>{{ $user->name }}</h2>
        </div>
    </div>
    <!--//profile left part-->

    <div class="three-fourth">
        <nav class="tabs">
            <ul>
                <li ><a href="#about" title="About me">About me</a></li>
                <li class="active"><a href="#recipes" title="My recipes">My recipes</a></li>
            </ul>
        </nav>

        <!--about-->
        <div class="tab-content" id="about">
            <div class="row">
                <dl class="basic two-third">
                    <dt>Name</dt>
                    <dd>{{ $user->name }}</dd>
                    <dt>Favorite categories</dt>
                    <dd>
                        @foreach($favouriteCategories as $category)
                            {{ $category->name }},
                        @endforeach
                    </dd>
                    <dt>Recipes submitted</dt>
                    <dd>{{ $user->recipes->count() }}</dd>
                </dl>

                <div class="one-third">
                    <ul class="boxed gold">
                        <li class="light"><a href="#" title="Best recipe"><i class="icon icon-themeenergy_crown"></i> <span>Had a best recipe</span></a></li>
                        <li class="medium"><a href="#" title="Was featured"><i class="icon icon-themeenergy_top-rankings"></i> <span>Was featured</span></a></li>
                        <li class="dark"><a href="#" title="Added a first recipe"><i class="icon  icon-themeenergy_medal-first-place"></i> <span>Added a first recipe</span></a></li>

                        <li class="medium"><a href="#" title="Added 10-20 recipes"><i class="icon icon-themeenergy_medal-8"></i> <span>Added 10-20 recipes</span></a></li>
                        <li class="dark"><a href="recipes.html" title="Events"><i class="icon icon-themeenergy_pencil"></i> <span>Wrote a blog post</span></a></li>
                        <li class="light"><a href="recipes.html" title="Fish"><i class="icon icon-themeenergy_chat-bubbles"></i> <span>Wrote a comment</span></a></li>

                        <li class="dark"><a href="recipes.html" title="Fish"><i class="icon icon-themeenergy_cup2"></i> <span>Won a contest</span></a></li>
                        <li class="light"><a href="recipes.html" title="Healthy"><i class="icon icon-themeenergy_share3"></i> <span>Shared a recipe</span></a></li>
                        <li class="medium"><a href="#" title="Was featured"><i class="icon icon-themeenergy_top-rankings"></i> <span>Was featured</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--//about-->

        <!--my recipes-->
        <div class="tab-content" id="recipes">
            <div class="entries row">

                @foreach($recipes as $recipe)
                    <div class="entry one-third">
                        <figure>
                            <img src="images/img6.jpg" alt="" />
                            <figcaption><a href="recipe.html"><i class="icon icon-themeenergy_eye2"></i> <span>View recipe</span></a></figcaption>
                        </figure>
                        <div class="container">
                            <h2><a href="recipe.html">{{ $recipe->description }}</a></h2>
                            <div class="actions">
                                <div>
                                    <div class="difficulty"><i class="ico i-medium"></i><a href="#">{{ $recipe->difficulty }}</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            {{ $recipes->links() }}

        </div>
    <!--//my recipes-->
    </div>
@endsection
