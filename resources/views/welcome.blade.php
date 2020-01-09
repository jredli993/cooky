@extends('layouts.app')

@section('categories')
    <aside class="above-sidebar full-width">
        <ul class="boxed">

            @foreach($categories as $category)
                <li class="@if($loop->odd)light @else medium @endif"><a href="#" title="{{ $category->name }}"><i class="icon icon-themeenergy_pasta"></i> <span>{{ $category->name }}</span></a></li>
            @endforeach

        </ul>
    </aside>
@endsection

@section('content')
    <!--content-->
    <section class="content full-width">
        <!--entries-->
        <div class="entries row">
            <!--item-->
            <div class="entry one-fourth">
                <figure>
                    <img src="images/img6.jpg" alt="" />
                    <figcaption><a href="recipe.html"><i class="icon icon-themeenergy_eye2"></i> <span>View recipe</span></a></figcaption>
                </figure>
                <div class="container">
                    <h2><a href="recipe.html">Thai fried rice with fruit and vegetables</a></h2>
                    <div class="actions">
                        <div>
                            <div class="difficulty"><i class="ico i-medium"></i><a href="#">medium</a></div>
                            <div class="likes"><i class="fa fa-heart"></i><a href="#">10</a></div>
                            <div class="comments"><i class="fa fa-comment"></i><a href="recipe.html#comments">27</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--item-->

            <!--item-->
            <div class="entry one-fourth">
                <figure>
                    <img src="images/img5.jpg" alt="" />
                    <figcaption><a href="recipe.html"><i class="icon icon-themeenergy_eye2"></i> <span>View recipe</span></a></figcaption>
                </figure>
                <div class="container">
                    <h2><a href="recipe.html">Spicy Morroccan prawns with cherry tomatoes</a></h2>
                    <div class="actions">
                        <div>
                            <div class="difficulty"><i class="ico i-hard"></i><a href="#">hard</a></div>
                            <div class="likes"><i class="fa fa-heart"></i><a href="#">10</a></div>
                            <div class="comments"><i class="fa fa-comment"></i><a href="recipe.html#comments">27</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--item-->

            <!--item-->
            <div class="entry one-fourth">
                <figure>
                    <img src="images/img8.jpg" alt="" />
                    <figcaption><a href="recipe.html"><i class="icon icon-themeenergy_eye2"></i> <span>View recipe</span></a></figcaption>
                </figure>
                <div class="container">
                    <h2><a href="recipe.html">Super easy blueberry cheesecake</a></h2>
                    <div class="actions">
                        <div>
                            <div class="difficulty"><i class="ico i-easy"></i><a href="#">easy</a></div>
                            <div class="likes"><i class="fa fa-heart"></i><a href="#">10</a></div>
                            <div class="comments"><i class="fa fa-comment"></i><a href="recipe.html#comments">27</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--item-->

            <!--item-->
            <div class="entry one-fourth">
                <figure>
                    <img src="images/img7.jpg" alt="" />
                    <figcaption><a href="recipe.html"><i class="icon icon-themeenergy_eye2"></i> <span>View recipe</span></a></figcaption>
                </figure>
                <div class="container">
                    <h2><a href="recipe.html">Refreshing banana split with a twist for adults</a></h2>
                    <div class="actions">
                        <div>
                            <div class="difficulty"><i class="ico i-hard"></i><a href="#">hard</a></div>
                            <div class="likes"><i class="fa fa-heart"></i><a href="#">10</a></div>
                            <div class="comments"><i class="fa fa-comment"></i><a href="recipe.html#comments">27</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--item-->

            <!--item-->
            <div class="entry one-fourth">
                <figure>
                    <img src="images/img3.jpg" alt="" />
                    <figcaption><a href="recipe.html"><i class="icon icon-themeenergy_eye2"></i> <span>View recipe</span></a></figcaption>
                </figure>
                <div class="container">
                    <h2><a href="recipe.html">Sushi mania: this is the best sushi you have ever tasted</a></h2>
                    <div class="actions">
                        <div>
                            <div class="difficulty"><i class="ico i-hard"></i><a href="#">hard</a></div>
                            <div class="likes"><i class="fa fa-heart"></i><a href="#">10</a></div>
                            <div class="comments"><i class="fa fa-comment"></i><a href="recipe.html#comments">27</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--item-->

            <!--item-->
            <div class="entry one-fourth">
                <figure>
                    <img src="images/img4.jpg" alt="" />
                    <figcaption><a href="recipe.html"><i class="icon icon-themeenergy_eye2"></i> <span>View recipe</span></a></figcaption>
                </figure>
                <div class="container">
                    <h2><a href="recipe.html">Princess puffs - an old classic at its best</a></h2>
                    <div class="actions">
                        <div>
                            <div class="difficulty"><i class="ico i-hard"></i><a href="#">hard</a></div>
                            <div class="likes"><i class="fa fa-heart"></i><a href="#">10</a></div>
                            <div class="comments"><i class="fa fa-comment"></i><a href="recipe.html#comments">27</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--item-->

            <!--item-->
            <div class="entry one-fourth">
                <figure>
                    <img src="images/img13.jpg" alt="" />
                    <figcaption><a href="recipe.html"><i class="icon icon-themeenergy_eye2"></i> <span>View recipe</span></a></figcaption>
                </figure>
                <div class="container">
                    <h2><a href="recipe.html">Tasty salmon apetizers with sour cream</a></h2>
                    <div class="actions">
                        <div>
                            <div class="difficulty"><i class="ico i-easy"></i><a href="#">easy</a></div>
                            <div class="likes"><i class="fa fa-heart"></i><a href="#">10</a></div>
                            <div class="comments"><i class="fa fa-comment"></i><a href="recipe.html#comments">27</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--item-->

            <!--item-->
            <div class="entry one-fourth">
                <figure>
                    <img src="images/img14.jpg" alt="" />
                    <figcaption><a href="recipe.html"><i class="icon icon-themeenergy_eye2"></i> <span>View recipe</span></a></figcaption>
                </figure>
                <div class="container">
                    <h2><a href="recipe.html">An incredible vegetarian hamburger</a></h2>
                    <div class="actions">
                        <div>
                            <div class="difficulty"><i class="ico i-easy"></i><a href="#">easy</a></div>
                            <div class="likes"><i class="fa fa-heart"></i><a href="#">10</a></div>
                            <div class="comments"><i class="fa fa-comment"></i><a href="recipe.html#comments">27</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--item-->

            <!--item-->
            <div class="entry one-fourth">
                <figure>
                    <img src="images/img15.jpg" alt="" />
                    <figcaption><a href="recipe.html"><i class="icon icon-themeenergy_eye2"></i> <span>View recipe</span></a></figcaption>
                </figure>
                <div class="container">
                    <h2><a href="recipe.html">Spaghetti carbonara with rustic bread</a></h2>
                    <div class="actions">
                        <div>
                            <div class="difficulty"><i class="ico i-medium"></i><a href="#">medium</a></div>
                            <div class="likes"><i class="fa fa-heart"></i><a href="#">10</a></div>
                            <div class="comments"><i class="fa fa-comment"></i><a href="recipe.html#comments">27</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--item-->

            <!--item-->
            <div class="entry one-fourth">
                <figure>
                    <img src="images/img16.jpg" alt="" />
                    <figcaption><a href="recipe.html"><i class="icon icon-themeenergy_eye2"></i> <span>View recipe</span></a></figcaption>
                </figure>
                <div class="container">
                    <h2><a href="recipe.html">Homemade cheesy spinach pizza with an egg on top</a></h2>
                    <div class="actions">
                        <div>
                            <div class="difficulty"><i class="ico i-medium"></i><a href="#">medium</a></div>
                            <div class="likes"><i class="fa fa-heart"></i><a href="#">10</a></div>
                            <div class="comments"><i class="fa fa-comment"></i><a href="recipe.html#comments">27</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--item-->

            <!--item-->
            <div class="entry one-fourth">
                <figure>
                    <img src="images/img17.jpg" alt="" />
                    <figcaption><a href="recipe.html"><i class="icon icon-themeenergy_eye2"></i> <span>View recipe</span></a></figcaption>
                </figure>
                <div class="container">
                    <h2><a href="recipe.html">Heavenly light and creamy vanilla tart</a></h2>
                    <div class="actions">
                        <div>
                            <div class="difficulty"><i class="ico i-hard"></i><a href="#">hard</a></div>
                            <div class="likes"><i class="fa fa-heart"></i><a href="#">10</a></div>
                            <div class="comments"><i class="fa fa-comment"></i><a href="recipe.html#comments">27</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--item-->

            <!--item-->
            <div class="entry one-fourth">
                <figure>
                    <img src="images/img18.jpg" alt="" />
                    <figcaption><a href="recipe.html"><i class="icon icon-themeenergy_eye2"></i> <span>View recipe</span></a></figcaption>
                </figure>
                <div class="container">
                    <h2><a href="recipe.html">Exquisite plum and cherry pie</a></h2>
                    <div class="actions">
                        <div>
                            <div class="difficulty"><i class="ico i-medium"></i><a href="#">medium</a></div>
                            <div class="likes"><i class="fa fa-heart"></i><a href="#">10</a></div>
                            <div class="comments"><i class="fa fa-comment"></i><a href="recipe.html#comments">27</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--item-->

            <div class="quicklinks">
                <a href="#" class="button">More recipes</a>
                <a href="javascript:void(0)" class="button scroll-to-top">Back to top</a>
            </div>
        </div>
        <!--//entries-->
    </section>
    <!--//content-->
@endsection
