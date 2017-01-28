@extends('spark::layouts.app')

@section('title')
    {{$series->title}}
@endsection

@section('content')

    <div class="container-fluid" style="background: #e37222;">
        <div class="Banner Banner--Two-Col">
            <div class="Grid__row--flex container">
                <div class="Banner__thumbnail">

                    <img src="{{$series->image}}" alt="{{$series->title}}">
                </div>

                <div class="utility-flex">
                    <h1 class="Banner__heading">
                        {{$series->title}}
                    </h1>

                    <div class="Banner__message">
                        {!! $series->description !!}


                        <ul class="Banner__bullets">
                            <li>
                                <strong>{{$series->lessonsCount}}</strong>
                                lessons
                            </li>

                            <li>
                                <strong>{{$series->minutes}}</strong>
                                minutes
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('series.lessons-list')
@include('series.includes.course-structured-data')
@include('series.includes.list-structured-data')
    @if($series->in_development && strlen($series->affiliate_link) > 2)
        @include('series.includes.affiliate-modal')
    @endif
@endsection