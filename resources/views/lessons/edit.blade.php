@extends('spark::layouts.app')

@section('scripts')
    @include('includes.advanced-textarea')
@endsection

@section('content')

    <!-- Facebook -->

    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId      : '1789236617957946',
                xfbml      : true,
                version    : 'v2.7'
            });

            FB.getLoginStatus(function(response) {
                if (response.status === 'connected') {
                    console.log('User is Already Logged In');
                }
                else {
                    FB.login(function(){
                        /* make the API call to the Group */
                        console.log('User has been logged in');
                    },{scope: 'publish_actions,user_managed_groups'});
                }
            });
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));


        /* make the API call to Notify on the Bloggercasts Group */

        function notifyBloggercastsGroup(){
            FB.api(
                    "/1680669272254482/feed",
                    "POST",
                    {
                        "message": "Hi everyone, I just posted a new screencast ({{$lesson->title}}) in the {{$lesson->series->title}} series. Be sure to check it out and let me know what you think about it.",
                        "link": "https://bloggercasts.com/lessons/{{$lesson->slug}}",
                        "picture": "{{$lesson->series->image}}",
                        "name": "{{$lesson->title}}"
                    },
                    function (response) {
                        if (response && !response.error) {
                            /* handle the result */
                        }
                    }
            );

            return false;
        }

    </script>



    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="panel panel-default">

                    <div class="panel-heading">

                        <div class="panel-title">

                            Update Lesson: {{$lesson->title}}

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

                            <form method="post" action="{{url('/lessons/'.$lesson->id)}}" enctype="multipart/form-data">

                                {!! csrf_field() !!}
                                {!! method_field('put') !!}

                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" class="form-control" name="slug" id="slug" value="{{$lesson->slug}}">
                                </div>

                                <div class="form-group">
                                    <label>Free Lesson?</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="free" id="free-yes" value="1" @if($lesson->free) checked @endif>
                                            Free Lesson
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="free" id="free-no" value="0" @if(!$lesson->free) checked @endif>
                                            Paid Lesson
                                        </label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="video">Video URL</label>
                                    <input type="text" class="form-control" name="video" id="video" value="{{$lesson->video}}">
                                </div>

                                <div class="form-group">
                                    <label for="seconds">Length of Video (seconds)</label>
                                    <input type="text" class="form-control" name="seconds" id="seconds" value="{{$lesson->seconds}}">
                                </div>

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" value="{{$lesson->title}}">
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" class="form-control" rows="3">{{$lesson->description}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="seo_description">SEO Description</label>
                                    <textarea name="seo_description" id="seo_description" class="form-control" rows="3">{{$lesson->seo_description}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="transcript">Transcript</label>
                                    <textarea name="transcript" id="transcript" class="form-control" rows="3">{{$lesson->transcript}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="series_id">Series</label>
                                    <select name="series_id" class="form-control" id="series_id">
                                        @foreach($series as $serie)
                                            <option value="{{$serie->id}}" @if($lesson->series_id == $serie->id) selected @endif>{{$serie->title}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="open_graph_image">Open Graph Image</label>
                                    <input class="form-control" type="file" name="open_graph_image" id="open_graph_image">
                                </div>

                                <button type="submit" class="btn btn-default">Update</button>

                            </form>

                        </div>

                    </div>

                </div>

                <div class="panel panel-default">

                    <div class="panel-heading">
                        Actions
                    </div>

                    <div class="panel-body">

                        <div class="col-md-2">

                            <form onsubmit="return confirm('Do you really want to delete the lesson?');" method="post" action="{{url('/lessons/'.$lesson->id)}}">
                                {!! csrf_field() !!}
                                {!! method_field('delete') !!}

                                <button type="submit" class="btn btn-danger btn-block">Delete</button>

                            </form>

                        </div>


                        <div class="col-md-2">
                            <form onsubmit="return confirm('Do you really want to send a notification about this lesson?');" method="post" action="{{url('/lessons/'.$lesson->id.'/notify')}}">

                                {!! csrf_field() !!}
                                {!! method_field('post') !!}

                                <button type="submit" class="btn btn-default btn-block">Notify</button>
                            </form>

                        </div>


                        <div class="col-md-3">
                            <form onsubmit="return notifyBloggercastsGroup();">
                                <button type="submit" class="btn btn-primary btn-block">Notify Facebook Group</button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection