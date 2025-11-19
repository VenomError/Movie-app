<!doctype html>
<html>

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>AMovie</title>
    <meta name="description" content="A Template by Gozha.net">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Gozha.net">

    <!-- Mobile Specific Metas-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="telephone=no" name="format-detection">

    <!-- Fonts -->
    <!-- Font awesome - icon font -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Roboto -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,700' rel='stylesheet' type='text/css'>
    <!-- Open Sans -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:800italic' rel='stylesheet' type='text/css'>

    <!-- Stylesheets -->

    <!-- Mobile menu -->
    <x-link href="css/gozha-nav.css" rel="stylesheet" />
    <!-- Select -->
    <x-link href="css/external/jquery.selectbox.css" rel="stylesheet" />

    <!-- Slider Revolution CSS Files -->
    <x-link rel="stylesheet" type="text/css" href="revolution/css/settings.css" />
    <x-link rel="stylesheet" type="text/css" href="revolution/css/layers.css" />
    <x-link rel="stylesheet" type="text/css" href="revolution/css/navigation.css" />

    <!-- Custom -->
    <x-link href="css/style.css?v=1" rel="stylesheet" />


    <!-- Modernizr -->
    <x-script src="js/external/modernizr.custom.js"></x-script>


</head>

<body>
    <div class="wrapper">
        <!-- Banner -->

        <!-- Header section -->
        <header class="header-wrapper header-wrapper--home">
            <div class="container">
                <!-- Logo link-->
                <a href='/' class="logo mt-0">
                    <img alt='logo' src="assets/images/logo-dark.png" style="max-width: 60px; height: 30px;">
                </a>

                <!-- Main website navigation-->
                <nav id="navigation-box">
                    <!-- Toggle for mobile menu mode -->
                    <a href="#" id="navigation-toggle">
                        <span class="menu-icon">
                            <span class="icon-toggle" role="button" aria-label="Toggle Navigation">
                                <span class="lines"></span>
                            </span>
                        </span>
                    </a>

                    <!-- Link navigation -->
                    <ul id="navigation">
                        <li>
                            <span class="sub-nav-toggle "></span>
                            <a href="/">Home</a>
                        </li>
                        {{-- <li>
                            <span class="sub-nav-toggle plus"></span>
                            <a href="#">Home</a>
                            <ul>
                                <li class="menu__nav-item"><a href="movie-page-left.html">Single movie (rigth
                                        sidebar)</a></li>
                                <li class="menu__nav-item"><a href="movie-page-right.html">Single movie (left
                                        sidebar)</a></li>
                                <li class="menu__nav-item"><a href="movie-page-full.html">Single movie (full widht)</a>
                                </li>
                                <li class="menu__nav-item"><a href="movie-list-left.html">Movies list (rigth
                                        sidebar)</a></li>
                                <li class="menu__nav-item"><a href="movie-list-right.html">Movies list (left
                                        sidebar)</a></li>
                                <li class="menu__nav-item"><a href="movie-list-full.html">Movies list (full widht)</a>
                                </li>
                                <li class="menu__nav-item"><a href="single-cinema.html">Single cinema</a></li>
                                <li class="menu__nav-item"><a href="cinema-list.html">Cinemas list</a></li>
                                <li class="menu__nav-item"><a href="trailer.html">Trailers</a></li>
                                <li class="menu__nav-item"><a href="rates-left.html">Rates (rigth sidebar)</a></li>
                                <li class="menu__nav-item"><a href="rates-right.html">Rates (left sidebar)</a></li>
                                <li class="menu__nav-item"><a href="rates-full.html">Rates (full widht)</a></li>
                                <li class="menu__nav-item"><a href="offers.html">Offers</a></li>
                                <li class="menu__nav-item"><a href="contact.html">Contact us</a></li>
                                <li class="menu__nav-item"><a href="404.html">404 error</a></li>
                                <li class="menu__nav-item"><a href="coming-soon.html">Coming soon</a></li>
                                <li class="menu__nav-item"><a href="login.html">Login/Registration</a></li>
                            </ul>
                        </li> --}}
                    </ul>
                </nav>

                <!-- Additional header buttons / Auth and direct link to booking-->
                <div class="control-panel">
                    <div class="auth auth--home">
                        <div class="auth__show">
                            <span class="auth__image">
                                <img alt="" src="images/client-photo/auth.png">
                            </span>
                        </div>
                        <a href="#" class="btn btn--sign btn--singin">
                            me
                        </a>
                        <ul class="auth__function">
                            <li><a href="#" class="auth__function-item">Watchlist</a></li>
                            <li><a href="#" class="auth__function-item">Booked tickets</a></li>
                            <li><a href="#" class="auth__function-item">Discussion</a></li>
                            <li><a href="#" class="auth__function-item">Settings</a></li>
                        </ul>

                    </div>
                    <a href="#" class="btn btn-md btn--warning btn--book btn-control--home login-window">Book a
                        ticket</a>
                </div>

            </div>
        </header>



        <!-- Main content -->
        <section class="container">
            {{ $slot }}
        </section>

        <div class="clearfix"></div>

        <footer class="footer-wrapper">
            <section class="container">
                <div class="col-xs-12 col-md-6">
                    <div class="footer-info">
                        <p class="heading-special--small">A.Movie<br><span class="title-edition">in the social
                                media</span></p>

                        <div class="social">
                            <a href='#' class="social__variant fa fa-facebook"></a>
                            <a href='#' class="social__variant fa fa-twitter"></a>
                            <a href='#' class="social__variant fa fa-vk"></a>
                            <a href='#' class="social__variant fa fa-instagram"></a>
                            <a href='#' class="social__variant fa fa-tumblr"></a>
                            <a href='#' class="social__variant fa fa-pinterest"></a>
                        </div>

                        <div class="clearfix"></div>
                        <p class="copy">&copy; A.Movie, 2013. All rights reserved. Done by Olia Gozha</p>
                    </div>
                </div>
            </section>
        </footer>
    </div>

    <!-- open/close -->
    <div class="overlay overlay-hugeinc">

        <section class="container">

            <div class="col-sm-4 col-sm-offset-4">
                <button type="button" class="overlay-close">Close</button>
                <form id="login-form" class="login" method='get' novalidate=''>
                    <p class="login__title">sign in <br><span class="login-edition">welcome to A.Movie</span></p>

                    <div class="social social--colored">
                        <a href='#' class="social__variant fa fa-facebook"></a>
                        <a href='#' class="social__variant fa fa-twitter"></a>
                        <a href='#' class="social__variant fa fa-tumblr"></a>
                    </div>

                    <p class="login__tracker">or</p>

                    <div class="field-wrap">
                        <input type='email' placeholder='Email' name='user-email' class="login__input">
                        <input type='password' placeholder='Password' name='user-password' class="login__input">

                        <input type='checkbox' id='#informed' class='login__check styled'>
                        <label for='#informed' class='login__check-info'>remember me</label>
                    </div>

                    <div class="login__control">
                        <button type='submit' class="btn btn-md btn--warning btn--wider">sign in</button>
                        <a href="#" class="login__tracker form__tracker">Forgot password?</a>
                    </div>
                </form>
            </div>

        </section>
    </div>

    <!-- JavaScript-->
    <!-- jQuery 3.1.1-->
    <x-script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></x-script>
    <script>window.jQuery || document.write('<script src="js/external/jquery-3.1.1.min.js"><\/script>')</script>
    <!-- Migrate -->
    <x-script src="js/external/jquery-migrate-1.2.1.min.js"></x-script>
    <!-- Bootstrap 3-->
    <x-script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></x-script>

    <!-- Slider Revolution core JavaScript files -->
    <x-script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></x-script>
    <x-script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></x-script>

    <!-- Slider Revolution extension scripts. -->
    <x-script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></x-script>
    <x-script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></x-script>
    <x-script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></x-script>
    <x-script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></x-script>
    <x-script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></x-script>
    <x-script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></x-script>
    <x-script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></x-script>
    <x-script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></x-script>
    <x-script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></x-script>

    <!-- Mobile menu -->
    <x-script src="js/jquery.mobile.menu.js"></x-script>
    <!-- Select -->
    <x-script src="js/external/jquery.selectbox-0.2.min.js"></x-script>
    <!-- Stars rate -->
    <x-script src="js/external/jquery.raty.js"></x-script>

    <!-- Form element -->
    <x-script src="js/external/form-element.js"></x-script>
    <!-- Form validation -->
    <x-script src="js/form.js"></x-script>

    <!-- Twitter feed -->
    <x-script src="js/external/twitterfeed.js"></x-script>

    <!-- Custom -->
    <x-script src="js/custom.js"></x-script>

    <script type="text/javascript">
        $(document).ready(function () {
            init_Home();
        });
    </script>

</body>

</html>