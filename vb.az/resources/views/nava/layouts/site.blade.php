<!DOCTYPE html>
<html>
<head>
    <title>Nava</title>
    <meta charset="utf-8">
    <meta name="description" content="Traveling HTML5 Template" />
    <meta name="author" content="Design Hooks" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:400,700" rel="stylesheet" />
    <link href="{{ asset(env('THEME')) }}/img/favicon.png" type="image/x-icon" rel="shortcut icon" />
    <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/bootstrap.css"/>
    {{--<link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/bootstrap.min.css"/>--}}
    <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/screen.css"/>
    <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/responsive.css"/>
    <link rel="stylesheet" href="{{ asset(env('THEME')) }}/modalForm/css/modernforms.css">
    <link rel="stylesheet" href="{{ asset(env('THEME')) }}/modalForm/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset(env('THEME')) }}/modalForm/css/themes/theme-blue.css">
    <link rel="stylesheet" href="{{ asset(env('THEME')) }}/jwplayer/css/jwplayer.css">
    <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/jquery-ui.min.css">
    <link rel="stylesheet" href="{{ asset(env('THEME')) }}/css/modaldialog.css">

    <script src="{{ asset(env('THEME')) }}/jwplayer/js/jwplayer.js" type="text/javascript"></script>
    <!--[if lte IE 9]>
    <script src="{{ asset(env('THEME')) }}/modalForm/js/placeholders.min.js"></script>
    <![endif]-->
</head>
<body class="home" id="page">
<!-- Header -->
<header id="header">

    <div class="navbar navbar-fixed-top">
        <div class="container">

            <!-- Logo & Responsive Menu -->
            <div class="navbar-header">
                <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-menu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#top-page-banner" class="a_image_logo"><img src="{{ asset(env('THEME')) }}/img/logo_music_key.png" class="img-responsive" alt="logo" role="banner"></a>
            </div>	<!-- /.navbar-header -->

            <!-- Navigation -->
            <nav id="navigation-menu" class="collapse navbar-collapse" role="navigation" style="margin-left: -40px;">
                <ul class="nav navbar-nav navbar-right">
                    <li><a id="home" class="selected-nav" href=""><strong>Əsas Saəhifə</strong></a></li>
                    <li><a id="myroom" class="selected-nav" href=""><strong>Şəxsi Otaqım</strong></a></li>
                    <li><p id="login" href="" class=""><strong>Login</strong></p></li>
                </ul>
            </nav>	<!-- /.navbar-collapse -->

        </div>	<!-- /.container -->
    </div>	<!-- /.navbar -->

</header>

<!-- Main Content -->
<div class="content-box">
    <!-- Hero Section -->
    <section class="section section-hero">
        <div class="hero-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-16 col-xs-24">
                        <div class="destination-box">
                            <div class="box-cover">

                                <div id="player" class="embed-responsive embed-responsive-4by3">FOR PLAYER</div>
                                <script src="{{ asset(env('THEME')) }}/jwplayer/js/script.js" type="text/javascript"></script>

                            </div>

                            {{--<span class="boats-qty">730</span>--}}
                            {{--<div class="box-details">--}}
                                {{--<div class="box-meta">--}}
                                    {{--<h4 class="city">Figueira da Fox</h4>--}}
                                    {{--<p class="country">Portugal</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>

                    {{--FORM COLUMN START--}}
                    <div class="col-md-8 col-sm-12 col-xs-24">
                        <div class="destination-box">
                            <div class="box-cover">
                                {{--MODERN fORMS START=========================================--}}
                                <div id="modern_form" class="modern-forms">
                                    <div class="modern-container mc2">
                                        <form method="POST">
                                            {{ csrf_field() }}
                                            <fieldset>
                                                <div class="field-group prepend-icon">
                                                    <input class="mdn-input" placeholder="Login" type="text">
                                                    <span class="mdn-icon"><i class="fa fa-male"></i></span>
                                                    <span class="mdn-bar"></span>
                                                </div>
                                                <div class="field-group prepend-icon">
                                                    <input class="mdn-input" placeholder="Parol" type="password">
                                                    <span class="mdn-icon"><i class="fa fa-lock"></i></span>
                                                    <span class="mdn-bar"></span>
                                                </div>
                                            </fieldset>

                                            <fieldset>
                                                <div class="mdn-group block-group mdn-bottom-border">
                                                    <label class="mdn-switch">
                                                        <input name="remember" type="checkbox">
                                                        <span class="switch-toggle"></span>
                                                        <span class="switch-label">Keep me logged in</span>
                                                    </label>
                                                </div><!-- mdn-group -->
                                            </fieldset>

                                            <div class="mdn-footer">
                                                <button type="submit" class="mdn-button btn-primary">Login</button>
                                                <button type="reset" class="mdn-button btn-flat">Signup</button>
                                            </div>
                                        </form>
                                    </div><!-- modern-container -->
                                </div>
                                {{--MODERN FORMS END=========================================--}}
                            </div>

                            {{--<span class="boats-qty">621</span>--}}
                            {{--<div class="box-details">--}}
                                {{--<div class="box-meta">--}}
                                    {{--<h4 class="city">Ibiza</h4>--}}
                                    {{--<p class="country">Spain</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    {{--FORM COLUMN START END--}}
                </div>
            </div>
        </div>

        <!-- Statistics Box FOR REKLAMS START-->
        <div class="container">
            <div class="statistics-box" style="margin-top: 0.1px;">
                <div class="statistics-item">
                    <p class="title"><strong> Burada sizin relamınız ola bilər </strong></p>
                    <span class="value">2,300</span>
                </div>

                <div class="statistics-item">
                    <p class="title"><strong> Burada sizin relamınız ola bilər </strong></p>
                    <span class="value">1,000</span>
                </div>

                <div class="statistics-item">
                    <p class="title"><strong> Burada sizin relamınız ola bilər </strong></p>
                    <span class="value">35,000</span>
                </div>

                <div class="statistics-item">
                    <p class="title"><strong> Burada sizin relamınız ola bilər </strong></p>
                    <span class="value">50,000</span>
                </div>
            </div>
        </div>
        <!-- Statistics Box FOR REKLAMS END-->
    </section>

    <!-- Destinations Section -->
    <section class="section section-destination">
        <!-- Title FOR MUSIQICI END POPULAR START-->
        <div class="section-title">
            <h2 style="color: #ff0003;"><strong> Kateqoriyalar </strong></h2>
            <div id="accordion">
                <h3><strong>Musiqiçilər</strong></h3>
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-16 col-xs-24">
                                <div class="destination-box">
                                    <div class="box-cover">
                                        <img src="{{ asset(env('THEME')) }}/img/music.ico" alt="destination image" />
                                    </div>

                                    {{--<span class="boats-qty">730</span>--}}

                                    <div class="box-details">
                                        <div class="box-meta">
                                            <h4 class="city">Figueira da Fox</h4>
                                            <p class="country">Portugal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8 col-sm-12 col-xs-24">
                                <div class="destination-box">
                                    <div class="box-cover">
                                        <a href="#">
                                            <img src="{{ asset(env('THEME')) }}/img/music.ico" alt="destination image" />
                                        </a>
                                    </div>

                                    {{--<span class="boats-qty">621</span>--}}

                                    <div class="box-details">
                                        <div class="box-meta">
                                            <h4 class="city">Ibiza</h4>
                                            <p class="country">Spain</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8 col-sm-12 col-xs-24">
                                <div class="destination-box">
                                    <div class="box-cover">
                                        <a href="#">
                                            <img src="{{ asset(env('THEME')) }}/img/music.ico" alt="destination image" />
                                        </a>
                                    </div>

                                    {{--<span class="boats-qty">543</span>--}}

                                    <div class="box-details">
                                        <div class="box-meta">
                                            <h4 class="city">Palma de Mallorca</h4>
                                            <p class="country">Spain</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8 col-sm-12 col-xs-24">
                                <div class="destination-box">
                                    <div class="box-cover">
                                        <a href="#">
                                            <img src="{{ asset(env('THEME')) }}/img/music.ico" alt="destination image" />
                                        </a>
                                    </div>

                                    {{--<span class="boats-qty">495</span>--}}

                                    <div class="box-details">
                                        <div class="box-meta">
                                            <h4 class="city">Portofino</h4>
                                            <p class="country">Italy</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8 col-sm-12 col-xs-24">
                                <div class="destination-box">
                                    <div class="box-cover">
                                        <a href="#">
                                            <img src="{{ asset(env('THEME')) }}/img/music.ico" alt="destination image" />
                                        </a>
                                    </div>

                                    {{--<span class="boats-qty">402</span>--}}

                                    <div class="box-details">
                                        <div class="box-meta">
                                            <h4 class="city">Port Hercules</h4>
                                            <p class="country">Monaco</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="load-destinations-box">
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <div class="destination-box">
                                        <div class="box-cover">
                                            <a href="#">
                                                <img src="{{ asset(env('THEME')) }}/img/music.ico" alt="destination image" />
                                            </a>
                                        </div>

                                        {{--<span class="boats-qty">495</span>--}}

                                        <div class="box-details">
                                            <div class="box-meta">
                                                <h4 class="city">Portofino</h4>
                                                <p class="country">Italy</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <div class="destination-box">
                                        <div class="box-cover">
                                            <a href="#">
                                                <img src="{{ asset(env('THEME')) }}/img/music.ico" alt="destination image" />
                                            </a>
                                        </div>

                                        {{--<span class="boats-qty">402</span>--}}

                                        <div class="box-details">
                                            <div class="box-meta">
                                                <h4 class="city">Port Hercules</h4>
                                                <p class="country">Monaco</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <div class="destination-box">
                                        <div class="box-cover">
                                            <a href="#">
                                                <img src="{{ asset(env('THEME')) }}/img/music.ico" alt="destination image" />
                                            </a>
                                        </div>

                                        {{--<span class="boats-qty">543</span>--}}

                                        <div class="box-details">
                                            <div class="box-meta">
                                                <h4 class="city">Palma de Mallorca</h4>
                                                <p class="country">Spain</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3><strong>Məşurlar</strong> </h3>
                <div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-16 col-xs-24">
                                <div class="destination-box">
                                    <div class="box-cover">
                                        <a href="#">
                                            <img src="{{ asset(env('THEME')) }}/img/music.ico" alt="destination image" />
                                        </a>
                                    </div>

                                    <span class="boats-qty">730</span>

                                    <div class="box-details">
                                        <div class="box-meta">
                                            <h4 class="city img-responsive">Figueira da Fox</h4>
                                            <p class="country img-responsive">Portugal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8 col-sm-12 col-xs-24">
                                <div class="destination-box">
                                    <div class="box-cover">
                                        <a href="#">
                                            <img src="{{ asset(env('THEME')) }}/img/music.ico" alt="destination image" />
                                        </a>
                                    </div>

                                    <span class="boats-qty">621</span>

                                    <div class="box-details">
                                        <div class="box-meta">
                                            <h4 class="city">Ibiza</h4>
                                            <p class="country">Spain</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8 col-sm-12 col-xs-24">
                                <div class="destination-box">
                                    <div class="box-cover">
                                        <a href="#">
                                            <img src="{{ asset(env('THEME')) }}/img/music.ico" alt="destination image" />
                                        </a>
                                    </div>

                                    <span class="boats-qty">543</span>

                                    <div class="box-details">
                                        <div class="box-meta">
                                            <h4 class="city">Palma de Mallorca</h4>
                                            <p class="country">Spain</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8 col-sm-12 col-xs-24">
                                <div class="destination-box">
                                    <div class="box-cover">
                                        <a href="#">
                                            <img src="{{ asset(env('THEME')) }}/img/music.ico" alt="destination image" />
                                        </a>
                                    </div>

                                    <span class="boats-qty">495</span>

                                    <div class="box-details">
                                        <div class="box-meta">
                                            <h4 class="city">Portofino</h4>
                                            <p class="country">Italy</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8 col-sm-12 col-xs-24">
                                <div class="destination-box">
                                    <div class="box-cover">
                                        <a href="#">
                                            <img src="{{ asset(env('THEME')) }}/img/music.ico" alt="destination image" />
                                        </a>
                                    </div>

                                    <span class="boats-qty">402</span>

                                    <div class="box-details">
                                        <div class="box-meta">
                                            <h4 class="city">Port Hercules</h4>
                                            <p class="country">Monaco</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="load-destinations-box">
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <div class="destination-box">
                                        <div class="box-cover">
                                            <a href="#">
                                                <img src="{{ asset(env('THEME')) }}/img/music.ico" alt="destination image" />
                                            </a>
                                        </div>

                                        <span class="boats-qty">495</span>

                                        <div class="box-details">
                                            <div class="box-meta">
                                                <h4 class="city">Portofino</h4>
                                                <p class="country">Italy</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <div class="destination-box">
                                        <div class="box-cover">
                                            <a href="#">
                                                <img src="{{ asset(env('THEME')) }}/img/music.ico" alt="destination image" />
                                            </a>
                                        </div>

                                        <span class="boats-qty">402</span>

                                        <div class="box-details">
                                            <div class="box-meta">
                                                <h4 class="city">Port Hercules</h4>
                                                <p class="country">Monaco</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <div class="destination-box">
                                        <div class="box-cover">
                                            <a href="#">
                                                <img src="{{ asset(env('THEME')) }}/img/music.ico" alt="destination image" />
                                            </a>
                                        </div>

                                        <span class="boats-qty">543</span>

                                        <div class="box-details">
                                            <div class="box-meta">
                                                <h4 class="city">Palma de Mallorca</h4>
                                                <p class="country">Spain</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Title FOR MUSIQICI END POPULAR END-->

        <!-- Content -->

    </section>

    <!-- Parallax Box -->
    <div class="parallax-box">
        <div class="container">
            <div class="text align-center">
                <h1>Have your own boat?</h1>
                <p>navigare necesse est, vivere non est necesse</p>

                <a href="#" class="btn btn-special no-icon size-2x">Rent your boat</a>
            </div>
        </div>
    </div>

    <!-- Boats Section -->
    <section class="section section-boats">
        <!-- Title -->
        <div class="section-title">
            <div class="container">
                <h2 class="title">Featured boats</h2>
                <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            </div>
        </div>

        <!-- Content -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-24">
                    <div class="boat-box">
                        <div class="box-cover">
                            <img src="{{ asset(env('THEME')) }}/img/boat-1.jpg" alt="destination image" />
                        </div>

                        <span class="boat-price">€580 / day</span>

                        <div class="box-details">
                            <div class="box-meta">
                                <h4 class="boat-name">Delphia 47</h4>
                                <ul class="clean-list boat-meta">
                                    <li class="location">Gdansk, Poland</li>
                                    <li class="berths">8 Berths</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-xs-24">
                    <div class="boat-box">
                        <div class="box-cover">
                            <img src="{{ asset(env('THEME')) }}/img/boat-2.jpg" alt="destination image" />
                        </div>

                        <span class="boat-price">€950 / day</span>

                        <div class="box-details">
                            <div class="box-meta">
                                <h4 class="boat-name">Sense 55</h4>
                                <ul class="clean-list boat-meta">
                                    <li class="location">Portofino, Itali</li>
                                    <li class="berths">12 Berths</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-xs-24">
                    <div class="boat-box">
                        <div class="box-cover">
                            <img src="{{ asset(env('THEME')) }}/img/boat-3.jpg" alt="destination image" />
                        </div>

                        <span class="boat-price">€820 / day</span>

                        <div class="box-details">
                            <div class="box-meta">
                                <h4 class="boat-name">Cruiser 51</h4>
                                <ul class="clean-list boat-meta">
                                    <li class="location">Palma de Mallorca, Spain</li>
                                    <li class="berths">10 Berths</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-xs-24">
                    <div class="boat-box">
                        <div class="box-cover">
                            <img src="{{ asset(env('THEME')) }}/img/boat-4.jpg" alt="destination image" />
                        </div>

                        <span class="boat-price">€400 / day</span>

                        <div class="box-details">
                            <div class="box-meta">
                                <h4 class="boat-name">Cruiser 41S</h4>
                                <ul class="clean-list boat-meta">
                                    <li class="location">Lisbon, Portugal</li>
                                    <li class="berths">8 Berths</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="load-boats-box">
                    <div class="col-sm-12 col-xs-24">
                        <div class="boat-box">
                            <div class="box-cover">
                                <img src="{{ asset(env('THEME')) }}/img/boat-2.jpg" alt="destination image" />
                            </div>

                            <span class="boat-price">€950 / day</span>

                            <div class="box-details">
                                <div class="box-meta">
                                    <h4 class="boat-name">Sense 55</h4>
                                    <ul class="clean-list boat-meta">
                                        <li class="location">Portofino, Itali</li>
                                        <li class="berths">12 Berths</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-24">
                        <div class="boat-box">
                            <div class="box-cover">
                                <img src="{{ asset(env('THEME')) }}/img/boat-1.jpg" alt="destination image" />
                            </div>

                            <span class="boat-price">€580 / day</span>

                            <div class="box-details">
                                <div class="box-meta">
                                    <h4 class="boat-name">Delphia 47</h4>
                                    <ul class="clean-list boat-meta">
                                        <li class="location">Gdansk, Poland</li>
                                        <li class="berths">8 Berths</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

<!-- Footer -->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="widget widget_links">
                    <h5 class="widget-title">Top Locations</h5>
                    <ul>
                        <li><a href="#">Lorem impsum dolor</a></li>
                        <li><a href="#">Sit amet consectetur</a></li>
                        <li><a href="#">Adipisicing elit</a></li>
                        <li><a href="#">Eiusmod tempor</a></li>
                        <li><a href="#">incididunt ut labore</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-5">
                <div class="widget widget_links">
                    <h5 class="widget-title">Featured Boats</h5>
                    <ul>
                        <li><a href="#">Lorem impsum dolor</a></li>
                        <li><a href="#">Sit amet consectetur</a></li>
                        <li><a href="#">Adipisicing elit</a></li>
                        <li><a href="#">Eiusmod tempor</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-9">
                <div class="widget widget_social">
                    <h5 class="widget-title">Subscribe to our newsletter</h5>
                    <form class="subscribe-form">
                        <div class="input-line">
                            <input type="text" name="subscribe-email" value="" placeholder="Your email address" />
                        </div>
                        <button type="button" name="subscribe-submit" class="btn btn-special no-icon">Subscribe</button>
                    </form>

                    <ul class="clean-list social-block">
                        <li>
                            <a href="#"><i class="icon-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="icon-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="icon-google-plus"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-5">
                <div class="widget widget_links">
                    <h5 class="widget-title">Contact us</h5>
                    <ul>
                        <li><a href="#">Lorem impsum dolor</a></li>
                        <li><a href="#">Sit amet consectetur</a></li>
                        <li><a href="#">Adipisicing elit</a></li>
                        <li><a href="#">Eiusmod tempor</a></li>
                        <li><a href="#">incididunt ut labore</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

!-- Scripts -->

<script src="{{ asset(env('THEME')) }}/js/jquery-3.2.1.min.js"></script>
<script src="{{ asset(env('THEME')) }}/js/jquery.js"></script>
<script src="{{ asset(env('THEME')) }}/js/bootstrap.min.js"></script>
<script src="{{ asset(env('THEME')) }}/js/jquery-ui.min.js"></script>
<script src="{{ asset(env('THEME')) }}/js/functions.js"></script>
<script src="{{ asset(env('THEME')) }}/js/fullcaljs.js"></script>
</body>
</html>
