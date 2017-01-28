@extends('layouts.app')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <div class="panel panel-default">

                    <div class="panel-heading">
                        Actions
                    </div>

                    <div class="panel-body">
                        <div class="col-md-3">

                            <form onsubmit="return confirm('Do you really want to delete the download?');" method="post" action="{{url('/downloads/'.$download->slug)}}">
                                {!! csrf_field() !!}
                                {!! method_field('delete') !!}

                                <button type="submit" class="btn btn-danger btn-block">Delete</button>

                            </form>

                        </div>
                    </div>
                </div>
                
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            Update {{$download->name}}
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
                            <form method="post" action="{{url('/downloads/'.$download->slug)}}" enctype="multipart/form-data">

                                {!! csrf_field() !!}
                                {!! method_field('put') !!}

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{$download->name}}">
                                </div>

                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" class="form-control" name="slug" id="slug" placeholder="slug" value="{{$download->slug}}">
                                </div>

                                <div class="form-group">
                                    <label for="file">File</label>
                                    <input class="form-control" type="file" name="file" id="file">
                                </div>

                                <div class="form-group">
                                    <label for="lesson_id">Series</label>
                                    <select name="lesson_id" class="form-control" id="lesson_id">
                                        @foreach($series as $serie)
                                            @foreach($serie->lessons as $lesson)
                                                <option value="{{$lesson->id}}" @if($download->lesson_id == $lesson->id) selected @endif>{{$serie->title}}: {{$lesson->title}}</option>
                                            @endforeach
                                        @endforeach
                                    </select>
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