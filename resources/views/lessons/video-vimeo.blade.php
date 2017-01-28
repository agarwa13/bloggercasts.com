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