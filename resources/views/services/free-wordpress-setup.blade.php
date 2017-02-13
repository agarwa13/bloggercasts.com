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
                <h1 data-lead-id="headline"><strong>I’LL SETUP YOUR WORDPRESS</strong> BLOG FOR FREE:</h1>
                <a href="#hire-me" data-lead-id="optin-submit"><u>Click Here</u> To Get Started (<strike>$247</strike> FREE)</a>
                {{--<img src="/img/services-landing-page/lock.png" alt="lock" id="lock" data-lead-id="privacy-img">--}}
                {{--<p class="privacy" data-lead-id="privacy-text">I respect your privacy and have a ZERO TOLERANCE for spam.</p>--}}
                <p data-lead-id="content-text">Most blogs fail within a few months because they lack a solid foundation to generate traffic and engage visitors. Avoid failure by using Bloggercasts to setup your blog to be secure and search engine friendly.</p>
            </div>
            <div class="left">
                <img src="/img/services-landing-page/nikhil.png" alt="Will" data-lead-id="main-image">
            </div>
        </div>
    </section>

    <section id="features">
        <h2 data-lead-id="features-headline">FREE, BUT NOT BASIC</h2>
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-10 col-md-offset-1">
                        <p class="text-center">
                            While this service is free, it isn't basic in any sense of the word. We first talk to you on Skype or over the phone
                            to understand your goals and based on your budget, we recommend a setup that is unique to you and sets you up for success.
                            Once you approve of the plan, we implement it for you within hours.
                        </p>
                        <br>
                        <p>
                            Due to the personalized nature of this service, we can't tell you upfront what the foundational
                            building blocks of your site will be. However, in most cases the following is included.
                        </p>
                    </div>

                    <h2 data-lead-id="features-headline">THE FOUNDATIONS OF A SUCCESSFUL BLOG</h2>

                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Hosting Selection
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <p>
                                            We help you select a hosting provider based on your goals.
                                        </p>
                                        <p>
                                            Have big goals?
                                            we will set you up with a VPS. Not so tech savvy? we will recommend hosts
                                            that provide excellent customer service. Budget conscious? we can help you
                                            get your site online for less than 1$ per month!
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            WordPress Install
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p>We install self-hosted WordPress software and configure it based on best practices.</p>
                                        <p>We can manage complex installations such as those with a dedicated machine for the database as well as simple one-click installs on shared hosting providers.</p>
                                        <p>In addition, we follow best practices when configuring your WordPress install. The defaults aren't always the best choice.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Theme Selection
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p>
                                            We work with you to pick the best WordPress theme.
                                        </p>
                                        <p>
                                            We work within your budget and ensure that your theme meets the
                                            needs of the modern web. We ensure that the theme is mobile friendly and
                                            can be search engine optimized.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Search Engine Optimization
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                    <div class="panel-body">
                                        <p>
                                            We ensure your site can be indexed by Google and implement SEO best practices.
                                            This allows your site to rank higher in Google.
                                        </p>
                                        <p>
                                            We show you how you to control the title and description that Google displays
                                            in the Search Results that display a link to your site.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFive">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Google Search Console
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                    <div class="panel-body">
                                        <p>
                                            We connect your site to Google Search Console and submit a sitemap so you
                                            can monitor your site's performance in Google Search and ensure that you
                                            continue to follow SEO best practices.
                                        </p>
                                        <p>
                                            We show you around the Google Search Console and help you understand how
                                            to leverage Google Search Console to improve the rank of your site.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingSix">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            Google Analytics
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                    <div class="panel-body">
                                        <p>
                                            We connect your site to Google Analytics so you can monitor the actions
                                            of visitors on your site.
                                        </p>
                                        <p>
                                            We show you around Google Analytics to help you understand the reports and
                                            metrics you receive (such as Bounce Rate, Users, Sessions, etc.)
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingSeven">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            Privacy Policy and Cookie Law
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                    <div class="panel-body">
                                        <p>
                                            We help you create and implement a Privacy Policy and Cookie Law Solution for your site.
                                        </p>
                                        <p>
                                            The legal side of running a blog is often forgotten. A privacy policy and
                                            cookie law solution (if you are based in certain parts of the world) are
                                            necessary for your site.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingEight">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            Blazing Fast
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                    <div class="panel-body">
                                        <p>
                                            We enable caching (browser and server-side) to maximize the speed of your setup.
                                        </p>
                                        <p>
                                            Our setup ensures even a shared hosting server can handle tens of thousands
                                            of views per month without the host throttling your account.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingNine">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                            Rock Solid Security
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                                    <div class="panel-body">
                                        <p>
                                            We add security plugins to help protect your site from hackers.
                                            Depending on your budget, we configure a fire wall for your site.
                                        </p>
                                        <p>
                                            WordPress sites are the most common targets of hacks. Our security plugins
                                            combined with our best practices ensure that your site doesn't get hacked.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTen">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                            Automatic Backups
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                                    <div class="panel-body">
                                        <p>
                                            We install a plugin to backup your site automatically at a frequency that
                                            makes sense for your site.
                                        </p>
                                        <p>
                                            Depending on your budget, we enable live, incremental backups that provides
                                            a superior experience if you ever need to recover your site. Backups are the
                                            best protection against hackers.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingEleven">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                            HTTPS Enabled
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
                                    <div class="panel-body">
                                        <p>
                                            We install an SSL Certificates to help protect the privacy of your site's visitors.
                                        </p>
                                        <p>
                                            In addition, using HTTPS, improves your site's search engine rankings, allows you
                                            to collect payments on your site and improves the trustability of your site.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwelve">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                            Mailing List Integration
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
                                    <div class="panel-body">
                                        <p>
                                            We will help you select a mailing list provider. Once selected, we will setup
                                            your domain with the mailing list provider so you can start
                                            growing your mailing list immediately.
                                        </p>
                                        <p>
                                            Ask 10 successful bloggers what their biggest regret is, 5 will reply that
                                            they didn't start their mailing list soon enough (and the remaining 5 will
                                            wish they had Bloggercasts to help them setup their blog).
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThirteen">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                            Professional Email Address (yourname@yourdomain.com)
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen">
                                    <div class="panel-body">
                                        <p>
                                            We will create a professional email address for you (like I have nikhil@bloggercasts.com, you can use yourname@yourdomain.com)
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFourteen">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                            Pinterest Site Verification
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourteen">
                                    <div class="panel-body">
                                        <p>
                                            We will verify your site in your Pinterest Account. This will create a
                                            link within your Pinterest Profile to your site.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFifteen">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                            Training and Support
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFifteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFifteen">
                                    <div class="panel-body">
                                        <p>
                                            We will provide you with high quality video tutorials to help you publish
                                            your first blog post.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <section id="features">
        <h2 data-lead-id="features-headline">ALL THIS FOR FREE? WHY WOULD YOU DO THAT?</h2>
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <p class="text-left">
                            There are two reasons we provide this service for free, one is personal, the other one is professional.
                        </p>
                        <p class="text-left">
                            Personally, after helping my mother and sister setup their sites, I realized the challenges that many
                            people face as they setup their sites. Even with all the self help available (including the videos that I create
                            on Bloggercasts.com), a small mistake can ensure your site never ranks on Google or make it vulnerable to hackers.
                        </p>
                        <p class="text-left">
                            I don't want that for you. I want you to be successful. I want you to be focused on creating content.
                            You have an important message to share with the world. I want to enable you to do that. That's why I
                            offer this service. Now you don't have an excuse :).
                        </p>

                        <p class="text-left">
                            Professionally, it makes good business sense. Most visitors who use our service, use our affiliate links.
                            When you use our affiliate links, you get a discount at the hosting provider or the mailing list service
                            and we get a commission from the site you made a purchase at. It is a win-win.
                        </p>

                        <p class="text-left">
                            The affiliate commissions are usually not sufficient to cover our costs, however, we hope that you
                            have a great experience and if you need any services in the future, you will consider Bloggercasts.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="why-bloggercasts">
        <h2 data-lead-id="features-headline">WHY BLOGGERCASTS? SO AND SO OFFERS THIS SERVICE TOO</h2>
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h3>Personalized</h3>
                        <p class="text-left">
                            Firstly, I haven't seen a single person offer this service. If they do, please connect me with them.
                            Many sites offer a similar service (like wpbeginner.com), but they are cookie cutter. No one else takes the time to talk
                            to you on the phone and understand your goals. They simply click a few buttons and leave you to figure it out.
                        </p>

                        <h3>Affiliate Purchase Not Required</h3>
                        <p class="text-left">
                            Every other site offering a similar service forces you to first make a purchase using
                            their affiliate links. That isn't how we roll.
                        </p>
                        <p class="text-left">
                            We understand your unique vision and recommend the services that are appropriate for you.
                            We often recommend free services and even premium services that we do not have an affiliate relationship with.
                        </p>

                        <h3>Experience</h3>
                        <p class="text-left">
                            Other similar services usually don't have the breath of experience we do. We have created sites
                            capable of handling over 1,000,000 visitors per month on Amazon's servers. We have created membership
                            sites and online course sites. We have even created sites that cost less than 1$ per month! No host required.
                        </p>


                        <h3>Comprehensive</h3>
                        <p class="text-left">
                            Integration with Mailing Lists, Pinterest Verification, Google Search Console and Google
                            Analytics Integration and setup of a professional email address are not typically included
                            with other similar services.
                        </p>
                        <p class="text-left">
                            We help you setup everything you need to be successful as a blogger. We don't throw over
                            a site and leave you to figure out the rest.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--<section id="testimonials" data-lead-id="testimonials">--}}
        {{--<h2 data-lead-id="testimonials-headline">WHAT OTHERS ARE SAYING</h2>--}}
        {{--<div class="wrapper">--}}
            {{--<div class="testimonial" data-lead-id="testimonial1">--}}
                {{--<div class="story" data-lead-id="story1">--}}
                    {{--<p class="quote" data-lead-id="quotation-mark1">“</p>--}}
                    {{--<p data-lead-id="quote1">“After following multiple guides on the internet, even from reputed sites like Moz, I wasn't able to eliminate all the spam from my account so I decided to sign up for this service. Nikhil set up my account and within a few hours of me signing up everything was done! All the spam in the language area and everywhere else in the account was simply gone when I used the segment he created. It was so nice to see the true data and all the actual people that were referring visitors to my site.”</p>--}}
                {{--</div>--}}
                {{--<div class="arrow-down" data-lead-id="arrow1"></div>--}}
                {{--<div class="bottom" data-lead-id="author-info1">--}}
                    {{--<div class="label" data-lead-id="author-label1">--}}
                        {{--<p data-lead-id="author1"><b>Yogini</b> <br>--}}
                            {{--Counselor at Trendy Parents</p>--}}
                    {{--</div>--}}
                    {{--<img src="/img/services-landing-page/yogini.png" alt="photo" data-lead-id="author-image1">--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="testimonial" data-lead-id="testimonial2">--}}
                {{--<div class="story" data-lead-id="story2">--}}
                    {{--<p class="quote" data-lead-id="quotation-mark2">“</p>--}}
                    {{--<p data-lead-id="quote2">"I thought 97$ was quite expensive. Plus, I was sure this probably wouldn't work for me because I have a fairly unconventional setup. I saw that Nikhil had a no questions asked money back guarantee, so I decided I would give it a shot. OMG! I actually got a Skype call to personally discuss my account. This is truly personalized to your individual account, not some copy paste service."</p>--}}
                {{--</div>--}}
                {{--<div class="arrow-down left-float" data-lead-id="arrow2"></div>--}}
                {{--<div class="bottom-left" data-lead-id="author-info2">--}}
                    {{--<img src="/img/services-landing-page/photo2.png" alt="photo" data-lead-id="author-image2">--}}
                    {{--<div class="label label-left" data-lead-id="author-label2">--}}
                        {{--<p data-lead-id="author2"><b>Chandani</b><br>--}}
                            {{--The Brains at Mad Batter Bakery</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="testimonial" data-lead-id="testimonial3">--}}
                {{--<div class="story" data-lead-id="story3">--}}
                    {{--<p class="quote" data-lead-id="quotation-mark3">“</p>--}}
                    {{--<p data-lead-id="quote3">"I didn't think the spam in GA was a big deal and I definitely wasn't going to pay someone to eliminate it. Then I took a Pinterest Challenge in which I needed to identify my best performing blog posts. I wasn't able to do it because of all the spam! My GA had become useless. That's when I decided to sign up and I absolutely love the new reports I have."</p>--}}
                {{--</div>--}}
                {{--<div class="arrow-down" data-lead-id="arrow3"></div>--}}
                {{--<div class="bottom" data-lead-id="author-info3">--}}
                    {{--<div class="label" data-lead-id="author-label3">--}}
                        {{--<p data-lead-id="author3"><b>Walid</b><br>--}}
                            {{--Founder of Answering Physics</p>--}}
                    {{--</div>--}}
                    {{--<img src="/img/services-landing-page/photo3.png" alt="photo" data-lead-id="author-image3">--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<a href="#" data-lead-id="bottom-link">Hire Me ($97)</a>--}}
        {{--</div>--}}
    {{--</section>--}}

    <section id="hire-me">
        <h2 data-lead-id="testimonials-headline">NEXT STEPS</h2>
        <div class="wrapper">

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <p>
                        Simple, enter your email below to schedule a call with me. Don't worry you aren't signing up for my mailing list.
                        I hate spam and I will only use your email address to contact you regarding setting up your blog.
                    </p>

                    <br>

                    <form action="/services/free-wordpress-setup/thank-you" method="POST">
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="text" name="email" placeholder="nikhil@bloggercasts.com" value="@if(Auth::check()){{Request::user()->email}}@endif">
                        </div>
                        <input type="submit" class="submit-button">
                    </form>

                </div>
            </div>





            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <br>
                    <p class="text-muted">
                        If you have any trouble, simply send an email to nikhil@bloggercasts.com
                    </p>
                    <br>
                    <p class="text-muted text-left">
                        *This service is exclusively for new bloggers. Please do not use this service if you already purchased hosting. While there is no affiliate purchase required, we rely on the chance that you will purchase hosting through our affiliate link to keep this service free.
                    </p>
                </div>
            </div>

        </div>

    </section>

@endsection