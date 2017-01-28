@extends('layouts.app')

@section('body')
    <div class="Grid__row">
        <!-- Series Episode List -->
        <div class="outline Grid__column nine centered">
            <ul class="Lesson-List Lesson-List--numbered ">
                @foreach($lessons as $lesson)
                    <li class="Lesson-List__item">
                        <!-- The Play/Check Icon -->
                        <!-- The Title of the Lesson -->
                        <span class="Lesson-List__title">
                            <a href="/lessons/{{$lesson->slug}}">
                                {{$lesson->title}}
                                @if($lesson->free)
                                    <span class="Label Label--small Label--bright">Free</span>
                                @endif
                                part of: <strong>{{$lesson->series->title}}</strong>
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
@endsection