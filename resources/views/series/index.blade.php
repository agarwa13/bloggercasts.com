@extends('layouts.app')

@section('title',"Bloggercasts Video Courses on WordPress, Facebook Ads and more.")

@section('body')

    <div class="container">

        <div class="Card-Collection">
            @each('series.card',$series,'series')
        </div>
    </div>

@endsection