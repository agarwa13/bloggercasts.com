@extends('spark::layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('affiliates.includes.create-affiliate-form')
            </div>
        </div>
    </div>
@endsection