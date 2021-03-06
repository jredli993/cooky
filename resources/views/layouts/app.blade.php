<!DOCTYPE html>
<html>

<!-- Mirrored from www.themeenergy.com/themes/html/social-chef/recipes2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Jan 2020 13:24:06 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="SocialChef - Social Recipe HTML Template" />
    <meta name="description" content="SocialChef - Social Recipe HTML Template">
    <meta name="author" content="themeenergy.com">

    <title>SocialChef</title>

    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/icons.css') }}" />
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800" rel="stylesheet">
    <script src="https://use.fontawesome.com/e808bf9397.js"></script>

    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--preloader-->
<div class="preloader">
    <div class="spinner"></div>
</div>
<!--//preloader-->

<!--header-->
<header class="head" role="banner">
    <!--wrap-->
    <div class="wrap clearfix">
        <a href="{{ route('home') }}" title="SocialChef" class="logo"><img src="images/ico/logo.png" alt="SocialChef logo" /></a>

        <nav class="main-nav" role="navigation" id="menu">
            <ul>
                <li class="{{ Route::is('home') ? 'current-menu-item' : '' }}"><a href="{{ route('home') }}" title="Recipes"><span>Recipes</span></a></li>

                @guest
                    <li class="{{ Route::is('login') ? 'current-menu-item' : '' }}"><a href="{{ route('login') }}"><span>{{ __('Login') }}</span></a></li>
                    @if (Route::has('register'))
                        <li class="{{ Route::is('register') ? 'current-menu-item' : '' }}">
                            <a href="{{ route('register') }}"><span>{{ __('Register') }}</span></a>
                        </li>
                    @endif
                @else
                    <li class="{{ Route::is('logout') ? 'current-menu-item' : '' }}">
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            <span>{{ __('Logout') }}</span>

                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </nav>

        <nav class="user-nav" role="navigation">
            <ul>
                <li class="light"><a href="find_recipe.html" title="Search for recipes"><i class="icon icon-themeenergy_search"></i> <span>Search for recipes</span></a></li>
                @auth()
                    <li class="medium"><a href="{{ route('profile') }}" title="My account"><i class="icon icon-themeenergy_chef-hat"></i> <span>My account</span></a></li>
                @endauth
                <li class="dark"><a href="{{ route('recipe.create') }}" title="Submit a recipe"><i class="icon icon-themeenergy_fork-spoon"></i> <span>Submit a recipe</span></a></li>
            </ul>
        </nav>
    </div>
</header>
<!--//header-->

<!--main-->
<main class="main" role="main">
    <!--wrap-->
    <div class="wrap clearfix">

        <!--row-->
        <div class="row">

            @yield('categories')

            @yield('content')

        </div>
        <!--//row-->
    </div>
    <!--//wrap-->
</main>
<!--//main-->

<!--footer-->
<footer class="foot" role="contentinfo">
    <div class="wrap clearfix">
        <div class="row">
            <article class="one-half">
                <h5>About SocialChef Community</h5>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
            </article>
            <article class="one-fourth">
                <h5>Need help?</h5>
                <p>Contact us via phone or email</p>
                <p><em>T:</em>  +1 555 555 555<br /><em>E:</em>  <a href="#">socialchef@email.com</a></p>
            </article>
            <article class="one-fourth">
                <h5>Follow us</h5>
                <ul class="social">
                    <li><a href="#" title="facebook"><i class="fa fa-fw fa-facebook"></i></a></li>
                    <li><a href="#" title="youtube"><i class="fa  fa-fw fa-youtube"></i></a></li>
                    <li><a href="#" title="rss"><i class="fa  fa-fw fa-rss"></i></a></li>
                    <li><a href="#" title="gplus"><i class="fa fa-fw fa-google-plus"></i></a></li>
                    <li><a href="#" title="linkedin"><i class="fa fa-fw fa-linkedin"></i></a></li>
                    <li><a href="#" title="twitter"><i class="fa fa-fw fa-twitter"></i></a></li>
                    <li><a href="#" title="pinterest"><i class="fa fa-fw fa-pinterest-p"></i></a></li>
                    <li><a href="#" title="vimeo"><i class="fa fa-fw fa-vimeo"></i></a></li>
                </ul>
            </article>

            <div class="bottom">
                <p class="copy">Copyright 2016 SocialChef. All rights reserved</p>

                <nav class="foot-nav">
                    <ul>
                        <li><a href="index.html" title="Home">Home</a></li>
                        <li><a href="recipes.html" title="Recipes">Recipes</a></li>
                        <li><a href="blog.html" title="Blog">Blog</a></li>
                        <li><a href="contact.html" title="Contact">Contact</a></li>
                        <li><a href="find_recipe.html" title="Search for recipes">Search for recipes</a></li>
                        <li><a href="login.html" title="Login">Login</a></li>	<li><a href="register.html" title="Register">Register</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>
<!--//footer-->

<script src="{{ URL::asset('js/jquery-3.1.0.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.uniform.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.slicknav.min.js') }}"></script>
<script src="{{ URL::asset('js/scripts.js') }}"></script>
</body>

<!-- Mirrored from www.themeenergy.com/themes/html/social-chef/recipes2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Jan 2020 13:24:06 GMT -->
</html>


