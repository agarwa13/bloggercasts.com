@extends('layouts.app')

@push('header-scripts')
    <link rel="stylesheet" href="/css/services-landing-page.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300|Roboto+Slab:400,700,300,100" rel="stylesheet" type="text/css">
@endpush

@push('footer-scripts')
    <script src="/js/services-landing-page.js"></script>
@endpush

@section('body')
    <section id="top-content" data-lead-id="top-content">
        <div class="wrapper">

            <div class="right">
                <h1 data-lead-id="headline"><strong>THANK YOU FOR</strong> HIRING ME</h1>
                <p data-lead-id="content-text">My goal is to ensure you are able to use your Google Analytics account and make decisions based on spam-free data.</p>
                <p>Feel free to reach out to me at anytime. You can contact me via email. My email address is nikhil@bloggercasts.com</p>
                <p>To allow me to start working on your account, follow the steps in the video below</p>
            </div>

            <div class="left">
                <img src="/img/services-landing-page/nikhil.png" alt="Will" data-lead-id="main-image">
            </div>
        </div>
    </section>

    <section id="features">
        <h2 data-lead-id="features-headline">WATCH THIS VIDEO TO GET STARTED</h2>
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">

                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/203742967" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                        </div>

                        <p class="text-center">
                            I will keep you updated as I go to war against the spam in your account!
                        </p>
                    </div>



                </div>
            </div>
        </div>

    </section>

@endsection