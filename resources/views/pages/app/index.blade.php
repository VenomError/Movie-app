<?php
use Livewire\Volt\Component;
new class extends Component {

};
?>
<div>
<div class="movie-best " style="margin-top: 100px;">
    <div class="col-sm-10 col-sm-offset-1 movie-best__rating">Today Best choice</div>
    <div class="col-sm-12 change--col">
        <div class="movie-beta__item ">
            <img alt='' src="images/movie/movie-sample1.jpg">
            <span class="best-rate">5.0</span>

            <ul class="movie-beta__info">
                <li><span class="best-voted">71 people voted today</span></li>
                <li>
                    <p class="movie__time">169 min</p>
                    <p>Adventure | Drama | Fantasy </p>
                    <p>38 comments</p>
                </li>
                <li class="last-block">
                    <a href="movie-page-left.html" class="slide__link">more</a>
                </li>
            </ul>
        </div>
        <div class="movie-beta__item second--item">
            <img alt='' src="images/movie/movie-sample2.jpg">
            <span class="best-rate">5.0</span>

            <ul class="movie-beta__info">
                <li><span class="best-voted">71 people voted today</span></li>
                <li>
                    <p class="movie__time">169 min</p>
                    <p>Adventure | Drama | Fantasy </p>
                    <p>38 comments</p>
                </li>
                <li class="last-block">
                    <a href="movie-page-left.html" class="slide__link">more</a>
                </li>
            </ul>
        </div>
        <div class="movie-beta__item third--item">
            <img alt='' src="images/movie/movie-sample3.jpg">
            <span class="best-rate">5.0</span>

            <ul class="movie-beta__info">
                <li><span class="best-voted">71 people voted today</span></li>
                <li>
                    <p class="movie__time">169 min</p>
                    <p>Adventure | Drama | Fantasy </p>
                    <p>38 comments</p>
                </li>
                <li class="last-block">
                    <a href="movie-page-left.html" class="slide__link">more</a>
                </li>
            </ul>
        </div>
        <div class="movie-beta__item hidden-xs">
            <img alt='' src="images/movie/movie-sample4.jpg">
            <span class="best-rate">5.0</span>

            <ul class="movie-beta__info">
                <li><span class="best-voted">71 people voted today</span></li>
                <li>
                    <p class="movie__time">169 min</p>
                    <p>Adventure | Drama | Fantasy </p>
                    <p>38 comments</p>
                </li>
                <li class="last-block">
                    <a href="movie-page-left.html" class="slide__link">more</a>
                </li>
            </ul>
        </div>
        <div class="movie-beta__item hidden-xs hidden-sm">
            <img alt='' src="images/movie/movie-sample5.jpg">
            <span class="best-rate">5.0</span>

            <ul class="movie-beta__info">
                <li><span class="best-voted">71 people voted today</span></li>
                <li>
                    <p class="movie__time">169 min</p>
                    <p>Adventure | Drama | Fantasy </p>
                    <p>38 comments</p>
                </li>
                <li class="last-block">
                    <a href="movie-page-left.html" class="slide__link">more</a>
                </li>
            </ul>
        </div>
        <div class="movie-beta__item hidden-xs hidden-sm">
            <img alt='' src="images/movie/movie-sample6.jpg">
            <span class="best-rate">5.0</span>

            <ul class="movie-beta__info">
                <li><span class="best-voted">71 people voted today</span></li>
                <li>
                    <p class="movie__time">169 min</p>
                    <p>Adventure | Drama | Fantasy </p>
                    <p>38 comments</p>
                </li>
                <li class="last-block">
                    <a href="movie-page-left.html" class="slide__link">more</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-sm-10 col-sm-offset-1 movie-best__check">check all movies now playing</div>
</div>

