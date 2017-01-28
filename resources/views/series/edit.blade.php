@extends('spark::layouts.app')

@section('scripts')
    @include('includes.advanced-textarea')
@endsection

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="panel panel-default">

                    <div class="panel-heading">

                        <div class="panel-title">

                            Update Series: {{$series->title}}

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

                            <form method="post" action="{{url('/series/'.$series->id)}}" enctype="multipart/form-data">

                                {!! csrf_field() !!}
                                {!! method_field('put') !!}

                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" class="form-control" name="slug" id="slug" value="{{$series->slug}}">
                                </div>

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" value="{{$series->title}}">
                                </div>

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="difficulty" id="difficulty-beginner" value="Beginner" @if($series->difficulty == "Beginner")checked @endif>
                                        Beginner
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="difficulty" id="difficulty-intermediate" value="Intermediate" @if($series->difficulty == "Intermediate")checked @endif>
                                        Intermediate
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="difficulty" id="difficulty-advanced" value="Advanced" @if($series->difficulty == "Advanced")checked @endif>
                                        Advanced
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label for="image">Image (Upload Only Required to Change Current Image)</label>
                                    <input class="form-control" type="file" name="image" id="image">
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" class="form-control" rows="3">{{$series->description}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="seo_description">SEO Description</label>
                                    <textarea name="seo_description" id="seo_description" class="form-control" rows="3">{{$series->seo_description}}</textarea>
                                </div>

                                <div class="radio">
                                    <label>
                                        <input type="radio" name="in_development" id="in_development-yes" value="1" @if($series->in_development) checked @endif>
                                        In Development
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="in_development" id="in_development-no" value="0" @if(!$series->in_development) checked @endif>
                                        Development Complete
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-default">Update</button>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection