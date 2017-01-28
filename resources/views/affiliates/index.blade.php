@extends('spark::layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table table-borderless m-b-none">
                            <thead>
                            <th>Name</th>
                            <th>Portal</th>
                            <th>Link</th>
                            <th></th>
                            </thead>

                            <tbody>
                            @foreach($affiliates as $affiliate)
                                <tr>
                                    <!-- Name -->
                                    <td>
                                        {{$affiliate->name}}
                                    </td>

                                    <!-- Portal -->
                                    <td>
                                        <a href="{{$affiliate->portal}}">
                                            Portal
                                        </a>
                                    </td>

                                    <!-- Link -->
                                    <td>
                                        <button class="btn btn-default copy-button" data-clipboard-text="{{$affiliate->link}}">
                                            <i class="fa fa-clone"></i>
                                        </button>

                                    </td>

                                    <td>
                                        <!-- Edit Affiliate -->
                                        <a class="btn btn-default" href="{{url('/affiliates/'.$affiliate->slug.'/edit')}}">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                @include('affiliates.includes.create-affiliate-form')

            </div>
        </div>
    </div>

@endsection


@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.13/clipboard.min.js"></script>

    <script>
        new Clipboard('.copy-button');
    </script>


@endsection