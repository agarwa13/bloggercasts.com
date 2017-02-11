@extends('layouts.app')

@push('header-scripts')
    <link rel="stylesheet" href="/css/services-landing-page.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300|Roboto+Slab:400,700,300,100" rel="stylesheet" type="text/css">
    {{--<script src="https://use.fontawesome.com/929be64d01.js"></script>--}}
@endpush

@push('footer-scripts')
    <script src="/js/services-landing-page.js"></script>
@endpush

@section('body')
    <section id="top-content" data-lead-id="top-content">
        <div class="wrapper">

            <div class="right">
                <h1 data-lead-id="headline"><strong>I’LL ELIMINATE SPAM FROM</strong> YOUR GOOGLE ANALYTICS:</h1>
                <a href="#hire-me" data-lead-id="optin-submit"><u>Click Here</u> To Hire Me ($97)</a>
                <img src="/img/services-landing-page/lock.png" alt="lock" id="lock" data-lead-id="privacy-img">
                <p class="privacy" data-lead-id="privacy-text">I respect your privacy and have a ZERO TOLERANCE for spam.</p>
                <p data-lead-id="content-text">Measure your performance and make decisions on spam-free data. No more messing with filters and no more spam in your Google Analytics.</p>
            </div>
            <div class="left">
                <img src="/img/services-landing-page/nikhil.png" alt="Will" data-lead-id="main-image">
            </div>
        </div>
    </section>

    <section id="features">
        <h2 data-lead-id="features-headline">FEATURES</h2>
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-10 col-md-offset-1">
                        <p class="text-center">
                            For one year, I will strive to ensure that your GA account is free from spam.
                        </p>
                    </div>

                    <div class="col-md-4">
                        <div class="thumbnail white-thumbnail">
                            <h3 class="text-center">Spam Free Analytics</h3>
                            <p>
                                Filters exclude any spam from entering your view.
                            </p>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="thumbnail white-thumbnail">
                            <h3 class="text-center">Spam Free Segment</h3>
                            <p>
                                View even historical data without the spam.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="thumbnail white-thumbnail">
                            <h3 class="text-center">Data Backup</h3>
                            <p>
                                An unfiltered backup view to ensure no data is lost.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="thumbnail white-thumbnail">
                            <h3 class="text-center">Personalized Filters</h3>
                            <p>
                                Filters are unique to your account and setup.
                            </p>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="thumbnail white-thumbnail">
                            <h3 class="text-center">Unlimited Updates</h3>
                            <p>
                                If you change your setup, we update the filters.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="thumbnail white-thumbnail">
                            <h3 class="text-center">100% Risk Free</h3>
                            <p>
                                Unhappy with our service? Get a full refund
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>



    <section id="testimonials" data-lead-id="testimonials">
        <h2 data-lead-id="testimonials-headline">WHAT OTHERS ARE SAYING</h2>
        <div class="wrapper">
            <div class="testimonial" data-lead-id="testimonial1">
                <div class="story" data-lead-id="story1">
                    <p class="quote" data-lead-id="quotation-mark1">“</p>
                    <p data-lead-id="quote1">“After following multiple guides on the internet, even from reputed sites like Moz, I wasn't able to eliminate all the spam from my account so I decided to sign up for this service. Nikhil set up my account and within a few hours of me signing up everything was done! All the spam in the language area and everywhere else in the account was simply gone when I used the segment he created. It was so nice to see the true data and all the actual people that were referring visitors to my site.”</p>
                </div>
                <div class="arrow-down" data-lead-id="arrow1"></div>
                <div class="bottom" data-lead-id="author-info1">
                    <div class="label" data-lead-id="author-label1">
                        <p data-lead-id="author1"><b>Yogini</b> <br>
                            Counselor at Trendy Parents</p>
                    </div>
                    <img src="/img/services-landing-page/yogini.png" alt="photo" data-lead-id="author-image1">
                </div>
            </div>
            <div class="testimonial" data-lead-id="testimonial2">
                <div class="story" data-lead-id="story2">
                    <p class="quote" data-lead-id="quotation-mark2">“</p>
                    <p data-lead-id="quote2">"I thought 97$ was quite expensive. Plus, I was sure this probably wouldn't work for me because I have a fairly unconventional setup. I saw that Nikhil had a no questions asked money back guarantee, so I decided I would give it a shot. OMG! I actually got a Skype call to personally discuss my account. This is truly personalized to your individual account, not some copy paste service."</p>
                </div>
                <div class="arrow-down left-float" data-lead-id="arrow2"></div>
                <div class="bottom-left" data-lead-id="author-info2">
                    {{--<img src="/img/services-landing-page/photo2.png" alt="photo" data-lead-id="author-image2">--}}
                    <div class="label label-left" data-lead-id="author-label2">
                        <p data-lead-id="author2"><b>Chandani</b><br>
                            The Brains at Mad Batter Bakery</p>
                    </div>
                </div>
            </div>
            <div class="testimonial" data-lead-id="testimonial3">
                <div class="story" data-lead-id="story3">
                    <p class="quote" data-lead-id="quotation-mark3">“</p>
                    <p data-lead-id="quote3">"I didn't think the spam in GA was a big deal and I definitely wasn't going to pay someone to eliminate it. Then I took a Pinterest Challenge in which I needed to identify my best performing blog posts. I wasn't able to do it because of all the spam! My GA had become useless. That's when I decided to sign up and I absolutely love the new reports I have."</p>
                </div>
                <div class="arrow-down" data-lead-id="arrow3"></div>
                <div class="bottom" data-lead-id="author-info3">
                    <div class="label" data-lead-id="author-label3">
                        <p data-lead-id="author3"><b>Walid</b><br>
                            Founder of Answering Physics</p>
                    </div>
                    {{--<img src="/img/services-landing-page/photo3.png" alt="photo" data-lead-id="author-image3">--}}
                </div>
            </div>
            {{--<a href="#" data-lead-id="bottom-link">Hire Me ($97)</a>--}}
        </div>
    </section>

    <section id="hire-me">
        <h2 data-lead-id="testimonials-headline">HIRE ME</h2>
        <div class="wrapper">

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <p>
                        I just need your email address and GA Property Name or ID (if you have multiple GA Properties).
                        Once you have completed payment, you can follow along a video I provide for you to share access
                        to your account with me. I will take over from there.
                    </p>
                </div>
            </div>

            <form action="/your-server-side-code" method="POST" class="form-horizontal">

                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="googleAnalyticsProperty" class="col-sm-2 control-label">GA Property</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="googleAnalyticsProperty" placeholder="Google Analytics Property">
                    </div>
                </div>

                <script
                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                        data-key="{{env('STRIPE_KEY')}}"
                        data-amount="2000"
                        data-name="Nikhil Agarwal"
                        data-description="2 widgets"
                        data-zip-code="true"
                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                        data-locale="auto">
                </script>

            </form>


            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <br>
                    <p class="text-muted">
                        If you have any trouble, simply send an email to nikhil@bloggercasts.com
                    </p>
                </div>
            </div>

        </div>

    </section>

@endsection