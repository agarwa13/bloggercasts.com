@extends('layouts.app')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('affiliates.includes.create-affiliate-form')
            </div>
        </div>
    </div>
@endsection