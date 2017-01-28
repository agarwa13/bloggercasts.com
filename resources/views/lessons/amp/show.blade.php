@extends('amp.app')

@section('title')
    {{$lesson->title}}
@endsection

@section('description')
    {{$lesson->seo_description}}
@endsection

@section('canonical')
    https://bloggercasts.com/lessons/{{$lesson->slug}}
@endsection

@section('content')

    @include('lessons.includes.open-graph-tags')
    @include('lessons.includes.video-structured-data',['lesson' => $lesson])

    <div class="container-fluid">
        <div class="space-2"></div>

        <div class="row">
            <div class="col-xs-12">
                <div class="bordered-title">
                    <h3>{{$lesson->title}}</h3>
                    <h5>{{$lesson->series->title}}</h5>
                </div><!-- TITLE ENDS -->
            </div><!-- COL-XS-12 ENDS -->
        </div><!-- ROW ENDS -->

        <div class="space-1"></div>


        <amp-vimeo
                data-videoid="{{$lesson->video}}"
                layout="responsive"
                width="480" height="270"></amp-vimeo>


        {{--<amp-video width=480--}}
                   {{--height=270--}}
                   {{--src=""--}}
                   {{--layout="responsive" poster="{{$lesson->series->image}}"--}}
                   {{--controls>--}}
            {{--<div fallback>--}}
                {{--<p>Your browser doesn't support HTML5 video.</p>--}}
            {{--</div>--}}
        {{--</amp-video>--}}

        <div class="space-3"></div>

        <div class="row">
            <div class="col-xs-12">
                <div class="bordered-title">
                    <h3>{{$lesson->series->title}}</h3>
                    <h5>{{$lesson->title}}</h5>
                </div><!-- TITLE ENDS -->
                {!! $lesson->description !!}
            </div><!-- COL-XS-12 ENDS -->
        </div><!-- ROW ENDS -->

        <div class="space-1"></div>

        <div class="row">
            <div class="col-xs-12">
                <div class="bordered-title">
                    <h3>Lessons in the Series</h3>
                    <h5>{{$lesson->series->title}}</h5>
                </div><!-- TITLE ENDS -->
                @foreach($lesson->series->lessons as $list_lesson)
                    <h4><a href="https://bloggercasts.com/lessons/{{$list_lesson->slug}}">{{$list_lesson->title}}</a></h4>
                @endforeach
            </div><!-- COL-XS-12 ENDS -->
        </div><!-- ROW ENDS -->

    </div>

@endsection