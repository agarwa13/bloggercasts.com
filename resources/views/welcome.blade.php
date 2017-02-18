@extends('layouts.app')

@push('header-scripts')
<!-- Custom CSS -->
<link href="css/home-page.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
@endpush

@section('body')

    <div id="home-page">
        <!-- Header -->
        <a name="about"></a>
        <div class="intro-header">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="intro-message">
                            <h1>Bloggercasts</h1>
                            <h3>Made with Love for Bloggers</h3>
                            <hr class="intro-divider">
                            <ul class="list-inline intro-social-buttons">
                                <li>
                                    <a href="/series" class="btn btn-default btn-lg"><i class="fa fa-video-camera fa-fw"></i> <span class="network-name">BROWSE VIDEOS</span></a>
                                </li>
                                @unless(Auth::check())
                                <li>
                                    <a href="/login" class="btn btn-default btn-lg"><i class="fa fa-sign-in fa-fw"></i> <span class="network-name">LOGIN</span></a>
                                </li>
                                <li>
                                    <a href="/register" class="btn btn-default btn-lg"><i class="fa fa-user-plus fa-fw"></i> <span class="network-name">REGISTER</span></a>
                                </li>
                                @endunless
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container -->

        </div>
        <!-- /.intro-header -->

        <!-- Page Content -->

        <a  name="services"></a>
        <div class="content-section-a">

            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-6">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">Screencasts for Bloggers<br>All Action. No Sales.</h2>
                        <p class="lead">Bloggercasts provides video tutorials to help you take the next steps in your
                        business plan. Our videos are fluff-free and are not sales pitches. Each video gets you closer
                        to your definition of success.</p>
                    </div>
                    <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                        <img class="img-responsive" src="/img/home-page/learn.png" alt="">
                    </div>
                </div>

            </div>
            <!-- /.container -->

        </div>
        <!-- /.content-section-a -->

        <div class="content-section-b">

            <div class="container">

                <div class="row">
                    <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">Personalized Services<br>by Nikhil himself</h2>
                        <p class="lead">Bloggercasts offers competitively priced, highly rated services to help you reach your goals faster. We even offer a comprehensive, (like never see the backend of your site kind of comprehensive) service so you can focus on what you do best, growing your business. </p>
                    </div>
                    <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                        <img class="img-responsive" src="/img/home-page/services.png" alt="">
                    </div>
                </div>

            </div>
            <!-- /.container -->

        </div>
        <!-- /.content-section-b -->

        <div class="content-section-a">

            <div class="container">

                <div class="row">
                    <div class="col-lg-5 col-sm-6">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">Trustworthy Recommendations<br>for Your Business</h2>
                        <p class="lead">
                            Need to choose a landing page provider, a mailing list service or a hosting provider.
                            Or maybe you need a service we don't offer like graphic design. Share your goals with us,
                            and we will provide you with a personalized recommendation.
                        </p>
                    </div>
                    <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                        <img class="img-responsive" src="/img/home-page/recommendations.png" alt="">
                    </div>
                </div>

            </div>
            <!-- /.container -->

        </div>
        <!-- /.content-section-a -->

        <a  name="contact"></a>
        <div class="banner">

            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <h2>Get Your Learning On:</h2>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-inline banner-social-buttons">
                            <li>
                                <a href="/series" class="btn btn-default btn-lg"><i class="fa fa-video-camera fa-fw"></i> <span class="network-name">BROWSE VIDEOS</span></a>
                            </li>
                            @unless(Auth::check())
                            <li>
                                <a href="/login" class="btn btn-default btn-lg"><i class="fa fa-sign-in fa-fw"></i> <span class="network-name">LOGIN</span></a>
                            </li>
                            <li>
                                <a href="/register" class="btn btn-default btn-lg"><i class="fa fa-user-plus fa-fw"></i> <span class="network-name">REGISTER</span></a>
                            </li>
                            @endunless
                        </ul>
                    </div>
                </div>

            </div>
            <!-- /.container -->

        </div>
        <!-- /.banner -->

    </div>

@endsection