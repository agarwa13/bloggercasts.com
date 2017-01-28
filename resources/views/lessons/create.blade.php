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

                            Add Lessons

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

                            <form method="post" action="{{url('/lessons')}}" enctype="multipart/form-data">

                                {!! csrf_field() !!}

                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" class="form-control" name="slug" id="slug" placeholder="slug">
                                </div>

                                <div class="form-group">
                                    <label>Free Lesson?</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="free" id="free-yes" value="1" checked>
                                            Free Lesson
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="free" id="free-no" value="0">
                                            Paid Lesson
                                        </label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="video">Video URL</label>
                                    <input type="text" class="form-control" name="video" id="video" placeholder="https://s3.amazon.com/path/to/video">
                                </div>

                                <div class="form-group">
                                    <label for="seconds">Length of Video (Seconds)</label>
                                    <input type="text" class="form-control" name="seconds" id="seconds" placeholder="180">
                                </div>

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="seo_description">SEO Description</label>
                                    <textarea name="seo_description" id="seo_description" class="form-control" rows="3"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="transcript">Transcript</label>
                                    <textarea name="transcript" id="transcript" class="form-control" rows="3"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="series_id">Series</label>
                                    <select name="series_id" class="form-control" id="series_id">
                                        @foreach($series as $serie)
                                            <option value="{{$serie->id}}">{{$serie->title}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="open_graph_image">Open Graph Image</label>
                                    <input class="form-control" type="file" name="open_graph_image" id="open_graph_image">
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