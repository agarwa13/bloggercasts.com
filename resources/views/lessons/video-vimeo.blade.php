@if(!$blockVideo)
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class='embed-container'><iframe src='https://player.vimeo.com/video/{{$lesson->video}}' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>

            <script src="https://player.vimeo.com/api/player.js"></script>

            <script type="text/javascript">
                var iFrame = document.querySelector('iframe');
                var player = new Vimeo.Player(iFrame);

                player.on('play', function() {
                    // Facebook Event for Video Playing
                    fbq('track', 'Video Played',{video_title: '{{$lesson->slug}}'});

                    // Google Analytics Event for Video Playing
                    ga('send', 'event', 'Videos', 'play', '{{$lesson->slug}}');

                    // Pinterest Event for Video Playing
                    pintrk('track', 'watchvideo',{video_title: '{{$lesson->slug}}'});
                });
            </script>
        </div>
    </div>
</div>
@else
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-default">
                    <div class="panel-body">
                        <h1>Expecting a Video?</h1>
                        <h2>Login or Register to continue watching</h2>
                        <p>
                            Hi there! I hope you have been enjoying the video tutorials we have for you.
                        </p>
                        <p>
                            To continue watching additional tutorials, you need to have an account on bloggercasts.com.
                            The account is completely free. When you click on either register or login, it will open a
                            new tab in your browser. Once you have registered or signed in, simply return to this page
                            and refresh the page. This notice will disappear and you should be able to access the video.
                        </p>
                        <p>
                            Remember, if you are registering for a new account, you will need to verify your email
                            address before you can continue watching lessons on bloggercasts.com.
                        </p>
                    </div>

                    <div class="panel-footer">
                        <a class="btn btn-lg btn-primary" href="/register" target="_blank">Register</a>
                        <a class="btn btn-lg btn-default" href="/login" target="_blank">Login</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endif