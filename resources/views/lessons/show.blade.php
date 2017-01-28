@extends('spark::layouts.app')

@section('title')
    {{$lesson->title}}
@endsection

@section('scripts')

    <link rel="amphtml" href="https://bloggercasts.com/lessons/amp/{{$lesson->slug}}">
    @include('lessons.includes.open-graph-tags')
    @include('lessons.includes.video-structured-data',['lesson' => $lesson])
@endsection

@section('content')

    @if($lesson->seconds == 0)
        @include('lessons.under-construction')
    @else
        @include('lessons.video-vimeo')
    @endif
    @include('lessons.information')

    @if($lesson->transcript != '')
        @include('lessons.transcript')
    @endif


    {{--<div class="container" style="margin-top: 60px;">--}}

        {{--<h2 class="Heading--Fancy">--}}
            {{--<span class="Heading--Fancy__subtitle" style="padding-bottom: 10px;">--}}
            {{--Having trouble following this lesson?--}}
        {{--</span>--}}
            {{--<span>Talk to Nikhil 1:1</span>--}}
        {{--</h2>--}}

        {{--<script id="setmore_script" type="text/javascript" src="https://my.setmore.com/js/iframe/setmore_iframe.js"></script>--}}

        {{--<div class="text-center">--}}
        {{--<a id="Setmore_button_iframe" style="float:none" href="https://my.setmore.com/bookingpage/7f663292-95e3-4cb8-8d8d-825d38281eaf"><img border="none" src="https://my.setmore.com/images/bookappt/SetMore-book-button.png" alt="Book an appointment with Bloggercasts using SetMore" /></a>--}}
        {{--</div>--}}

    {{--</div>--}}

    @include('lessons.series')
    @include('lessons.discussion')

{{--    @include('includes.subscribe-modal')--}}

@endsection