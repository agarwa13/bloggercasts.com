@extends('layouts.app')

@push('footer-scripts')
    @include('includes.advanced-textarea')
@endpush

@section('body')

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="panel panel-default">

                    <div class="panel-heading">

                        <div class="panel-title">

                            Add Series

                        </div>

                        <div class="panel-body">

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="post" action="{{url('/series')}}" enctype="multipart/form-data">

                                {!! csrf_field() !!}

                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" class="form-control" name="slug" id="slug" placeholder="slug">
                                </div>

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                                </div>

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="difficulty" id="difficulty-beginner" value="Beginner" checked>
                                        Beginner
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="difficulty" id="difficulty-intermediate" value="Intermediate">
                                        Intermediate
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="difficulty" id="difficulty-advanced" value="Advanced">
                                        Advanced
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input class="form-control" type="file" name="image" id="image">
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="seo_description">SEO Description</label>
                                    <textarea name="seo_description" id="seo_description" class="form-control" rows="3"></textarea>
                                </div>

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="in_development" id="in_development-yes" value="1" checked>
                                        In Development
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="in_development" id="in_development-no" value="0">
                                        Development Complete
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-default">Submit</button>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection