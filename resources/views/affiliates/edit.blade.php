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

                            <form onsubmit="return confirm('Do you really want to delete the affiliate?');" method="post" action="{{url('/affiliates/'.$affiliate->slug)}}">
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
                            Update {{$affiliate->name}}
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
                            <form method="post" action="{{url('/affiliates/'.$affiliate->slug)}}">

                                {!! csrf_field() !!}
                                {!! method_field('put') !!}

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{$affiliate->name}}" autocomplete="update-affiliate-name">
                                </div>

                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" class="form-control" name="slug" id="slug" placeholder="slug" value="{{$affiliate->slug}}" autocomplete="update-affiliate-slug">
                                </div>

                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" id="username" placeholder="username" value="{{$affiliate->username}}" autocomplete="update-affiliate-username">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control" name="password" id="password" placeholder="password" value="{{$affiliate->password}}" autocomplete="update-affiliate-password">
                                </div>

                                <div class="form-group">
                                    <label for="portal">Portal Link</label>
                                    <input type="text" class="form-control" name="portal" id="portal" placeholder="portal" value="{{$affiliate->portal}}" autocomplete="update-affiliate-portal">
                                </div>

                                <div class="form-group">
                                    <label for="email">Associated Email Address</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="email" value="{{$affiliate->email}}" autocomplete="update-affiliate-email">
                                </div>

                                <div class="form-group">
                                    <label for="link">Affiliate Link</label>
                                    <input type="text" class="form-control" name="link" id="link" placeholder="link" value="{{$affiliate->link}}" autocomplete="update-affiliate-link">
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