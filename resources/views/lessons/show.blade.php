@extends('layouts.app')

@section('title')
    {{$lesson->title}}
@endsection

@push('footer-scripts')

    <link rel="amphtml" href="https://bloggercasts.com/lessons/amp/{{$lesson->slug}}">
    @include('lessons.includes.open-graph-tags')
    @include('lessons.includes.video-structured-data',['lesson' => $lesson])
@endpush

@section('body')

    @if($lesson->seconds == 0)
        @include('lessons.under-construction')
    @else
        @include('lessons.video-vimeo')
    @endif
    @include('lessons.information')

    @if($lesson->transcript != '')
        @include('lessons.transcript')
    @endif

    @include('lessons.series')
    @include('lessons.discussion')

    @if($blockVideo)
        @include('includes.block-video-and-request-login')
    @endif

{{--    @include('includes.subscribe-modal')--}}

@endsection