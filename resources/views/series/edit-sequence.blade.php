@extends('layouts.app')


@push('footer-scripts')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $("#sortable").sortable({
                stop: function(event, ui) {

                    var data = "";

                    $("#sortable li").each(function(i, el){
                        var p = $(el).attr('data-lesson-id');
                        data += p+",";
                    });

                    console.log(data.slice(0, -1));

                    $("form > [name='new_order']").val(data.slice(0, -1));
                }
            });
            $( "#sortable" ).disableSelection();
        } );
    </script>
    <script>

    </script>
@endpush

@section('body')

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <ul id="sortable">
                    @foreach($series->lessons as $lesson)
                        <li class="ui-state-default" data-lesson-id="{{$lesson->id}}">
                            <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                            {{$lesson->title}}
                        </li>
                    @endforeach
                </ul>

                <form action="/series/{{$series->id}}/update-sequence" method="POST">
                    {!! csrf_field() !!}
                    {!! method_field('put') !!}
                    <input name="new_order" value="" type="hidden" />

                    <button type="submit" class="btn btn-default">Update Sequence</button>

                </form>

            </div>

        </div>

    </div>


@endsection