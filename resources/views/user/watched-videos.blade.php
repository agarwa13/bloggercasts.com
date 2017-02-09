@extends('layouts.app')

@section('body')

    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <h1>Videos Watched</h1>

                @foreach($videosViewed as $videoViewed)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <a href="/lessons/{{$videoViewed->slug}}">{{$videoViewed->title}}</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <div class="panel-body spark-row-list">

                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="{{$videoViewed->pivot->percent_played}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$videoViewed->pivot->percent_played}}%">
                                <span>{{$videoViewed->pivot->percent_played}}% Complete</span>
                            </div>
                        </div>

                        <p class="pull-left">From the <a href="/series/{{$videoViewed->series->slug}}">{{$videoViewed->series->title}}</a> video series</p>

                        <!-- Interval Selector Button Group -->
                        <div class="pull-right">
                            <div class="btn-group" style="padding-top: 2px;">

                                @unless($videoViewed->completed())
                                    <!-- Mark Completed Button -->
                                    <button type="button" class="btn btn-info" onclick="markCompleted({{$videoViewed->id}})">
                                        Mark Completed
                                    </button>
                                @endunless

                                <!-- Watch Video -->
                                <a type="button" href="/lessons/{{$videoViewed->slug}}" class="btn btn-primary">
                                Watch Video
                                </a>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                    </div>
                </div>
                @endforeach

                {{ $videosViewed->links() }}

            </div>
        </div>
    </div>

@endsection

@push('footer-scripts')
    <script>
        function markCompleted(lesson_id){

            // Update the Server
            $.ajax({
                url: '/video-viewed',
                data: {
                    lesson_id: lesson_id,
                    duration_played: 100 ,
                    percent_played: 100
                },
                method: 'POST'
            });

            // Refresh the Page
            location.reload();

        }
    </script>
@endpush