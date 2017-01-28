<div class="container">
    <div class="row">
        <div class="col-md-12">
            <video width="100%; height: auto;" controls id="lesson_video">
                <source src="{{$lesson->video}}" type="video/mp4">
                <p> Video not supported on this device or browser. Please upgrade your browser or use a different device. </p>
            </video>
            <script type="text/javascript">
                var vid = document.getElementById("lesson_video");
                vid.onplay = function() {
                    // Facebook Event for Video Playing
                    fbq('track', 'Video Played');

                    // Google Analytics Event for Video Playing
                    ga('send', 'event', 'Videos', 'play', '{{$lesson->slug}}');

                    // Pinterest Event for Video Playing
                    pintrk('track', 'watchvideo');
                };
            </script>
        </div>
    </div>
</div>