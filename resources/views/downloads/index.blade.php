@extends('layouts.app')

@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table table-borderless m-b-none">
                            <thead>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Link</th>
                            </thead>

                            <tbody>
                            @foreach($downloads as $download)
                                <tr>
                                    <!-- Name -->
                                    <td>
                                        {{$download->name}}
                                    </td>

                                    <!-- Portal -->
                                    <td>
                                        
                                        {{$download->slug}}
                                        
                                    </td>

                                    <!-- Link -->
                                    <td>
                                        <button class="btn btn-default copy-button" data-clipboard-text="{{$download->file}}">
                                            <i class="fa fa-clone"></i>
                                        </button>

                                        <!-- Edit download -->
                                        <button class="btn btn-default">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                    </td>

                                
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('footer-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.13/clipboard.min.js"></script>

    <script>
        new Clipboard('.copy-button');
    </script>


@endsection