<div class="col-sm-12">
    <div class="mega-select-present mega-select-top mega-select--full">
        <div class="mega-select-marker">
            <div class="marker-indecator location">
                <p class="select-marker"><span>movie to watch now</span> <br>in your city</p>
            </div>

            <div class="marker-indecator cinema">
                <p class="select-marker"><span>find your </span> <br>cinema</p>
            </div>

            <div class="marker-indecator film-category">
                <p class="select-marker"><span>find movie due to </span> <br> your mood</p>
            </div>

            <div class="marker-indecator actors">
                <p class="select-marker"><span> like particular stars</span> <br>find them</p>
            </div>

            <div class="marker-indecator director">
                <p class="select-marker"><span>admire personalities - find </span> <br>by director</p>
            </div>

            <div class="marker-indecator country">
                <p class="select-marker"><span>search for movie from certain </span> <br>country?</p>
            </div>
        </div>

        <div class="mega-select pull-right">
            <span class="mega-select__point">Search by</span>
            <ul class="mega-select__sort">
                <li class="filter-wrap"><a href="#" class="mega-select__filter filter--active"
                        data-filter='location'>Location</a></li>
                <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='cinema'>Cinema</a></li>
                <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='film-category'>Category</a>
                </li>
                <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='actors'>Actors</a></li>
                <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='director'>Director</a></li>
                <li class="filter-wrap"><a href="#" class="mega-select__filter" data-filter='country'>Country</a></li>
            </ul>

            <input name="search-input" type='text' class="select__field">

            <div class="select__btn">
                <a href="#" class="btn btn-md btn--danger location">find <span class="hidden-exrtasm">your
                        city</span></a>
                <a href="#" class="btn btn-md btn--danger cinema">find <span class="hidden-exrtasm">suitable
                        cimema</span></a>
                <a href="#" class="btn btn-md btn--danger film-category">find <span class="hidden-exrtasm">best
                        category</span></a>
                <a href="#" class="btn btn-md btn--danger actors">find <span class="hidden-exrtasm">talented
                        actors</span></a>
                <a href="#" class="btn btn-md btn--danger director">find <span class="hidden-exrtasm">favorite
                        director</span></a>
                <a href="#" class="btn btn-md btn--danger country">find <span class="hidden-exrtasm">produced
                        country</span></a>
            </div>

            <div class="select__dropdowns">
                <ul class="select__group location">
                    <li class="select__variant" data-value='London'>London</li>
                    <li class="select__variant" data-value='New York'>New York</li>
                    <li class="select__variant" data-value='Paris'>Paris</li>
                    <li class="select__variant" data-value='Berlin'>Berlin</li>
                    <li class="select__variant" data-value='Moscow'>Moscow</li>
                    <li class="select__variant" data-value='Minsk'>Minsk</li>
                    <li class="select__variant" data-value='Warsawa'>Warsawa</li>
                </ul>

                <ul class="select__group cinema">
                    <li class="select__variant" data-value='Cineworld'>Cineworld</li>
                    <li class="select__variant" data-value='Empire'>Empire</li>
                    <li class="select__variant" data-value='Everyman'>Everyman</li>
                    <li class="select__variant" data-value='Odeon'>Odeon</li>
                    <li class="select__variant" data-value='Picturehouse'>Picturehouse</li>
                </ul>

                <ul class="select__group film-category">
                    <li class="select__variant" data-value="Children's">Children's</li>
                    <li class="select__variant" data-value='Comedy'>Comedy</li>
                    <li class="select__variant" data-value='Drama'>Drama</li>
                    <li class="select__variant" data-value='Fantasy'>Fantasy</li>
                    <li class="select__variant" data-value='Horror'>Horror</li>
                    <li class="select__variant" data-value='Thriller'>Thriller</li>
                </ul>

                <ul class="select__group actors">
                    <li class="select__variant" data-value='Leonardo DiCaprio'>Leonardo DiCaprio</li>
                    <li class="select__variant" data-value='Johnny Depp'>Johnny Depp</li>
                    <li class="select__variant" data-value='Jack Nicholson'>Jack Nicholson</li>
                    <li class="select__variant" data-value='Robert De Niro'>Robert De Niro</li>
                    <li class="select__variant" data-value='Morgan Freeman'>Morgan Freeman</li>
                    <li class="select__variant" data-value='Jim Carrey'>Jim Carrey</li>
                    <li class="select__variant" data-value='Adam Sandler'>Adam Sandler</li>
                    <li class="select__variant" data-value='Ben Stiller'>Ben Stiller</li>
                </ul>

                <ul class="select__group director">
                    <li class="select__variant" data-value='Steven Spielberg'>Steven Spielberg</li>
                    <li class="select__variant" data-value='Martin Scorsese'>Martin Scorsese</li>
                    <li class="select__variant" data-value='Guy Ritchie'>Guy Ritchie</li>
                    <li class="select__variant" data-value='Christopher Nolan'>Christopher Nolan</li>
                    <li class="select__variant" data-value='Tim Burton'>Tim Burton</li>
                </ul>

                <ul class="select__group country">
                    <li class="select__variant" data-value='USA'>USA</li>
                    <li class="select__variant" data-value='Germany'>Germany</li>
                    <li class="select__variant" data-value='Australia'>Australia</li>
                    <li class="select__variant" data-value='UK'>UK</li>
                    <li class="select__variant" data-value='Japan'>Japan</li>
                    <li class="select__variant" data-value='Serbia'>Serbia</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<h2 id='target' class="page-heading heading--outcontainer">Now in the cinema</h2>

