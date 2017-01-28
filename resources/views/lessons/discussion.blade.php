    <div class="container" style="padding-top: 30px; padding-bottom: 40px;">
        <div class="wrap">
            <h2 class="Heading--Fancy">
            <span class="Heading--Fancy__subtitle" style="padding-bottom: 10px;">
            Dive Into The
        </span>

                <span>Lesson Discussion</span>

            </h2>
        </div>

        <div id="disqus_thread"></div>
        <script>

            var disqus_config = function () {
                this.page.url = 'https://bloggercasts.com/lessons/{{$lesson->slug}}';
                this.page.identifier = '{{$lesson->slug}}-{{$lesson->id}}';
            };

            (function () { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = '//bloggercasts.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
                Disqus.</a></noscript>


    </div>