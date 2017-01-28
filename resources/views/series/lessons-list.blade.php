<div class="container" style="padding-top: 60px; padding-bottom: 60px;">
    <div class="wrap">
        <h2 class="Heading--Fancy">
            <span class="Heading--Fancy__subtitle" style="padding-bottom: 10px;">
            Watch, Learn, and Blog
        </span>

            <span>Series Lessons</span>

        </h2>

        <div class="Grid__row">
            <!-- Series Episode List -->
            <div class="outline Grid__column nine centered">
                <ul class="Lesson-List Lesson-List--numbered ">

                    @foreach($series->lessons as $lesson)

                    <li class="Lesson-List__item">
                        <!-- The Play/Check Icon -->

                        <!-- The Title of the Lesson -->
                        <span class="Lesson-List__title">
                                <a href="/lessons/{{$lesson->slug}}">
                                    {{$lesson->title}}
                                    @if($lesson->free)
                                        <span class="Label Label--small Label--bright">Free</span>
                                    @endif
                                </a>
                            </span>

                        <!-- The Length of the Lesson -->
                        <span class="Lesson-List__length">
                                {{floor($lesson->seconds/60)}}:{{$lesson->seconds%60}}
                            </span>
                    </li>

                    @endforeach

                </ul>

            </div>

        </div>


    </div>
</div>