<div class="col-sm-12">
    <div class="row">
        <div class="col-sm-8 col-md-9">
            <!-- Movie variant with time -->
            <div class="movie movie--test movie--test--dark movie--test--left">
                <div class="movie__images">
                    <a href="movie-page-left.html" class="movie-beta__link">
                        <img alt='' src="images/movie/movie-time8.jpg">
                    </a>
                </div>

                <div class="movie__info">
                    <a href='movie-page-left.html' class="movie__title">Gravity (2013) </a>

                    <p class="movie__time">91 min</p>

                    <p class="movie__option"><a href="#">Sci-Fi</a> | <a href="#">Thriller</a> | <a href="#">Drama</a>
                    </p>

                    <div class="movie__rate">
                        <div class="score"></div>
                        <span class="movie__rating">4.1</span>
                    </div>
                </div>
            </div>
            <!-- Movie variant with time -->

            <!-- Movie variant with time -->
            <div class="movie movie--test movie--test--light movie--test--left">
                <div class="movie__images">
                    <a href="movie-page-left.html" class="movie-beta__link">
                        <img alt='' src="images/movie/movie-time1.jpg">
                    </a>
                </div>

                <div class="movie__info">
                    <a href='movie-page-left.html' class="movie__title">The Hobbit: The Desolation of Smaug
                        (2013) </a>

                    <p class="movie__time">169 min</p>

                    <p class="movie__option"><a href="#">Adventure</a> | <a href="#">Fantasy</a> | <a href="#">Drama</a>
                    </p>

                    <div class="movie__rate">
                        <div class="score"></div>
                        <span class="movie__rating">5.0</span>
                    </div>
                </div>
            </div>
            <!-- Movie variant with time -->

            <!-- Movie variant with time -->
            <div class="movie movie--test movie--test--light movie--test--right">
                <div class="movie__images">
                    <a href="movie-page-left.html" class="movie-beta__link">
                        <img alt='' src="images/movie/movie-time9.jpg">
                    </a>
                </div>

                <div class="movie__info">
                    <a href='movie-page-left.html' class="movie__title">The Hunger Games: Catching Fire
                        (2013) </a>

                    <p class="movie__time">146 min</p>

                    <p class="movie__option"><a href="#">Action</a> | <a href="#">Adventure</a> | <a href="#">Sci-Fi</a>
                    </p>

                    <div class="movie__rate">
                        <div class="score"></div>
                        <span class="movie__rating">4.9</span>
                    </div>
                </div>
            </div>
            <!-- Movie variant with time -->

            <!-- Movie variant with time -->
            <div class="movie movie--test movie--test--dark movie--test--right">
                <div class="movie__images">
                    <a href="movie-page-left.html" class="movie-beta__link">
                        <img alt='' src="images/movie/movie-time10.jpg">
                    </a>
                </div>

                <div class="movie__info">
                    <a href='movie-page-left.html' class="movie__title">Thor: The Dark World (2013) </a>

                    <p class="movie__time">112 min</p>

                    <p class="movie__option"><a href="#">Action</a> | <a href="#">Adventure</a> | <a
                            href="#">Fantasy</a></p>

                    <div class="movie__rate">
                        <div class="score"></div>
                        <span class="movie__rating">5.0</span>
                    </div>
                </div>
            </div>
            <!-- Movie variant with time -->

            <!-- Movie variant with time -->
            <div class="movie movie--test movie--test--dark movie--test--left">
                <div class="movie__images">
                    <a href="movie-page-left.html" class="movie-beta__link">
                        <img alt='' src="images/movie/movie-time11.jpg">
                    </a>
                </div>

                <div class="movie__info">
                    <a href='movie-page-left.html' class="movie__title">World War Z (2013) </a>

                    <p class="movie__time">116 min</p>

                    <p class="movie__option"><a href="#">Action</a> | <a href="#">Adventure</a> | <a href="#">Horror</a>
                    </p>

                    <div class="movie__rate">
                        <div class="score"></div>
                        <span class="movie__rating">4.1</span>
                    </div>
                </div>
            </div>
            <!-- Movie variant with time -->

            <!-- Movie variant with time -->
            <div class="movie movie--test movie--test--light movie--test--left">
                <div class="movie__images">
                    <a href="movie-page-left.html" class="movie-beta__link">
                        <img alt='' src="images/movie/movie-time12.jpg">
                    </a>
                </div>

                <div class="movie__info">
                    <a href='movie-page-left.html' class="movie__title">Prisoners (2013) </a>

                    <p class="movie__time">153 min</p>

                    <p class="movie__option"><a href="#">Crime</a> | <a href="#">Thriller</a> | <a href="#">Drama</a>
                    </p>

                    <div class="movie__rate">
                        <div class="score"></div>
                        <span class="movie__rating">5.0</span>
                    </div>
                </div>
            </div>
            <!-- Movie variant with time -->

            <!-- Movie variant with time -->
            <div class="movie movie--test movie--test--light movie--test--right">
                <div class="movie__images">
                    <a href="movie-page-left.html" class="movie-beta__link">
                        <img alt='' src="images/movie/movie-time13.jpg">
                    </a>
                </div>

                <div class="movie__info">
                    <a href='movie-page-left.html' class="movie__title">This Is the End (2013) </a>

                    <p class="movie__time">107 min</p>

                    <p class="movie__option"><a href="#">Comedy</a> | <a href="#">Fantasy</a></p>

                    <div class="movie__rate">
                        <div class="score"></div>
                        <span class="movie__rating">4.9</span>
                    </div>
                </div>
            </div>
            <!-- Movie variant with time -->

            <!-- Movie variant with time -->
            <div class="movie movie--test movie--test--dark movie--test--right">
                <div class="movie__images">
                    <a href="movie-page-left.html" class="movie-beta__link">
                        <img alt='' src="images/movie/movie-time14.jpg">
                    </a>
                </div>

                <div class="movie__info">
                    <a href='movie-page-left.html' class="movie__title">The Internship (2013) </a>

                    <p class="movie__time">112 min</p>

                    <p class="movie__option"><a href="#">Comedy</a></p>

                    <div class="movie__rate">
                        <div class="score"></div>
                        <span class="movie__rating">5.0</span>
                    </div>
                </div>
            </div>
            <!-- Movie variant with time -->

        </div>

        <aside class="col-sm-4 col-md-3">
            <div class="sitebar first-banner--left">
                <div class="banner-wrap first-banner--left">
                    <img alt='banner' src="images/banners/sale.jpg">
                </div>

                <div class="banner-wrap">
                    <img alt='banner' src="images/banners/sport.jpg">
                </div>

                <div class="banner-wrap banner-wrap--last">
                    <img alt='banner' src="images/banners/boots.jpg">
                </div>

            </div>
        </aside>
    </div>
</div>
</div>